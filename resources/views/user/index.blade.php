@extends('user.header_footer')

@section('home')class="active"@endsection

@section('main')

    <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('assets/img/banner.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">SMART ta'lim muhitida<br>Axborot-kommunikasiya texnologiyalari fanini o‘qitishning metodik ta'minotini takomillashtirish.</h2>
            <p data-aos="fade-up" data-aos-delay="200">Furqatjon Irsaliyev</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="btn-get-started">Muallif haqida</a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Raqamli axborot texnologiyalari fanining predmeti, maqsadi va vazifalari</h3>
                    <p class="fst-italic">
                        Raqamli axborot texnologiyalari – hisoblash texnikasi vositalari bilan ma’lumotlarni yaratish, saqlash, qayta ishlash va uzatish usullari, hamda ushbu vositalarni faol yuritish jarayonining tamoyillari va ularni boshqarish usularini tizimlashtiruvchi texnik fan.
                        Raqamli axborot texnologiyalari fanining vazifalari:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Hisoblash texnika vositalarini ishlab chiqish va faol yuritishni tashkil qilish.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Samarali interfeysni ishlab chiqish va tashkil qilish.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ma’lumotlarni kiritish, qayta ishlash, saqlash va chiqarish.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Tarmoqlarni ishlab chiqish va faol yuritishni tashkil qilish.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Axborot tizimlarniishlab chiqish va faol yuritishni tashkil qilish.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Axborotlarni himoyalash.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Dasturlash.</span></li>
                    </ul>
                    <a href="#" class="read-more"><span>Ko'proq o'qish</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Talabalar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Kurslar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Tadbirlar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p>O'qituvchilar</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Axborot tushunchasi. </h3>
                        <p>
                            Oʻzbekiston Respublikasining 2002 yil 12 dekabrdagi 439-II son “Axborot erkinligi prinsiplari va kafolatlari toʻgʻrisida”gi Qonuniga binoan, axborot - manbalari va taqdim etilish shaklidan qat’iy nazar shaxslar, predmetlar, faktlar, voqealar, hodisalar va jarayonlar toʻgʻrisidagi ma’lumotlardir.
                            Axborot keng qamrovli tushuncha boʻlib, unga quyidagicha ta’riflar ham berish mumkin:
                        </p>
                        <div class="text-center">
{{--                            <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>--}}
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>1</h4>
                                <p>Dalil, voqea, hodisa, predmet, jarayon kabi obyektlar haqidagi bilim hamda tushunchalar yoki buyruqlar</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-gem"></i>
                                <h4>2</h4>
                                <p>Ma’lum xos matnda aniq ma’noga ega tushunchalarni ichiga olgan dalil, voqea, hodisa, predmet, jarayon, taqdimot kabi obyektlar haqidagi bilimlar majmui</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-inboxes"></i>
                                <h4>3</h4>
                                <p>Qiziqish uygʻotishi mumkin boʻlgan, saqlanishi va qayta ishlanishi lozim boʻlgan jami dalil va ma’lumotlar</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">

                <div id="btn1" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item">
                        <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborot sifati</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn2" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item">
                        <i class="bi bi-infinity" style="color: #5578ff;"></i>
                        <h3><a href="" style="pointer-events: none;" style="pointer-events: none;" class="stretched-link">Axborotning reprezentativligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn3" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item">
                        <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                        <h3><a href="" style="pointer-events: none;" style="pointer-events: none;" class="stretched-link">Axborotning mazmundorligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn4" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="400">
                    <div class="features-item">
                        <i class="bi bi-nut" style="color: #e361ff;"></i>
                        <h3><a href="" style="pointer-events: none;" style="pointer-events: none;" class="stretched-link">Axborotning yetarliligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn5" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="500">
                    <div class="features-item">
                        <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                        <h3><a href="" style="pointer-events: none;" style="pointer-events: none;" class="stretched-link">Axborotninng aktualligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn6" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="600">
                    <div class="features-item">
                        <i class="bi bi-star" style="color: #ffa76e;"></i>
                        <h3><a href="" style="pointer-events: none;" style="pointer-events: none;" class="stretched-link">Axborotning oʻz vaqtidaligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn7" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="700">
                    <div class="features-item">
                        <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborotning aniqligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn8" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="800">
                    <div class="features-item">
                        <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborotning ochiqligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn9" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="900">
                    <div class="features-item">
                        <i class="bi bi-command" style="color: #b2904f;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborotning ishonarliligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn10" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="1000">
                    <div class="features-item">
                        <i class="bi bi-dribbble" style="color: #b20969;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborotning barqarorligi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn11" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="1100">
                    <div class="features-item">
                        <i class="bi bi-activity" style="color: #ff5828;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborot oʻlchovlari</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div id="btn12" class="col-lg-3 col-md-4 openModalButton" data-aos="fade-up" data-aos-delay="1200">
                    <div class="features-item">
                        <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                        <h3><a href="" style="pointer-events: none;" class="stretched-link">Axborotning paragmatik oʻlchovi</a></h3>
                    </div>
                </div><!-- End Feature Item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kurslar</h2>
            <p>Ommabop kurslar</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="{{ asset('assets/img/course-1.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Computers</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('computers') }}">ZAMONAVIY KOMPYUTERLAR</a></h3>
                            <p class="description">Ushbu bo'limda siz zamonaviy kompyuterlar, ularning ajdodlari haqida bilimlarga ega bo'lasiz.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="course-item">
                        <img src="{{ asset('assets/img/course-2.jpg') }}" class="img-fluid img-thumbnail" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Software</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('operating') }}">OPERATSION TIZIMLAR</a></h3>
                            <p class="description">Operatsion tizimlar, ularning ishlashi va turlari haqida ma'lumotlar berilgan.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;35
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="course-item">
                        <img src="{{ asset('assets/img/course-3.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('internet') }}">INTERNET TARMOG'I</a></h3>
                            <p class="description">Ushbu bo'lim internet tarixi, zamonaviy internet, internetdan foydalanish haqida hikoya qiladi.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Item-->

            </div>

            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="course-item">
                        <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/copilot_excel_1920x1080?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=750&qlt=100&fit=constrain" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('excel') }}">ELEKTRON JADVAL MUHARRIRLARI</a></h3>
                            <p class="description">Microsoft Excel – bu Microsoft Office to’plamining bir qismi bo’lgan kuchli elektron jadvallar dasturi.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="500">
                    <div class="course-item">
                        <img src="https://www.webopedia.com/wp-content/uploads/1996/09/Multimedia.jpeg" class="img-fluid img-thumbnail" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Software</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('multimedia') }}">MULTIMEDIANING ASOSIY TUSHUNCHALARI</a></h3>
                            <p class="description">Multimedia — kompyuterning matn, grafik, tovushli va videomaʼlumotlar bilan ishlashga imkoniyati.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;35
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="600">
                    <div class="course-item">
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20230706/pngtree-3d-rendered-graphic-design-on-computer-image_3815260.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('graphics') }}">KOMPYUTER GRAFIKASI</a></h3>
                            <p class="description">Kompyuter grafikasi — grafik displey (monitor) ekranida tasviriy informatsiyani vizuallash („koʻrinadigan“ qilish).</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Item-->
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="700">
                    <div class="course-item">
                        <img src="https://ninjasites.com/images/blog/webpage-creation.png?v=1684153977260389102" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('web') }}">WEB-SAHIFA YARATISH TEXNOLOGIYALARI</a></h3>
                            <p class="description">Veb-sahifa gipermatnli hujjatdir. Veb-brauzer yordamida koʻrish mumkin.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="800">
                    <div class="course-item">
                        <img src="https://img-b.udemycdn.com/course/750x422/287924_9dd1_2.jpg" class="img-fluid img-thumbnail" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Software</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('dreamweaver') }}">DREAMWEAVER DASTURIDA WEB-SAHIFA YARATISH</a></h3>
                            <p class="description">Dreamweaver dasturi, ushbu dastur web-sahifa va web-saytlar yaratish uchun qulay dasturiy vosita hisoblanadi.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;35
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="900">
                    <div class="course-item">
                        <img src="https://www.kaspersky.com/content/en-global/images/repository/isc/2017-images/What-is-Cyber-Security.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$0</p>
                            </div>

                            <h3><a href="{{ route('information') }}">AXBOROTLARNI HIMOYALASHNING TEXNIK VA
                                    DASTURIY TA’MINOTI
                                </a></h3>
                            <p class="description">Axborot xavfsizligi (inglizcha: Information Security, shuningdek, inglizcha: InfoSec) — axborotni ruxsatsiz kirish, buzish yoki yoʻq qilishning oldini olish amaliyotidir.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">Furqatjon Irsaliyev</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Item-->
            </div>

        </div>


    </section><!-- /Courses Section -->

    <section class="section">
        <div class="container section-title" id="contact" data-aos="fade-up">
            <h2>Chat</h2>
            <p>Sun'iy intellekt</p>
        </div><!-- End Section Title -->

        <div class="chat">

            <!-- Header -->
            <div class="top">
                <img src="../assets/img/chat_icon.png" class="img-fluid" width="50px" alt="Avatar">
                <div>
                    <p>Chat GPT</p>
                    <small>Online</small>
                </div>
            </div>
            <!-- End Header -->

            <!-- Chat -->
            <div class="messages">
                <div class="left message">
                    <img src="../assets/img/chat_icon.png" class="img-fluid" width="50px" alt="Avatar">
                    <p>Men muloqotga tayyorman! Chatni boshladik!</p>
                </div>
            </div>
            <!-- End Chat -->

            <!-- Footer -->
            <div class="bottom">
                <form>
                    <input type="text" id="message" name="message" placeholder="Xabar kiriting..." autocomplete="off">
                    <button type="submit"></button>
                </form>
            </div>
            <!-- End Footer -->

        </div>
    </section>
    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Ma'lumot</h2>
            <p>Muallif haqida</p>
        </div><!-- End Section Title -->
        <div class="container" id="author">

            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('assets/img/author.png') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Furqatjon Irsaliyev</h4>
                            <span>Muallif</span>
                            <p>
                                O'quv-uslubiy boshqarma boshlig'i o'rinbosari, Amaliy matematika va axborot texnologiyalari kafedrasi o'qituvchisi.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Trainers Index Section -->

    <!-- contact Section -->
    <section  class="contact section">
        <!-- Section Title -->
        <div class="container section-title" id="contact" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Bog'lanish uchun</p>
        </div><!-- End Section Title -->

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18466.489784279143!2d68.80049760924345!3d40.51086600655788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b206e854a49b19%3A0xdc0ece43c3ab9b61!2z0JPRg9C70LjRgdGC0LDQvdGB0LrQuNC5INCT0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDQo9C90LjQstC10YDRgdC40YLQtdGC!5e1!3m2!1sru!2s!4v1723994397642!5m2!1sru!2s" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Manzil</h3>
                            <p>Guliston davlat universiteti</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Telefon raqam</h3>
                            <p>+998 97 331 12 00</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>mail@guldu.uz</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Xabar yuborish</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

@endsection

@section('script')
    <script>
        //Broadcast messages
        $("form").submit(function (event) {
            event.preventDefault();

            //Stop empty messages
            if ($("form #message").val().trim() === '') {
                return;
            }

            //Disable form
            $("form #message").prop('disabled', true);
            $("form button").prop('disabled', true);

            $.ajax({
                url: "/chat",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    "model": "gpt-3.5-turbo",
                    "content": $("form #message").val()
                }
            }).done(function (res) {

                //Populate sending message
                $(".messages > .message").last().after('<div class="right message">' +
                    '<p>' + $("form #message").val() + '</p>' +
                    '<img src="../assets/img/chat_icon.png" alt="Avatar">' +
                    '</div>');

                //Populate receiving message
                $(".messages > .message").last().after('<div class="left message">' +
                    '<img src="../assets/img/chat_icon.png" alt="Avatar">' +
                    '<p>' + res + '</p>' +
                    '</div>');

                //Cleanup
                $("form #message").val('');
                $(document).scrollTop($(document).height());

                //Enable form
                $("form #message").prop('disabled', false);
                $("form button").prop('disabled', false);
            });
        });

    </script>
@endsection
