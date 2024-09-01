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
                            <h1>Ma’lumot turlari va formatlari</h1>
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

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            Excel dasturida ishchi kitoblar ixtiyoriy sondagi ishchi jadvallardan, ular esa oʻz navbatida kataklardan tashkil topgan boʻlib, kataklarda quyidagi uch turdagi ma’lumot saqlanishi mumkin:
                        </p>
                        <p>♦	sonli qiymat; <br>
                            ♦	matn;<br>
                            ♦	formula.<br>
                        </p>
                        <p>
                            Xuddi shuningdek, Excel «лиcт»laгining ishchi jadvallarida grafiklar, rasmlar, diagrammalar, tasvirlar, tugmalar va boshqa obyektlar joyiashishi mumkin. Bu obyektlar grafik koʻrinishdagi qatlamda saqlanadi. Grafik qatlam ishchi jadvalning ustki qismida joylashgan va koʻzga koʻrinmaydigan qatlamdir.
                        </p>
                        <p>
                            <b>Sonli qiymatlar. </b>Sonli qiymatlar oddiy sonlar boʻlib, ular ma’lum turdagi narsalarning sonini aniqlaydi. Masalan, sotish hajmi, firmadagi ishchilar soni, atom ogʻirligi, test ballari va h.k. Ishchi jadvalga kiritilgan sonlar formulalarda yoki diagrammalarda ishlatilishi mumkin. Sonli ma’lumot kun (masalan, 25.09.01) yoki vaqt (masalan, 15:24:35) boʻlishi ham mumkin
                        </p>
                        <p>
                            <b>Matn.</b> Koʻp hollarda «Лист»larning ishchi jadvallarida oddiy matnlar yoziladi. Amalda matnlar sonli ma’lumotni ifodalash uchun, ustun sarlavhalari uchun, ishchi jadval haqida ma’lumot berish uchun foydalaniladi. Matn sondan boshlangan boʻlsa ham, matn deb qaraladi. Masalan, siz biror katakka «252033, Kiyev» kiritsangiz, Excel bu ma’lumotni son emas, balki matn deb hisoblaydi.
                        </p>
                        <p>
                            <b>Formulalar. </b>Formulalar elektron jadvallarning asosiy ishlaridan biridir. Formulasiz Excel bu oddiy matnli protsessordan iborat boʻlib, jadvallar bilan ishlash imkoniga ega boʻlar edi. Excelda juda murakkab formulalarni kiritish mumkinki, ularning qiymatini hisoblashda kataklarda joylashgan son yoki matnlardan foyda¬laniladi. Siz biror formula boʻyicha hisoblagan natija shu katakda hosil boʻladi. Agar siz formulada ishtirok etayotgan ixtiyoriy kattalikni (sonni) oʻzgartirsangiz, Excel avtomatik tarzda formula boʻyicha qayta hisoblaydi va yangi natija hosil qiladi.
                        </p>

                        <p><b>Sonlarni kiritish.</b>  Katakka kiritilayotgan son konstanta (oʻzgarmas) sifatida qaraladi. MS Excelda son quyidagi belgilardan tashkil topgan boʻlishi mumkin: </p>

                        <p><b>Excel dasturini yuklash.</b> Excel dasturini yuklash jarayoni quyidagicha:
                            1. Kompyuter yoqiladi. Ekranda muloqot oynasi paydo boʻlib, foydalanuvchi ismi va paroli soʻralsa, ular kiritilib «Enter» tugmasi bosiladi.
                            2. «Sichqoncha» koʻrsatkichi ekrannning quyi qismida joylashgan Пуск (Start) tugmasiga keltirib, chap tugmasi bosiladi.
                            3. «Sichqoncha» koʻrsatkichi Программы bandiga keltiriladi va bosiladi.
                            4. Dasturlar roʻyxatidan Microsoft Excel tanlanadi va «sichqoncha»ning chap tugmasi bir marta bosiladi, natijada Excel dasturining zarvaragʻi ochilib, Excelning quyidagi ish jadvali ekranga chiqadi.
                        </p>
                        <b>0 1 23456789 + — (),/$%. </b>
                        <p>Bulardan boshqa va shu belgilardan tashkil topgan kattaliklar matn deb qaraladi. Manfiy son oldiga, albatta, minus (—) belgisini qoʻyish yoki sonni qavslar ( ) orasiga olib yozish kerak. Kiritilgan sonlar katakning oʻng chekkasiga tekislanadi. Buni mos tugmalar bilan oʻzgartirishingiz mumkin. Katakdagi sonning formati uning qogʻozdagi koʻrinishini aniqlaydi. Biror katakda joylashgan sonning formatini oʻzgartirish uchun son joylashgan katakni belgilang. Формат menyusidan Ячейка buyrugʻini tanlang (Ctrl+l), soʻngra Число boʻlimidan kerakli formatni tanlang.Bu boʻlimning Общий formatida kataklardagi sonlar butun (789), oʻnii kasr koʻrinishida (7,89) yoki eksponensial (7.89E+08) koʻrinishlarda (agar son katakka sigʻmasa) boʻlishi mumkin. Eksponensial format koʻrinishida boʻlgan sonlardagi belgilar soni «Е», oʻnlik vergul, «+»lar bilan birga 11 tagacha boʻlishi mumkin. Katta yoki juda kichik sonlarni yozishda bu formatdan foydalaniladi.</p>

                        <p>
                            <b>Matnlarni kiritish. </b> Microsoft Excel da ixtiyoriy belgilar ketma-ketligi matnni tashkil etadi. Masalan, 10AA109, 127AXY, 12-976, 208 4675,
                        </p>

                        <p>
                            <b>kiritilgan matn katakning chap tomoniga tekislanadi. </b>Agar uni oʻzgartirmoqchi boʻlsangiz, Формат menyusidan Ячейка buyrugʻini tanlang va undagi roʻyxatda Выравниваниеni tanlab, kerakli parametrini oʻzgartiring. Katakdagi bir necha satrni egallagan matnni bir paytda koʻrish uchun Переносить no словам belgisini oʻrnating. Alt+Enter tugmalarini birgalikda bosish katakda matnni yangi satrdan boshlanishini bildiradi.
                        </p>

                        <p>
                            <b>Sonlarni va matnlarni oʻzgartirish yoki yoʻqotish.</b> Biror katakda sonlarni yoki matnlarni kiritganingizdan keyin ularni bir qancha usullar bilan oʻzgartirishingiz mumkin: yoʻqotish, almashtirish, tahrir qilish.
                        </p>

                        <p>
                            Katakdagi yoki bir necha kataklardagi sonni, matnni yoki formulani yoʻqotish uchun (katakni tozalash uchun) katakni (kataklarni) belgilash (aktivlashtirish) va Delete tugmasini bosish yetarli.
                        </p>

                        <p>
                            <b>Katakdagi ma’lumotni almashtirish. </b>Katakdagi ma’lumotlarni almashtirish uchun katakni belgi¬lash (faollashtirish) va yangi ma’lumotni kiritish yetarli. Bu ish amalga oshganda katakdagi eski ma’lumotlar yoʻqotiladi va oʻrniga yangisi kiritiladi. Ammo oldingi ma’lumot uchun tanlangan formatlash atributlari saqlanadi.
                        </p>

                        <p><b>Katakdagi ma’lumotlarni tahrir qilish.</b> Agar katakda bor-yoʻgʻi bir necha belgi boʻlsa, uni yangi belgilarga almashtirish maʻqul. Katakdagi matn juda uzun yoki murakkab formula boʻlsa-yu va siz unga ozroq oʻzgartirish kiritmoqchi boʻlsangiz, barcha ma’lumotni qayta kiritishga ehtiyoj yoʻq. Excelda katakdagi ma’lumotni tahrir qilish mumkin. Bunda quyidagi uch usuldan birini tanlash mumkin:</p>

                        <p>
                            Katakdagi ma’lumotni almashtirish. Katakdagi ma’lumotlarni almashtirish uchun katakni belgi¬lash (faollashtirish) va yangi ma’lumotni kiritish yetarli. Bu ish amalga oshganda katakdagi eski ma’lumotlar yoʻqotiladi va oʻrniga yangisi kiritiladi. Ammo oldingi ma’lumot uchun tanlangan formatlash atributlari saqlanadi.
                            <br>	Katakda «sichqoncha chap tugmasini 2 marta bosing. Bu usulda toʻgʻridan toʻgʻri katakda oʻzgartirishlar kiritish mumkin.
                            <br>	F2 tugmasini bosing. Bu usulda ham katakdagi ma’lumotni toʻgʻridan toʻgʻri katakda tahrir qilish mumkin.
                            <br>	Ma’lumoti tahrir qilinishi kerak boʻlgan katakni faollashtiring, keyin esa formulalar satrida sichqoncha chap tugma¬sini bir marta bosing. Bu usulda katak ma’lumotlari formulalar satrida tahrirlanadi.
                        </p>

                        <p>
                            Tahrir qilishning qaysi usuli sizga maʻqul boʻlsa, shunisini tanlang. Ayrim foydalanuvchilar toʻgʻridan toʻgʻri katakda tahrir qilishni maʻqul koʻrsa, ayrimlari
                            formulalar satrida tahrir qilishni maʻqul koʻradi. Bu uch usuldan qaysi birini qoʻllamaylik, formulalar satrida uchta yangi tugmalar hosil boʻladi.  .
                            X tugmasini bosish tahrir qilishni bekor qiladi va katakdagi maʻʻumotlar oʻzgarmaydi (bu Esc tugmasini bosishga oʻxshash). Ikkinchi tugmani bosish tahrir qilish tugaganligini biidiradi va katakka oʻzgargan ma’lumotni kiritadi (Enter tugmasini bosishga oʻxshash).Uchinchi tugmani bosish formulalar panelini va Exceldagi funksiyalar Masterini chaqiradi.Tahrir qilish jarayoni odatdagidek boʻlib, jadval kursori (+) vertikai chiziq koʻrinishiga oʻtadi. Kursorning oʻrnini yoʻnaltirgichlar bilan oʻzgartirish mumkin. Katakdagi ma’lumotni tahrir qilib boʻlgach, xatolikka yoʻl qoʻyganingizni sezib qolsangiz Ctrl+Z tugmalarini birgalikda bosing. Bu holda katakdagi eski ma’lumot oʻzgarmay qoladi. Bu buyruqlarni boshqa ma’lumotlar kiritguncha yoki boshqa buyruqlarni bajarguncha amalga oshiring.

                        </p>

                        <p>
                            <b>Sonlarni formatlash.</b>Katakka kiritilgan sonlar tabiiy koʻrinishda boʻlib, ular formatlanmagan boʻladi, ya’ni raqamlardan tashkil topgan boʻlishi mumkin. Sonlarning oʻqilishini qulaylashtirish maqsadida formatlanadi, ya’ni sonlarning raqamlari orasiga ajratuvchi belgi qoʻyiladi.Agar siz jadval kursorini formatlangan son joylashgan katakka oʻrnatsangiz, u holda siz formulalar satrida shu sonning formatlanmagan holini koʻrasiz. Chunki formatlash faqatgina sonning katakdagi koʻrinishini aniqlaydi, ammo qiymati oʻzgarmaydi.
                        </p>

                        <p>
                            <b>Asboblar paneli yordamida sonlarni formatlash.</b>Formatlash asboblari panelida bir nechta tugmalar mavjud boʻlib, ular keng tarqalgan formatlarni nafaqat bitta katakka, balki bir necha satr va ustunga yoki jadvalning ma’lum ajratilgan qismiga ham qoʻllash imkonini beradi. Kerakli formatni qoʻllash uchun mos tugmani bosish yetarli.
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('excel.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Elektron jadval muharrirlari, ularning vazifasi va imkoniyatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('excel.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Ma’lumot turlari va formatlari</h5>
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
                ["F2 tugmasini bosish yoki formulalar satridan", "Ctrl+Z tugmasini bosish orqali", "Yangi katak ochish orqali", "Grafik qatlamida o'zgartirish orqali"]]
        ];
    </script>
@endsection
