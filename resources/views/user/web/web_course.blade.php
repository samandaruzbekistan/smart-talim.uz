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
                            <h1>WEB-SAHIFA YARATISH TEXNOLOGIYALARI</h1>
                            <p class="mb-0">Web-sahifa — World Wide Webda web-resurs sifatida ishlaydigan hujjat. Web-sahifani grafik jihatdan koʻrsatish uchun veb-brauzer kerak. Bu web-sahifalarni Internetdan olish imkoniyatiga ega boʻlgan dasturiy taʼminot hisoblanadi. Agar veb-brauzer orqali kirilsa, bu monitor yoki mobil qurilmadagi web-sahifa sifatida koʻrsatilishi mumkin. Odatda web-sahifalarni boshqa web-sahifalarda koʻrib chiqish uchun havolalar (linklar) deb ataladigan gipermurojaatni oʻz ichiga olgan gipermatndan foydalaniladi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">WEB-SAHIFA YARATISH TEXNOLOGIYALARI</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="https://images04.nicepage.com/feature/511177/create-any-website-with-powerful-website-builder-website-builder.jpg" class="img-fluid" alt="">
                        <h3>WEB-SAHIFA YARATISH TEXNOLOGIYALARI</h3>
                        <p>
                            Gipermurojaat (boshqa nomlari giperlink yoki qisqacha link)  kompyuterdagi hujjatning bir joydan boshqa joyga yoki bir hujjatdan boshqa hujjatga oʻtishi.Ushbu amallar a  juft tegi yordamida amalga oshiriladi.Bu tegning HREF parametri bor boʻlib, uning qiymati oʻtish joyi manzili boʻladi.Web-sahifaning mazkur teg yozilgan joyi esa oʻtish nuqtasi deyiladi. Havolalar bir xil hujjatning boshqa nuqtasiga oʻtish, butunlay boshqacha hujjatni ochish yoki butunlay boshqa maʼlumot turiga yoʻnaltirish uchun ishlatilishi ham mumkin.
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
                        <a href="{{ route('web.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifa yaratuvchi dasturiy vositalar tasnifi va ularning imkoniyatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('web.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifaning asosiy tuzilmasi</h5>
                            </div>
                        </a>

                        <a href="{{ route('web.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> HTML tilida Web-sahifa ustida ishlash</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->


    </main>

@endsection
