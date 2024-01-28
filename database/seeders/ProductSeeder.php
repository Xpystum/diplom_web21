<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\Withoutmodel_idEvents;
use Illuminate\Database\Seeder;
use App\model_ids\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
   

    /* 
    name
    year
    price
    old_price
    mileage
    status
    main_img
    engine
    power
    transmission_id
    drive_unit_id
    color_id
    steering_wheel
    generation
    equipment
    vin

    city
    category_id
    wheel_formula
    load_capacity
    vin_body
    body_length
    body_volume
    weight
    desription

    */
    
    
    public function run(): void
    {   

        $menu = [

            [
                'id'=> 1,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2019",
                'price' => "5800000",
                'old_price' => null,
                'mileage' => "98000",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/bmw1_1.jpg',
                'fuel_id' => 2,
                'engine_capacity' => 3.0,
                'power' => "249",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Новосибирск",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продам BMW X6
                !!! ДИЛЕРСКИЙ !!!
                Продажа от собственника
                Родной пробег
                Машина полностью обслужена
                Последнее ТО тысячу км назад ,
                2 комплекта резины на дисках
                Лето на 20 , зима на 19",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 5,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 1,
            ],

            [
                'id'=> 2,
                'model_id' => 7,
                'brand_id' => 16,
                'year' => "2023",
                'price' => "17500000",
                'old_price' => null,
                'mileage' => "10",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/bmw2_1.jpg',
                'fuel_id' => 2,
                'engine_capacity' => 3.0,
                'power' => "340",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA*************",
                'city' => "Владивосток",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Комплектация: BMW X7 I (G07) Рестайлинг 40d 3.0d AT (340 л.с.) 4WD xDrive40d M Sport
                ПТС оригинал. Отличное состояние автомобиля.
                Комплектация «xDrive40d M Sport»:
                • Дизельный двигатель, 3 л., 340 л.с.
                • Антиблокировочная система
                • Антипробуксовочная система
                • Система курсовой устойчивости
                • Система контроля слепых зон
                • Система помощи при экстренном торможении
                • Датчик давления в шинах
                • Подушки безопасности водителя
                • Подушки безопасности пассажира
                • Боковые передние подушки безопасности
                • Оконные шторки безопасности
                • Блокировка замков задних дверей
                • Система крепления детских автокресел
                • Иммобилайзер
                • Центральный замок
                • Бортовой компьютер
                • Адаптивный круиз-контроль
                • Парктроник передний и задний
                • Система автоматической парковки
                • Система помощи при старте в гору
                • Система помощи при спуске с горы
                • Система контроля за полосой движения
                • Система управления дальним светом
                • Датчик света
                • Датчик дождя
                • Активный усилитель руля
                • Пневмоподвеска
                • Активная подвеска
                • Запуск...",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 3,
                'model_id' => 8,
                'brand_id' => 16,
                'year' => "2020",
                'price' => "4150000",
                'old_price' => null,
                'mileage' => "34000",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/bmw3_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 2.0,
                'power' => "340",
                'transmission_id' => 1,
                'drive_unit_id' => 3,
                'color_id' => 1,
                'steering_wheel' => "правый",
                'generation' => "3 поколение",
                'equipment' => "sDrive 20i M Sport",
                'vin' => "WBA*************",
                'city' => "Нижний Новгород",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "2020 ГОД В ПТС
                НИКАКИХ ОГРАНИЧЕНИЙ НА ПРОДАЖУ, ПРИВЕЗЕН ДО НОВЫХ ЗАКОНОВ
                СТРОГИЙ АУКЦИОН, ОЦЕНКА 5 БАЛЛОВ
                САМАЯ МАКСИМАЛЬНАЯ КОМПЛЕКТАЦИЯ
                МУЗЫКА HARMAN/ПОЛНЫЙ ПАКЕТ ЭЛЕКТРИКИ(ВСЕ ВОЗМОЖНЫЕ АСИСТЫ, АВТОПАРКОВКА, ПРОЕКЦИЯ)
                ОРИГИНАЛЬНАЯ ГУБА
                СОСТОЯНИЕ НОВОГО АВТО!
                ЗОНЫ РИСКА В БРОНЕ ПЛЕНКЕ",
                'additional' => 'Более 200 проверенных автомобилей с пробегом',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 4,
                'model_id' => 11,
                'brand_id' => 110,
                'year' => "2015",
                'price' => "3299000",
                'old_price' => null,
                'mileage' => "134007",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/porshe2_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 3.6,
                'power' => "400",
                'transmission_id' => 2,
                'drive_unit_id' => 1,
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => null,
                'vin' => "WBA*************",
                'city' => "Москва",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Автомобиль продается официальным дилером Автомир, Боровское шоссе 51.
                -Приобретался у официального дилера
                -Оригинальный пробег
                -Чистый, опрятный салон
                -Хорошее техническое состояние
                -Проведена комплексная диагностика.
                - При обмене на ВАШ автомобиль действуют СКИДКА до 100 000 руб.
                - CКИДКА при покупке в КРЕДИТ до 100 000 рублей!
                - Кредит от 5% годовых
                - Кредит без первоначального взноса.
                - Мы гарантируем, что автомобиль не находится в розыске и не является предметом залога.
                - Оригинальный пробег.
                - Полная комплексная техническая проверка состояния автомобиля
                - Предпродажная подготовка
                - Тест-драйв
                - Примем Ваш автомобиль в зачет по рыночной цене
                ∙ ГК «АВТОМИР», Автомобили с пробегом - это Ваш надежный партнер, на рынке автомобилей с пробегом. Мы готовы предложить Вам, только подготовленные и проверенные автомобили с пробегом. ∙ Все автомобили, юридически проверены и прошли комплексную диагностику ∙ Более 200 проверенных автомобилей с пробегом
                Мы находимся по адресу Боровское шоссе 51 и работаем для вас с 9:00 до 21:00, без обеда и выходных. Ждем Вас у нас в автосалоне!
                100 метров от метро Новопеределкино!
                Комплектация «Turbo»:
                • Бензиновый двигатель, 3.6 л., 400 л.с.
                • Роботизированная коробка передач, 7 ст.
                • Антиблокировочная система
                • Антипробуксовочная система
                • Система курсовой устойчивости
                • Датчик давления в шинах
                • Подушки безопасности водителя с защитой коленей
                • Подушки безопасности пассажиров, в том числе задних
                • Боковые передние и задние подушки безопасности
                • Оконные шторки безопасности
                • Система крепления детских автокресел
                • Сигнализация
                • Иммобилайзер
                • Центральный замок
                • Бортовой компьютер
                • Круиз-контроль
                • Парктроник задний
                • Система помощи при старте в гору
                • Система помощи при спуске с горы
                • Датчик света
                • Датчик дождя
                • Активный усилитель руля
                • Пневмоподвеска
                • Спортивная подвеска
                • Система “старт-стоп”
                • Система доступа без ключа
                • Открытие багажника без помощи рук
                • Электрорегулировка руля с памятью положения
                • Электрорегулировка сиденья пассажира с памятью положения
                • Электростеклоподъемники передние и задние
                • Электроскладывание зеркал
                • Электрорегулировка зеркал с памятью положения
                • Электропривод крышки багажника
                • Кондиционер
                • Климат-контроль многозонный
                • Подогрев сидений водителя и пассажира
                • Обогрев зеркал
                • Обогрев лобового стекла
                • Обогрев заднего стекла
                • Обогрев зоны стеклоочистителей
                • Обогрев форсунок стеклоомывателей
                • Навигационная система
                • CD
                • USB
                • Bluetooth
                • AUX
                • Hi-Fi
                • 6 колонок
                • Мультифункциональное рулевое колесо
                • Розетка 12V
                • Кожаная обивка салона
                • Темный салон
                • Отделка кожей рычага КПП
                • Кожаный руль
                • Панорамная крыша
                • Спортивные передние сидения
                • Складывающееся заднее сидение
                • Передний центральный подлокотник
                • Подрулевые лепестки переключения передач
                • Накладки на пороги
                • Размер дисков 19″
                • Декоративные молдинги
                • Светодиодные фары
                • Противотуманные фары
                • Адаптивные фары
                • Огни дневного хода
                • Корректор фар с ручным управлением
                • Автоматический корректор фар
                • Омыватель фар
                • ПТС
                • Свидетельство о регистрации",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 5,
                'model_id' => 9,
                'brand_id' => 110,
                'year' => "2020 ",
                'price' => "24399000",
                'old_price' => null,
                'mileage' => "35000",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/porshe1_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 4.0,
                'power' => "630",
                'transmission_id' => 2,
                'drive_unit_id' => 1,
                'color_id' => 6,
                'steering_wheel' => "левый",
                'generation' => "2 поколение, рестайлинг",
                'equipment' => null,
                'vin' => "WBA*************",
                'city' => "Владивосток",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Мы предлагаем:
                <span>• Гарантию на автомобиль на 1, 2 или 3 года
                </span><span>• Индивидуальное ценовое и финансовое предложение
                </span><span>• Гарантию лучшей цены на автомобили в России
                </span><span>• Обмен по программе трейд-ин
                </span><span>• Привлекательные кредитные программы: (более 10 банков партнеров), оформление всего по двум документам и без ПВ
                </span><span>• Доставим ваш автомобиль на крытом эвакуаторе в любую точку России
                </span><span>Если вы не нашли интересующий автомобиль, позвоните нам – мы подберем автомобиль исходя из Ваших предпочтений.
                Мы ценим наших клиентов и обеспечиваем внимание и заботу с первого обращения.
                </span><span>• Цвет кузова: Серый металлик (Volcano Grey)
                </span><span>• Цвет салона: Серый кожаный салон (Agate Grey) в комбинации с другими материалами
                </span><span>• Пакет Sport Design с боковыми юбками Sport Design
                </span><span>• Зеркала заднего вида окрашены в цвет кузова
                </span><span>• Рамки боковых стекол окрашены в черный цвет (глянец)
                </span><span>• Верхняя часть дверных ручек окрашена в цвет кузова
                </span><span>• Крышка бензобака Exclusive Design
                </span><span>• 8-ступенчатая КПП Porsche Doppelkupplung (PDK)
                </span><span>v• Спортивная выхлопная система c серебристыми насадками выхлопных труб
                </span><span>21-дюймовые диски Panamera SportDesign, окрашенные в серый цвет (Satin Platinum)
                </span><span>• Матричные светодиодные фары, включая систему динамического освещения Porsche (PDLS Plus)
                </span><span>• Стекла с тепло- и звукоизоляцией и тонированным остеклением Privacy
                </span><span>• Датчики системы помощи при парковке спереди и сзади, включая камеру кругового обзора
                </span><span>• Адаптивный круиз-контроль
                </span><span>• Функция ночного видения Night Assist
                </span><span>• Система помощи водителю при смене полосы движения (Lane Change Assist (LCA))
                </span><span>• Дополнительное освещение салона, включая пакет освещения сзади
                </span><span>• Рычаг КПП Exclusive Design
                </span><span>• 18-позиционные адаптивные спортивные сиденья с функцией памяти
                </span><span>• Комфортные 8-позиционные задние сиденья с функцией памяти (в соч. с адаптивными спортивными сиденьями)
                </span><span>• Вентиляция передних сидений
                </span><span>• Спортивное GT многофункциональное рулевое колесо с отделкой кожей и с подогревом
                </span><span>• Съемная крышка багажника
                </span><span>• Автоматически поднимающиеся шторки на задние двери и на заднее окно
                </span><span>• Отделка элементов передней панели кожей. Серый (Agate Grey)
                </span><span>• Индивидуальный напольный коврик в багажном отделении с кожаной окантовкой
                </span><span>• Пластины воздуховодов с отделкой кожей
                </span><span>• Отделка рулевой колонки и приборной панели кожей. Серый (Agate Grey)
                </span><span>• Консоли сидений спереди и сзади в коже. Серый (Agate Grey)
                </span><span>• Съемная крышка багажника с отделкой кожей. Серый (Agate Grey)
                </span><span>• Индивидуальные напольные коврики с кожаной окантовкой (высокий ворс). Серый (Agate Grey)
                </span><span>• Внутренние накладки на пороги с отделкой гладкой кожей. Серый (Agate Grey)
                </span><span>• Пакет отделки элементов салона карбоном
                </span><span>• Накладки на пороги с отделкой карбоном, вкл. внутренние кожаные накладки на пороги
                </span><span>• USB интерфейс для задних пассажиров</span>",
                'additional' => ' Покупка автомобиля у официального дилера 
                Порше Центр Минеральные Воды — ваша гарантия безопасной сделки.',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 6,
                'model_id' => 9,
                'brand_id' => 110,
                'year' => "2013",
                'price' => "4199999",
                'old_price' => null,
                'mileage' => "53436",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/porshe3_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 4.8,
                'power' => "430",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA*************",
                'city' => "Минеральные Воды, Ставропольский край",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Мы предлагаем:
                • Гарантию на автомобиль на 1, 2 или 3 года
                • Индивидуальное ценовое и финансовое предложение
                • Гарантию лучшей цены на автомобили в России
                • Обмен по программе трейд-ин
                • Привлекательные кредитные программы: (более 10 банков партнеров), оформление всего по двум документам и без ПВ
                • Доставим ваш автомобиль на крытом эвакуаторе в любую точку России
                Если вы не нашли интересующий автомобиль, позвоните нам – мы подберем автомобиль исходя из Ваших предпочтений.
                Мы ценим наших клиентов и обеспечиваем внимание и заботу с первого обращения.",
                'additional' => 'Покупка автомобиля у официального дилера Порше 
                Центр Минеральные Воды — ваша гарантия безопасной сделки.',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
                
            ],

            [
                'id'=> 7,
                'model_id' => 10,
                'brand_id'  => 110,
                'year' => "2023",
                'price' => "24495000",
                'old_price' => "23995000",
                'mileage' => "10",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/porshe4_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 4.0,
                'power' => "474",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 8,
                'steering_wheel' => "левый",
                'generation' => "3 поколение, 2 рестайлинг",
                'equipment' => '4.0 Tiptronic S',
                'vin' => "	WP1**************",
                'city' => "Санкт-Петербурге",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Комплектация: Cayenne S [III Рестайлинг] Джип (SUV) автомат 474

                Лучшее предложение на автомобиль с полным НДС!
                До 29 ноября гарантия в подарок!
                Новый автомобиль от официального дилера Порше Центр Невский предлагает автомобили на, пожалуй, лучших условиях в России. Позвоните прямо сейчас и убедитесь в этом сами!
                Не откладывайте мечту на завтра!
                *Предложение ограничено.
                В наличии. На автомобиле полностью оплачен утилизационный сбор.
                Финальные условия акций и привилегий на данный автомобиль уточняйте у менеджера отдела продаж по телефону.",
                'additional' => 'Модель: Cayenne',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 8,
                'model_id' => 10,
                'brand_id' => 110,
                'year' => "2013",
                'price' => "940000",
                'old_price' => null,
                'mileage' => "203500",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/porshe5_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 4.5,
                'power' => "340",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 13,
                'steering_wheel' => "левый",
                'generation' => null,
                'equipment' => "4.5 Tiptronic S Titanium Edition",
                'vin' => "WBA*************",
                'city' => "Барнаул",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продаю красивый Porsche Cayenne 2006г. в хорошем состоянии. Кожаный салон как новый, вставки карбон, потолок алькантара , обвес 
                TECH ART MAGNUM, двигатель в нормальном состоянии v8 атмосферник, масло не берет, 
                акпп в хорошем состоянии, переключение происходит плавно без рывков и пинков.
                 Ходовая не гремит не стучит, едет плотно. Подвеска не пневмо! Кузов в хорошем состоянии.
                Резина всесезонная, Мультимедиа новая, кнопки на руле подключены, штатный звук Bose, два ключа в комплекте.
                Автомобиль юридически чист!
                Торг только возле капота и только по факту.
                Обмен не интересен , так как куплен уже автомобиль!
                Автомобилем владела девушка, маршрут: дом -работа- дом, гаражное хранение.",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 9,
                'model_id' => 13,
                'brand_id' => 163,
                'year' => "2013",
                'price' => "369000",
                'old_price' => null,
                'mileage' => "350000",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/yaz2.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 2.9,
                'power' => "84",
                'transmission_id' => 4,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => null,
                'vin' => "WBA*************",
                'city' => "Барнаул",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Обмен: на равноценную",
                'additional' => 'В рапторе, едет как танк, техника в отличном тех состоянии. Интересует обмен',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],

            [
                'id'=> 10,
                'model_id' => 12,
                'brand_id' => 163,
                'year' => "2006",
                'price' => "550000",
                'old_price' => null,
                'mileage' => "208000",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' =>'products/yaz1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 2.7,
                'power' => "128",
                'transmission_id' => 4,
                'drive_unit_id' => 1,
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "2.7 MT Classic",
                'vin' => "WBA*************",
                'city' => "Кемерово",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продам уаз патриот, я СОБСТВЕННИК, двигатель откапитален под первый ремонт,
                 все запчасти двигателя новые, по кузову- полная замена дверей на новые, 
                 передние крылья новые(металл! не пластик), задние крылья переварены с арками, 
                 пороги переварены, установлена сигнализация старлайн а93 с автозапуском, 
                 новые топливные баки, передний мост новый, полностью окрашен в камере.
                 Передние сиденья перетянуты новой тканью, торпедо следующего покаления.
                 Есть недоделки по салону, но это мелочи по сравнению с тем что сделано.",
                'additional' => 'Обмен: на более дорогую
                на японский автомобиль',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],
            [
                'id'=> 11,
                'model_id' => 13,
                'brand_id' => 163,
                'year' => "2012",
                'price' => "660000",
                'old_price' => null,
                'mileage' => "79687",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => null,
                'fuel_id' => 1,
                'engine_capacity' => 2.7,
                'power' => "128",
                'transmission_id' => 4,
                'drive_unit_id' => 1,
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "2.7 MT Classic",
                'vin' => "XTT*************",
                'city' => "Чебоксар",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Автомобиль высокой проходимости и вместительным багажным отделением.
                ✅ Автомобиль с одним владельцем
                ✅ Хорошая история автомобиля
                ✅ Оригинальный пробег подтвержден историей
                Оригинальный ПТС.
                Автомобиль вовремя обслуживался. Расходники менялись.
                Чистый и опрятный салон.
                Надежный двигатель в связке с механической коробкой передач
                Двигатель и КПП прошли комплексную диагностику
                Зимняя резина на литых дисках.
                Хорошая комплектация:
                ✔️ ABS
                ✔️ Сигнализация
                ✔️ Магнитола
                ✔️ Гидроусилитель руля
                ✔️ Кондиционер
                ✔️ Подушки безопасности
                ✔️ Подогрев передних сидений
                ✔️ Электропривод зеркал
                Автомобиль на 100% юридически чистый, прошел все проверки и готов к эксплуатации. Возможен обмен на ваш автомобиль.",
                'additional' => 'Обмен: на более дорогую
                на японский автомобиль',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,
            ],
            [
                'id'=> 12,
                'model_id' => 14,
                'brand_id' => 218,
                'year' => "2020",
                'price' => "13200000",
                'old_price' => null,
                'mileage' => "79687",
                'status' => true,
                'moderation_status_id' => 1,
                'main_img' => 'products/yral1.jpg',
                'fuel_id' => 2,
                'engine_capacity' => null,
                'power' => "272",
                'transmission_id' => 4,
                'drive_unit_id' => 1,
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => null,
                'vin' => "XZ8*************",
                'city' => "Арзамас",
                'category_id' => "2",
                'wheel_formula' => "6x6",
                'load_capacity' => 25000,
                'vin_body' => "",
                "body_type_id" => null,
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продаем верную, надежную, рабочую лошадь, 
                заработал и еще заработает хорошую кучу денег, 
                кран Ивановец КС 45717-2Р. Год 2020. 31 метр. 
                Небольшая наработка. Идеальное состояние, весь в родной краске. 
                ПТО, ЧТО, крановая книга, полный пакет документов. 
                Очень экономичный расход топлива. 
                Современное обслуживание, только качественные импортные масла и смазки. 
                Я частник, на кране работаю сам- отсюда дотошное обслуживание и исключительное состояние, по сути состояние нового. 
                Причина продажи - меняем весовую категорию так как есть хорошее предложение от партнеров. 
                Осмотр в любое удобное время.",
                'additional' => '',
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => null,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => null,

            ],
            [
                'id'=> 13,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2019",
                'price' => "5800000",
                'old_price' => null,
                'mileage' => "98000",
                'status' => true,
                'moderation_status_id' => 2,
                'main_img' => 'products/bmw1_1.jpg',
                'fuel_id' => 2,
                'engine_capacity' => 3.0,
                'power' => "249",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Новосибирск",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продам BMW X6
                !!! ДИЛЕРСКИЙ !!!
                Продажа от собственника
                Родной пробег
                Машина полностью обслужена
                Последнее ТО тысячу км назад ,
                2 комплекта резины на дисках
                Лето на 20 , зима на 19",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 5,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 1,
            ],
            [
                'id'=> 14,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2019",
                'price' => "5800000",
                'old_price' => null,
                'mileage' => "98000",
                'status' => true,
                'moderation_status_id' => 3,
                'main_img' => 'products/bmw1_1.jpg',
                'fuel_id' => 2,
                'engine_capacity' => 3.0,
                'power' => "249",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Новосибирск",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Продам BMW X6
                !!! ДИЛЕРСКИЙ !!!
                Продажа от собственника
                Родной пробег
                Машина полностью обслужена
                Последнее ТО тысячу км назад ,
                2 комплекта резины на дисках
                Лето на 20 , зима на 19",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 5,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 1,
            ],
            [
                'id'=> 15,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2023",
                'price' => "13490000",
                'old_price' => null,
                'mileage' => "30",
                'status' => true,
                'moderation_status_id' => 3,
                'main_img' => 'products/bmw4_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 3.0,
                'power' => "381",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 6,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Санкт-Петербург",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Абсолютно новый авто в наличии в Санкт-Петербурге, ничего не надо ждать , полностью растаможен,
                М спорт пакет , М спорт профессиональный пакет , Премиум пакет , М спорт про пакет, 22 диски, красный супорт, музыка Harmon, панорамная крыша, будете первым владельцем.
                Возможна продажа в лизинг!",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 5,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 2,
            ],
            [
                'id'=> 16,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2023",
                'price' => "20500000",
                'old_price' => null,
                'mileage' => "77",
                'status' => true,
                'moderation_status_id' => 3,
                'main_img' => 'products/bmw5_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 4.4,
                'power' => "625",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 6,
                'steering_wheel' => "левый",
                'generation' => "4 поколение, рестайлинг",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Москва",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => " В продаже
                BMW X5M 2023 , 
                рест в наличии в Мск",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 5,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 1,
            ],
            [
                'id'=> 17,
                'model_id' => 6,
                'brand_id' => 16,
                'year' => "2000",
                'price' => "800000",
                'old_price' => null,
                'mileage' => "100000",
                'status' => true,
                'moderation_status_id' => 3,
                'main_img' => 'products/bmw6_1.jpg',
                'fuel_id' => 1,
                'engine_capacity' => 3.0,
                'power' => "231",
                'transmission_id' => 1,
                'drive_unit_id' => 1,
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => null,
                'vin' => "WBA**************",
                'city' => "Новосибирск",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => " ",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'body_type_id' => 12,
                'user_id' => 1,
                'looked' => 0,
                'organisation_id' => 1,
            ],

        ];
        DB::table('products')->insert($menu);
        // через factory
        // Product::factory()->count(3)->create();
    }
}
