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
                            <h1>AXBOROTLARNI HIMOYALASHNING TEXNIK VA DASTURIY TA’MINOTI</h1>
                            <p class="mb-0">Barcha hujumlar Internet ishlashi prinsiplarining qandaydir  chegaralangan soniga asoslanganligi sababli masofadan boʻladigan namunaviy hujumlami ajratish va ularga qarshi qandaydir kompleks choralarni tavsiya etish mumkin.</p>
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
                        <img src="https://media.licdn.com/dms/image/D5612AQE0r5WC8r0HQg/article-cover_image-shrink_720_1280/0/1657711469335?e=2147483647&v=beta&t=y46kqfqImgi-IbshBGRs3lMz1HCTBvL8RjFAILShitg" class="img-fluid" alt="">
                        <h3>AXBOROTLARNI HIMOYALASHNING TEXNIK VA DASTURIY TA’MINOTI</h3>
                        <p>
                            Tarmoq trafigini tahlillash. Serverdan Internet tarmogʻi bazaviy protokollari FTP (Fayllarni uzatish protokoli) va TELNET (Virtual terminal protokoli) boʻyicha foydalanish uchun foydalanuvchi identifikatsiya va autentifikatsiya muolajalarini oʻtishi lozim. Foydalanuvchini identifikatsiyalashda axborot sifatida uning identilikatori (ismi) ishlatilsa, autentifikatsiyalash uchun parol ishlatiladi.
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
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter virus tushunchasi va ularning turlari</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->


    </main>

@endsection
