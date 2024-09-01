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
                            <h1>Operatsion tizimlar</h1>
                            <p class="mb-0">
                                Operatsion tizim - bu maxsus dastur boʻlib, bu dastur asosiy vazifasi - kompyuter ishini boshqarish, kompyuter va foydalanuvchi oʻrtasida muloqotni  oʻrnatish, tashqi qurilmalar ishlash holatlarini sozlash va ular bilan muloqotni oʻrnatish, har xil dasturlarni ishga tushirish va ular ishlash holatlarini ta’minlash.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">Operatsion tizimlar</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="assets/img/course-2.jpg" class="img-fluid" alt="">
                        <h3>Operatsion tizimlar</h3>
                        <p>
                            Hisoblash tizimini mavqeini asosan uning operatsion tizimi belgilaydi. Shunga qaramasdan, hisoblash tizimidan faol foydalanuvchilar, koʻpincha, unga ta’rif berishda anchayin qiynaladilar. Bu narsa, qisman, OT bir-biri bilan unga bogʻliq boʻlmagan ikkita funktsiyani bajarishi bilan bogʻliqdir: bu foydalanuvchiga, dasturchiga kengaytirilgan, virtual mashina imkoniyatini yaratish bilan qulaylik yaratish va ikkinchi kompyuterning resurslarini ratsional boshqarish bilan undan samarali foydalanishni oshirishdir.
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
                        <a href="{{ route('operating.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Umumiy operatsion tizimlar</h5>
                            </div>
                        </a>
                        <a href="{{ route('operating.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter va mobil qurilmalar operatsion tizimlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('operating.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Xizmat koʻrsatuvchi dasturlar</h5>
                            </div>
                        </a>
                        <a href="{{ route('operating.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Dasturiy ta’minot</h5>
                            </div>
                        </a>

                        <a href="{{ route('operating.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Ta’lim tizimida axborot madaniyatining ahamiyati</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->


    </main>

@endsection
