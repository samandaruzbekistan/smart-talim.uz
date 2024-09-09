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
                            <h1>INTERNET TARMOG'I</h1>
                            <p class="mb-0">
                                <b>Internet (lotincha: inter –aro va net –tarmoq)</b> – standart internet protokoli (IP) orqali maʼlumot almashuvchi kompyuter tarmoqlarining butunjahon va omma uchun ochiq toʻplamidir. Bu maʼlumotlarning asosiy tashuvchi protokoli TCP/IP dir. TCP/IP oʻzaro bogʻliq protokollar yigʻindisi boʻlib, internetda maʼlumot tarqalishida asosiy oʻrin egallaydi. Internet tarmogʻini minglab akademik, davlat, tijorat va xonadon tarmoqlari tashkil etadi. Internet elektron pochta, chat hamda oʻzaro bogʻlangan sahifalar va boshqa Butunjahon oʻrgimchak toʻri servislaridan tashkil topadi.
                            </p>
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
                        <img src="https://resizer.mail.ru/p/503ea229-9208-5294-9944-cd575361dcbc/AQAK6f1woeGSfH5cfjZwM3xbjnCMpSioCWxVFECs7YxT8OGtYuJKAfg0oSQSmmenpL29Ud50jmXJ9eVKMKIQCzQcf_M.jpg" class="img-fluid" alt="">
                        <h3>Internet</h3>
                        <p>
                            Internet — katta (global) va kichik (lokal) kompyuter tarmoqlarini oʻzaro bogʻlovchi butunjahon kompyuter tizimi. Unda geografik oʻrni, zamon va makondan qatʼiy nazar, ayrim kompyuter va mayda tarmoqlar oʻzaro hamkorlikda global informatsiya infratuzilmasini tashkil etadi. Qaydnomalar tizimi bilan boshqariladigan barcha hosila tarmoqlar hamkorlikda isteʼmolchilarga ma’lumotni saqlash, eʼlon qilish, joʻnatish, qabul qilish, izlash va maʼlum boʻlgan barcha variantlar (matn, tovush, videotasvir, fotosurat, grafika, musiqa tarzida va b. koʻrinishlar) da axborot almashinishga imkon yaratadi
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
                        <a href="{{ route('internet.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi</h5>
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
                        <h3>Imtihon:</h3>
                        <a href="{{ route('internet.exam') }}">
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
