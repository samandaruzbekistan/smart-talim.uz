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
                            <h1>Dasturiy ta’minot</h1>
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
                        <p>
                            <b>Dasturiy ta’minot</b> – har bir foydalanuvchining manfaatlarini koʻzlab, kompyuterlardan foydalanishni taʻminlaydigan barcha dasturlar va tegishli hujjatlar toʻplami.Tizim va amaliy dasturlarni farqlang. Dasturiy ta’minot quyidagicha ifodalanishi mumkin:
                        </p>

                        <p>
                            <b>Tizim dasturiy ta’minot.</b> Kompyuterning ishlashini taʻminlaydigan dasturlar toʻplami. Tizim dasturiy ta’minoti quyidagilarga boʻlinadi: asosiy va xizmat.Tizim dasturlari hisoblash tizimining ishlashini boshqarish, turli yordamchi funktsiyalarni (nusxa koʻchirish, sertifikatlar berish, test qilish, formatlash va boshqalar) bajarish uchun moʻljallangan. Asosiy dasturiy ta’minot oʻz ichiga oladi: OS; qobiq; tarmoq operatsion tizimlari.
                        </p>

                        <p>
                            <b>Xizmat dasturiy ta’minot.</b> Dasturlarni (utilitalarni) oʻz ichiga oladi: diagnostika; antivirus; tashuvchilarga xizmat koʻrsatish;arxivlash; tarmoqqa texnik xizmat koʻrsatish.
                        </p>

                        <p>
                            <b>Amaliy dasturiy ta’minot.</b> Muayyan fan sohasining ma’lum bir sinfi muammolarini hal qilish uchun dasturlar majmuasi. Amaliy dasturiy ta’minot faqat tizim dasturiy ta’minoti bilan ishlaydi. Amaliy dasturlarga amaliy dasturlar deyiladi.
                        </p>

                        <b>Ularga quyidagilar kiradi:</b><br>
                        -	Matn protsessorlari; <br>
                        -	Jadvalli protsessorlar;<br>
                        -	Ma’lumot bazasi;<br>
                        -	Integratsiyalashgan paketlar;<br>
                        -	Illyustrativ va biznes grafik tizimlari (grafik protsessorlar);<br>
                        -	Ekspert tizimlari;<br>
                        -	Oʻquv dasturlari;<br>
                        -	Matematik hisoblar, modellashtirish va tahlil qilish dasturlari;<br>
                        -	Aloqa dasturlari.<br>
                        <br>
                        <p>
                            <b>Dasturlash tizimlari.</b> Bu yangi dasturiy mahsulotlarni ishlab chiqish, disk raskadrovka va joriy etish uchun dasturlar toʻplamidir. Dasturlash tizimlari odatda quyidagilarni oʻz ichiga oladi:
                        </p>
                        -	Tarjimonlar;<br>
                        -	Dasturiy ta’minotni ishlab chiqish muhiti;<br>
                        -	Mos yozuvlar dasturlari kutubxonalari (funksiyalar, protseduralar);<br>
                        -	Tuzatuvchilar;<br>
                        -	Havola muharrirlari va boshqalar.<br>

                    </div>

                    <div class="col-lg-4">
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
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Dasturiy ta’minot</h5>
                            </div>
                        </a>

                        <a href="{{ route('operating.5') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Ta’lim tizimida axborot madaniyatining ahamiyati</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section>

        <section class="courses-course-details section">
            <div class="container quiz-container">
                <h3>Test topshirig'i</h3>
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
            ["Dasturiy ta’minot nima?",
                [
                    "Kompyuterdan foydalanishni ta’minlaydigan dasturlar va tegishli hujjatlar toʻplami",
                    "Foydalanuvchining ma’lumotlarini saqlovchi apparat",
                    "Internetga ulanishni ta’minlovchi qurilma",
                    "Kompyuterning fizika qismlari"
                ],
            ],
            ["Tizim dasturiy ta’minoti qanday ikkita turga bo‘linadi?",
                [
                    "Asosiy va xizmat",
                    "Matn va jadvalli",
                    "Antivirus va arxivator",
                    "Ma’lumot bazasi va grafik tizimlari"
                ],
            ],
            ["Amaliy dasturiy ta’minotga nima kiradi?",
                [
                    "Matn protsessorlari, jadvalli protsessorlar, ma’lumot bazasi",
                    "Tarjimonlar, tuzatish vositalari, havola muharrirlari",
                    "Antiviruslar, diagnostika vositalari",
                    "Tarmoq operatsion tizimlari, qobiq"
                ],
            ],
            ["Dasturlash tizimlari qanday dasturlarni o‘z ichiga oladi?",
                [
                    "Tarjimonlar, dasturiy ta’minotni ishlab chiqish muhiti, kutubxonalar",
                    "Matn muharrirlari, grafik tizimlari, ekspert tizimlari",
                    "Arxivatorlar, tarmoq xizmatlari, diagnostika vositalari",
                    "Xavfsizlik dasturlari, yordamchi dasturlar, aloqani boshqarish"
                ],
            ],
            ["Dasturiy ta’minot litsenziyasi nima?",
                [
                    "Foydalanish va tarqatishni tartibga soluvchi huquqiy hujjat",
                    "Dasturiy ta’minotning ishlash tezligini oshiruvchi dastur",
                    "Kompyuter apparatiga xizmat ko‘rsatish qo‘llanmasi",
                    "Ma’lumotlarni arxivlash dasturi"
                ],
            ],
            ["Dasturiy ta’minot mualliflik huquqi bilan qanday himoyalanadi?",
                [
                    "Dastur nusxalarini ishlab chiqarish huquqi bilan",
                    "Dastur ishlash tezligi bilan",
                    "Tizim xavfsizligi bilan",
                    "Foydalanuvchi interfeysi bilan"
                ],
            ],
            ["Dastur interfeysi nima?",
                [
                    "Dasturning boshqarilish mumkin bo‘lgan qismlari",
                    "Kompyuterning apparat qismidagi qo‘llanmalar",
                    "Dasturiy ta’minotning texnik parametrlarini o‘z ichiga oladi",
                    "Tizimning ishonchlilik darajasini o‘lchash usuli"
                ],
            ],
            ["Tizim ishonchliligini qanday tavsiflash mumkin?",
                [
                    "Tizim amallari vaqt davomida kuzatilib, nosozliklar belgilangan talablarga mos kelishi",
                    "Tizimning ishlash tezligi va samaradorligi",
                    "Tizimda mavjud bo‘lgan dasturlar soni",
                    "Tizim interfeysi qulayligi"
                ],
            ],
            ["Ishonchlilik xavfsizlik va himoyalanganlikdan qanday farqlanadi?",
                [
                    "Ishonchlilik tizimning o‘lchasa bo‘ladigan xususiyatidir",
                    "Xavfsizlik faqat dasturiy ta’minotni himoya qiladi",
                    "Himoyalanganlik tizimning ishlash tezligi bilan bog‘liq",
                    "Ishonchlilik faqat apparat ishonchliligi bilan bog‘liq"
                ],
            ],
            ["Dasturiy ta’minotning qaysi turi amaliy dasturlar uchun mos keladi?",
                [
                    "Matn protsessorlari, jadvalli protsessorlar, grafik tizimlari",
                    "Tarjimonlar, tuzatish vositalari, havola muharrirlari",
                    "Antiviruslar, diagnostika vositalari",
                    "Arxivatorlar, tarmoq xizmatlari"
                ],
            ]
        ];

    </script>
@endsection
