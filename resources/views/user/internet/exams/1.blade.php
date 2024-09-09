@extends('user.header_footer')
@section('course')class="active"@endsection

@section('main')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Imtihon - Test</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">INTERNET TARMOG'I</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="courses-course-details section">
            <div class="container quiz-container">
                <h3>Imtixon: </h3>
                <h5 id="question"></h5>
                <div id="answers"></div>
                <button id="next-btn" onclick="nextQuestion()" class="btn btn-success mt-3 align-content-end">Keyingi savol <i class="bi bi-arrow-right-short"></i></button>
            </div>

        </section>
    </main>

@endsection


@section('script')
    <script>
        const quiz = [
            ["Internet nima?",
                [
                    "Standart internet protokoli (IP) orqali ma’lumot almashuvchi kompyuter tarmoqlarining butunjahon toʻplami",
                    "Foydalanuvchi ma’lumotlarini saqlovchi kompyuter apparati",
                    "Kompyuter o‘yinlari va multimedia dasturlari majmui",
                    "Yer yuzidagi barcha kompyuterlarni o‘z ichiga olgan mahalliy tarmoq"
                ],
            ],
            ["Internetda ma’lumotlarni tarqatish uchun qanday asosiy protokol ishlatiladi?",
                [
                    "TCP/IP",
                    "FTP",
                    "HTTP",
                    "SMTP"
                ],
            ],
            ["Internetning dastlabki rivojlanishi qaysi tashkilot tomonidan boshqarilgan?",
                [
                    "Amerika mudofaa departamenti",
                    "YUNESKO",
                    "Google",
                    "Microsoft"
                ],
            ],
            ["Internetda ma’lumotlarni uzatish va almashish qoidalari qanday tizimda ishlab chiqilgan?",
                [
                    "Internetworking protocols (IP)",
                    "Transmission Control Protocol (TCP)",
                    "File Transfer Protocol (FTP)",
                    "Hypertext Transfer Protocol (HTTP)"
                ],
            ],
            ["Kompyuterlarni bir-biri bilan bogʻlashda qanday ikki xil usul mavjud?",
                [
                    "Kabel yordamida bogʻlash va simsiz bogʻlanish",
                    "Yuqori tezlikda internet va mobil aloqa",
                    "Bluetooth va infrared aloqa",
                    "Kompyuter viruslarini yo‘qotish va firewall"
                ],
            ],
            ["Internetda manzil tushunchasi nima?",
                [
                    "Internetdagi sahifa, fayl yoki resursning noyob manzili",
                    "Kompyuter tarmogʻida uzatilayotgan ma’lumotni qabul qiluvchi yoki jo‘natuvchilarni aniqlovchi manzil",
                    "Kompyuter xotirasining qismlari",
                    "Ma’lumotlarni uzatish uchun alohida kabel"
                ],
            ],
            ["URL nima?",
                [
                    "Uniform Resource Locator – Internetdagi resurslarning yagona lokatori",
                    "Universal Resource Locator – har qanday resurslar uchun manzil",
                    "Uniform Resource Locator – Internetdagi yangi dastur",
                    "Universal Resource Locator – tarmoq xavfsizligi uchun manzil"
                ],
            ],
            ["DNS tizimi qanday funksiyani bajaradi?",
                [
                    "Kompyuter manzillarini IP manzillarga aylantirish",
                    "Kompyuterlarni viruslardan himoya qilish",
                    "Internet tezligini oshirish",
                    "Ma’lumotlarni arxivlash"
                ],
            ],
            ["IP manzillar qanday formatda bo‘ladi?",
                [
                    "8 bitli to‘rtta son",
                    "16 bitli ikkita son",
                    "32 bitli bir son",
                    "64 bitli ikkita son"
                ],
            ],
            ["Qaysi domen so‘ngida eng umumiy domеn ko‘rsatiladi?",
                [
                    ".uz",
                    ".com",
                    ".net",
                    ".org"
                ],
            ],
            ["Bosh sahifa veb saytning qanday rolni bajaradi?",
                [
                    "Veb saytning mundarijasi vazifasini bajaradi va ma’lumotni topishni osonlashtiradi",
                    "Veb saytning faqat birinchi sahifasi bo‘lib, boshqa sahifalar mavjud emas",
                    "Foydalanuvchilarga faqat reklama ko‘rsatadi",
                    "Veb saytning barcha sahifalarini avtomatik ravishda yangilaydi"
                ],
            ],
            ["Web saytlarni joylash uchun qanday tuzilma ishlatiladi?",
                [
                    "Server",
                    "Router",
                    "Modem",
                    "Hard disk"
                ],
            ],
            ["Sayt yaratishda qanday imkoni ko‘zda tutilishi kerak?",
                [
                    "Har bir sahifadan orqaga va bosh sahifaga qaytish",
                    "Foydalanuvchi har doim yangi sahifaga o'tishi kerak",
                    "Sahifalar orasida havolalar bo‘lmasligi kerak",
                    "Sayt avtomatik ravishda tahrirlanishi kerak"
                ],
            ],
            ["Qaysi turdagi saytlar odatda 3-4 ta sahifadan iborat va shaxs yoki firma haqida ma’lumot beradi?",
                [
                    "Vizitka saytlari",
                    "Internet do‘konlar",
                    "Promo saytlar",
                    "Tematik saytlar"
                ],
            ],
            ["Internet doʻkonlarida nimani koʻrish mumkin?",
                [
                    "Mahsulotlar, ularning narxlari, to‘lovlar haqida ma’lumot",
                    "Faqat yangi xabarlar",
                    "Internet portallar haqida ma’lumot",
                    "Shaxsiy fikrlar va bloglar"
                ],
            ],
            ["Tematik saytlar qanday maqsadga xizmat qiladi?",
                [
                    "Ma’lum bir mavzuni qamrab olish",
                    "Foydalanuvchilarning e’lonlarini joylashtirish",
                    "Pochta xizmatlarini taqdim etish",
                    "Sayt ro‘yxatini tuzish"
                ],
            ],
            ["Internet portallarining qanday xususiyati mavjud?",
                [
                    "Ko‘p miqdorda havolalar va turli xil ma’lumotlarni taqdim etadi",
                    "Faqat bloglar va maqolalarni nashr etadi",
                    "Har qanday sahifani avtomatik yangilaydi",
                    "Faoliyatini vaqtincha to‘xtatadi"
                ],
            ],
            ["Blog nima?",
                [
                    "Biror shaxsning internet kundaligi",
                    "Boshqa saytlarga yo‘llanmalar ro‘yxati",
                    "Elektron pochtaga asoslangan sayt",
                    "Mahsulotlar narxlari ro‘yxati"
                ],
            ],
            ["Qidiruv tizimlari qanday vazifani bajaradi?",
                [
                    "Barcha saytlardan ma’lumot to‘playdi va kerakli paytda chiqarib beradi",
                    "Foydalanuvchilarning shaxsiy ma’lumotlarini saqlaydi",
                    "Faqat rasm va videolarni saqlaydi",
                    "Mahsulotlarni sotish uchun sayt yaratadi"
                ],
            ],
            ["Xosting saytlar qanday vazifani bajaradi?",
                [
                    "Foydalanuvchilarga fayllarni saqlash va ulardan foydalanish imkonini beradi",
                    "Saytlarning dizaynini yaratadi",
                    "Mahsulotlarni ro‘yxatga oladi",
                    "Bloglarni yangilaydi"
                ],
            ],
            ["Internet tarmogʻida qidiruv qanday maqsadga xizmat qiladi?",
                [
                    "Kerakli ma’lumot yoki materialni topish",
                    "Internetdagi barcha sahifalarni avtomatik yangilash",
                    "Internet sohalarini yaratish",
                    "Foydalanuvchilar uchun matnlarni tahrirlash"
                ],
            ],
            ["Internetdagi ma’lumotlarni qidirish uchun qanday vosita ishlatiladi?",
                [
                    "Qidiruv tizimlari",
                    "Elektron pochta",
                    "Yangi saytlar",
                    "Yangi ma’lumotnomalar"
                ],
            ],
            ["Qidiruv tizimlari qanday muammoni hal etadi?",
                [
                    "Internetdagi barcha web-sahifalar adreslarini chop etishning qiyinchiliklarini",
                    "Web-sahifalarni faqat tekstual shaklda ko‘rsatishni",
                    "Tarmoqdagi havolalarni avtomatik yangilashni",
                    "Yangi xabarlar yaratishni"
                ],
            ],
            ["Qanday usullar orqali axborotni qidirish mumkin?",
                [
                    "Ma’lumotning tili, turi, joylashgan mintaqasi, joylashtirilgan sanasi, Internet zonasi va xavfsizligi bo‘yicha",
                    "Foydalanuvchi tomonidan qo‘llaniladigan tillar",
                    "Ma’lumotni saqlash turi va xujjatlar soni bo‘yicha",
                    "Foydalanuvchi tajribasi va qidiruv tarixi bo‘yicha"
                ],
            ],
            ["Rasmlar qidirish qanday usul bilan amalga oshiriladi?",
                [
                    "Rasmning nomi yoki turi bo‘yicha",
                    "Rasmning matnli axborotlari bo‘yicha",
                    "Rasmning geolokatsiyasi bo‘yicha",
                    "Rasmning sanasi bo‘yicha"
                ],
            ],
            ["Qanday qidiruv parametrlari ma’lumotning joylashgan mintaqasi bo‘yicha qidirishni imkonini beradi?",
                [
                    "Internet tarmogʻi qidiruv tizimlari",
                    "Elektron pochta xizmatlari",
                    "Video xostinglar",
                    "Forumlar"
                ],
            ],
            ["Internet tarmogʻida axborotni qidirish uchun qanday tillar ishlatiladi?",
                [
                    "Oʻzbеk, rus, ingliz yoki boshqa tillar",
                    "Foydalanuvchi tomonidan tanlangan tillar",
                    "Foydalanuvchining ijtimoiy tarmoqlaridagi tillar",
                    "Foydalanuvchi tomonidan tayyorlangan tillar"
                ],
            ],
            ["Ma’lumotlarning xavfsiz qidiruvi nima?",
                [
                    "Ma’lumotlarni xavfsiz va maxfiy qidirish",
                    "Ma’lumotlarni faqat matnli shaklda qidirish",
                    "Ma’lumotlarni tasvir shaklida qidirish",
                    "Ma’lumotlarni faqat mualliflari bo‘yicha qidirish"
                ],
            ],
            ["Grafik ma’lumotlar qanday turlarga bo‘linadi?",
                [
                    "Chizma, foto, animatsiya va siqilgan rasmlar",
                    "Matnli, video, musiqa va grafik rasmlar",
                    "Rastr, vektor, audio va video",
                    "HTML, CSS, JavaScript va rasmlar"
                ],
            ],
            ["Qanday qidiruv tizimlari grafik yoki tasvir ma’lumotlarini qidirish uchun alohida bo‘limga ega?",
                [
                    "Ko‘pgina qidiruv tizimlari",
                    "Elektron pochta xizmatlari",
                    "Internet forumlar",
                    "E‘lonlar doskalari"
                ],
            ],
            ["WWW.UZ milliy axborot-qidiruv tizimi qanday xususiyatlarga ega?",
                [
                    "Ko‘p tilli axborot qidiruvi, boshqa milliy tizimlar bilan integratsiya",
                    "Faqat ruscha axborot qidiruvi",
                    "Yangi saytlar yaratish",
                    "Ma’lumotlarni faqat ingliz tilida ko‘rsatish"
                ],
            ],
            ["WWW.UZ tizimi qaysi bo‘limlarni o‘z ichiga oladi?",
                [
                    "Katalog, Top-reyting, Jamlangan statistika",
                    "Faqat katalog",
                    "Top-reyting va yangi saytlar",
                    "Foydalanuvchi tahlillari va tekshirish"
                ],
            ],
            ["Butunjahon tarmogʻida qancha veb-serverlar mavjud?",
                [
                    "Yuz millionlab",
                    "O’n millionlab",
                    "Bir necha ming",
                    "Bir necha yuz"
                ],
            ],
            ["Veb-sahifa qanday bo‘lishi mumkin?",
                [
                    "Multimedia, interfaol, matnli",
                    "Faqat matnli",
                    "Faqat grafik",
                    "Faqat video"
                ],
            ],
            ["Veb-sahifaning manzili nima uchun kerak?",
                [
                    "Hujjatga kirish usuli va joylashtirilgan server nomini ko‘rsatish",
                    "Foydalanuvchi ma’lumotlarini saqlash",
                    "Sahifaning dizaynini belgilash",
                    "Serverning ma’lumotlarini tahrirlash"
                ],
            ],
            ["Gipermatn texnologiyasi nima?",
                [
                    "Matnni ko‘p o‘lchamli shaklda tasvirlash va bog‘lanishlar orqali o‘tish",
                    "Faqat matnni yagona qatorda o‘qish",
                    "Matnli ma’lumotlarni faqat sahifalar bo‘yicha tasvirlash",
                    "Matnni faqat grafik shaklda ko‘rsatish"
                ],
            ],
            ["Giperizohlar gipermatnda qanday ishlaydi?",
                [
                    "Harakatlanadi va boshqa hujjatlarga yo‘l ko‘rsatadi",
                    "Faqat matnli izohlar",
                    "Sahifalardagi tasvirlar",
                    "Video va audio materiallar"
                ],
            ],
            ["Domen nima?",
                [
                    "Internetda saytning eslab qolish oson manzili",
                    "Serverning IP manzili",
                    "Brauzerning o‘ziga xos nomi",
                    "Foydalanuvchi uchun maxfiy kod"
                ],
            ],
            ["Hozirgi kunda eng mashhur domen hududlari qaysilar?",
                [
                    ".com, .net, .org, .edu, .gov",
                    ".html, .css, .js, .php",
                    ".jpg, .png, .gif",
                    ".doc, .pdf, .xls"
                ],
            ],
            ["Gipermatnli hujjatlar qanday axborotlarni taqdim etadi?",
                [
                    "Erkin jamlangan bilimlarni va aloqalarni",
                    "Faqat matnli ma’lumotlarni",
                    "Grafik va video materiallarni",
                    "Faqat audio fayllarni"
                ],
            ],
            ["Internet xizmat turlari qaysilar?",
                [
                    "WWW, elektron pochta, telekonferensiya, FTP, DNS, Telnet, IRC, Chat, Ma’lumot izlash",
                    "Faqat WWW va elektron pochta",
                    "FTP va DNS xizmatlari",
                    "IRC va mobil aloqa"
                ],
            ],
            ["Mobil aloqa xizmatlari nimalardan iborat?",
                [
                    "Soʻzlashuv, mobil internet, pochta",
                    "Faqat soʻzlashuv va mobil internet",
                    "Pochta va mobil telefonlar",
                    "Mobil aloqa va Chat"
                ],
            ],
            ["Mobil Internetning afzalliklari qanday?",
                [
                    "Har qanday joyda va holatda Internet xizmatlaridan foydalanish imkoniyati",
                    "Faqat ofisda foydalanish imkoniyati",
                    "Internet tezligi yuqori bo‘lmasligi",
                    "Faqat ma’lumot uzatish"
                ],
            ],
            ["Mobil pochta qanday xizmatni taqdim etadi?",
                [
                    "Internet orqali mobil telefon orqali shaxsiy elektron pochta xizmatidan foydalanish",
                    "Faqat kompyuter orqali pochta xizmatidan foydalanish",
                    "Mobil telefon orqali telefon qo‘ng‘iroqlarini amalga oshirish",
                    "Internetda faqat pochta xabarlarini saqlash"
                ],
            ],
            ["Smartfon nima?",
                [
                    "Aqlli telefon, shaxsiy kompyuter vazifalarini bajaruvchi mobil telefon",
                    "Faqat telefon qo‘ng‘iroqlarini amalga oshiruvchi telefon",
                    "Tashqi ko‘rinishi bilan kompyuterdan farq qiluvchi mobil telefon",
                    "Mobil telefonlarning eski modeli"
                ],
            ],
            ["iPhone nima?",
                [
                    "To‘rt diapazonli multimediyali smartfonlar liniyasi",
                    "Smartfonlarning eski modeli",
                    "Foydalanuvchi uchun maxsus video kamera",
                    "Mobil telefonning yangi versiyasi"
                ],
            ],
            ["Planshet nima?",
                [
                    "Shaxsiy kompyuterning mobil varianti, faqat ekran bilan",
                    "Mobil telefonning kichik versiyasi",
                    "Foydalanuvchi uchun maxsus audio qurilma",
                    "Aksessuar sifatida ishlatiladigan qurilma"
                ],
            ],
            ["Mobil aloqa vositalaridan qanday xizmatlar mavjud?",
                [
                    "Hujjatlar bilan ishlash, musiqa tinglash, video tomosha qilish",
                    "Faqat telefon qo‘ng‘iroqlari",
                    "Faqat e-pochtani tekshirish",
                    "Video va audio materiallarni saqlash"
                ],
            ],
            ["DNS xizmati qanday maqsadda ishlatiladi?",
                [
                    "Tarmoq hududlariga nom berish",
                    "Fayllarni uzatish",
                    "Telekonferensiya o‘tkazish",
                    "Mobil internet orqali xizmat ko‘rsatish"
                ],
            ],
            ["Chat konferensiya yoki IRC xizmati qanday maqsadda ishlatiladi?",
                [
                    "Haqiqiy vaqt rejimida matnli muloqot o‘tkazish",
                    "E-pochtalarni yuborish",
                    "Fayllarni uzatish",
                    "Mobil telefonlar uchun xizmat ko‘rsatish"
                ],
            ]
        ];
    </script>
@endsection
