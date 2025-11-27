<?php

namespace Database\Seeders;

use App\Enums\BaseStatusEnum;
use App\Models\Article;
use App\Models\Media;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title_uz' => 'O\'zbekistonning eng go\'zal 10 ta joyi',
                'title_ru' => 'Топ 10 красивых мест Узбекистана',
                'title_en' => 'Top 10 beautiful places in Uzbekistan',
                'description_uz' => 'O\'zbekistonda sayohat qilish uchun eng yaxshi joylar ro\'yxati.',
                'description_ru' => 'Список лучших мест для посещения в Узбекистане.',
                'description_en' => 'List of the best places to visit in Uzbekistan.',
                'content_uz' => '<p>O\'zbekiston boy tarixga va ajoyib tabiatga ega mamlakatdir. <strong>Samarqand</strong>, <strong>Buxoro</strong> va <strong>Xiva</strong> kabi qadimiy shaharlar har yili minglab sayyohlarni o\'ziga jalb qiladi.</p><h2>1. Samarqand</h2><p>Registon maydoni - bu shaharning yuragi. Bu yerda uchta madrasa joylashgan: Ulug\'bek, Sherdor va Tilla-Qori.</p><h2>2. Buxoro</h2><p>Buxoro - ochiq osmon ostidagi muzey. Poyi Kalon ansambli va Ark qal\'asi shaharning ramzlaridir.</p><h2>3. Xiva</h2><p>Ichan-Qal\'a - bu butunlay saqlanib qolgan o\'rta asr shahri. Bu yerda siz o\'zingizni ertakdagidek his qilasiz.</p>',
                'content_ru' => '<p>Узбекистан — страна с богатой историей и удивительной природой. Древние города, такие как <strong>Самарканд</strong>, <strong>Бухара</strong> и <strong>Хива</strong>, ежегодно привлекают тысячи туристов.</p><h2>1. Самарканд</h2><p>Площадь Регистан — это сердце города. Здесь расположены три медресе: Улугбека, Шердор и Тилля-Кари.</p><h2>2. Бухара</h2><p>Бухара — это музей под открытым небом. Ансамбль Пои-Калян и крепость Арк являются символами города.</p><h2>3. Хива</h2><p>Ичан-Кала — это полностью сохранившийся средневековый город. Здесь вы почувствуете себя как в сказке.</p>',
                'content_en' => '<p>Uzbekistan is a country with a rich history and amazing nature. Ancient cities like <strong>Samarkand</strong>, <strong>Bukhara</strong>, and <strong>Khiva</strong> attract thousands of tourists every year.</p><h2>1. Samarkand</h2><p>Registan Square is the heart of the city. Three madrasahs are located here: Ulugh Beg, Sherdor, and Tilya-Kori.</p><h2>2. Bukhara</h2><p>Bukhara is an open-air museum. The Poi Kalyan ensemble and the Ark Fortress are symbols of the city.</p><h2>3. Khiva</h2><p>Itchan Kala is a fully preserved medieval city. Here you will feel like you are in a fairy tale.</p>',
            ],
            [
                'title_uz' => 'Tog\' sayohatiga qanday tayyorgarlik ko\'rish kerak?',
                'title_ru' => 'Как подготовиться к горному походу?',
                'title_en' => 'How to prepare for a mountain hike?',
                'description_uz' => 'Tog\'ga chiqishdan oldin bilishingiz kerak bo\'lgan muhim maslahatlar.',
                'description_ru' => 'Важные советы, которые нужно знать перед походом в горы.',
                'description_en' => 'Important tips you need to know before going to the mountains.',
                'content_uz' => '<p>Tog\' sayohati jismoniy tayyorgarlik va to\'g\'ri jihozlarni talab qiladi. Birinchi navbatda <strong>qulay poyabzal</strong> va <strong>issiq kiyimlar</strong> haqida o\'ylashingiz kerak.</p><ul><li>Ryukzak tanlashda uning hajmi va qulayligiga e\'tibor bering.</li><li>Suv va oziq-ovqat zaxirasini unutmang.</li><li>Birinchi yordam qutichasi har doim yoningizda bo\'lsin.</li></ul><p>Shuningdek, ob-havo ma\'lumotlarini oldindan tekshirishni unutmang.</p>',
                'content_ru' => '<p>Поход в горы требует физической подготовки и правильного снаряжения. В первую очередь нужно подумать об <strong>удобной обуви</strong> и <strong>теплой одежде</strong>.</p><ul><li>При выборе рюкзака обратите внимание на его объем и удобство.</li><li>Не забудьте запас воды и еды.</li><li>Аптечка первой помощи всегда должна быть с вами.</li></ul><p>Также не забудьте заранее проверить прогноз погоды.</p>',
                'content_en' => '<p>Mountain hiking requires physical preparation and the right equipment. First of all, you need to think about <strong>comfortable shoes</strong> and <strong>warm clothes</strong>.</p><ul><li>When choosing a backpack, pay attention to its volume and comfort.</li><li>Don\'t forget a supply of water and food.</li><li>A first aid kit should always be with you.</li></ul><p>Also, don\'t forget to check the weather forecast in advance.</p>',
            ],
            [
                'title_uz' => 'Yozgi ta\'til uchun eng yaxshi yo\'nalishlar',
                'title_ru' => 'Лучшие направления для летнего отдыха',
                'title_en' => 'Best destinations for summer vacation',
                'description_uz' => 'Bu yozda qayerga borishni bilmayapsizmi? Bizning tavsiyalarimizni o\'qing.',
                'description_ru' => 'Не знаете, куда поехать этим летом? Читайте наши рекомендации.',
                'description_en' => 'Don\'t know where to go this summer? Read our recommendations.',
                'content_uz' => '<p>Yoz fasli dengiz bo\'yida dam olish uchun ayni muddao. <strong>Turkiya</strong>, <strong>Misr</strong> va <strong>Tailand</strong> kabi davlatlar sizga unutilmas taassurotlar taqdim etadi.</p><h3>Turkiya</h3><p>Antaliya va Bodrum plyajlari, ajoyib servis va tarixiy joylar.</p><h3>Misr</h3><p>Qizil dengizning boy suv osti dunyosi va qadimiy ehromlar.</p><h3>Tailand</h3><p>Ekzotik tabiat, mazali taomlar va buddist ibodatxonalari.</p>',
                'content_ru' => '<p>Лето — идеальное время для отдыха на море. Такие страны, как <strong>Турция</strong>, <strong>Египет</strong> и <strong>Таиланд</strong>, подарят вам незабываемые впечатления.</p><h3>Турция</h3><p>Пляжи Антальи и Бодрума, отличный сервис и исторические места.</p><h3>Египет</h3><p>Богатый подводный мир Красного моря и древние пирамиды.</p><h3>Таиланд</h3><p>Экзотическая природа, вкусная еда и буддийские храмы.</p>',
                'content_en' => '<p>Summer is the perfect time for a beach holiday. Countries like <strong>Turkey</strong>, <strong>Egypt</strong>, and <strong>Thailand</strong> will give you unforgettable impressions.</p><h3>Turkey</h3><p>Beaches of Antalya and Bodrum, excellent service, and historical places.</p><h3>Egypt</h3><p>Rich underwater world of the Red Sea and ancient pyramids.</p><h3>Thailand</h3><p>Exotic nature, delicious food, and Buddhist temples.</p>',
            ],
            [
                'title_uz' => 'Gastronomik turizm: O\'zbek milliy taomlari',
                'title_ru' => 'Гастрономический туризм: Узбекская национальная кухня',
                'title_en' => 'Gastronomic tourism: Uzbek national cuisine',
                'description_uz' => 'O\'zbekistonning eng mazali taomlari haqida.',
                'description_ru' => 'О самых вкусных блюдах Узбекистана.',
                'description_en' => 'About the most delicious dishes of Uzbekistan.',
                'content_uz' => '<p>O\'zbek oshxonasi dunyodagi eng boy va rang-barang oshxonalardan biridir. Quyidagi taomlarni tatib ko\'rish shart:</p><ol><li><strong>Palov</strong> - o\'zbek dasturxonining shohi.</li><li><strong>Manti</strong> - go\'sht va piyoz bilan to\'ldirilgan xamir ovqat.</li><li><strong>Shashlik</strong> - ochiq olovda pishirilgan go\'sht.</li><li><strong>Somsa</strong> - tandirda pishirilgan pishiriq.</li></ol><p>Har bir viloyatning o\'ziga xos palov tayyorlash usuli bor.</p>',
                'content_ru' => '<p>Узбекская кухня — одна из самых богатых и разнообразных в мире. Обязательно стоит попробовать следующие блюда:</p><ol><li><strong>Плов</strong> — король узбекского стола.</li><li><strong>Манты</strong> — тесто с начинкой из мяса и лука.</li><li><strong>Шашлык</strong> — мясо, приготовленное на открытом огне.</li><li><strong>Самса</strong> — выпечка, приготовленная в тандыре.</li></ol><p>В каждом регионе есть свой уникальный способ приготовления плова.</p>',
                'content_en' => '<p>Uzbek cuisine is one of the richest and most diverse in the world. You must try the following dishes:</p><ol><li><strong>Plov</strong> - the king of the Uzbek table.</li><li><strong>Manti</strong> - dough filled with meat and onions.</li><li><strong>Shashlik</strong> - meat cooked over an open fire.</li><li><strong>Samsa</strong> - pastry cooked in a tandoor.</li></ol><p>Each region has its own unique way of cooking plov.</p>',
            ],
            [
                'title_uz' => 'Sayohat paytida xavfsizlik qoidalari',
                'title_ru' => 'Правила безопасности во время путешествия',
                'title_en' => 'Safety rules during travel',
                'description_uz' => 'Chet elda o\'zingizni qanday himoya qilish kerak?',
                'description_ru' => 'Как обезопасить себя за границей?',
                'description_en' => 'How to protect yourself abroad?',
                'content_uz' => '<p>Sayohatga chiqishdan oldin sug\'urta rasmiylashtirish va mahalliy qonun-qoidalarni o\'rganib chiqish juda muhim.</p><blockquote>Har doim pasport nusxasini o\'zingiz bilan olib yuring.</blockquote><p>Shuningdek, qimmatbaho buyumlarni ehtiyot qilish kerak va notanish joylarda tunda yolg\'iz yurmaslik tavsiya etiladi.</p>',
                'content_ru' => '<p>Перед поездкой очень важно оформить страховку и изучить местные законы.</p><blockquote>Всегда носите с собой копию паспорта.</blockquote><p>Также следует беречь ценные вещи и не рекомендуется гулять в одиночку ночью в незнакомых местах.</p>',
                'content_en' => '<p>Before traveling, it is very important to get insurance and study local laws.</p><blockquote>Always carry a copy of your passport with you.</blockquote><p>You should also take care of valuables and it is not recommended to walk alone at night in unfamiliar places.</p>',
            ],
            [
                'title_uz' => 'Arzon sayohat qilish sirlari',
                'title_ru' => 'Секреты бюджетных путешествий',
                'title_en' => 'Secrets of budget travel',
                'description_uz' => 'Qanday qilib kam pul sarflab ko\'p joylarni ko\'rish mumkin?',
                'description_ru' => 'Как увидеть много мест, потратив мало денег?',
                'description_en' => 'How to see many places spending little money?',
                'content_uz' => '<p>Sayohat qilish uchun ko\'p pul kerak degan fikr har doim ham to\'g\'ri emas. Mana bir nechta maslahatlar:</p><ul><li><strong>Aviachiptalarni oldindan bron qiling.</strong> 2-3 oy oldin sotib olish ancha arzon bo\'ladi.</li><li><strong>Hostellardan foydalaning.</strong> Ular mehmonxonalarga qaraganda ancha arzon va yangi do\'stlar orttirish uchun qulay.</li><li><strong>Mavsumdan tashqari vaqtda sayohat qiling.</strong> Turistlar kam bo\'lgan paytda narxlar ham past bo\'ladi.</li></ul>',
                'content_ru' => '<p>Мнение, что для путешествий нужно много денег, не всегда верно. Вот несколько советов:</p><ul><li><strong>Бронируйте авиабилеты заранее.</strong> Покупка за 2-3 месяца обойдется значительно дешевле.</li><li><strong>Используйте хостелы.</strong> Они намного дешевле отелей и удобны для новых знакомств.</li><li><strong>Путешествуйте в несезон.</strong> Когда туристов мало, цены тоже ниже.</li></ul>',
                'content_en' => '<p>The idea that you need a lot of money to travel is not always true. Here are some tips:</p><ul><li><strong>Book flight tickets in advance.</strong> Buying 2-3 months ahead will be much cheaper.</li><li><strong>Use hostels.</strong> They are much cheaper than hotels and great for making new friends.</li><li><strong>Travel during the off-season.</strong> When there are fewer tourists, prices are also lower.</li></ul>',
            ],
            [
                'title_uz' => 'Yevropa bo\'ylab sayohat: Viza olish tartibi',
                'title_ru' => 'Путешествие по Европе: Порядок получения визы',
                'title_en' => 'Travel across Europe: Visa application process',
                'description_uz' => 'Schengen vizasini olish bo\'yicha qo\'llanma.',
                'description_ru' => 'Руководство по получению Шенгенской визы.',
                'description_en' => 'Guide to obtaining a Schengen visa.',
                'content_uz' => '<p>Yevropa davlatlariga sayohat qilish uchun ko\'pincha <strong>Schengen vizasi</strong> talab qilinadi. Hujjatlarni to\'g\'ri tayyorlash viza olish imkoniyatini oshiradi.</p><p>Kerakli hujjatlar:</p><ul><li>Pasport</li><li>Rasm</li><li>Sug\'urta</li><li>Bankdan ma\'lumotnoma</li><li>Ish joyidan ma\'lumotnoma</li></ul><p>Viza markaziga oldindan yozilishni unutmang.</p>',
                'content_ru' => '<p>Для путешествия в европейские страны часто требуется <strong>Шенгенская виза</strong>. Правильная подготовка документов повышает шансы на получение визы.</p><p>Необходимые документы:</p><ul><li>Паспорт</li><li>Фотография</li><li>Страховка</li><li>Справка из банка</li><li>Справка с места работы</li></ul><p>Не забудьте заранее записаться в визовый центр.</p>',
                'content_en' => '<p>A <strong>Schengen visa</strong> is often required to travel to European countries. Correct preparation of documents increases the chances of getting a visa.</p><p>Required documents:</p><ul><li>Passport</li><li>Photo</li><li>Insurance</li><li>Bank statement</li><li>Employment certificate</li></ul><p>Don\'t forget to make an appointment at the visa center in advance.</p>',
            ],
            [
                'title_uz' => 'Oilaviy dam olish uchun eng yaxshi joylar',
                'title_ru' => 'Лучшие места для семейного отдыха',
                'title_en' => 'Best places for family vacation',
                'description_uz' => 'Bolalar bilan qayerda marogli dam olish mumkin?',
                'description_ru' => 'Где можно весело отдохнуть с детьми?',
                'description_en' => 'Where can you have fun with children?',
                'content_uz' => '<p>Agar siz bolalar bilan sayohat qilayotgan bo\'lsangiz, ko\'ngilochar bog\'lar va akvaparklarga ega bo\'lgan kurortlarni tanlash tavsiya etiladi.</p><h3>Dubay, BAA</h3><p>Dunyodagi eng katta akvaparklar va ko\'ngilochar markazlar.</p><h3>Parij, Fransiya</h3><p>Disneyland - har bir bolaning orzusi.</p><h3>Antaliya, Turkiya</h3><p>All-inclusive mehmonxonalar va bolalar uchun maxsus dasturlar.</p>',
                'content_ru' => '<p>Если вы путешествуете с детьми, рекомендуется выбирать курорты с парками развлечений и аквапарками.</p><h3>Дубай, ОАЭ</h3><p>Самые большие аквапарки и развлекательные центры в мире.</p><h3>Париж, Франция</h3><p>Диснейленд — мечта каждого ребенка.</p><h3>Анталья, Турция</h3><p>Отели "Все включено" и специальные программы для детей.</p>',
                'content_en' => '<p>If you are traveling with children, it is recommended to choose resorts with amusement parks and water parks.</p><h3>Dubai, UAE</h3><p>The world\'s largest water parks and entertainment centers.</p><h3>Paris, France</h3><p>Disneyland - every child\'s dream.</p><h3>Antalya, Turkey</h3><p>All-inclusive hotels and special programs for children.</p>',
            ],
            [
                'title_uz' => 'Ekologik turizm nima?',
                'title_ru' => 'Что такое экологический туризм?',
                'title_en' => 'What is ecotourism?',
                'description_uz' => 'Tabiatni asrash va sayohatni uyg\'unlashtirish.',
                'description_ru' => 'Сочетание сохранения природы и путешествий.',
                'description_en' => 'Combining nature conservation and travel.',
                'content_uz' => '<p><strong>Ekoturizm</strong> - bu atrof-muhitga zarar yetkazmasdan tabiat qo\'ynida dam olishdir. Bu turizm turi tobora ommalashib bormoqda.</p><p>Ekoturizmning asosiy tamoyillari:</p><ul><li>Tabiatni muhofaza qilish.</li><li>Mahalliy aholi madaniyatini hurmat qilish.</li><li>Ekologik ta\'lim.</li></ul><p>O\'zbekistonda Zomin, Chotqol va Nurota qo\'riqxonalari ekoturizm uchun ajoyib maskanlardir.</p>',
                'content_ru' => '<p><strong>Экотуризм</strong> — это отдых на природе без нанесения вреда окружающей среде. Этот вид туризма становится все более популярным.</p><p>Основные принципы экотуризма:</p><ul><li>Охрана природы.</li><li>Уважение к культуре местного населения.</li><li>Экологическое образование.</li></ul><p>В Узбекистане заповедники Заамин, Чаткал и Нурата являются отличными местами для экотуризма.</p>',
                'content_en' => '<p><strong>Ecotourism</strong> is relaxing in nature without harming the environment. This type of tourism is becoming increasingly popular.</p><p>Main principles of ecotourism:</p><ul><li>Nature conservation.</li><li>Respect for local culture.</li><li>Environmental education.</li></ul><p>In Uzbekistan, Zaamin, Chatkal, and Nurata reserves are excellent places for ecotourism.</p>',
            ],
            [
                'title_uz' => 'Sayohat uchun eng kerakli mobil ilovalar',
                'title_ru' => 'Самые полезные мобильные приложения для путешествий',
                'title_en' => 'Most useful mobile apps for travel',
                'description_uz' => 'Sayohatni osonlashtiruvchi dasturlar.',
                'description_ru' => 'Программы, облегчающие путешествие.',
                'description_en' => 'Apps that make travel easier.',
                'content_uz' => '<p>Zamonaviy sayohatchi uchun smartfon eng yaqin yordamchidir. Mana eng foydali ilovalar:</p><ul><li><strong>Google Maps</strong> - xarita va navigatsiya.</li><li><strong>Booking.com</strong> yoki <strong>Airbnb</strong> - turar joy band qilish.</li><li><strong>Google Translate</strong> - til to\'sig\'ini yengish.</li><li><strong>XE Currency</strong> - valyuta kurslarini bilish.</li></ul><p>Ushbu ilovalarni sayohatdan oldin yuklab olishni unutmang.</p>',
                'content_ru' => '<p>Для современного путешественника смартфон — лучший помощник. Вот самые полезные приложения:</p><ul><li><strong>Google Maps</strong> — карты и навигация.</li><li><strong>Booking.com</strong> или <strong>Airbnb</strong> — бронирование жилья.</li><li><strong>Google Translate</strong> — преодоление языкового барьера.</li><li><strong>XE Currency</strong> — курсы валют.</li></ul><p>Не забудьте скачать эти приложения перед поездкой.</p>',
                'content_en' => '<p>For the modern traveler, a smartphone is the best assistant. Here are the most useful apps:</p><ul><li><strong>Google Maps</strong> - maps and navigation.</li><li><strong>Booking.com</strong> or <strong>Airbnb</strong> - accommodation booking.</li><li><strong>Google Translate</strong> - overcoming the language barrier.</li><li><strong>XE Currency</strong> - currency exchange rates.</li></ul><p>Don\'t forget to download these apps before your trip.</p>',
            ],
        ];

        foreach ($articles as $articleData) {
            $articleData['status'] = BaseStatusEnum::ACTIVE;
            $article = Article::create($articleData);

            // Attach media
            Media::factory()->create([
                'model_type' => Article::class,
                'model_id' => $article->id,
            ]);
        }
    }
}
