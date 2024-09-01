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
                            <h1>Multimedia imkoniyatlari</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">MULTIMEDIANING ASOSIY TUSHUNCHALARI</li>
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
                            80- yillar boshidan boshlab ta’limni kompyuterlashtirishning yangi yoʻnalishi – sun’iy intelekt sohasida ishlashga asoslangan intelektual oʻrgatuvchi tizimlar (IOʻT) tez rivojlana boshladi. Boshqariluvli oʻqish jarayoni modeli IOʻTlarning muhim qismi hisoblanadi, ular asosida har bir oʻquvchi uchun maxsus oʻqitish strategiyasi ishlab chiqilishi mumkin. IOʻT lardagi ma’lumot bazalari formallashtirilgan bilimlardan tashqari oʻrganilayotgan soha uchun ekspert bilimlariga ega boʻlishi mumkin. IOʻTni yaratish yoʻnalishidagi ishlarning kelajagi porloq koʻringani bilan, bugunda ular labaratoriyadagi izlanishlar darajasida qolishmoqda, bir nechta omadli misollar boʻlgani bilan ularni ishlab chiqarish hali ommaviy tus olgani yoʻq.
                        </p>

                        <p>
                            Ta’lim kompyuter tizimlarida tasviriy taqdimotlarning ishlatilishi nafaqat oʻquvchiga ma’lumot uzatish tezligini oshiradi va tushunish darajasini oshiradi, balki oʻquvchida har qanday soha vakili uchun muhim boʻlgan intuitsiya, kasbiy “sezish”, tasvirli oʻylash kabi qobiliyatlarni ham rivojlantiradi. Kompyuter texnologiyalari bozorlarida esa kasbiy tayyorgarlikka yanada koʻproq imkoniyatlar bera oladigan yangiliklar paydo boʻlmoqda. Bular katta hajmdagi ma’lumotni oʻzida saqlay oladigan CD-ROM kompakt disklaridagi tashqi optik eslab qolish qurilmalari, gippermatnli dasturiy vositalar, multi va gippermediya vositalari, “virtual borliq” tizimlari va boshqalar. Multmediyali texnik vositalarga ega boʻlgan kompyuterlar video va audio axborotlarning didaktik imkoniyatlaridan foydalana oladi. Gipermatn tizimlari yordamida matnning oʻzida murojaatlarni tashkil qilsa boʻladi, bu esa kalit soʻzlar yordamida kerakli ma’lumotni izlashni osonlashtiradi. Gipermediya tizimlari faqat matnni emas, balki tasvirni, raqamlashtirilgan tovushni, rasmlarni, multfilm va videofilmlarni oʻzaro bogʻlash imkonini beradi. Bunday tizimlardan foydalanish elektron qoʻllanmalari, spravochniklarni, kitoblarni, ensiklopediyalarni yaratish va kompakt disklar yordamida tarqatish imkonini beradi. Axborot telekommunikatsion tarmoqlarning rivoji esa sayyoramizning turli nuqtalarida saqlanayotgan katta hajmdagi ma’lumotga erishish imkonini yaratadi va shu bilan birga distansion ta’lim tizimlari rivojiga turtki beradi.
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
                        <a href="{{ route('multimedia.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Multimedia tushunchasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Multimedia imkoniyatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Multimediyaning dasturiy ta’minoti</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Taqdimotlar muharrirlari</h5>
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
            ["Multimedia so'zi nimani anglatadi?",
                ["Bir nechta muloqot vositalarining kombinatsiyasi", "Yagona ovoz vositasi", "Faqat matnli axborot", "Faqat video axborot"]],
            ["Multimedia tizimiga qaysi texnik ta'minotlar kiradi?",
                ["Ovoz kartasi, ovoz kuchaytirgich, karnay", "Printer, skaner, sichqoncha", "Monitor, klaviatura, sichqoncha", "Ovoz yozuvchi, magnit tasmasi, sichqoncha"]],
            ["Multimedia tizimlari qaysi sohalarda keng qo'llaniladi?",
                ["Ta'lim va kasbga tayyorlash, nashriyot, reklama", "Tibbiyot, avtomobil sanoati", "Qishloq xo'jaligi, avtomobil transporti", "Arxitektura, san'at"]],
            ["Multimedia kompyuterlari nima uchun ishlatiladi?",
                ["Ovoz va video bilan ishlash uchun", "Faqat matnli hujjatlar bilan ishlash uchun", "Matematika hisob-kitoblari uchun", "Fayllarni saqlash uchun"]],
            ["Multimedia dasturiy ta'minoti nimaga xizmat qiladi?",
                ["Ovoz, video va boshqa axborotlarni boshqarish uchun", "Tarmoq xavfsizligini ta'minlash uchun", "Fayllarni siqish uchun", "Printerni boshqarish uchun"]],
            ["Avtomatlashtirilgan o'rgatish tizimlari nima uchun mo'ljallangan?",
                ["Turli fanlar bo'yicha avtomatlashtirilgan o'qitish uchun", "Ovozli qo'ng'iroqlar uchun", "Videolarni tahrirlash uchun", "Fayllarni uzatish uchun"]],
            ["Kasbiy ta'limda multimedia tizimlarining roli qanday?",
                ["Bilimlarni chuqurlashtirish va o'qitish muddatini qisqartirish", "To'g'ridan-to'g'ri tajriba o'tkazish uchun", "Foydalanuvchilar o'rtasida muloqot qilish uchun", "Matnli hujjatlarni tahrirlash uchun"]],
            ["Multimedia tizimlarining asosiy komponentlari qaysilar?",
                ["Ovoz, video, matn", "Foydalanuvchi interfeysi, ma'lumotlar bazasi", "Elektron pochta, matnli hujjatlar", "Klaviatura, sichqoncha, monitor"]],
            ["Multimedia tizimlarining ta'limda qo'llanilishi qanday afzalliklarni beradi?",
                ["O'qituvchilar sonini oshirish, vaqtni tejash", "Fayllarni tezkor saqlash", "Tarmoq xavfsizligini ta'minlash", "Katta hajmli ma'lumotlarni siqish"]],
            ["Kompyuterli dars beruvchi tizimlar nima uchun samarali hisoblanadi?",
                ["Bilimlarni o'zlashtirish va nazorat qilishni samarali tashkil qilish uchun", "Ovozli muloqot qilish uchun", "Fayllarni uzatish uchun", "Tarmoqda ishlash uchun"]]
        ];
    </script>
@endsection
