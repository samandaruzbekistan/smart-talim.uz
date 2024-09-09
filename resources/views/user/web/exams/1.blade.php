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
                        <li class="current">WEB-SAHIFA YARATISH TEXNOLOGIYALARI</li>
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
            ["Web-sahifa nima?",
                ["World Wide Webda web-resurs sifatida ishlaydigan hujjat", "Foydalanuvchi bilan muloqot uchun dastur", "Grafik dastur", "Kompyuter dasturi"]],
            ["Gipermurojaat nima?",
                ["Kompyuterdagi hujjatning bir joydan boshqa joyga o'tishi", "Rasmni ko'rsatish", "Teglarni belgilash", "Matnni formatlash"]],
            ["Gipermatn nima?",
                ["Kompyuter ekrani yoki boshqa elektron qurilmalarda ko'rsatiladigan hujjatlar", "HTML kodi", "Matnli hujjat", "Grafik fayl"]],
            ["Web-sahifalarni qanday qurish mumkin?",
                ["HTML tilidan foydalanib", "JavaScript bilan", "CSS orqali", "XML yordamida"]],
            ["HTML tilining asosiy vazifasi nima?",
                ["Sahifa tuzilishini belgilash", "Dasturlash logikasini yaratish", "Ma'lumotlarni saqlash", "Grafik tasvirlarni yaratish"]],
            ["HTML faylning kengaytmasi nima?",
                [".html yoki .htm", ".txt", ".docx", ".jpg"]],
            ["Web-sahifada qanday teglardan foydalaniladi?",
                ["HTML teglari", "CSS teglari", "JavaScript teglari", "XML teglari"]],
            ["Dreamweaver dasturining asosiy funksiyasi nima?",
                ["HTML sahifalarini yaratish va tahrirlash", "Grafik tasvirlarni tahrirlash", "Video tahrirlash", "Musikani yaratish"]],
            ["HTML sahifasida qaysi teglar zarur?",
                ["html, head, body, title", "div, span, link, script", "p, a, img, table", "form, input, button, select"]],
            ["HTML tili qanday tizimda ishlaydi?",
                ["Brauzerda", "Kompyuterning operatsion tizimida", "Grafik dasturlarda", "Raqamli kamerada"]],
            ["Web-sahifa nima?", ["O'zining unikаl аdrеsigа ega bo'lgan hujjat", "Brauzer orqali ko'riladigan dasturning qismi", "Web-saytning bir qismi", "Web-serverda saqlanadigan ma'lumot"]],
            ["Web-sayt nima?", ["Bir qancha web-sahifalarning mantiqiy birlashmasi", "Bir qismda joylashgan grafik fayl", "Brauzerda ochiladigan dastur", "Web-serverda saqlanadigan ma'lumot"]],
            ["Web-server qanday vazifalarni bajaradi?", ["Umumiy resurslarni mijozlarga taqdim etish", "Web-sahifalarni yaratish", "Grafik dizaynni ishlab chiqish", "Web-saytni tasvirlash"]],
            ["Web-sahifada qanday ma'lumotlar bo'lishi mumkin?", ["Matn, grafik, ovoz, video yoki animatsiya", "Faqat matn", "Faqat grafik", "Faqat video"]],
            ["Web-sayt qanday tashkil topgan bo'lishi mumkin?", ["HTML, ASP, PHP, JSP, grafik va boshqa fayllardan", "Faqat HTML fayllaridan", "Faqat grafik fayllardan", "Faqat video fayllardan"]],
            ["Web-hujjat nima?", ["HTML tilidagi maxsus hujjat", "Grafik tasvir", "Video fayl", "Audio fayl"]],
            ["Web-hujjatlarni ochish qanday dastur orqali amalga oshiriladi?", ["Internet brauzerlari", "Grafik tahrirlash dasturlari", "Video tahrirlash dasturlari", "Audio dasturlari"]],
            ["Web-dizaynning asosiy maqsadi nima?", ["Sahifani foydalanuvchilarga qulay va samarali ko'rsatish", "Faqat grafiklarni yaratish", "Sahifalarni faqat matnli formatda yaratish", "Faqat video materiallar bilan ishlash"]],
            ["Korporativ sayt nima?", ["Tashkilotning internet tarmog'ida vakolatxonasi hisoblanadi", "Shaxsiy blog", "O'quv resurslar", "Yangiliklar portali"]],
            ["Elektron tijorat nima?", ["Internetda biznes faoliyatini amalga oshirish", "Shaxsiy blog yuritish", "O'quv kurslarini yaratish", "Grafik dizaynni ishlab chiqish"]],
            ["HTML tilida rasmlar joylashtirish teglari qanday?", ["<img>", "<picture>", "<figure>", "<photo>"]],
            ["Web-sahifada tasvir joylashtirishda qanday formatlar ishlatiladi?", ["*.JPEG va *.GIF", "*.PNG va *.TIFF", "*.BMP va *.SVG", "*.WEBP va *.ICO"]],
            ["Tasvir nomi va joylashgan o'rnini yozganda qanday qoidalarga rioya qilish kerak?", ["Harflarni bir xil yozish, probel ishlatmaslik", "Probel ishlatish, harflarni katta qilish", "Raqamlarni faqat harf bilan almashtirish", "Harf holatini o'zgartirish"]],
            ["Tasvir hajmini sun'iy kichraytirishning qanday yomon tomonlari bor?", ["Sahifaning ochilish vaqtini uzaytiradi", "Tasvir sifatini pasaytiradi", "Brauzerda noto'g'ri ko'rsatadi", "Tasvir o'lchami o'zgaradi"]],
            ["ALT atributi nima uchun kerak?", ["Tasvir ochilmagan taqdirda qo'shimcha ma'lumot beradi", "Tasvirning o'lchamini belgilaydi", "Tasvirning rangini o'zgartiradi", "Tasvirning joylashuvini aniqlaydi"]],
            ["Internetda ishlatiluvchi tasvir formatlari qanday?", ["GIF, JPEG, PNG", "BMP, TIFF, SVG", "ICO, WEBP, RAW", "JPEG, PCX, PICT"]],
            ["Tasvirni web-sahifaga qo'yishda qanday usuldan foydalanish kerak?", ["<img src='image_URL'>", "<image src='file_URL'>", "<pic src='url'>", "<img src='file_path'>"]],
            ["Fonli musiqa qo'shishda qaysi teg ishlatiladi?", ["<bgsound>", "<audio>", "<music>", "<sound>"]],
            ["Fonli musiqa faylini ijro etish uchun qanday atributlar mavjud?", ["Loop, Volume, Balance", "Src, Alt, Width", "Href, Target, Media", "Type, Duration, Format"]],
            ["Jadval tuzishda qaysi elementlar ishlatiladi?", ["<table>, <tr>, <td>, <th>", "<div>, <span>, <p>, <header>", "<form>, <input>, <label>, <button>", "<ul>, <li>, <a>, <nav>"]]
        ];
    </script>
@endsection
