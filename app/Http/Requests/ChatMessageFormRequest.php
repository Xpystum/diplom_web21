<?php

namespace App\Http\Requests;

use App\Actions\CheckTokenUser;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class ChatMessageFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(CheckTokenUser $checkTokenUser): bool
    {      
        $token = $this->bearerToken();
        return $checkTokenUser->handler('1|CFwAEz99ZEPf7Buoy0ni9u5NLdOIn7cd2KAYoW3cf3b23a7f');
        // получать токен авторизации из реакта
        // return CheckTokenUser::tokenUser('1|CFwAEz99ZEPf7Buoy0ni9u5NLdOIn7cd2KAYoW3cf3b23a7f');

        // return auth()->check();
        // return fa;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'message' => ['required', 'string', 'min:3'],
        ];
    }
}
