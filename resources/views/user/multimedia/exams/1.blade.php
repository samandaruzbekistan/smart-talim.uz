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
                        <li class="current">MULTIMEDIANING ASOSIY TUSHUNCHALARI</li>
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
            ["Multimedia so'zi nimani anglatadi?",
                ["Bir nechta muloqot vositalarining kombinatsiyasi", "Yagona ovoz vositasi", "Faqat matnli axborot", "Faqat video axborot"]],
            ["Multimedia tizimiga qaysi texnik ta'minotlar kiradi?",
                ["Ovoz kartasi, ovoz kuchaytirgich, karnay", "Printer, skaner, sichqoncha", "Monitor, klaviatura, sichqoncha", "Ovoz yozuvchi, magnit tasmasi, sichqoncha"]],
            ["Multimedia tizimlari qaysi sohalarda keng qo'llaniladi?",
                ["Ta'lim va kasbga tayyorlash, nashriyot, reklama", "Tibbiyot, avtomobil sanoati", "Qishloq xo'jaligi, avtomobil transporti", "Arxitektura, san'at"]],
            ["Multimedia kompyuterlari nima uchun ishlatiladi?",
                ["Ovoz va video bilan ishlash uchun", "Faqat matnli hujjatlar bilan ishlash uchun", "Matematika hisob-kitoblari uchun", "Fayllarni saqlash uchun"]],
            ["Multimedia dasturiy ta'minoti nimaga xizmat qiladi?",
                ["Ovoz, video va boshqa axborotlarni boshqarish uchun", "Tarmoq xavfsizligini ta'minlash uchun", "Fayllarni siqish uchun", "Printerni boshqarish uchun"]],
            ["Avtomatlashtirilgan o'rgatish tizimlari nima uchun mo'ljallangan?",
                ["Turli fanlar bo'yicha avtomatlashtirilgan o'qitish uchun", "Ovozli qo'ng'iroqlar uchun", "Videolarni tahrirlash uchun", "Fayllarni uzatish uchun"]],
            ["Kasbiy ta'limda multimedia tizimlarining roli qanday?",
                ["Bilimlarni chuqurlashtirish va o'qitish muddatini qisqartirish", "To'g'ridan-to'g'ri tajriba o'tkazish uchun", "Foydalanuvchilar o'rtasida muloqot qilish uchun", "Matnli hujjatlarni tahrirlash uchun"]],
            ["Multimedia tizimlarining asosiy komponentlari qaysilar?",
                ["Ovoz, video, matn", "Foydalanuvchi interfeysi, ma'lumotlar bazasi", "Elektron pochta, matnli hujjatlar", "Klaviatura, sichqoncha, monitor"]],
            ["Multimedia tizimlarining ta'limda qo'llanilishi qanday afzalliklarni beradi?",
                ["O'qituvchilar sonini oshirish, vaqtni tejash", "Fayllarni tezkor saqlash", "Tarmoq xavfsizligini ta'minlash", "Katta hajmli ma'lumotlarni siqish"]],
            ["Kompyuterli dars beruvchi tizimlar nima uchun samarali hisoblanadi?",
                ["Bilimlarni o'zlashtirish va nazorat qilishni samarali tashkil qilish uchun", "Ovozli muloqot qilish uchun", "Fayllarni uzatish uchun", "Tarmoqda ishlash uchun"]],
            ["Multimedia so'zi nimani anglatadi?",
                ["Bir nechta muloqot vositalarining kombinatsiyasi", "Yagona ovoz vositasi", "Faqat matnli axborot", "Faqat video axborot"]],
            ["Multimedia tizimiga qaysi texnik ta'minotlar kiradi?",
                ["Ovoz kartasi, ovoz kuchaytirgich, karnay", "Printer, skaner, sichqoncha", "Monitor, klaviatura, sichqoncha", "Ovoz yozuvchi, magnit tasmasi, sichqoncha"]],
            ["Multimedia tizimlari qaysi sohalarda keng qo'llaniladi?",
                ["Ta'lim va kasbga tayyorlash, nashriyot, reklama", "Tibbiyot, avtomobil sanoati", "Qishloq xo'jaligi, avtomobil transporti", "Arxitektura, san'at"]],
            ["Multimedia kompyuterlari nima uchun ishlatiladi?",
                ["Ovoz va video bilan ishlash uchun", "Faqat matnli hujjatlar bilan ishlash uchun", "Matematika hisob-kitoblari uchun", "Fayllarni saqlash uchun"]],
            ["Multimedia dasturiy ta'minoti nimaga xizmat qiladi?",
                ["Ovoz, video va boshqa axborotlarni boshqarish uchun", "Tarmoq xavfsizligini ta'minlash uchun", "Fayllarni siqish uchun", "Printerni boshqarish uchun"]],
            ["Avtomatlashtirilgan o'rgatish tizimlari nima uchun mo'ljallangan?",
                ["Turli fanlar bo'yicha avtomatlashtirilgan o'qitish uchun", "Ovozli qo'ng'iroqlar uchun", "Videolarni tahrirlash uchun", "Fayllarni uzatish uchun"]],
            ["Kasbiy ta'limda multimedia tizimlarining roli qanday?",
                ["Bilimlarni chuqurlashtirish va o'qitish muddatini qisqartirish", "To'g'ridan-to'g'ri tajriba o'tkazish uchun", "Foydalanuvchilar o'rtasida muloqot qilish uchun", "Matnli hujjatlarni tahrirlash uchun"]],
            ["Multimedia tizimlarining asosiy komponentlari qaysilar?",
                ["Ovoz, video, matn", "Foydalanuvchi interfeysi, ma'lumotlar bazasi", "Elektron pochta, matnli hujjatlar", "Klaviatura, sichqoncha, monitor"]],
            ["Multimedia tizimlarining ta'limda qo'llanilishi qanday afzalliklarni beradi?",
                ["O'qituvchilar sonini oshirish, vaqtni tejash", "Fayllarni tezkor saqlash", "Tarmoq xavfsizligini ta'minlash", "Katta hajmli ma'lumotlarni siqish"]],
            ["Kompyuterli dars beruvchi tizimlar nima uchun samarali hisoblanadi?",
                ["Bilimlarni o'zlashtirish va nazorat qilishni samarali tashkil qilish uchun", "Ovozli muloqot qilish uchun", "Fayllarni uzatish uchun", "Tarmoqda ishlash uchun"]],
            ["Multimedia nima?",
                ["O'quv materiallarini tinglovchilarga to'liq yetkazib berishning mujassamlashgan holdagi ko'rinishi", "Foydalanuvchi interfeysini yaratish texnologiyasi", "Kompyuterlar orasida ma'lumot almashinuvi", "Matnli axborotlarni boshqarish dasturi"]],

            ["Multimedia vositalari ta'limda qanday foydalar keltiradi?",
                ["Ta'lim samaradorligini oshirish va o'quvchining qiziqishini oshirish", "Kompyuter xavfsizligini ta'minlash", "Matnli axborotlarni tezkor uzatish", "Axborotlarni siqish"]],

            ["Interfaol multimedia texnologiyalari qaysi afzalliklarga ega?",
                ["Ta'lim oluvchilarning ehtiyojlariga mos ravishda axborotlarni boshqarish", "Tarmoq orqali ma'lumot uzatish", "Matnli hujjatlarni saqlash", "Ovozli qo'ng'iroqlarni amalga oshirish"]],

            ["Multimedia vositalaridan foydalanishda nimani e'tiborga olish muhim?",
                ["O'quv materiallari tushunish uchun qulay va zamonaviy bo'lishi kerak", "Kompyuter tezligi oshirilishi kerak", "Matnli axborotlar faqat rasmiy hujjatlar bo'lishi kerak", "O'quv jarayoni faqat onlayn tarzda bo'lishi kerak"]],

            ["Multimedia vositalarining qaysi afzalligi darslarni jozibali qiladi?",
                ["Chiroyli tasvirlar va animatsiyalar bilan boyitish", "Fayllarni tezda saqlash", "Katta hajmli ma'lumotlarni siqish", "Kompyuter xavfsizligini ta'minlash"]],

            ["Multimedia vositalari qaysi turdagi ta'lim yo'nalishlariga mos keladi?",
                ["Har xil turdagi ta'lim yo'nalishlariga", "Faqat texnik sohalarga", "Faqat ijtimoiy fanlarga", "Faqat tibbiyot sohasiga"]],

            ["Windows Media Player dasturini qanday ishga tushirish mumkin?",
                ["Pusk tugmasini bosib, Программы menyusidan Стандартные qismiga kirish orqali", "Kompyuterni qayta ishga tushirish orqali", "Brauzer orqali kirish orqali", "Faoliyat menyusidan yuklash orqali"]],

            ["Multimedia vositalari yordamida ta'lim oluvchiga qanday imkoniyatlar yaratiladi?",
                ["Mustaqil shug'ullanish va materialni o'zlashtirish imkoniyati", "Ma'lumotlarni bulutga yuklash imkoniyati", "Tarmoq xavfsizligini nazorat qilish", "Ovozli qo'ng'iroqlar qilish imkoniyati"]],

            ["Multimedia texnologiyalaridan foydalanishda nimalarni hisobga olish lozim?",
                ["Ta'lim strategiyasini boyitish va o'qituvchining qo'llab-quvvatlashi", "Fayllarni shifrlash va saqlash", "Kompyuterlarni doimiy yangilab turish", "Brauzer orqali onlayn o'qish"]],

            ["Multimedia vositalarining asosiy komponentlari qaysilar?",
                ["Matn, jadval, grafiklar, animatsiyalar, ovoz, video", "Fayllarni saqlash tizimi", "Brauzer va internet aloqasi", "Kompyuter xavfsizligi va himoyalangan tarmoq"]],
            ["Har qanday mutaxassis oʻzining ish faoliyati davomida qanday dasturviy ta’minotlardan foydalanishi mumkin?",
                ["Prezentatsiyalar yaratish uchun PowerPoint",
                    "Matn muharriri",
                    "Video tahrirlash dasturi",
                    "Internet brauzeri"]
            ],

            ["PowerPoint dasturi qanday vazifalarni bajarishi mumkin?",
                ["Prezentatsiyalar yaratish va namoyish qilish",
                    "Matnni tahrir qilish",
                    "Video va audio montaj qilish",
                    "Kod yozish"]
            ],

            ["PowerPoint dasturida slayd nima?",
                ["Ma’lum bir oʻlchamga ega boʻlgan muloqot varaqasi",
                    "Prezentatsiya fayl nomi",
                    "Yangi dizayn",
                    "Matnli hujjat"]
            ],

            ["PowerPoint dasturida yangi prezentatsiya qanday yaratiladi?",
                ["Fayl → Yaratish → Prezentatsiya yaratish",
                    "Oynani yopish → Yangi yaratish",
                    "Tizimni qayta ishga tushirish",
                    "Matnli hujjatni saqlash"]
            ],

            ["PowerPoint dasturida slaydga matn qanday kiritiladi?",
                ["Matn uchun ajratilgan maydonga sichqoncha koʻrsatkichi olib kelib bosiladi",
                    "Yangi fayl ochiladi",
                    "Prezentatsiya nomi o‘zgartiriladi",
                    "Sichqonchaning o‘ng tugmachasidan foydalaniladi"]
            ],

            ["Slaydlar tartibi nima?",
                ["Slaydlarni turli tartibda ko‘rish va boshqarish",
                    "Slaydga matn kiritish",
                    "Prezentatsiya dizaynini tanlash",
                    "Video va audio qo‘shish"]
            ],

            ["Multimedia vositalari ta'limda qanday foyda keltiradi?",
                ["Ta'lim samaradorligini oshirish va o'quvchining qiziqishini oshirish",
                    "Kompyuter xavfsizligini ta'minlash",
                    "Matnli axborotlarni tezkor uzatish",
                    "Axborotlarni siqish"]
            ],

            ["Windows Media Player dasturini qanday ishga tushirish mumkin?",
                ["Pusk tugmasini bosib, Программы menyusidan Стандартные qismiga kirish orqali",
                    "Kompyuterni qayta ishga tushirish orqali",
                    "Brauzer orqali kirish orqali",
                    "Faoliyat menyusidan yuklash orqali"]
            ],

            ["Multimedia vositalari yordamida ta'lim oluvchiga qanday imkoniyatlar yaratiladi?",
                ["Mustaqil shug'ullanish va materialni o'zlashtirish imkoniyati",
                    "Ma'lumotlarni bulutga yuklash imkoniyati",
                    "Tarmoq xavfsizligini nazorat qilish",
                    "Ovozli qo'ng'iroqlar qilish imkoniyati"]
            ],

            ["Multimedia vositalarining asosiy komponentlari qaysilar?",
                ["Matn, jadval, grafiklar, animatsiyalar, ovoz, video",
                    "Fayllarni saqlash tizimi",
                    "Brauzer va internet aloqasi",
                    "Kompyuter xavfsizligi va himoyalangan tarmoq"]
            ]
        ];
    </script>
@endsection
