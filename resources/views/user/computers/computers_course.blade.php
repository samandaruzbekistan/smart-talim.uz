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
                        <h1>Zamonaviy kompyuterlar</h1>
                        <p class="mb-0">Hozirgi vaqtda inson hayotini kompyuterlarsiz tassavur etib boʻlmaydi. Kompyuter ish yuritishni osonlashtiradi, yangi hujjatlar va xar xil matnlarni tez va sifatli tayyorlash, tarmoq  orqali oʻzaro axborot almashish, murakkab hisob ishlarini tezkor bajarish va ishlab chiqarish jarayonini modellashtirish imkoniyatini beradi. Shuning uchun har bir inson u qaysi soha mutaxassisi boʻlmasin axborot texnologiyalari boʻyicha yetarli darajada bilim va koʻnikmaga ega boʻlishi lozim. </p>
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
                    <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
                    <h3>Zamonaviy kompyuterlar</h3>
                    <p>
                        Odamzod paydo boʻlgandan buyon dastlabki hisoblash vositasi sifatida odamlarning barmoqlari xizmat qilgan. Ammo ular yordamida faqat sanash ishlarni bajarishgan (sabab barmoqlar soni cheklangan). Shuning uchun asta sekin sunʻiy hisoblash vositalari vujudga kela boshlagan. Ulardan birinchilari boʻlib toshlar va tayoqchalar boʻlgan. Soʻngra abak (grek, misrlik, rimlik, xitoylik suan-pan va yaponlarning soroban), Neper tayoqchalari, rus schyotlari vujudga kelgan.
                        1973 yildan boshlab EHM tarixining yangi sahifasi, personal kompyuterlar sahifasi boshlandi. Shu yilda Fransiyaning Truong Trong Ti firmasi tomonidan birinchi personal kompyuter yaratildi. Shu bilan birga 1973 yilda dunyoga taniqli XEROX firmasi tomonidan “Alto” nomli shaxsiy kompyuter yaratilgan. Ushbu kompyuterda birinchi boʻlib fayllar va dasturlarni oynalar koʻrinishida ochish qoʻllanilgan.
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
                    <a href="{{ route('computers.1') }}">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-play-circle text-success"></i> Kompyuter va uning turlari</h5>
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
                    <h3>Imtihon:</h3>
                    <a href="{{ route('computers.exam') }}">
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
