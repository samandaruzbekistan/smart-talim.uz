
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Smart - ta'lim</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- End JavaScript -->

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Mentor
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
            <h1 class="sitename">Smart - ta'lim</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ asset('') }}#hero" @yield('home')>Bosh sahifa<br></a></li>
                <li><a href="{{ asset('') }}#why-us">Fan</a></li>
                <li><a href="{{ asset('') }}#courses">Axborot haqida</a></li>
                <li><a href="{{ asset('') }}#trainers-index" @yield('course')>Kurslar</a></li>
                <li><a href="{{ asset('') }}#author">Muallif</a></li>
                <li><a href="{{ asset('') }}#contact">Bog'lanish</a></li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#">Kirish</a>

    </div>
</header>

@yield('main')

<footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="#" class="logo d-flex align-items-center">
                    <span class="sitename">SMART - TA'LIM</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Guliston shahar</p>
                    <p>4 - mavze, Guliston davlat universiteti</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+998 97 331 12 00</span></p>
                    <p><strong>Email:</strong> <span>mail@guldu.uz</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Tezkor o'tish</h4>
                <ul>
                    <li><a href="#">Bosh sahifa</a></li>
                    <li><a href="#">Fan</a></li>
                    <li><a href="#">Kurslar</a></li>
                    <li><a href="#">Muallif</a></li>
                    <li><a href="#">Bog'lanish</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Bizning kurslar</h4>
                <ul>
                    <li><a href="#">Zamonaviy kompyuterlar</a></li>
                    <li><a href="#">Operatsion tizimlar</a></li>
                    <li><a href="#">Internet tarmog'i</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Xabar berish</h4>
                <p>Xurmatli fondalanuvchi saytda biror kamchilik topsangiz bizga xabar bering!</p>
                <form action="" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Yuborish"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">SMART - TA'LIM</strong> <span>Barcha huquqlar himoyalangan</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Developed by <a href="https://t.me/Samandar_developer">Samandar Sariboyev <img src="assets/img/badge.png" alt="" width="18px"></a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Modal Structure -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalTitle" aria-invalid="modalTitle"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tushunarli</button>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- Text data --}}
<script src="{{ asset('assets/js/text_data.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('script')

<script>
    $(document).ready(function() {
        $('.openModalButton').click(function() {
            let id = $(this).attr('id');
            let titleText = $(this).find('h3 a').text();
            $('#modalBody').text(data_json[id]);
            $('#modalTitle').text(titleText);
            $('#myModal').modal('show');
        });
    });

    let currentQuestionIndex = 0;
    let score = 0;

    const questionElement = document.getElementById('question');
    const answersElement = document.getElementById('answers');
    const nextButton = document.getElementById('next-btn');

    function showQuestion() {
        // Clear previous answers
        answersElement.innerHTML = '';

        // Get the current question and answers
        const currentQuestion = quiz[currentQuestionIndex];
        const questionText = currentQuestion[0];
        const answers = currentQuestion[1];
        const correctAnswer = answers[0];

        // Display the question text
        questionElement.innerText = questionText;

        // Shuffle and display the answers
        const shuffledAnswers = answers.sort(() => Math.random() - 0.5);
        shuffledAnswers.forEach(answer => {
            const button = document.createElement('button');
            button.innerText = answer;
            button.classList.add("btn");
            button.classList.add("btn-secondary");
            button.style.marginRight = "15px";
            button.style.marginTop = "5px";
            button.onclick = () => selectAnswer(button, correctAnswer);
            answersElement.appendChild(button);
        });
    }

    function selectAnswer(button, correctAnswer) {
        if (button.innerText === correctAnswer) {
            button.style.backgroundColor = 'green';
            score++;
        } else {
            button.style.backgroundColor = 'red';
        }

        // Disable all answer buttons
        Array.from(answersElement.children).forEach(btn => {
            btn.disabled = true;
            if (btn.innerText === correctAnswer) {
                btn.style.backgroundColor = 'green';
            }
        });

        nextButton.disabled = false;
    }

    function nextQuestion() {
        currentQuestionIndex++;
        nextButton.disabled = true;

        if (currentQuestionIndex < quiz.length) {
            showQuestion();
        } else {
            showResults();
        }
    }

    function showResults() {
        questionElement.innerText = `Siz ${quiz.length} ta savoldan ${score} tasiga to'g'ri javob berdingiz!`;
        answersElement.innerHTML = '';
        nextButton.style.display = 'none';
    }

    // Initialize the quiz
    showQuestion();
</script>

</body>

</html>
