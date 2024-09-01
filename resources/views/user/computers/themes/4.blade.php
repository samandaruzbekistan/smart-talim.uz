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
                            <h1>Zamonaviy kompyuterlarning dasturiy ta’minoti</h1>
                            <p>Dasturiy ta’minot kompyuterning ikkinchi muhim qismi boʻlib, u ma’lumotga ishlov beruvchi dasturlar majmuasini va kompyuterni ishlatish uchun zarur boʻlgan hujjatlarni oʻz ichiga oladi. </p>
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
                        <p>
                            Kompyuterning turli texnik qismlari orasidagi oʻzaro bogʻlanish — bu, <b>apparat interfeysi</b>, dasturlar orasidagi oʻzaro bogʻlanish esa —<b> dasturiy interfeys,</b> apparat qismlari va dasturlar orasidagi oʻzaro bogʻlanish — <b>apparat-dasturiy interfeys</b> deyiladi .Shaxsiy kompyuterlar haqida gap ketganda kompyuter tizimi bilan ishlashda uchinchi ishtirokchini, ya’ni insonni (foydalanuvchini) ham nazarda tutish lozim. Inson kompyuterning ham apparat, ham dasturiy vositalari bilan muloqotda boʻladi.
                        </p>

                        <p>
                            Insonning dastur bilan va dasturning inson bilan oʻzaro muloqoti — <b>foydalanuvchi interfeysi </b>deyiladi. Endi kompyuterning dasturiy ta’minoti bilan tanishib chiqaylik. Barcha dasturiy ta’minotlarni uchta kategoriya boʻyicha tasniflash mumkin:
                        </p>

                        <ul>
                           <li>sistemaviy dasturiy ta’minot;</li>
                            <li>amaliy dasturiy ta’minot;</li>
                            <li>dasturlash texnologiyasining uskunaviy vositalari.</li>
                        </ul>

                        <p>
                            <b>Sistemaviy dasturiy ta’minot (System software)</b>  — kompyuterning va kompyuter tarmoqlarining ishini taʻminlovchi dasturlar majmuasidir.
                        </p>

                        <p>
                            <b>Amaliy dasturiy ta’minot (Aplication program paskage)</b> — bu aniq bir predmet sohasi boʻyicha ma’lum bir masalalar sinfini yechishga moʻljallangan dasturlar majmuasidir.
                        </p>

                        <p>
                            <b>Dasturlash texnologiyasining uskunaviy vositalari </b>— yangi dasturlarni ishlab chiqish jarayonida qoʻllaniladigan maxsus dasturlar majmuasidan iborat vositalardir. Bu vositalar dasturchining uskunaviy vositalari boʻlib xizmat qiladi, ya’ni ular dasturlarni ishlab chiqish (shu jumladan avtomatik ravishda ham), saqlash va joriy etishga moʻljallangan. Sistemaviy dasturiy ta’minot (SDT) quyidagilarni bajarishga qaratilgan:
                        </p>

                        <p>
                            — kompyuterning va kompyuterlar tarmogʻining ishonchli va samarali ishlashini taʻminlash;
                            — kompyuter va kompyuterlar tarmogʻi apparat qismining ishini tashkil qilish va profilaktika ishlarini bajarish.
                            Sistemaviy dasturiy ta’minot ikkita tarkibiy qismdan — asosiy (bazaviy) dasturiy ta’minot va yordamchi (xizmat koʻrsatuvchi) dasturiy ta ʻminotdan iborat. Asosiy dasturiy ta’minot kompyuter bilan birgalikda yetkazib berilsa, xizmat koʻrsatuvchi dasturiy ta’minot alohida, qoʻshimcha tarzda yaratilishi mumkin.
                        </p>

                        <p>
                            <b>Asosiy dasturiy ta ʻminot ( base software) </b>— kompyuter ishini taʻminlovchi dasturlarining minimal toʻplami. Ularga quyidagilar kiradi:
                        </p>

                        <p>
                            <b>— operatsion sistema (OS);<br>
                                — tarmoq sistemasi.
                            </b>
                        </p>

                        <p>
                            Yordamchi (xizmat koʻrsatuvchi) dasturiy ta’minotga asosiy dasturiy ta’minot imkoniyatlarini kengaytiruvchi va foydalanuvchining ish muhitini (interfeysni) qulayroq tashkil etuvchi dasturlar kiradi. Bular tashxis qiluvchi, kompyuterning ishchanligini oshiruvchi, antivirus, tarmoq ishini taʻminlovchi va boshqa dasturlardir.
                        </p>

                        <p>
                            Asosiy dasturiy ta’minotni qoʻshimcha ravishda oʻrnatiladigan xizmat koʻrsatuvchi dasturlar toʻplami toʻldirib turadi. Bunday dasturlarni koʻpincha <b>utilitlar</b> deb atashadi.
                        </p>

                        <p>
                            <b>Utilitlar</b> — ma’lumotni qayta ishlashda qoʻshimcha operatsiyalarni bajarishga yoki kompyuterga xizmat koʻrsatishga (tashxis, apparat va dasturiy vositalarni testlash, diskdan foydalanishni optimallashtirish va boshqalar) moʻljallangan dasturlardir.
                        </p>

                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('computers.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter va uning turlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Protsessor texnologiyasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Axborotlarni saqlash qurilmalari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Zamonaviy kompyuterlarning dasturiy ta’minoti</h5>
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
            ["Kompyuterning dasturiy ta’minoti qanday toifalarga bo'linadi?", ["Sistemaviy dasturiy ta’minot, amaliy dasturiy ta’minot, dasturlash texnologiyasining uskunaviy vositalari", "Sistemaviy dasturiy ta’minot, operatsion tizimlar, ofis dasturlari", "Multimediali dasturlar, ma’lumot bazalari, o'yin dasturlari", "Internet dasturlari, tizim tizimlari, tasvir muhitlari"]],
            ["Sistemaviy dasturiy ta’minot qaysi funksiyalarni bajaradi?", ["Kompyuterning va kompyuter tarmoqlarining ishonchli va samarali ishlashini ta’minlash", "Foydalanuvchining matnli hujjatlarni yaratishini ta’minlash", "Internetga ulanishni ta’minlash", "Grafik tasvirlarni yaratish"]],
            ["Amaliy dasturiy ta’minot nima?", ["Aniq bir predmet sohasi boʻyicha ma’lum bir masalalar sinfini yechishga moʻljallangan dasturlar majmuasi", "Kompyuter apparatini boshqaruvchi dasturlar", "Foydalanuvchining ish muhitini tashkil etuvchi dasturlar", "Kompyuter resurslarini boshqaruvchi dasturlar"]],
            ["Operatsion tizimlar qanday funktsiyalarni bajaradi?", ["Kompyuter resurslarini boshqarish va foydalanuvchi bilan muloqot yaratish", "Matnli hujjatlarni formatlash va chop etish", "Internetga ulanish va tarmoq ishini ta’minlash", "Dasturlarni yaratish va testlash"]],
            ["Qaysi dasturiy ta’minot utilit deb ataladi?", ["Ma’lumotni qayta ishlashda qoʻshimcha operatsiyalarni bajarishga yoki kompyuterga xizmat koʻrsatishga moʻljallangan dasturlar", "Matnli hujjatlarni formatlash va rasmiylashtiruvchi dasturlar", "Grafik tasvirlarni yaratish dasturlari", "Internet orqali aloqa qilish dasturlari"]],
            ["Qanday dasturiy ta’minot dasturlash texnologiyasining uskunaviy vositalaridan biridir?", ["Dasturlarni ishlab chiqish, saqlash va joriy etishga moʻljallangan maxsus dasturlar", "Foydalanuvchi interfeysini yaratish dasturlari", "Sistemaviy dasturiy ta’minot", "Amaliy dasturiy ta’minot"]],
            ["Sistemaviy dasturiy ta’minotga qanday dasturlar kiradi?", ["Operatsion sistema va tarmoq sistemasi", "Buxgalteriya dasturlari va matn muharrirlari", "Grafik muharrirlar va elektron jadvallar", "Tarjimon dasturlar va rejalashtiruvchilar"]],
            ["Qaysi dasturiy ta’minot kompyuter ishini minimal toʻplam bilan ta’minlaydi?", ["Asosiy dasturiy ta’minot", "Xizmat koʻrsatuvchi dasturiy ta’minot", "Amaliy dasturiy ta’minot", "Dasturlash vositalari"]],
            ["DOS operatsion tizimi qanday xususiyatlarga ega edi?", ["16 razryadga ega bo'lib, buyruqlar satri orqali muloqot qilgan", "Grafik interfeysga ega bo'lgan", "Kompyuter resurslarini avtomatik ravishda boshqaradigan", "Yangi dasturlarni ishlab chiqish uchun maxsus vositalar taqdim etgan"]],
            ["Qaysi operatsion tizim kompyuter industriyasida yangi bosqichni vujudga keltirdi?", ["Windows 95", "Windows 98", "Windows XP", "DOS"]]
        ];
    </script>
@endsection
