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
                        <li class="current">AXBOROTLARNI HIMOYALASHNING TEXNIK VA DASTURIY TA’MINOTI</li>
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
            [
                "Masofadan bo'ladigan tarmoq hujumlariga qarshi qanday choralar ko'rish mumkin?",
                [
                    "Tarmoq xavfsizligini ta'minlash uchun kompleks choralar tavsiya etiladi.",
                    "Tarmoqni faqat apparat vositalari bilan himoya qilish lozim.",
                    "Yolg'on obyektlarni kiritish kerak.",
                    "Trafikni tahlil qilish zarur."
                ]
            ],
            [
                "FTP va TELNET protokollari orqali foydalanuvchi identifikatsiya va autentifikatsiya ma'lumotlari qanday uzatiladi?",
                [
                    "Shifrlanmagan ko'rinishda",
                    "Shifrlangan ko'rinishda",
                    "Qisqartirilgan ko'rinishda",
                    "Asosan simvollarga bo'lingan holda"
                ]
            ],
            [
                "ICQ dasturining xavfsizlik nuqtai nazaridan qanday kamchiligi bor?",
                [
                    "Trafigi ushlab qolinishi va ochilishi mumkin.",
                    "Parollari shifrlangan holda uzatiladi.",
                    "Foydalanuvchi ma'lumotlarini shifrlaydi.",
                    "Yolg'on obyektlarni kiritish mumkin emas."
                ]
            ],
            [
                "Tarmoqning yolg'on obyektini kiritish qanday amalga oshiriladi?",
                [
                    "Tarmoqning “nozik joylari”dan foydalanish orqali",
                    "Fayllarni shifrlash orqali",
                    "Barcha paketlarni bitta faylga yig'ish orqali",
                    "Qo'shimcha apparat vositalaridan foydalanish orqali"
                ]
            ],
            [
                "ARP protokoli qaysi sohada foydalaniladi?",
                [
                    "Adreslarni fizik adreslarga o'zgartirishda",
                    "Shifrlangan ma'lumotlarni uzatishda",
                    "Trafikni tahlil qilishda",
                    "Yolg'on obyektlarni tarmoqdan olib tashlashda"
                ]
            ],
            [
                "Yolg'on marshrutni kiritish qanday amalga oshiriladi?",
                [
                    "Marshrutni yolg'on xost orqali o'tadigan qilib qurish orqali",
                    "Yolg'on obyektlarni kiritish orqali",
                    "Parollarni shifrlash orqali",
                    "Serverni qayta yuklash orqali"
                ]
            ],
            [
                "Xizmat qilishdan voz kechishga undaydigan taqsimlangan hujumlar qanday nomlanadi?",
                [
                    "DDoS",
                    "FTP",
                    "TELNET",
                    "ICMP"
                ]
            ],
            [
                "ICMP protokoli qanday maqsadda qo'llaniladi?",
                [
                    "Yangi marshrutlar xususida xabarlar almashish uchun",
                    "Ma'lumotlarni shifrlash uchun",
                    "Foydalanuvchi ma'lumotlarini uzatish uchun",
                    "Serverni himoya qilish uchun"
                ]
            ],
            [
                "Internetda tarmoq ulanishlarini himoya qilish va trafikni shifrlash imkonini beruvchi protokol qaysi?",
                [
                    "SSL",
                    "TELNET",
                    "FTP",
                    "ICMP"
                ]
            ],
            [
                "“O'zbekiston Respublikasining milliy xavfsizligi” konsepsiyasida qanday xavfsizlik turlari ko'rsatilgan?",
                [
                    "Iqtisodiy, ichki siyosiy, ijtimoiy, maʻnaviy, xalqaro, axborot, harbiy, chegaraviy, ekologik",
                    "Tarmoq, ma'lumot, apparat, dasturiy",
                    "Shaxsiy, ijtimoiy, siyosiy",
                    "Fizik, kimyoviy, biologik"
                ]
            ],
            [
                "Masofadan bo'ladigan tarmoq hujumlariga qarshi qanday choralar ko'rish mumkin?",
                [
                    "Tarmoq xavfsizligini ta'minlash uchun kompleks choralar tavsiya etiladi.",
                    "Tarmoqni faqat apparat vositalari bilan himoya qilish lozim.",
                    "Yolg'on obyektlarni kiritish kerak.",
                    "Trafikni tahlil qilish zarur."
                ]
            ],
            [
                "Axborotning maxfiyligi nima?",
                [
                    "Ma’lumotlarning faqat tegishli shaxslar tomonidan foydalanilishi",
                    "Ma’lumotlarni saqlashning kafolati",
                    "Ma’lumotlarni tarqatish",
                    "Ma’lumotlarning ruxsatsiz o‘zgartirilmaganligini kafolatlash"
                ]
            ],
            [
                "Yaxlitlik axborot xavfsizligi qanday ta’riflanadi?",
                [
                    "Ma’lumotlarni faqat muayyan shaxslar ko‘rishi",
                    "Ma’lumotlarning ruxsatsiz o‘zgartirilmaganligini kafolatlash",
                    "Ma’lumotlarning noaniqligi",
                    "Ma’lumotlarning himoyalanishi"
                ]
            ],
            [
                "Autеntifikatsiya qanday tushuniladi?",
                [
                    "Ma’lumotlarni to‘liq saqlash",
                    "Ma’lumotlarni saqlashning kafolati",
                    "Ma’lumot egasining haqiqiyligini tasdiqlash",
                    "Ma’lumotlarni tarqatish"
                ]
            ],
            [
                "Axborotni himoyalashning asosiy maqsadlari qaysilar?",
                [
                    "Ma’lumotlarni tez-tez yangilash",
                    "Ma’lumotlarning ruxsatsiz tarqalishini oldini olish",
                    "Ma’lumotlarni tez-tez saqlash",
                    "Ma’lumotlarni ko‘paytirish"
                ]
            ],
            [
                "Tutib olish jarayoni qanday tushuniladi?",
                [
                    "Ma’lumotlarni ruxsatsiz o‘zgartirish",
                    "Ma’lumotlarni ruxsatsiz nusxa olish",
                    "Ma’lumotlarni soxtalashtirish",
                    "Ma’lumotlarni qayta ishlash"
                ]
            ],
            [
                "Uzilishlar qanday bo‘linadi?",
                [
                    "Dasturiy va tеxnik",
                    "Ma’lumot va dasturiy",
                    "Tеxnik va boshqa",
                    "Tizim va dasturiy"
                ]
            ],
            [
                "Kompyuter tizimlariga qanday tahdidlar mavjud?",
                [
                    "Ma’lumotlarni saqlashdagi xatoliklar",
                    "Ruxsatsiz kirish va viruslar",
                    "Ma’lumotlarni tahlil qilishdagi kamchiliklar",
                    "Tizim xatoliklari"
                ]
            ],
            [
                "Tizimga ruxsatsiz kirishni taqiqlashda qaysi usul eng keng tarqalgan?",
                [
                    "Parol qo‘yish",
                    "Ma’lumotlarni shifrlash",
                    "Tizimni yangilash",
                    "Antivirus dasturlarini ishlatish"
                ]
            ],
            [
                "Parol tizimining kamchiliklari qaysilar?",
                [
                    "Parolni tez esga olish",
                    "Parolni boshqa shaxslar tomonidan tahqirlash osonligi",
                    "Parolning ruxsat berilganligi",
                    "Parolni o‘zgartirishning qiyinchiligi"
                ]
            ],
            [
                "Virus deganda nimani tushunasiz?",
                [
                    "Avtonom ravishda ishlash va zararli jarayonlarni vujudga keltirish maqsadida tuzilgan dastur.",
                    "Ma’lumotlarni saqlash uchun maxsus dastur.",
                    "Kompyuter dasturlarini tezlashtiruvchi dastur.",
                    "Internetga ulanishni osonlashtiruvchi dastur."
                ]
            ],
            [
                "Viruslarning qanday guruhlari mavjud?",
                [
                    "Xavfsiz, xavfli, juda xavfli viruslar.",
                    "Yuqori, o‘rta, past xavfli viruslar.",
                    "Dasturiy, ofis, o‘yin viruslari.",
                    "Yuzaki, chuqur, masofaviy viruslar."
                ]
            ],
            [
                "Qaysi viruslar kompyuter qurilmalarini buzishi mumkin?",
                [
                    "Juda xavfli viruslar.",
                    "Xavfsiz viruslar.",
                    "Xavfli viruslar.",
                    "Gibridli viruslar."
                ]
            ],
            [
                "Virus dasturlari qanday ishlaydi?",
                [
                    "Dasturlarga o‘z matnlarini yozish va ularga zarar yetkazish.",
                    "Kompyuterni tezlashtirish va optimallashtirish.",
                    "Fayllarni shifrlash va saqlash.",
                    "Fayllarni nusxalash va o‘zgartirish."
                ]
            ],
            [
                "Viruslardan himoyalanish uchun qaysi vositalar ishlatiladi?",
                [
                    "Antivirus dasturlar, detektorlar, filtrlar.",
                    "Matn tahrirlovchilar, o‘yin dasturlari.",
                    "Internet brauzerlar, operatsion tizimlar.",
                    "Ofis dasturlari, fayl menedjerlari."
                ]
            ],
            [
                "Detektorlar qanday ishlaydi?",
                [
                    "Virusning signaturasi asosida tezkor xotira va fayllarni ko‘rib chiqadi.",
                    "Fayllarni avtomatik ravishda tozalaydi.",
                    "Viruslarni identifikatsiya qilmaydi, faqat signaturalarga mos keladi.",
                    "Fayllarni arxivga saqlaydi."
                ]
            ],
            [
                "Troyan dasturlari qanday ta’sir ko‘rsatadi?",
                [
                    "Foydalanuvchi o‘ylaganidan keyin zarar ko‘rsatadi.",
                    "Avvaldan ma’lum bo‘lgan viruslarni o‘z ichiga oladi.",
                    "Yangi viruslarni yaratadi.",
                    "Matn fayllarini o‘zgartiradi."
                ]
            ],
            [
                "Rezident viruslarning qanday xususiyatlari mavjud?",
                [
                    "Tezkor xotirada saqlanadi va boshqa dasturlarga ta’sir qiladi.",
                    "Fayllar tarkibida saqlanadi va tezda o‘chiriladi.",
                    "Dastur orqali faqat ma’lum fayllarga ta’sir qiladi.",
                    "Faqat diskni o‘zgartiradi."
                ]
            ],
            [
                "Viruslardan qanday qilib himoyalanish mumkin?",
                [
                    "Zamonaviy antivirus dasturlar bilan kompyuterni taʻminlash.",
                    "Disketalarni ishlatishdan oldin tekshirmaslik.",
                    "Nusxalarni saqlamaslik.",
                    "Viruslarni tan olish uchun faqat detektorlar ishlatish."
                ]
            ],
            [
                "Gibridli viruslar qanday viruslar hisoblanadi?",
                [
                    "Faylli va but sektorli viruslar.",
                    "Yuqori xavfli viruslar.",
                    "Xavfsiz va xavfli viruslar.",
                    "Fayl va ofis dasturlari viruslari."
                ]
            ]
        ];
    </script>
@endsection
