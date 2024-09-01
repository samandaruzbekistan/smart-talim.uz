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
                            <h1>Internet tarmogʻi</h1>
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
                        <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210401151214/What-is-Website.png" class="img-fluid" alt="">
                        <p class="mt-3">
                            <b>Internet (lotincha: inter –aro va net –tarmoq)</b> – standart internet protokoli (IP) orqali maʼlumot almashuvchi kompyuter tarmoqlarining butunjahon va omma uchun ochiq toʻplamidir. Bu maʼlumotlarning asosiy tashuvchi protokoli TCP/IP dir. TCP/IP oʻzaro bogʻliq protokollar yigʻindisi boʻlib, internetda maʼlumot tarqalishida asosiy oʻrin egallaydi. Internet tarmogʻini minglab akademik, davlat, tijorat va xonadon tarmoqlari tashkil etadi. Internet elektron pochta, chat hamda oʻzaro bogʻlangan sahifalar va boshqa Butunjahon oʻrgimchak toʻri servislaridan tashkil topadi.
                        </p>
                        <p>
                            Internet — katta (global) va kichik (lokal) kompyuter tarmoqlarini oʻzaro bogʻlovchi butunjahon kompyuter tizimi. Unda geografik oʻrni, zamon va makondan qatʼiy nazar, ayrim kompyuter va mayda tarmoqlar oʻzaro hamkorlikda global informatsiya infratuzilmasini tashkil etadi. Qaydnomalar tizimi bilan boshqariladigan barcha hosila tarmoqlar hamkorlikda isteʼmolchilarga ma’lumotni saqlash, eʼlon qilish, joʻnatish, qabul qilish, izlash va maʼlum boʻlgan barcha variantlar (matn, tovush, videotasvir, fotosurat, grafika, musiqa tarzida va b. koʻrinishlar) da axborot almashinishga imkon yaratadi.
                        </p>
                        <p>
                            Internet tizimi XX asrning 60-yillarida paydo boʻldi. Oʻsha paytlarda Amerika mudofaa departamenti tashabbusi bilan kompyuterlar telefon tarmoqlariga ulana boshladi. Dastlab, bunday faoliyat takomillashtirilgan loyihalar agentligi (AKRA) tadqiqotlari doirasida olib borildi. Bu tadqiqotlar sovuq urush avj olgan davrga toʻgʻri keldi. AQSH mudofaa departamenti urush boʻlib qolgan taqdirda oddiy kommunikatsiya vositalari ishdan chiqqudek boʻlsa, oʻrniga yangi qoʻshimcha kommunikatsiya vositalarini izlash bilan faol shugʻullandi. 60-yillar oxiri va 70-yillarda Internet tarmogʻi uncha keng rivojlanmadi. Dastlabki oʻn yillik xalqaro tarmoq, asosan, harbiylar va yirik olimlarning shaxsiy elektron liniyalari faoliyati doirasi bilan cheklandi. Internetning beqiyos rivojlanish surʼati davlat, taʼlim, akademik va ijtimoiy tuzilmalarning oʻziga xos umumiy moliyaviy va intellektual ulushiga bogʻliq boʻldi.
                        </p>
                        <p>
                            <b>Kompyuterlarni bir-biri bilan bogʻlash.</b> Kompyuterlar orasida ma’lumot almashish va umumiy masalalarni birgalikda yechish uchun komyuterlarni bir-biri bilan bogʻlash ehtiyoji paydo boʻladi. Kompyuterlarni bir-biri bilan bogʻlashda ikki xil usuldan foydalaniladi:
                        </p>
                        <p>
                            1. Kabel yordamida bogʻlash. Bunda kompyuterlar bir-biri bilan koaksial, oʻralgan juftlik kabeli (UTP) yoki shisha tolali kabellar orqali maxsus tarmoq plata yordamida bogʻlanadi.
                            <br><br>
                            2. Simsiz bogʻlanish. Bunda kompyuterlar bir-biri bilan simsiz aloqa vositalar yordamida, ya’ni radio toʻlqinlar, infraqizil nurlar, WiFi va Bluetooth texnologiyalari yordamida bogʻlanadi.<br><br>
                            Bir-biri bilan bogʻlangan kompyuterlarning bunday majmuasi kompyuter tarmogʻini tashkil etadi.

                        </p>

                        <p>
                            <b>Manzil tushunchasi.</b> Kompyuter tarmoqlarida manzil tushunchasi sifatida quyidagi fikrlarni keltirish mumkin:
                            1. Manzil kompyuter xotirasining qismlarini, kompyuter kiritish-chiqarish  qurilmalari portini, hisoblash tarmogʻi kompyuterlarini hamda boshqa ma’lumot manbalarini yoki ularni uzatish uchun belgilangan joyni aniqlaydi.
                            2. Manzil hisoblash tarmoqlarida uzatilayotgan ma’lumotni qabul qiluvchi yoki joʻnatuvchilarni aniqlovchi ma’lumot ketma-ketligi

                        </p>

                        <p>
                            <b>Internetda manzil tushunchasi va Internet resurslari manzili.</b> Sahifa, fayl yoki boshqa resursning Internetda joylashishini aniqlovchi noyob manzil – URL deb ataladi. Internetdagi manzil odatda quyidagi elementlardan tarkib topadi: resursdan foydalanish protokoli (masalan, http://, ftp://) va domen nomi (masalan, domain.uz). Internetdagi manzil, shuningdek, URL-manzil deb ham ataladi. Kompyuter domen manzilining namunaviy koʻrinishi quyidagicha: <b>http://www.guldu.uz; http://www.aci.uz.</b> Odatda, hujjatlarda manzilni anglatuvchi ma’lumotning tagiga chiziladi. Namunadan koʻrinib turibdiki, kompyuter manzili bir necha qismlardan iborat. Oʻng tomondan manzilning birinchi qismi (namunada uz) domenning birinchi sathi deb qabul qilinadi, keyingisi (namunada tuit) – domenning ikkinchi sathi va hokazo. Internetda manzillar koʻp qavatli domen tizimida qurilgan. Birinchi sath domenlar umumjahon mavzular yoki geografik joylar boʻyicha nomlanadi.Saytlar nomlari quyidagicha umumiy koʻrinishda ifodalanadi:
                           <b> http://www. sayt nomi. sayt soxasi. davlat kodi.</b>

                        </p>

                        <p>
                            <b>DNS sеrvеrlari</b> dеb ataluvchi kompyutеrlar domеnlar va ular nomlarida boʻlayotgan oʻzgarishlar uchun javob bеradilar, paydo boʻlgan yangi domеnlarning nomlarini oʻz roʻyxatlariga kiritib qoʻyadilar. Bundan tashqari, bu sеrvеrlar domеn nomlarini IP manzillarga oʻtkazish uchun ham xizmat qiladilar. Sizning kompyutеringiz intеrnеtga ulanganda boshqa kompyutеrlarga ulana olish uchun unga ham IP manzil bеriladi. Bu manzil statik yoki dinamik manzil boʻlishi mumkin. Statik manzil hеch qachon oʻzgarmaydi va statik manzilga ega foydalanuvchilar har gal intеrnеtga ulanganlarida shu nomga ega boʻladilar. Lеkin intеrnеtda IP manzillar soni chеklangan va statik manzillar hammaga еtmaydi. Shu sababli provaydеrlar foydalanuvchini intеrnеtga ulash uchun dinamik manzillardan foydalanadilar. Bu manzil intеrnеtda ishlashning bir sеansi uchun bеriladi va kеyingi safar bu manzil boshqa boʻlishi mumkin.
                        </p>

                        <p>
                            Sayt yoki web-sayt inglizcha website: <b>web</b> – «oʻrgimchak toʻri, tarmoq» va site – «joy, segment, tarmoqning bir qismi» degan maʻnolarni anglatadi.
                            <b>Sayt</b> – bu bitta domen nomidan foydalanadigan, bir-biriga bogʻlangan web-sahifalar toʻplami. Web-saytlar shaxs, guruh, korxona yoki tashkilot tomonidan turli maqsadlarda yaratilishi mumkin. Barcha ommaviy web-saytlar butun dunyodagi internet toʻrini tashkil qiladi.
                            Oddiy qilib aytganda, sayt – bu Internetda joylashgan, ba’zi ma’lumotni (matn, video, fotosuratlar, hujjatlar, musiqa va hk) oʻz ichiga olgan manzil. Internet esa ushbu manzillar toʻplamidir.

                        </p>
                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('internet.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifa va uning tuzilishi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi qidiruv tizimlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet axborot terurslari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.5') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet xizmatlari</h5>
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
            ]
        ];

    </script>
@endsection
