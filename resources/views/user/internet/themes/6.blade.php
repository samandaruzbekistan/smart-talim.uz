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
                            <h1>Elektron pochta xizmati</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">Internet</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p class="mt-3">
                            <b>Elektron pochta (e-mail)</b> — maʼlumotlarni uzatish tarmogʻi orqali axborotlarni bir foydalanuvchi elektron qutisidan boshqasinikiga joʻnatish, qabul qilish va maʼlum vaqtgacha saqlanishini taʼminlovchi dasturiy texnik vositalar toʻplami. E-Mail axborotlarni tarmoqning bir punktidan boshqasiga tezkor uzatishni taʼminlaydi. E-Mailda maxsus shlyuzlar orqali har xil elektron axborot tizimlari vositasida axborotlar dunyoning istalgan burchagiga uzatiladi. E-Maildan uzluksiz ravishda yoki maʼlum vaqt (seans)larda foydalanish mumkin. E-Mail 20-asrning 60- yillarida “katta” hisoblash mashinalarida “koʻp foydalanuvchilar tartibi” dasturining ishlatilishidan boshlangan. 1989 yilda birinchi marta tijorat pochta xizmatlari bilan internet oʻrtasida aloqa oʻrnatildi.
                        </p>

                        <p>
                            Oʻzbekiston hududida E-Mail xizmati 1990—91 yillarda maʼlumot uzatish tarmogʻi operatorlari tomonidan taqsim etila boshlandi. 1997 yilda Toshkent pochtamti korxonasida “Ke1sot” tarmogʻi orqali E-Mail xizmatlari punkti ishga tushirildi. Hozir Oʻzbekistonda fuqarolar, korxonalar, xonadonlar internet tizimiga ulangan kompyuterlar va “Internet kafe”lar orqali E-Maildan foydalanadilar. Internetga chiqish imkoniyati boʻlmagan mijozlar uchun “Oʻzbekiston pochtasi” aksiyadorlik tarmogʻi orqali E-Mail va gibrid pochta (pochtani qabul qilish, ishlov berish va yetkazish jarayonida E-Mail va anʼanaviy pochta resurslari ishlatiladi) xizmatlarini yoʻlga qoʻyish ishlari olib borilmoqda. Gibrid pochta orqali korxona, tashkilotlar va oʻquv muassasalaridan olingan axborot, xabar, reklama, taklifnoma, chaqiruv qogʻozlari va boshqalar pochta xodimlari tomonidan oluvchilarning manzillariga yetkazilib beriladi.
                        </p>

                        <p>
                            Elektron pochta (e-mail-electronic mail) oddiy pochta vazifasini bajaradi.U bir manzildan ikkinchisiga ma’lumot joʻnatilishini taʻminlaydi. Uning asosiy afzalligi vaqtga bogʻliq emasligida. Elektron xatlar joʻnatilgan zahotiyoq manzilga boradi va egasi olguniga qadar uning pochta qutisida saqlanadi. Matnli xat, grafikli va tovushli fayllarni, programm fayllarni oʻz ichiga olishi mumkin. Elektron xatlar bir vaqtning oʻzida bir necha adreslar boʻyicha joʻnatilishi mumkin. Internet foydalanuvchisi elektron pochta orqali tarmoqning turli xizmatlaridan foydalanish imkoniyatiga ega boʻladi, chunki Internetning asosiy xizmat programmalari bilan interfeysga ega. Bunday yondashuvning mohiyati shundaki, xost-kompyuterga talab elektron xat koʻrinishida joʻnatiladi. Xat matni zarur funksiyalarga kirishni taʻminlovchi standart yozuvlar toʻplamidan tuziladi. Bunday axborotni kompyuter komanda sifatida qabul qiladi va bajaradi. Internet elektron pochta xizmatini koʻrsatadi. Elektron pochta nima? Elektron pochta maxsus programma boʻlib, uning yordamida siz dunyoning ixtiyoriy joyidagi elektron adresga xat, hujjat, va umuman ixtiyoriy faylni joʻnatishingiz va qabul qilib olishingiz mumkin. Eng asosiysi xay bir zumda manzilga yetib boradi. Lekin undan foydalanish uchun siz maxsus pochta tarmogʻi yoki Internet tarmogʻiga bogʻlangan boʻlishingiz va elektron adresga ega boʻlishingiz kerak. Elektron adresni provayder beradi. Yoki Internetda bepul elektron pochta xizmatlari mavjud. Ular yordamida oʻzingizga elektron adres ochishingiz mumkin. Quyidagi rasm orqali http://www.mail.ru sistemasi orqali pochta ochilishini koʻrishingiz mumkin. Uning uchun biz avval registrasiyadan oʻtishimiz lozim. http://www.mail.ru sistemasi orqali “Регистрация в почте” bosamiz. natijada quyidagi anketalarni tuldirish lozim boʻladi:
                        </p>

                        <img src="https://biz.mail.ru/static/8355fa78/images/promo/screenshots/familiar_ui.jpg" class="img-fluid" alt=""><br>

                        <p class="mt-3">
                            <b>Elektron pochta manzili tuzilishi.</b> Ma’lumotni yuborishda manzil juda katta ahamiyatga ega, xatni oluvchining manzili aniq boʻlishi lozim. Odatdagi pochta manzili ma’lum bir pochta boshqaruvi boʻyicha beriladi. Elektron pochta manzillarini loyihalash uchun mavjud qoidalar. Elektron pochta foydalanuvchilari oʻz elektron adreslariga ega boʻlib, uni Web-sahifa adresidan oson ajratish mumkin: <foydalanuvchi nomi>@<pochta serveri nomi>. Elektron pochta adresida albatta "@" ("tijoratdagi et" yoki boshqacha nomi "kuchukcha") belgisi qatnashadi, masalan: ismingiz Ibrohim boʻlsa,ibrohimjon@mail.ru yoki ibrohim82@bk.ru kabi manzillarni tanlashingiz mumkin. Xullas, pochta qutisining nomi avvalo yozish uchun qulay (ayniqsa, qoʻl telefoni klaviaturasida), esingizdan chiqib qolmaydigan, tushunarli, ma’no-mazmunga ega boʻlgan soʻz yoki jumla boʻlishi kerak.
                        </p>

                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('internet.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifa va uning tuzilishi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi qidiruv tizimlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet axborot rerurslari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.5') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet xizmatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.6') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Elektron pochta xizmati</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section>

        <section class="courses-course-details section">
            <div class="container quiz-container">
                <h3>Test topshirig'i</h3>
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
            ["Elektron pochta (e-mail) nima?",
                [
                    "Ma'lumotlarni uzatish tarmog'i orqali axborotlarni bir foydalanuvchi elektron qutisidan boshqasiga jo‘natish, qabul qilish va saqlanishini ta'minlovchi dasturiy texnik vositalar to‘plami",
                    "Faqat matnli xatlarni yuborish va qabul qilish dasturi",
                    "Fayllarni saqlash uchun maxsus qurilma",
                    "Telefon qo‘ng‘iroqlarini amalga oshirish vositasi"
                ],
            ],
            ["Elektron pochta xizmatining asosiy afzalligi nima?",
                [
                    "Vaqtga bog'liq emasligi, xatlar jo‘natilgan zahoti manzilga boradi va saqlanadi",
                    "Xatlar faqat matnli bo‘lishi mumkin",
                    "Fayllarni faqat bir manzildan boshqasiga uzatish",
                    "Foydalanuvchilar faqat bitta xat yuborishi mumkin"
                ],
            ],
            ["Elektron pochta orqali qanday fayllarni jo‘natish mumkin?",
                [
                    "Matnli xatlar, grafikli va tovushli fayllar, dastur fayllari",
                    "Faqat matnli xatlar",
                    "Faqat grafikli fayllar",
                    "Faqat dastur fayllari"
                ],
            ],
            ["O‘zbekiston hududida elektron pochta xizmati qachon boshlandi?",
                [
                    "1990—91 yillarda",
                    "1989 yilda",
                    "2000 yilda",
                    "2005 yilda"
                ],
            ],
            ["Gibrid pochta qanday ishlaydi?",
                [
                    "E-Mail va an'anaviy pochta resurslarini birlashtiradi",
                    "Faqat elektron pochta orqali xizmat ko‘rsatadi",
                    "Faqat an'anaviy pochta xizmatini taqdim etadi",
                    "Mobil pochta xizmati"
                ],
            ],
            ["Elektron pochta orqali qanday tizimlar bilan muloqot o‘rnatish mumkin?",
                [
                    "Internetning asosiy xizmat dasturlari bilan",
                    "Faqat matnli xat dasturlari bilan",
                    "Fayllarni uzatish tizimlari bilan",
                    "Mobil aloqa tizimlari bilan"
                ],
            ],
            ["E-Mail xizmatidan foydalanish uchun nima kerak?",
                [
                    "Maxsus pochta tarmog‘i yoki Internet tarmog‘iga bog‘langan bo‘lish va elektron adresga ega bo‘lish",
                    "Faqat maxsus elektron pochta dasturi",
                    "Telefon raqami va pochta qutisi",
                    "Faqat kompyuter va internet ulanishi"
                ],
            ],
            ["Elektron adresni qanday olish mumkin?",
                [
                    "Provayder orqali yoki bepul elektron pochta xizmatlaridan foydalanish",
                    "Faqat pul to‘lash orqali",
                    "Telefon orqali",
                    "Maxsus pochta ofisiga borish orqali"
                ],
            ],
            ["E-Mail xat matni qanday formatlardan tashkil topgan?",
                [
                    "Standart yozuvlar to‘plamidan",
                    "Faqat matnli formatdan",
                    "Grafikli va tovushli fayllardan",
                    "Dastur kodlaridan"
                ],
            ],
            ["E-Mail orqali jo‘natilgan xatlar qanday holatda bo‘ladi?",
                [
                    "Bir vaqtning o‘zida bir necha adreslar bo‘yicha jo‘natilishi mumkin",
                    "Faqat bitta adresga jo‘natilishi mumkin",
                    "Faqat matnli xatlar bo‘lishi mumkin",
                    "Yuborilgach darhol o‘chiriladi"
                ],
            ]
        ];

    </script>
@endsection
