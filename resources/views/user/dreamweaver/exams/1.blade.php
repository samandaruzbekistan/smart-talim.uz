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
                            <h1>Imtihon - Test</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">DREAMWEAVER DASTURIDA WEB-SAHIFA YARATISH</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="courses-course-details section">
            <div class="container quiz-container">
                <h3>Imtixon: </h3>
                <h5 id="question"></h5>
                <div id="answers"></div>
                <button id="next-btn" onclick="nextQuestion()" class="btn btn-success mt-3 align-content-end">Keyingi savol <i class="bi bi-arrow-right-short"></i></button>
            </div>

        </section>
    </main>

@endsection


@section('script')
    <script>
        const quiz = [
            [
                "Dreamweaver dasturida Web-uzel yaratish nimani anglatadi?",
                [
                    "O'ziga sahifalarni birlashtirgan tizim",
                    "Bitta HTML sahifa yaratish",
                    "Faqat tekstli hujjatlar yaratish",
                    "Multimedia fayllar yaratish"
                ]
            ],
            [
                "Chiziqli struktura qanday tizimga misol bo'la oladi?",
                [
                    "Badiiy kitoblar, qo'llanmalar",
                    "Web-saytlar",
                    "Multimedia tizimlari",
                    "HTML fayllar"
                ]
            ],
            [
                "Chiziqli struktura uchun asosiy sahifa qanday nomlanadi?",
                [
                    "index.htm yoki main.htm",
                    "home.html",
                    "start.html",
                    "main.php"
                ]
            ],
            [
                "Ierarxik struktura qanday tuzilishga asoslanadi?",
                [
                    "Bo'ysunish printsipi",
                    "Barcha sahifalarning bir-biriga bog'lanishi",
                    "Chiziqli tartibda joylashish",
                    "Oddiy matnli tuzilma"
                ]
            ],
            [
                "Ko'p bog'lanishli strukturaning qanday xususiyati bor?",
                [
                    "Barcha sahifalar bir-biri bilan bog'langan bo'lishi kerak",
                    "Faqat bitta bosh sahifa bo'lishi kerak",
                    "Ierarxik tuzilishga ega bo'lishi kerak",
                    "Foydalanuvchilarga sahifalarga kirishni cheklaydi"
                ]
            ],
            [
                "Frame (freym) nima?",
                [
                    "Gipermatnli sahifaning alohida mustaqil qismi",
                    "Bitta sahifa ichidagi matn",
                    "Faylni saqlash formati",
                    "HTML sahifaning kodi"
                ]
            ],
            [
                "Frame qanday afzalliklarni beradi?",
                [
                    "Yuklanadigan ma'lumotlar hajmida tejash imkonini beradi",
                    "Ma'lumotlarni tahrirlash imkonini beradi",
                    "Rasmlarni kiritish imkonini beradi",
                    "Matnni oddiy ko'rinishda saqlaydi"
                ]
            ],
            [
                "Dreamweaver dasturida frame yaratish uchun qaysi ketma-ketlik bajariladi?",
                [
                    "Hujjatning frame strukturasini yaratish, gipermatnli fayllarni saqlash, frame parametrlarini belgilash",
                    "HTML kod yozish, sahifani saqlash, frame yaratish",
                    "Frame yaratish, sahifaga rasm qo'shish, sahifani chop etish",
                    "Sahifani chop etish, sahifani tahrirlash, frame yaratish"
                ]
            ],
            [
                "Frame qanday kamchiliklarga ega?",
                [
                    "Sahifalarning bir joydan boshqasiga ko'chirilishini cheklaydi",
                    "Frame ichidagi ma'lumotlarni o'qish qiyin",
                    "Rasmlar qo'shish imkoniyati yo'q",
                    "Ma'lumotlarni yuklash tezligi past"
                ]
            ],
            [
                "Frame strukturasini ishlab chiqishda Dreamweaver dasturi qanday imkoniyatlar beradi?",
                [
                    "Frame o'lchamlarini interfaol ko'rsatish va standart strukturalarni bir-biriga joylash",
                    "Matnli hujjatlar yaratish",
                    "Oddiy sahifalarni chop etish",
                    "HTML kodni avtomatik yaratish"
                ]
            ],
            ["Dreamweaver dasturining interfeysi nimalardan tashkil topgan?",
                ["Panellar va uskunalar", "Faqat kod muhiti", "Matn muharriri", "Brauzer oynasi"]],
            ["Dreamweaver dasturidagi 'Properties inspector' palitrasi qanday maqsadda ishlatiladi?",
                ["HTML sahifadagi obyektlarni tahrirlash va formatlash uchun", "Kodlarni yozish uchun", "Grafiklarni yaratish uchun", "Fayllarni saqlash uchun"]],
            ["Dreamweaver dasturining qaysi rejimi to'laligicha HTML-kodni tahrirlash uchun ishlatiladi?",
                ["Code rejimi", "Design rejimi", "Split rejimi", "WYSIWYG rejimi"]],
            ["Dreamweaver dasturida 'floating palettes' qanday tasniflanadi?",
                ["Ko'chib yuruvchi palitrlar", "Statik palitrlar", "Panellar", "Dokumentlar"]],
            ["Dreamweaver dasturining WYSIWYG rejimida hujjatlarni qanday tahrirlash mumkin?",
                ["Grafik interfeysda, HTML kodiga murojaat qilmasdan", "Faqat kod muhiti orqali", "Matn muharririda", "Brauzerda"]],
            ["Dreamweaver dasturida 'Split' rejimi qanday ishlaydi?",
                ["Kod va dizaynni bir vaqtning o'zida ko'rish imkonini beradi", "Faqat dizaynni ko'rsatadi", "Faqat kodni ko'rsatadi", "Hujjatlarni tahrirlamaydi"]],
            ["Dreamweaver dasturi qanday til va texnologiyalarni qo'llab-quvvatlaydi?",
                ["ASP, PHP, ColdFusion va JavaScript", "Faol HTML", "C++ va Java", "Matlab va R"]],
            ["Dreamweaver dasturining qaysi rejimi sahifani brauzerda qanday ko'rinishini taqdim etadi?",
                ["Design rejimi", "Code rejimi", "Split rejimi", "Preview rejimi"]],
            ["Dreamweaver dasturining qaysi qismida CSS Styles paneli joylashgan?",
                ["Interfeysda", "Kod muhiti oynasida", "Brauzerda", "Fayllar panelida"]],
            ["Dreamweaver dasturida 'mavjud palitralarni birlashtirish' funksiyasi qanday ataladi?",
                ["Modulli palitrlar", "Statik palitrlar", "Hujjatlar", "Vektorli grafika"]]
        ];
    </script>
@endsection
