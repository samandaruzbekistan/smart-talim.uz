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
                            <h1>Internet xizmatlari</h1>
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
                            <b>Internet xizmat turlari.</b> Internet, avvalambor, uning foydalanuvchilariga axborot xizmati koʻrsatish uchun yaratilgandir. Umuman olganda, internet xizmat turlari nihoyatda koʻp va xilma-xil boʻlib (yangi xizmat turlari kun sayin paydo boʻlib, ba’zilari yoʻqolmoqda), ularni quyidagi guruhlarga ajratish mumkin:
                        </p>

                        <p>
                            - WWW - elektron sahifa xizmati; <br>
                            - elektron pochta xizmati;<br>
                            - telekonferensiya (Usenet);<br>
                            - fayllarni uzatish (FTP);<br>
                            - slujba imen domen (DNS) (tarmoq hududlariga nom berish xizmati);<br>
                            - Telnet xizmati;<br>
                            - IRC<br>
                            - xizmati yoki Chat konferesiya;<br>
                            - Ma’lumotni izlash xizmati<br>

                        </p>

                        <p>
                            <b>Mobil aloqa xizmatlari:</b> soʻzlashuv, mobil internet va pochta.Mobil aloqa xizmatlari – mobil aloqa vositalari yordamida abonentlarning soʻzlashuvi, mobil internet va pochta xizmatlari amalga oshiriladi. Soʻzlashuv – telefon raqami terilganda joriy mobil operator tayanch stansiyaning antenasi chaqirayotgan va chaqirilayotgan abonentlarni aniqlaydi. Shundan soʻng ushbu axborot uzib ulagichga (kommutator) yuborilib ikkita abonent bogʻlanadi va ushbu abonentlar orasida soʻzlashuv (ma’lumot almashinish) amalga oshiriladi. Ya’ni ikkita harakatlanuvchi abonentning mobil telefonlar orqali oʻzaro muloqoti - soʻzlashuvdir.
                        </p>

                        <p>
                            <b>Mobil Internet</b> – harakatdagi abonentlar uchun mobil aloqa tarmoqlari orqali Internet resurslaridan foydalanish texnologiyasi. Mobil aloqa tarmoqlarida soʻrovlar va soʻzlashish ma’lumoti axborotlarning paketli koʻrinishida uzatiladi. Bunda yuqori darajali xizmatni amalga oshirish, ayniqsa biznesni samarali boshqarish imkoniyati yaratiladi. Mobil Internetning qulayligi shundan iboratki, bunda foydalanuvchining qayerda va qanday holatda boʻlishidan qatʻiy nazar u mobil aloqa atrmogʻi orqali Internet xizmatlaridan foydalanishi imkoniyatiga ega boʻladi. Mobil Internet xizmatidan foydalanish uchun maxsus simsiz modem qurilmasi yoki ushbu xizmat yoqtirilgan mobil telefon boʻlishi kerak.
                        </p>

                        <p>
                            <b>Mobil pochta</b> -Internet resurslaridan foydalangan holda abonentning mobil telefoni orqali shaxsiy elektron pochta xizmatidan foydalanish imkoniyati. Bunda Internet tarmogʻi yordamida oddiy elektron pochta xizmatidan foydalish kabi mobil telefonlar yoki boshqa mobil aloqa vositalari orqali ixtiyoriy vaqtda ixtiyoriy joyda elektron pochta xizmatidan foydalanish, ya’ni pochta xabarlarini olish, oʻqish va javob yoʻllash mumkin

                        </p>
                        <img src="https://www.state.gov/wp-content/uploads/2022/04/shutterstock_1926546002-crop-1-2420x852.jpg" class="img-fluid" alt=""><br>

                        <p class="mt-4">
                            <b>Mobil aloqa vositalari:</b> Smartphone, iphone va planshetlar. Hozirgi kunda mobil telefonlarning va boshqa mobil aloqa vositalarining shunaqa turlari ishlab chiqarilmoqda-ki, bular vazifalari jihatidan personal kompyuterdan qolishmaydi. Bunday mobil aloqa vositalari yordamida hujjatlar bilan ishlash, musiqa tinglash, videoklip tomosha qilish, oʻyinlar oʻynash, hatto radioeshittirish va televideniedan ham bahramand boʻlish mumkin.

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
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Internet xizmatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.6') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Elektron pochta xizmati</h5>
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
