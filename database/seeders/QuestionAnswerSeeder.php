<?php

namespace Database\Seeders;

use App\Models\QuestionAnswer;
use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
    public function run(): void
    {
        $questionsAnswers = [
            [
                'question_uz' => 'Turni qanday bron qilish mumkin?',
                'question_ru' => 'Как забронировать тур?',
                'question_en' => 'How can I book a tour?',
                'answer_uz' => 'Turni bron qilish uchun bizning veb-saytimizda kerakli turni tanlang va "Bron qilish" tugmasini bosing. Yoki bizga telefon orqali qo\'ng\'iroq qiling va mutaxassislarimiz sizga yordam berishadi.',
                'answer_ru' => 'Чтобы забронировать тур, выберите нужный тур на нашем сайте и нажмите кнопку "Забронировать". Или позвоните нам по телефону, и наши специалисты помогут вам.',
                'answer_en' => 'To book a tour, select the desired tour on our website and click the "Book" button. Or call us by phone and our specialists will help you.',
            ],
            [
                'question_uz' => 'To\'lov qanday amalga oshiriladi?',
                'question_ru' => 'Как происходит оплата?',
                'question_en' => 'How is payment made?',
                'answer_uz' => 'Biz naqd pul, bank o\'tkazmasi va onlayn to\'lov tizimlarini qabul qilamiz. To\'lovni oldindan yoki sayohat boshlanishidan oldin amalga oshirish mumkin.',
                'answer_ru' => 'Мы принимаем наличные, банковский перевод и онлайн-платежные системы. Оплату можно произвести заранее или перед началом поездки.',
                'answer_en' => 'We accept cash, bank transfer, and online payment systems. Payment can be made in advance or before the trip begins.',
            ],
            [
                'question_uz' => 'Turni bekor qilish mumkinmi?',
                'question_ru' => 'Можно ли отменить тур?',
                'question_en' => 'Can I cancel a tour?',
                'answer_uz' => 'Ha, turni bekor qilish mumkin. Bekor qilish shartlari sayohat boshlanishiga qancha vaqt qolganiga bog\'liq. Batafsil ma\'lumot uchun bizning shartlarimizni o\'qing yoki mutaxassislarimizga murojaat qiling.',
                'answer_ru' => 'Да, тур можно отменить. Условия отмены зависят от того, сколько времени осталось до начала поездки. Для получения подробной информации ознакомьтесь с нашими условиями или обратитесь к нашим специалистам.',
                'answer_en' => 'Yes, you can cancel a tour. Cancellation terms depend on how much time is left before the trip begins. For detailed information, read our terms or contact our specialists.',
            ],
            [
                'question_uz' => 'Guruh turlari qancha kishidan iborat?',
                'question_ru' => 'Сколько человек в групповых турах?',
                'question_en' => 'How many people are in group tours?',
                'answer_uz' => 'Guruh turlari odatda 10-15 kishidan iborat bo\'ladi. Kichik guruhlar uchun maxsus turlar ham mavjud.',
                'answer_ru' => 'Групповые туры обычно состоят из 10-15 человек. Также доступны специальные туры для небольших групп.',
                'answer_en' => 'Group tours usually consist of 10-15 people. Special tours for small groups are also available.',
            ],
            [
                'question_uz' => 'Gid xizmatlari narxga kiritilganmi?',
                'question_ru' => 'Входят ли услуги гида в стоимость?',
                'question_en' => 'Are guide services included in the price?',
                'answer_uz' => 'Ha, ko\'pchilik turlarimizda professional gid xizmatlari narxga kiritilgan. Ayrim maxsus turlar uchun qo\'shimcha to\'lov talab qilinishi mumkin.',
                'answer_ru' => 'Да, в большинстве наших туров услуги профессионального гида включены в стоимость. Для некоторых специальных туров может потребоваться дополнительная оплата.',
                'answer_en' => 'Yes, in most of our tours, professional guide services are included in the price. Some special tours may require an additional fee.',
            ],
            [
                'question_uz' => 'Ovqatlanish turga kiritilganmi?',
                'question_ru' => 'Включено ли питание в тур?',
                'question_en' => 'Is food included in the tour?',
                'answer_uz' => 'Bu turga bog\'liq. Ba\'zi turlar to\'liq ovqatlanish (nonushta, tushlik, kechki ovqat) bilan, ba\'zilari esa faqat nonushta bilan taqdim etiladi. Har bir turning tavsifida bu ma\'lumot ko\'rsatilgan.',
                'answer_ru' => 'Это зависит от тура. Некоторые туры предлагаются с полным питанием (завтрак, обед, ужин), а некоторые только с завтраком. Эта информация указана в описании каждого тура.',
                'answer_en' => 'It depends on the tour. Some tours are offered with full board (breakfast, lunch, dinner), while others include only breakfast. This information is indicated in the description of each tour.',
            ],
            [
                'question_uz' => 'Bolalar uchun chegirmalar bormi?',
                'question_ru' => 'Есть ли скидки для детей?',
                'question_en' => 'Are there discounts for children?',
                'answer_uz' => 'Ha, biz bolalar uchun maxsus narxlar taklif etamiz. Odatda 12 yoshgacha bo\'lgan bolalar uchun chegirmalar mavjud. Aniq ma\'lumot uchun bizga murojaat qiling.',
                'answer_ru' => 'Да, мы предлагаем специальные цены для детей. Обычно скидки доступны для детей до 12 лет. Для получения точной информации свяжитесь с нами.',
                'answer_en' => 'Yes, we offer special prices for children. Discounts are usually available for children under 12 years old. For accurate information, contact us.',
            ],
            [
                'question_uz' => 'O\'zbekistonga viza kerakmi?',
                'question_ru' => 'Нужна ли виза в Узбекистан?',
                'question_en' => 'Do I need a visa to Uzbekistan?',
                'answer_uz' => 'Ko\'pchilik mamlakatlar fuqarolari uchun O\'zbekistonga kirish uchun viza talab qilinadi. Biroq, ba\'zi mamlakatlar fuqarolari vizasiz rejimdan foydalanishlari mumkin. Biz viza olishda yordam beramiz.',
                'answer_ru' => 'Для граждан большинства стран требуется виза для въезда в Узбекистан. Однако граждане некоторых стран могут воспользоваться безвизовым режимом. Мы помогаем в получении визы.',
                'answer_en' => 'Citizens of most countries require a visa to enter Uzbekistan. However, citizens of some countries can use the visa-free regime. We help with obtaining a visa.',
            ],
            [
                'question_uz' => 'Sug\'urta turga kiritilganmi?',
                'question_ru' => 'Включена ли страховка в тур?',
                'question_en' => 'Is insurance included in the tour?',
                'answer_uz' => 'Ba\'zi turlarimizda asosiy sayohat sug\'urtasi kiritilgan. Qo\'shimcha sug\'urta xizmatlari ham mavjud. Batafsil ma\'lumot uchun tur tavsifini ko\'ring.',
                'answer_ru' => 'В некоторых наших турах включена базовая туристическая страховка. Также доступны дополнительные страховые услуги. Для получения подробной информации см. описание тура.',
                'answer_en' => 'Some of our tours include basic travel insurance. Additional insurance services are also available. For detailed information, see the tour description.',
            ],
            [
                'question_uz' => 'Individual turlarni buyurtma qilish mumkinmi?',
                'question_ru' => 'Можно ли заказать индивидуальные туры?',
                'question_en' => 'Can I order individual tours?',
                'answer_uz' => 'Albatta! Biz sizning xohishingiz va byudjetingizga mos individual turlar tuzamiz. Bizga o\'z talablaringizni aytib bering va biz siz uchun maxsus dastur tayyorlaymiz.',
                'answer_ru' => 'Конечно! Мы составляем индивидуальные туры в соответствии с вашими пожеланиями и бюджетом. Расскажите нам о своих требованиях, и мы подготовим для вас специальную программу.',
                'answer_en' => 'Of course! We create individual tours according to your wishes and budget. Tell us your requirements and we will prepare a special program for you.',
            ],
        ];

        foreach ($questionsAnswers as $qa) {
            QuestionAnswer::create($qa);
        }
    }
}
