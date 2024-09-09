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
                            <h1>KOMPYUTER GRAFIKASI</h1>
                            <p class="mb-0">Zamonaviy kompyuter texnolgiyasida kompyuter grafikasi bilan ishlash eng ommabop yoʻnalishlardan biri boʻlib bormoqda. Hozirda bu yoʻnalish bilan hatto professional rassom va dzaynerlar ham shugʻullanmoqda. Kompyuter grafikasi- kompyuterdan foydalanish jarayonidagi eng mashhur yoʻnalishlardan biri. Kompyuter grafikasisiz har qanday zamonaviy multimediya dasturi ish yurita olmaydi. Redaksiya va nashriyotlarda koʻpgina tasvir va bezak ishlari grafika dasturlari orqali amalaga oshiriladi. Internetning rivojlanishi bilan esa grafik dasturlar keng qoʻllanila boshlandi </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">KOMPYUTER GRAFIKASI</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="https://fantasiapix.com/wp-content/uploads/2024/03/what-is-a-digital-graphic.png" class="img-fluid" alt="">
                        <h3>KOMPYUTER GRAFIKASI</h3>
                        <p>
                            Kompyuter grafikasining juda tez rivojlanib borishi va undagi texnikaviy, dasturiy vositalarining yangilanib borishi ushbu sohaning hamisha takomillashtirishga, bu sohadagi yangi yoʻnalishlarni tinmay oʻrganib borishni taqozo etadi. Oxirgi yillarda bu sohada juda katta oʻzgarishlar (siljishlar) yuz berdi, ya’ni 16 mln.dan ortiq rang va rang turlarini oʻzida aks ettira oladigan displeylar, grafik axborotlarni (paper part) kirituvchi moslama - skanerlar, grafik ish majmualari; dasturiy vositalar sohasida esa haqiqiy kompyuter dunyosini kashf qila oladigan amaliy dasturlar vujudga keldi. Kompyuter grafikasi, uning turlari va asosiy tushunchalar Kompyuter grafikasi Axborotni grafik shaklda ishlab chiqish, taqdim etish, ulrga ishlov berish, shuningdek, grafik obʻektlar va fayllarda boʻlgan nografik obʻektlar oʻrtasida bogʻlanish oʻrnatishni informatikada kompyuter grafikasi deb ataladi.
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
                        <a href="{{ route('graphics.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter grafikasi turlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('graphics.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Adobe Photoshop rasm tahrirlagichi</h5>
                            </div>
                        </a>
                        <h3>Imtihon:</h3>
                        <a href="{{ route('graphics.exam') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-mortarboard text-danger"></i> Imtihon</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->


    </main>

@endsection
