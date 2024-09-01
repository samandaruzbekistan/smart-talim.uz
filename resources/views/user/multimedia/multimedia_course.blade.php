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
                            <h1>MULTIMEDIANING ASOSIY TUSHUNCHALARI</h1>
                            <p class="mb-0">90-yillarga kelib shaxsiy kompyuterlarning quvvati yetarlicha rivojlangach, kompyuterning  ovoz  va  video  bilan  ishlash  masalasi  oʻrtaga  tashlandi.  Bu muammolarni  hal  qilish  uchun  foydalanuvchilar  orasida  multimedia  deb  nom olgan  texnik  uskunalar  yaratildi.  Bu  uskunalar  tarkibiga  ovoz  kartasi,  ovoz kuchaytirgich  va  karnay  hamda  kompakt  disk  nomini  olgan  doimiy  tashqi xotira diskyuritkichi  kiradi.  Bu  uch  qurilma  bilan  taʻminlangan  kompyuterlar multimedia kompyuterlari deb ataladi.  </p>
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
                        <img src="https://www.webopedia.com/wp-content/uploads/1996/09/Multimedia.jpeg" class="img-fluid" alt="">
                        <h3>MULTIMEDIANING ASOSIY TUSHUNCHALARI</h3>
                        <p>
                            Ovoz  bilan  video  kompyuter  imkoniyatlarini  qanchalik kengaytirganligini sezish  uchun  kompyuteringizning  ovoz  karnaylarini oʻchirib qoʻying va ovozsiz ishlashga qancha vaqt sabringiz yetishini tekshirib koʻring. Aminmanki, bir soat ham oʻtmay ovozni yana yoqib qoʻyasiz.
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
                                <h5><i class="bi bi-play-circle text-success"></i> Multimedia imkoniyatlari</h5>
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


    </main>

@endsection
