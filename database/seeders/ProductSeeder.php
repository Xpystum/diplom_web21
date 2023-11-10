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
    title
    year
    price
    old_price
    mileage
    status
    img_src
    engine
    power
    transmission
    drive_unit
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
                'year' => "2017",
                'price' => "4150000",
                'old_price' => null,
                'mileage' => "98000",
                'status' => "1",
                'img_src' => 'products/bmw1.jpg',
                'engine' => "бензин, 3.0 л",
                'power' => "306",
                'transmission' => "АКПП",
                'drive_unit' => "4WD",
                'color_id' => 2,
                'steering_wheel' => "правый",
                'generation' => "",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Владивосток",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Датчик дождя.
                Зеркала с функцией автоподстройки на заднем ходу.
                Электропривод багажника.
                Люк.
                Кожаная обивка салона.
                Электропривод водительского сиденья.
                Электроподогрев передних сидений.
                Память положения водительского сидения для двух водителей.
                Антиблокировочная система (ABS).
                Вспомогательная система торможения (BAS).
                Система электронного контроля устойчивости (ESP).
                Антипробуксовочная система (TCS).
                Система помощи при спуске с горы (DAC).
                Система предотвращения выезда из полосы движения (LKA).
                Адаптивный круиз-контроль (ACCS).
                Система адаптивного освещения дороги (AFS).
                Омыватели передних фар.
                Парктроник.
                Система предотвращения столкновения с функцией автоматического торможения.
                Система помощи при парковке.
                Круговой обзор.",
                'additional' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> 2,
                'model_id' => 7,
                'brand_id' => 16,
                'year' => "2023",
                'price' => "17500000",
                'old_price' => null,
                'mileage' => "10",
                'status' => "1",
                'img_src' => 'products/bmw2.jpg',
                'engine' => "дизель, 3.0 л",
                'power' => "340",
                'transmission' => "автомат",
                'drive_unit' => "4WD",
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Владивосток",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
            ],

            [
                'id'=> 3,
                'model_id' => 8,
                'brand_id' => 16,
                'year' => "2020",
                'price' => "4150000",
                'old_price' => null,
                'mileage' => "34000",
                'status' => "1",
                'img_src' => 'products/bmw3.jpg',
                'engine' => "бензин, 2.0 л",
                'power' => "340",
                'transmission' => "АКПП",
                'drive_unit' => "задний",
                'color_id' => 1,
                'steering_wheel' => "правый",
                'generation' => "3 поколение",
                'equipment' => "	sDrive 20i M Sport",
                'vin' => "WBA*************",
                'city' => "Нижний Новгород",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
            ],

            [
                'id'=> 4,
                'model_id' => 11,
                'brand_id' => 110,
                'year' => "2015",
                'price' => "3299000",
                'old_price' => null,
                'mileage' => "134007",
                'status' => "1",
                'img_src' => 'products/porshe2.jpg',
                'engine' => "бензин, 3.6 л",
                'power' => "400",
                'transmission' => "робот",
                'drive_unit' => "4WD",
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Москва",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
            ],

            [
                'id'=> 5,
                'model_id' => 9,
                'brand_id' => 110,
                'year' => "2020 ",
                'price' => "24399000",
                'old_price' => null,
                'mileage' => "35000",
                'status' => "1",
                'img_src' => 'products/porshe1.jpg',
                'engine' => "бензин, 4.0 л",
                'power' => "630",
                'transmission' => "	робот",
                'drive_unit' => "4WD",
                'color_id' => 6,
                'steering_wheel' => "левый",
                'generation' => "2 поколение, рестайлинг",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Владивосток",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
                Мы ценим наших клиентов и обеспечиваем внимание и заботу с первого обращения.
                • Цвет кузова: Серый металлик (Volcano Grey)
                • Цвет салона: Серый кожаный салон (Agate Grey) в комбинации с другими материалами
                • Пакет Sport Design с боковыми юбками Sport Design
                • Зеркала заднего вида окрашены в цвет кузова
                • Рамки боковых стекол окрашены в черный цвет (глянец)
                • Верхняя часть дверных ручек окрашена в цвет кузова
                • Крышка бензобака Exclusive Design
                • 8-ступенчатая КПП Porsche Doppelkupplung (PDK)
                • Спортивная выхлопная система c серебристыми насадками выхлопных труб
                21-дюймовые диски Panamera SportDesign, окрашенные в серый цвет (Satin Platinum)
                • Матричные светодиодные фары, включая систему динамического освещения Porsche (PDLS Plus)
                • Стекла с тепло- и звукоизоляцией и тонированным остеклением Privacy
                • Датчики системы помощи при парковке спереди и сзади, включая камеру кругового обзора
                • Адаптивный круиз-контроль
                • Функция ночного видения Night Assist
                • Система помощи водителю при смене полосы движения (Lane Change Assist (LCA))
                • Дополнительное освещение салона, включая пакет освещения сзади
                • Рычаг КПП Exclusive Design
                • 18-позиционные адаптивные спортивные сиденья с функцией памяти
                • Комфортные 8-позиционные задние сиденья с функцией памяти (в соч. с адаптивными спортивными сиденьями)
                • Вентиляция передних сидений
                • Спортивное GT многофункциональное рулевое колесо с отделкой кожей и с подогревом
                • Съемная крышка багажника
                • Автоматически поднимающиеся шторки на задние двери и на заднее окно
                • Отделка элементов передней панели кожей. Серый (Agate Grey)
                • Индивидуальный напольный коврик в багажном отделении с кожаной окантовкой
                • Пластины воздуховодов с отделкой кожей
                • Отделка рулевой колонки и приборной панели кожей. Серый (Agate Grey)
                • Консоли сидений спереди и сзади в коже. Серый (Agate Grey)
                • Съемная крышка багажника с отделкой кожей. Серый (Agate Grey)
                • Индивидуальные напольные коврики с кожаной окантовкой (высокий ворс). Серый (Agate Grey)
                • Внутренние накладки на пороги с отделкой гладкой кожей. Серый (Agate Grey)
                • Пакет отделки элементов салона карбоном
                • Накладки на пороги с отделкой карбоном, вкл. внутренние кожаные накладки на пороги
                • USB интерфейс для задних пассажиров",
                'additional' => ' Покупка автомобиля у официального дилера 
                Порше Центр Минеральные Воды — ваша гарантия безопасной сделки.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> 6,
                'model_id' => 9,
                'brand_id' => 110,
                'year' => "2013",
                'price' => "4199999",
                'old_price' => null,
                'mileage' => "53436",
                'status' => "1",
                'img_src' => 'products/porshe3.jpg',
                'engine' => "бензин, 4.8 л",
                'power' => "430",
                'transmission' => "автомат",
                'drive_unit' => "4WD",
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Минеральные Воды, Ставропольский край",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
                
            ],

            [
                'id'=> 7,
                'model_id' => 9,
                'brand_id'  => 110,
                'year' => "2013",
                'price' => "12517000",
                'old_price' => null,
                'mileage' => "22260",
                'status' => "1",
                'img_src' => 'products/porshe4.jpg',
                'engine' => "бензин, 2.9 л",
                'power' => "440",
                'transmission' => "робот",
                'drive_unit' => "4WD",
                'color_id' => 15,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Москва",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Комплектация: Porsche Macan I Рестайлинг 2 GTS 2.9 AMT (440 л.с.) 4WD GTS
                АВТОДОМ ЗОРГЕ
                3 ДНЯ СУПЕР ЦЕН В АВТОДОМ ЗОРГЕ!
                УСПЕЙТЕ ЗАБРОНИРОВАТЬ!
                Кредит на ВЫГОДНЫХ условиях!
                *Сумма кредита до 10 млн. руб.
                *Срок кредита до 96 месяцев с возможностью досрочного погашения.
                Ставка на автомобили с первичной постановкой на учет в ГИБДД 2, 5 %!
                Ставка на автомобили с пробегом 3, 1%!
                БЕЗ СКРЫТЫХ ПЛАТЕЖЕЙ!
                Звоните! Приезжайте! Менеджеры подробно расскажут про действующие предложения.
                Автомобиль представлен по адресу г. Москва ул. Зорге, д.17
                Один владелец
                Дилерский автомобиль, с прозрачной историей обслуживания
                Юридическая чистота сделки
                Автомобиль прошел полную техническую диагностику
                Полный пакет документов.
                Выбирайте понравившийся автомобиль! При звонке просите соединить с ДЦ Автодом ул Зорге д.17.
                Наши профессиональные менеджеры угостят Вас вкусным кофе, расскажут все о комплектации и техническом состоянии автомобиля. Покажут автомобиль в светлом, удобном помещении. При вашем желании, автомобиль поднимем на подъемник и предоставим специалиста для осмотра.
                При покупке пакета страхования ПРЕМИУМ - ГАРАНТИЙНЫЙ СЕРТИФИКАТ В ПОДАРОК !
                При сдаче Вашего автомобиля в Трейд ин и при использовании кредитных / лизинговых средств, действует дополнительный дисконт.
                Все импортируемые автомобили, привезенные нами, растаможены на полную стоимость. Это важно!
                Мы гарантируем Вам безопасную и прозрачную сделку, без навязанных услуг. И проверенный, полный пакет документов.
                Также, если Вы нашли автомобиль сами, мы предлагаем провести кредитную/лизинговую сделку безопасно и удобно у нас в салоне. Вы можете, в том числе, воспользоваться услугами нашего сервиса для проведения диагностики и проверки автомобиля. И при желании оперативно провести Техническое обслуживание.
                Мы готовы БЫСТРО ВЫКУПИТЬ Ваш автомобиль или ОПЕРАТИВНО ПРОДАТЬ его по договору комиссии на Ваших условиях.
                Подробности уточняйте у менеджеров..
                Ваши преимущества покупки автомобиля в АВТОДОМ
                ✅Во всех наших дилерских центрах у Вас есть возможность приобрести автомобиль с пробегом в кредит на выгодных условиях!*
                ✅Гарантия АВТОДОМ защищает Вас от непредвиденных расходов на ремонт вашего автомобиля с пробегом! *
                ✅Более 1300 автомобилей в наличии!
                ✅Специальные привилегии при обмене Вашего автомобиля на любой с пробегом.
                Автомобиль в наличии у официального дилера АВТОДОМ BMW Зорге по адресу: Москва, ул. Зорге, д. 17
                АВТОДОМ BMW Зорге является официальным дилером по продажам новых автомобилей BMW, сертифицированный дилер BMW M.
                * Подробности уточняйте в отделе продаж.
                Один владелец. ПТС оригинал. Отличное состояние автомобиля.",
                'additional' => 'Модель: Macan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> 8,
                'model_id' => 10,
                'brand_id' => 110,
                'year' => "2013",
                'price' => "940000",
                'old_price' => null,
                'mileage' => "203500",
                'status' => "1",
                'img_src' => 'products/porshe5.jpg',
                'engine' => "бензин, 4.5 л",
                'power' => "340",
                'transmission' => "АКПП",
                'drive_unit' => "4WD",
                'color_id' => 13,
                'steering_wheel' => "левый",
                'generation' => "4.5 Tiptronic S Titanium Edition",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Барнаул",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
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
            ],

            [
                'id'=> 9,
                'model_id' => 13,
                'brand_id' => 163,
                'year' => "2013",
                'price' => "369000",
                'old_price' => null,
                'mileage' => "350000",
                'status' => "1",
                'img_src' => 'products/yaz2.jpg',
                'engine' => "бензин, 2.9 л",
                'power' => "84",
                'transmission' => "механика",
                'drive_unit' => "4WD",
                'color_id' => 1,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "",
                'vin' => "WBA*************",
                'city' => "Барнаул",
                'category_id' => "1",
                'wheel_formula' => "",
                'load_capacity' => null,
                'vin_body' => "",
                'body_length' => null,
                'body_volume' => null,
                'weight' => null,
                'desription' => "Обмен: на равноценную",
                'additional' => 'В рапторе, едет как танк, техника в отличном тех состоянии. Интересует обмен',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> 10,
                'model_id' => 12,
                'brand_id' => 163,
                'year' => "2006",
                'price' => "550000",
                'old_price' => null,
                'mileage' => "208000",
                'status' => "1",
                'img_src' =>'products/yaz1.jpg',
                'engine' => "бензин, 2.7 л",
                'power' => "128",
                'transmission' => "механика",
                'drive_unit' => "4WD",
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
            ],
            [
                'id'=> 11,
                'model_id' => 13,
                'brand_id' => 163,
                'year' => "2012",
                'price' => "660000",
                'old_price' => null,
                'mileage' => "79687",
                'status' => "1",
                'img_src' => null,
                'engine' => "бензин, 2.7 л",
                'power' => "128",
                'transmission' => "механика",
                'drive_unit' => "4WD",
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
            ],
            [
                'id'=> 12,
                'model_id' => 14,
                'brand_id' => 218,
                'year' => "2020",
                'price' => "13200000",
                'old_price' => null,
                'mileage' => "79687",
                'status' => "1",
                'img_src' => 'products/yral1.jpg',
                'engine' => "дизель",
                'power' => "272",
                'transmission' => "механика",
                'drive_unit' => "4WD",
                'color_id' => 2,
                'steering_wheel' => "левый",
                'generation' => "1 поколение",
                'equipment' => "",
                'vin' => "XZ8*************",
                'city' => "Арзамас",
                'category_id' => "2",
                'wheel_formula' => "6x6",
                'load_capacity' => 25000,
                'vin_body' => "",
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
            ],

        ];
        DB::table('products')->insert($menu);
        // через factory
        // Product::factory()->count(3)->create();
    }
}
