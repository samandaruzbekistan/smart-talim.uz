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
                        <li class="current">ELEKTRON JADVAL MUHARRIRLARI</li>
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
            ["Excel dasturining ilk versiyasi qaysi platforma uchun mo'ljallangan edi?",
                ["Macintosh", "Windows", "Linux", "IBM"]],
            ["Elektron jadvallar dasturining dastlabki nomi nima edi?",
                ["VisiCalc", "Excel", "Lotus 1-2-3", "Multiplan"]],
            ["Excel dasturining fayl kengaytmasi qanday?",
                [".xlsx", ".docx", ".pptx", ".pdf"]],
            ["Excel dasturining qaysi versiyasi Windows uchun birinchi bo'lib chiqarilgan?",
                ["1987-yil", "1985-yil", "1990-yil", "1983-yil"]],
            ["Microsoft firmasi tomonidan qaysi yilda Excel dasturi taqdim etilgan?",
                ["1985-yil", "1983-yil", "1990-yil", "1987-yil"]],
            ["Excel dasturida qaysi komponent formulalar va ma'lumotlar kiritish uchun mo'ljallangan?",
                ["Formulalar satri", "Menyu satri", "Asboblar paneli", "Holat satri"]],
            ["Elektron jadvaldagi kitoblar nimalardan iborat bo'lishi mumkin?",
                ["Sahifalar", "Jadvallar", "Diagrammalar", "Grafiklar"]],
            ["Excel dasturining asboblar panelida nimalar joylashgan?",
                ["Tugmalar", "Kataklar", "Formulalar", "Diagrammalar"]],
            ["Excel dasturida foydalanuvchi qanday tahrirlash vositalaridan foydalanishi mumkin?",
                ["WinWord", "PowerPoint", "Access", "Outlook"]],
            ["Excel dasturida qaysi satr tanlangan katakning nomi yoki manzilini ko'rsatadi?",
                ["Nomlar maydoni", "Formulalar satri", "Holat satri", "Menyu satri"]],
            ["Excel dasturida kataklarda qanday turdagi ma'lumotlar saqlanishi mumkin?",
                ["Sonli qiymat, matn, formula", "Grafiklar, rasmlar, diagrammalar", "Yagona qiymat", "Kodlar"]],
            ["Excel dasturida grafiklar, rasmlar, diagrammalar qayerda saqlanadi?",
                ["Grafik qatlamda", "Matn qatlamida", "Formulalar satrida", "Holat satrida"]],
            ["Sonli qiymatlar nimalarni ifodalash uchun ishlatiladi?",
                ["Narsalarning sonini aniqlash", "Matnlarni tahrirlash", "Diagramma yaratish", "Formulalarni yaratish"]],
            ["Excelda sonli qiymat sifatida nimalar kiritilishi mumkin?",
                ["Kun va vaqt", "Yozuvlar", "Grafiklar", "Diagrammalar"]],
            ["Excelda matn sifatida nimalar kiritilishi mumkin?",
                ["Ustun sarlavhalari, shahar nomlari", "Sonli qiymatlar", "Formulalar", "Grafiklar"]],
            ["Excelda kiritilgan formulalar nima uchun ishlatiladi?",
                ["Hisob-kitoblarni avtomatik bajarish", "Matnlarni tahrirlash", "Grafik yaratish", "Diagramma yaratish"]],
            ["Excelda kiritilgan sonning formati qanday o'zgartiriladi?",
                ["Format menyusidan, Ячейка buyrug'i orqali", "Asboblar panelidan, 'Matn' tugmasi orqali", "Diagrammalar menyusidan", "Fayl menyusidan"]],
            ["Excelda matnlar qanday tekislanadi?",
                ["Katakning chap tomoniga", "Katakning o'ng tomoniga", "Katakning markaziga", "Katakning yuqorisiga"]],
            ["Excelda kataklardagi ma'lumotlarni qanday o'zgartirish mumkin?",
                ["Katakni tanlab, yangi ma'lumot kiritish orqali", "Matn qatlamiga qo'shish orqali", "Grafik qatlamida o'zgartirish orqali", "Formulalar satridan faqat matn kiritish orqali"]],
            ["Excelda kiritilgan matn yoki sonlarni qanday tahrir qilish mumkin?",
                ["F2 tugmasini bosish yoki formulalar satridan", "Ctrl+Z tugmasini bosish orqali", "Yangi katak ochish orqali", "Grafik qatlamida o'zgartirish orqali"]],
            ["Excel dasturida kataklarda qanday turdagi ma'lumotlar saqlanishi mumkin?",
                ["Sonli qiymat, matn, formula", "Grafiklar, rasmlar, diagrammalar", "Yagona qiymat", "Kodlar"]],
            ["Excel dasturida grafiklar, rasmlar, diagrammalar qayerda saqlanadi?",
                ["Grafik qatlamda", "Matn qatlamida", "Formulalar satrida", "Holat satrida"]],
            ["Sonli qiymatlar nimalarni ifodalash uchun ishlatiladi?",
                ["Narsalarning sonini aniqlash", "Matnlarni tahrirlash", "Diagramma yaratish", "Formulalarni yaratish"]],
            ["Excelda sonli qiymat sifatida nimalar kiritilishi mumkin?",
                ["Kun va vaqt", "Yozuvlar", "Grafiklar", "Diagrammalar"]],
            ["Excelda matn sifatida nimalar kiritilishi mumkin?",
                ["Ustun sarlavhalari, shahar nomlari", "Sonli qiymatlar", "Formulalar", "Grafiklar"]],
            ["Excelda kiritilgan formulalar nima uchun ishlatiladi?",
                ["Hisob-kitoblarni avtomatik bajarish", "Matnlarni tahrirlash", "Grafik yaratish", "Diagramma yaratish"]],
            ["Excelda kiritilgan sonning formati qanday o'zgartiriladi?",
                ["Format menyusidan, Ячейка buyrug'i orqali", "Asboblar panelidan, 'Matn' tugmasi orqali", "Diagrammalar menyusidan", "Fayl menyusidan"]],
            ["Excelda matnlar qanday tekislanadi?",
                ["Katakning chap tomoniga", "Katakning o'ng tomoniga", "Katakning markaziga", "Katakning yuqorisiga"]],
            ["Excelda kataklardagi ma'lumotlarni qanday o'zgartirish mumkin?",
                ["Katakni tanlab, yangi ma'lumot kiritish orqali", "Matn qatlamiga qo'shish orqali", "Grafik qatlamida o'zgartirish orqali", "Formulalar satridan faqat matn kiritish orqali"]],
            ["Excelda kiritilgan matn yoki sonlarni qanday tahrir qilish mumkin?",
                ["F2 tugmasini bosish yoki formulalar satridan", "Ctrl+Z tugmasini bosish orqali", "Yangi katak ochish orqali", "Grafik qatlamida o'zgartirish orqali"]],
            ["Excelda formula qanday belgidan boshlanadi?",
                ["Tenglik (=)", "Qo'shish (+)", "Minus (-)", "Yulduzcha (*)"]],
            ["Formula ichida katakcha nomini qanday kiritish mumkin?",
                ["Katakchani tanlash yoki klaviaturadan terish", "Foydalanuvchi qo'li bilan yozish", "Excel avtomatik ravishda teradi", "Har doim tanlash kerak"]],
            ["Funksiya ustasi qanday menyudan yuklanadi?",
                ["Вставка menyusining Вставить функцию bandi", "Файл menyusidan", "Данные menyusidan", "Правка menyusidan"]],
            ["Formulani terib bo'lgach, qanday tugmachani bosish kerak?",
                ["Enter", "Shift", "Ctrl", "Alt"]],
            ["Excelda funksiya ustasidan foydalanishning asosiy afzalligi nima?",
                ["Vaqtni tejash", "Qayta yozishni oldini olish", "Hisoblash natijalarini avtomatik ravishda ko'rsatish", "Katakchalar o'rtasida bog'lanish o'rnatish"]],
            ["Filtrni qanday yoqish kerak?",
                ["Данные menyusidan Фильтр bandi orqali", "Файл menyusidan", "Вставка menyusidan", "Правка menyusidan"]],
            ["Filtrlash jarayonida matnli ma'lumotlar uchun qanday filtr turi ishlatiladi?",
                ["Текстовые фильтры", "Числовые фильтры", "Дата фильтры", "Формулы фильтры"]],
            ["Ro'yxatdagi ma'lumotlarni saralash uchun qanday algoritm ishlatiladi?",
                ["Данные -> Сортировка", "Файл -> Сортировка", "Вставка -> Сортировка", "Правка -> Сортировка"]],
            ["Saralash jarayonida ma'lumotlar qanday tartibda joylashtiriladi?",
                ["O'sish yoki kamayish tartibida", "Alfavit tartibida", "Tasodifiy tartibda", "Kiritish tartibida"]],
            ["Excel jadvalini bosmaga chiqarishning eng tezkor usuli qaysi?",
                ["Ctrl+P klavishlari kombinatsiyasi", "Fayl menyusidan", "Asboblar panelidan", "Shift+P kombinatsiyasi"]]
        ];
    </script>
@endsection
