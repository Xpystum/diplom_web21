<?php

namespace App\Http\Controllers\Chat;

use App\Actions\FindUserByToken;
use App\Events\MessageSentEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChatMessageSendFormRequest;
use App\Http\Requests\GetMessageChatGroupFromRequest;
use App\Http\Resources\ChatBroadcastResource;
use App\Http\Resources\ChatMessageResponseResource;
use App\Http\Resources\TestCollection;
use App\Models\ChatGroup;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request){
        //брать последнии 100
        
        // return ChatMessageResponseResource::collection(ChatMessages::all())->resolve();
    }

    public function messages(GetMessageChatGroupFromRequest $request)
    {
        $data = $request->validated();
        
        $idChatGroup = ChatGroup::checkExisistTwoRecordTable($data['user_from_id'], $data['user_to_id']);
        if( !is_null($idChatGroup) ){
            
            return (new TestCollection( ChatMessageResponseResource::collection( ChatMessages::where('chatgroup_id', $idChatGroup->id)->get() ) ) );
            // return ChatMessageResponseResource::collection( ChatMessages::where('chatgroup_id', $idChatGroup->id)->get() )->resolve();

        }

        return response()->json([
            'success' => false,
        ], 202 );
           

        // broadcast(new ReturnMessageAllEvent()); не трогать
    }


    public function send(ChatMessageSendFormRequest $request, FindUserByToken $findUserByToken){

        //owner кто отправил сообщение

        $data = $request->validated();
        if(!isset($data['chatgroup_id'])){
          try {

            $idChatGroup = ChatGroup::checkExisistTwoRecordTable($data['user_from_id'], $data['user_to_id']);
            if(!is_null($idChatGroup))
            {

                $data['chatgroup_id']  = $idChatGroup->id;

            }else{

                $dataChatGroup = ChatGroup::firstOrCreate(
                    ['user_from_id' => $data['user_from_id']],
                    ['user_to_id' => $data['user_to_id']],
                )->firstOr('id', function () {
    
                    //если группа не найдена или другая ошибка
                    return response()->json([
                        'messages' => 'Ошибка нахождение Группувого чата',
                    ], 404);
    
                });
                $data['chatgroup_id']  = $dataChatGroup->id;

            }
            
            

          } catch (\Throwable $th) {

            return response()->json([
                'messages' => 'Неизвестная Ошибка',
            ], 404);

          }

        }else{  

            try {
                ChatGroup::findOrFail($data['chatgroup_id']);
                

            } catch (\Throwable $th) {

                abort(404, 'Error Group ID');

            }
        }

        $chatMessages = ChatMessages::create([
            'user_id' => $data['user_from_id'],
            'chatgroup_id' => $data['chatgroup_id'],
            'message' => $data['message'],
        ])->FirstOr(['*'], function(){
            return response()->json([
                'messages' => 'Ошибка Создание Сообщение',
            ], 404);
        });

        broadcast(new MessageSentEvent($chatMessages));

        return response()->json([
            'messages' => 'Send',
        ], 200);

        // $message = ChatMessages::create([
        //     'user_id' => $data['user_id'],
        //     'message' => $data['message'],
        // ]);

        // try{

        //     $user = $findUserByToken->handler($request->bearerToken());

        //     if($user == null){
        //         return response('Unauthorized', 401)
        //         ->header('Content-Type', 'text/plain');
        //     }

        // }catch(Exception  $error){

        //     return response('error', 500)
        //     ->header('Content-Type', 'text/plain');

        // }
        
        // broadcast(new MessageSentEvent($user, $message));
        // смысл возврата теряется, если мы получаем возврат через broadcast (возврат только для request)
        // return ChatMessageResponseResource::make($message);
    }

}
