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
                            <h1>Kompyuter virus tushunchasi va ularning turlari</h1>
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

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            Hozirgi kunda kompyuter viruslari gʻarazli maqsadlarda ishlatiluvchi turli xil dasturlarni olib kelib tatbiq etishda eng samarali vositalardan biri hisoblanadi. Kompyuter viruslarini dasturli viruslar deb atash toʻgʻriroq boʻladi
                        </p>

                        <p>
                            <b>Virus</b> deganda avtonom ravishda ishlash, boshqa dastur tarkibiga oʻz-oʻzidan qoʻshilish, kompyuter tarmoqlari va alohida kompyuterlarda zararli jarayonlarni vujudga keltirish maqsadida tuzilgan dastur tushuniladi. Ushbu dasturlar oʻz-oʻzidan nusxa olish xususiyatiga ega. Viruslar bilan zararlangan dasturlar virus tashuvchi yoki zararlangan dasturlar deyiladi
                        </p>

                        <p>
                            <b>Zararlangan disk</b> — bu ishga tushirish sektorida virus dastur joylashib olgan diskdir. Hozirgi paytda kompyuterlar uchun koʻpgina noqulayliklar tugʻdirayotgan har xil turlardagi kompyuter viruslari keng tarqalgan. Shuning uchun ham ulardan saqlanish usullarini ishlab chiqish muhim masalalardan biri hisoblanadi. Viruslarning katta guruhini kompyuterning ish bajarish tartibini buzmaydigan, ya’ni «taʻsirchan boʻlmagan» viruslar guruhi tashkil etadi.
                        </p>

                        <p>
                            Viruslarning boshqa guruhiga kompyuterning ish tartibini buzuvchi viruslar kiradi. Bu viruslarni quyidagi turlarga boʻlish mumkin: xavfsiz viruslar (fayllar tarkibini buzmaydigan), xavfli viruslar (fayllar tarkibini buzuvchi) hamda juda xavfli viruslar (kompyuter qurilmalarini buzuvchi va operator sogʻligʻiga taʻsir etuvchi). Bu kabi viruslar odatda professional dasturchilar tomonidan tuziladi.
                        </p>

                        <p>
                            <b>Kompyuter virusi</b> — bu maxsus yozilgan dastur boʻlib, boshqa dasturlar tarkibiga yoziladi, ya’ni zararlaydi va kompyuterlarda oʻzining gʻarazli maqsadlarini amalga oshiradi. Kompyuter virusi orqali zararlanish oqibatida kompyuterlarda quyidagi oʻzgarishlar paydo boʻladi:

                        </p>

                        <p>
                            - ayrim dasturlar ishlamaydi yoki xato ishlay boshlaydi; <br>
                            - bajariluvchi faylning hajmi va uning yaratilgan vaqti oʻzgaradi; <br>
                            - ekranda anglab boʻlmaydigan belgilar, turli xil tasvir va tovushlar paydo boʻladi; <br>
                            - kompyuterning ishlashi sekinlashadi va tezkor xotiradagi boʻsh joy hajmi kamayadi; <br>
                            - disk yoki diskdagi bir necha fayllar zararlanadi (ba’zi hollarda disk va fayllarni tiklab boʻlmaydi);<br>
                            - vinchester orqali kompyuterning ishga tushishi yoʻqoladi.<br>
                        </p>

                        <p>
                            Viruslar asosan disklarning yuklanuvchi sektorlarini va exe, som, sys va bat kengaytmali fayllarni zararlaydi. Hozirgi kunda bular qatoriga ofis dasturlarini oʻrnatuvchi fayllarni ham kiritish mumkin. Oddiy matnli fayllarni zararlaydigan viruslar kamdan-kam uchraydi. Kompyuterning viruslar bilan zararlanish yoʻllari quyidagilardir:
                        </p>
                        - disketlar orqali;<br>
                        - kompyuter tarmoqlari orqali.

                        <p>
                            Shuni aytib oʻtish lozimki, hozirgi paytda har-xil turdagi axborot va dasturlarni oʻgʻirlab olish niyatida kompyuter viruslaridan foydalanish eng samarali usullardan biri hisoblanadi. Dasturli viruslar kompyuter tizimlarining xavfsizligiga tahdid solishning eng samarali vositalaridan biridir. Shuning uchun ham dasturli viruslarning imkoniyatlarini tahlil qilish masalasi hamda bu viruslarga qarshi kurashish hozirgi paytning dolzarb masalalaridan biri boʻlib qoldi. Viruslardan tashqari fayllar tarkibini buzuvchi «troyan» dasturlari mavjud. Virus koʻpincha kompyuterga sezdirmasdan kiradi. Foydalanuvchining oʻzi «troyan» dasturini foydali dastur sifatida diskka yozadi. Ma’lum bir vaqt oʻtgandan keyin dastur oʻz taʻsirini koʻrsata boshlaydi. Oʻz-oʻzidan paydo boʻladigan viruslar mavjud emas
                        </p>

                        <p>
                            Virus dasturlari inson tomonidan kompyuterning dasturiy ta’minotini, uning qurilmalarini zararlash va boshqa maqsadlar uchun yoziladi. Viruslarning hajmi bir necha baytdan to oʻnlab kilobaytgacha boʻlishi mumkin. «Troyan» dasturlari foydalanuvchiga zarar keltiruvchi boʻlib, ular buyruqlar ketma-ketligidan tashkil topgan, omma orasida juda keng tarqalgan dasturlar (tahrirlovchilar, oʻyinlar, translyatorlar) ichiga oʻrnatilgan boʻlib, bir qancha amallar bajarilishi bilan ishga tushadigan «mantiqiy bomba» deb ataladigan dasturdir. Oʻz navbatida, «mantiqiy bomba» ning turli koʻrinishlaridan biri «soat mexanizmli bomba» hisoblanadi. Shuni taʻkidlab oʻtish kerakki, «troyan» dasturlari oʻz-oʻzidan koʻpaymasdan, kompyuter tizimi boʻyicha dasturlovchilar tomonidan tarqatiladi. Troyan dasturlardan viruslarning farqi shundaki, viruslar kompyuter tizimlari boʻylab tarqatilganda, ular mustaqil ravishda hosil boʻlib, oʻz ish faoliyatida dasturlarga oʻz matnlarini yozgan holda ularga zarar koʻrsatadi. Zararlangan dasturda dastur bajarilmasdan oldin virus oʻzining buyruqlari bajarilishiga imkoniyat yaratib beradi. Shuning uchun ham virus dasturning bosh qismida joylashadi yoki dasturning birinchi buyrugʻi unga yozilgan virus dasturiga shartsiz oʻtish boʻlib xizmat qiladi. Ishga tushgan virus boshqa dasturlarni zararlaydi va shundan soʻng virus tashuvchi dasturga ishni topshiradi. Virus hayoti odatda quyidagi davrlarni oʻz ichiga oladi: qoʻllanilish, inkubatsiya, replikatsiya (oʻz-oʻzidan koʻpayish) va hosil boʻlish. Inkubatsiya davrida virus passiv boʻlib, uni izlab topish va yuqotish qiyin. Hosil boʻlish davrida u oʻz funksiyasini bajaradi va qoʻyilgan maqsadiga erishadi. Tarkibi jihatidan virus juda oddiy boʻlib, bosh qism va ba’zi hollarda dumdan iborat. Virusning bosh qismi deb boshqarilishni birinchi boʻlib taʻminlovchi imkoniyatga ega boʻlgan dasturga aytiladi. Virusning dum qismi zararlangan dasturda boʻlib, u bosh qismidan alohida joyda joylashadi. Kompyuter viruslari xarakterlariga nisbatan norezident, rezident, butli, gibridli va paketli viruslarga ajratiladi. Faylli norezident viruslar toʻliqligicha bajarilayotgan faylda joylashadi, shuning uchun ham u faqat virus tashuvchi dastur faollashgandan soʻng ishga tushadi va bajarilgandan soʻng tezkor xotirada saqlanmaydi.
                        </p>

                        <p>
                            Rezident virus norezident virusdan farqliroq tezkor xotirada saqlanadi. Rezident viruslarning yana bir koʻrinishi but viruslar boʻlib, bu virusning vazifasi vinchester va egiluvchan magnitli disklarning yuklovchi sektorini ishdan chiqarishdan iborat. But viruslarning boshi diskning yuklovchi but sektorida va dumi disklarning ixtiyoriy boshqa sektorlarida joylashgan boʻladi. Paketli virusning bosh qismi paketli faylda joylashgan boʻlib, u operatsion tizim topshiriqlaridan iborat. Gibridli viruslarning boshi paketli faylda joylashadi. Bu virus ham faylli, ham but sektorli boʻladi.
                        </p>

                        <p>
                            Tarmoq viruslar kompyuter tarmoqlarida tarqalishga moslashtirilgan, ya’ni tarmoqli viruslar deb axborot almashishda tarqaladigan viruslarga aytiladi. Viruslarning turlari:
                            1. Fayl viruslari.
                            2.Yuklovchi viruslar.
                            3.Drayverlarni zararlovchi viruslar.
                            4. DIR viruslari. FAT tarkibini zararlaydi.
                            5. Sstels-viruslari. Bu viruslar oʻzining tarkibini oʻzgartirib, tasodifiy kod oʻzgarishi boʻyicha tarqaladi. Uni aniqlash juda qiyin, chunki fayllarning oʻzlari oʻzgarmaydi.
                            6. Windows viruslari. Windows operatsion tizimi fayllarini zararlaydi
                        </p>

                        <p>
                            <b>Virusdan himoyalanish dasturiy vositalarining tavsifi.</b> Hozirgi vaqtda viruslarni yoʻqotish uchun koʻpgina usullar ishlab chiqilgan va bu usullar bilan ishlaydigan dasturlar antivirus dasturlar deb ataladi. Antiviruslarni, qoʻllanish usuliga koʻra, quyidagilarga ajratishimiz mumkin: detektorlar, faglar, vaktsinalar, privivkalar, revizorlar, monitorlar.
                        </p>

                        <p>
                            <b>Detektorlar</b> — virusning signaturasi (virusga taalluqli baytlar ketma-ketligi) boʻyicha tezkor xotira va fayllarni koʻrish natijasida ma’lum viruslarni topadi va xabar beradi. Yangi viruslarni aniqlay olmasligi detektorlarning kamchiligi hisoblanadi.
                        </p>

                        <p>
                            <b>Privivka</b> — fayllarda xuddi virus zararlagandek iz qoldiradi. Buning natijasida viruslar «privivka qilingan» faylga yopishmaydi
                        </p>

                        <p>
                            <b>Filtrlar</b> — qoʻriqlovchi dasturlar koʻrinishida boʻlib, rezident holatda ishlab turadi va viruslarga xos jarayonlar bajarilganda, bu haqda foydalanuvchiga xabar beradi.
                        </p>

                        <p>
                            <b>Revizorlar</b> — eng ishonchli himoyalovchi vosita boʻlib, diskning birinchi holatini xotirasida saqlab, undagi keyingi oʻzgarishlarni doimiy ravishda nazorat qilib boradi.
                        </p>

                        <p>
                            Detektor dasturlar kompyuter xotirasidan, fayllardan viruslarni qidiradi va aniqlangan viruslar haqida xabar beradi
                        </p>

                        <p>
                            Doktor dasturlari nafaqat virus bilan kasallangan fayllarni topadi, balki ularni davolab, dastlabki holatiga qaytaradi. Bunday dasturlarga Aidstest, DrWeb dasturlarini misol qilib keltirish mumkin. Yangi viruslarning toʻxtovsiz paydo boʻlib turishini hisobga olib, doktor dasturlarini ham yangi versiyalari bilan almashtirib turish lozim.
                        </p>

                        <p>
                            Filtr dasturlar kompyuter ishlash jarayonida viruslarga xos boʻlgan shubhali harakatlarni topish uchun ishlatiladi. Bu harakatlar quyidagicha boʻlishi mumkin:
                            <br>
                            - fayllar atributlarining oʻzgarishi;<br>
                            - disklarga doimiy manzillarda ma’lumotlarni yozish;<br>
                            - diskning ishga yuklovchi sektorlariga ma’lumotlarni yozib yuborish. Kompyuterni viruslar bilan zararlanishidan <br><br>

                            <b>saqlash va axborotni ishonchli saqlash uchun quyidagi qoidalarga amal qilish lozim:</b><br>
                            - kompyuterni zamonaviy antivirus dasturlar bilan taʻminlash;<br>
                            - disketalarni ishlatishdan oldin har doim virusga qarshi tekshirish;<br>
                            - qimmatli axborotning nusxasini har doim arxiv fayl koʻrinishida saqlash. Kompyuter viruslariga qarshi kurashning quyidagi turlari mavjud:<br>
                            - viruslar kompyuterga kirib buzgan fayllarni oʻz holiga qaytaruvchi dasturlarning mavjudligi;<br>
                            - kompyuterga parol bilan kirish, disk yurituvchilarning yopiq turishi;<br>
                            - disklarni yozishdan himoyalash;<br>
                            - litsenzion dasturiy ta’minotlardan foydalanish va oʻgʻirlangan dasturlarni qoʻllamaslik;<br>
                            - kompyuterga kiritilayotgan dasturlarda viruslarning mavjudligini tekshirish;<br>
                            - antivirus dasturlaridan keng foydalanish;<br>
                            - davriy ravishda kompyuterlarni antivirus dasturlari yordamida viruslarga qarshi tekshirish.<br>
                        </p>
                    </div>
                    <div class="col-lg-4">

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>O'qituvchi</h5>
                            <p><a href="#">Furqatjon Irsaliyev</a></p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Narxi</h5>
                            <p>$0</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Sotib olingan</h5>
                            <p>30</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Kirish vaqti</h5>
                            <p>5.00 pm - 7.00 pm</p>
                        </div>
                        <h3>Mavzular:</h3>
                        <a href="{{ route('information.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Tarmoq va axborot xavfsizligi tushunchasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('information.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Axborotlarni himoyalashning texnik va dasturiy vositalari</h5>
                            </div>
                        </a>

                        <a href="{{ route('information.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Kompyuter virus tushunchasi va ularning turlari</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->


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
