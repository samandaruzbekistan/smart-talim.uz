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
                            <h1>Kompyuter va uning turlari</h1>
                            <p class="mb-0">Hozirgi vaqtda inson hayotini kompyuterlarsiz tassavur etib boʻlmaydi. Kompyuter ish yuritishni osonlashtiradi, yangi hujjatlar va xar xil matnlarni tez va sifatli tayyorlash, tarmoq  orqali oʻzaro axborot almashish, murakkab hisob ishlarini tezkor bajarish va ishlab chiqarish jarayonini modellashtirish imkoniyatini beradi. Shuning uchun har bir inson u qaysi soha mutaxassisi boʻlmasin axborot texnologiyalari boʻyicha yetarli darajada bilim va koʻnikmaga ega boʻlishi lozim.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">Zamonaviy kompyuter</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="../assets/img/theme/1_1.png" class="img-fluid" alt="">
                        <p>
                            Odamzod paydo boʻlgandan buyon dastlabki hisoblash vositasi sifatida odamlarning barmoqlari xizmat qilgan. Ammo ular yordamida faqat sanash ishlarni bajarishgan (sabab barmoqlar soni cheklangan). Shuning uchun asta sekin sunʻiy hisoblash vositalari vujudga kela boshlagan. Ulardan birinchilari boʻlib toshlar va tayoqchalar boʻlgan. Soʻngra abak (grek, misrlik, rimlik, xitoylik suan-pan va yaponlarning soroban), Neper tayoqchalari, rus schyotlari vujudga kelgan.
                            1973 yildan boshlab EHM tarixining yangi sahifasi, personal kompyuterlar sahifasi boshlandi. Shu yilda Fransiyaning Truong Trong Ti firmasi tomonidan birinchi personal kompyuter yaratildi. Shu bilan birga 1973 yilda dunyoga taniqli XEROX firmasi tomonidan “Alto” nomli shaxsiy kompyuter yaratilgan. Ushbu kompyuterda birinchi boʻlib fayllar va dasturlarni oynalar koʻrinishida ochish qoʻllanilgan.
                        </p>
                        <br>
                        <p>1977 yilda “Apple Computer” firmasi tomonidan “Apple-II” nomli shaxsiy kompyuterlar ommaviy ravishda chiqarila boshlagan. Ushbu kompyuterlar plastmassa korpus, klaviatura va displeyga ega boʻlgan.1981-yildan boshlab IBM (International Business Machines) firmasi tomonidan personal kompyuterlar seriyalab chiqarila boshlandi va butun dunyoga keng sotila boshlandi. Shundan beri kompyuter hayotimizda mustahkam joylashib, axborotni qayta ishlashning eng zamonaviy vositasiga aylandi. Shuning uchun personal kompyuterlar standarti shu kompyuter nomi bilan nomlanadi - IBM PC (personal computer).  </p>
                        <p>
                            Kompyuter - hisoblashlarni bajarish, shu jumladan elektron shakldagi axborotni oldindan belgilangan algoritm boʻyicha qabul qilish, qayta ishlash, saqlash va ishlov berish uchun moʻljallangan elektron mashina.  “Kompyuter” soʻzi ingliz tilidan olingan boʻlib, “hisoblash”, “hisoblagich” degan maʻnolarni bildiradi.  Garchand u hozirda faqat hisoblovchi boʻlmasdan, matnlar, tovush, video va boshqa ma’lumot ustida ham amallar bajaradi. Shunga qaramasdan hozirda uning eski nomi – kompyuter saqlangan. Uning asosiy vazifasi turli ma’lumotni qayta ishlashdan iborat. Avvalo shuni aytish lozimki, koʻpchilikning tushunchasida goʻyoki biz kundalikda foydalanadigan faqat shaxsiy kompyuter bor xolos. Bunga albatta sabablar koʻp. Shulardan biri hozirgi zamon shaxsiy kompyuterlari ilgari universal deb hisoblangan kompyuterlardan tezligi va xotira hajmi jihatidan ancha oshib ketganligida boʻlsa, ikkinchi tomondan koʻp masalalarni yechish uchun bu kompyuterlar foydalanuvchilarni qanoatlantirishidadir. Hozirda kompyuter termini koʻp uchrasada, shu bilan birga EHM (elektron hisoblash mashinalari), HM (hisoblash mashinalari) terminlari ham hayotda koʻp ishlatib turiladi. Ammo biz soddalik uchun faqat kompyuter terminidan foydalanamiz.
                        </p>
                        <p>
                            Kompyuterlarning amalda turli xillari mavjud: raqamli, analogli (uzluksiz), raqamli-analogli, ixtisoslashtirilgan. Ammo, raqamli kompyuterlar foydalanilishi, bajaradigan amallarning universalligi, hisoblash amallarining aniqligi va boshqa koʻrsatkichlari yuqori boʻlgani uchun, ulardan koʻproq foydalanilmoqda.
                        </p>
                        <p>
                            Amalda esa hozir rivojlangan mamlakatlarda kompyuterlarning besh guruhi keng qoʻllanilmoqda. Kompyuterlarni xotirasining hajmi, bir sekundda bajaradigan amallar tezligi, ma’lumotning razryad toʻrida (yacheykalarda) tasvirlanishiga qarab, besh guruhga boʻlish mumkin:
                        </p>
                        <ol>
                            <li>Super kompyuterlar (super Computer);</li>
                            <li>Server kompyuterlar (server Computer);</li>
                            <li>Shaxsiy kompyuterlar (pc-personal Computer); </li>
                            <li>Portativ (noutbook) kompyuterlar; </li>
                            <li>Mini kompyuterlar (minicomputer); </li>
                        </ol>

                        <p><b>Super kompyuter</b> – juda katta tezlikni talab qiladigan va katta hajmdagi masalalarni yechish uchun moʻljallangan tizimdir.Bu kompyuter tizimlari 1 sekundda oʻn trillion amal bajaradi. </p>
                        <img src="../assets/img/theme/1_2.jpg" class="img-fluid" alt="">

                        <p><b>Server kompyuter</b> – fan va texnikaning turli sohalariga oid masalalarni yechishga hamda tarmoqdagi kompyuterlarga oʻz resurslarini taqdim etishga moʻljallangan kompyuterlar. Ularning amal bajarish tezligi va xotira hajmi shaxsiy kompyuterlarnikiga qaraganda ancha yuqori hisoblanadi </p>
                        <img src="../assets/img/theme/1_3.png" class="img-fluid" alt="">

                        <p><b>Portativ kompyuterlar (Noutbuk) </b> – mobil ixcham shaxsiy kompyuter boʻlib, uning asosiy qismi va monitori birlashgan holda boʻladi. Bunday kompyuterlarning koʻpchiligi deyarli standart klaviaturaga, kompyuter grafikasi vositalariga ega </p>
                        <img src="../assets/img/theme/1_4.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('computers.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Kompyuter va uning turlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Protsessor texnologiyasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Axborotlarni saqlash qurilmalari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Zamonaviy kompyuterlarning dasturiy ta’minoti</h5>
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
            ["Kompyuterning asosiy vazifasi nima?", ["Turli ma’lumotni qayta ishlash", "Matnlarni tahrirlash", "Elektr energiyasini tejash", "Ma’lumotlarni saqlash"]],
            ["Insoniyat tarixidagi birinchi hisoblash vositasi qaysi edi?", ["Odamlarning barmoqlari", "Abak", "Schyot", "Neper tayoqchalari"]],
            ["Dastlabki personal kompyuter qachon yaratilgan?", ["1973-yilda", "1981-yilda", "1977-yilda", "1990-yilda"]],
            ["Apple kompaniyasi tomonidan qaysi shaxsiy kompyuter birinchi bo'lib ommaviy ravishda chiqarildi?", ["Apple-II", "Apple-I", "IBM PC", "XEROX Alto"]],
            ["Kompyuterlarning qaysi turi bir sekundda o‘n trillion amal bajaradi?", ["Super kompyuterlar", "Server kompyuterlar", "Shaxsiy kompyuterlar", "Mini kompyuterlar"]],
            ["Fon Neyman tamoyillari asosida yaratilgan zamonaviy kompyuterlarning asosiy qismlari nimalardan iborat?", ["Protsessor, xotira, tarmoq qurilmalari", "Monitor, klaviatura, sichqoncha", "CD va DVD o‘quvchilar, modemlar, videoprotsessor", "Klaviatura, printer, skaner"]],
            ["Kompyuterning qaysi turi mobil ixcham shaxsiy kompyuter hisoblanadi?", ["Noutbuk", "Super kompyuter", "Server kompyuter", "Mini kompyuter"]],
            ["Elektr energiyasini uzluksiz ta’minlash tizimlari nimaga mo‘ljallangan?", ["Kompyuter texnikasini himoyalash", "Ma’lumotlarni saqlash", "Dasturiy ta’minotni yangilash", "Internetga ulanish"]],
            ["Kompyuterning elektr ta’minoti tizimida katta quvvat talab qiluvchi qurilmalar qaysi?", ["Lift motorlari, konditsioner, muzlatgichlar", "Protsessor, monitor, klaviatura", "Printer, skaner, sichqoncha", "Noutbuk, flesh xotira, mikrofon"]],
            ["Elektr tokining birdan o‘chib qolishi kompyuterning qaysi tizimiga zarar yetkazishi mumkin?", ["Fayl tizimi", "Operatsion tizim", "Dasturiy ta’minot", "Xotira bloki"]]
        ];
    </script>
@endsection
