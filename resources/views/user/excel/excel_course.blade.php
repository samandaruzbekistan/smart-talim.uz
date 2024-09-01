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
                        <h1>ELEKTRON JADVAL MUHARRIRLARI</h1>
                        <p class="mb-0">Elektron jadvallar hayotning har xil sohasida uchraydigan, avvalambor hisoblash va iqtisodiy masalalarni yechishda, jumladan, berilganlarni tez oʻzgartirib turuvchi masalalarni tezkor ravishda qayta ishlab chiqishda, masalan, bank hujjatlari bilan ishlash kabi keng koʻlamli masalalarni yechishda qoʻllaniladigan oʻta quvvatli vosita hisoblanadi </p>
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
                    <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/copilot_excel_1920x1080?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=750&qlt=100&fit=constrain" class="img-fluid" alt="">
                    <h3>ELEKTRON JADVAL MUHARRIRLARI</h3>
                    <p>
                        Hisoblash elektron jadvalining dastlabki dasturi 1979-yili VisiCals (Visiblen calculators-koʻrinib turuvchi kalkulyator) nomi bilan Software Arts firmasida ishlab chiqilqan. Bu dastur Apple II kompyuteri uchun ishlab chiqilgan va koʻp jihatdan uning bozorda ommabopligi aniqlandi. 1981-yil IBM PC kompyuteri paydo boʻlishi bilan bu tipdagi kompyuterlar uchun elektron jadvallar ishlab chiqila boshlandi.
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
                    <a href="{{ route('excel.1') }}">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-play-circle text-success"></i> Elektron jadval muharrirlari, ularning vazifasi va imkoniyatlari</h5>
                        </div>
                    </a>
                    <a href="{{ route('excel.2') }}">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-play-circle text-success"></i> Ma’lumot turlari va formatlari</h5>
                        </div>
                    </a>
                    <a href="{{ route('excel.3') }}">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-play-circle text-success"></i> Elekrton jadvallarda grafik obyektlardan foydalanish</h5>
                        </div>
                    </a>
                    <a href="{{ route('excel.4') }}">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-play-circle text-success"></i> Elektron jadvallarda hisoblashlarni bajarish</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </section><!-- /Courses Course Details Section -->


</main>

@endsection
