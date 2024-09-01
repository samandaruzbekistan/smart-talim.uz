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
                            <h1>Elektron jadvallarda hisoblashlarni bajarish</h1>
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
                            Excel elektron jadvalining har bir katakchasida nafaqat sonli va matnli ma’lumotlarni saqlash mumkin, balki ular ustida ma’lum amallarni ham bajara olasiz. Agar katakchadagi ma’lumotlar sonlar boʻlsa, Excel tuzilgan formula asosida hisoblash ishlarini bajara oladi.
                        </p>
                        <p>
                            Tuzilgan formula deyilganda, foydalanuvchi tomonidan yaratilgan formula tushuniladi.Formulalardan foydalanish jarayonini foydalanuvchi tuzishi mumkin boʻlgan oddiy formulalardan boshlaymiz. Bunday formulalar oddiy matn singari klaviaturadan teriladi.
                        </p>
                        <p>
                            Har qanday formula albatta tenglik (=) belgisini terish bilan boshlanadi. Agar terayotgan formula tarkibida biror katakchadagi son yoki formula natijasidan foydalanmoqchi boʻlsak, u holda shu katakcha nomini koʻrsatish yetarli. Buning uchun quyidagi ikkita usullarning biridan foydalanishingiz mumkin:
                            - katakcha nomini klaviaturadan terasiz;
                            - kerakli katakchani chertsangiz, shu katakcha nomi formulada paydo boʻladi. Agar siz shu usul bilan bir nechta katakchalar nomini formulaga kiritgan boʻlsangiz, oxirgi chertgan katakcha yuguruvchi ramka ichiga olinadi, oldingilari esa boshqa katakchalardan farqlanib turishi uchun har xil rangli ramkalar bilan chegaralangan boʻladi. Formulani terib boʻlgach, Enter tugmachasini bossangiz, katakchadagi formula oʻrnida shu formulaning son qiymati paydo boʻladi. Agar qaytadan shu katakchani joriy qilsangiz, undagi songa mos formula formulalar satrida paydo boʻladi.
                        </p>
                        <p>
                            Formulalar satrida paydo boʻlgan formulaning kerakli joyini chertsangiz, oʻsha joyida kursor paydo boʻladi va natijada formula tarkibida kerakli oʻzgarishlar qila olasiz. Shundan keyin Enter tugmachasini bossangiz, qilingan oʻzgarishlarga mos qiymat joriy katakchada paydo boʻladi.
                        </p>
                        <p>
                            Endi aytilganlarni mashq qilib koʻring va har bir qadamni ekranda kuzatib boring.A l katakchaga 2, B4 katakchaga 5, D6 katakchaga 4 sonlarni kiritib, ixtiyoriy boʻsh katakchani, masalan F6 katakchani joriy qiling va quyidagi formulani tering:
                            = (A1+D6)*B4. Endi Enter tugmachasini bosing. E’tibor qilgan boʻlsangiz, Al , B4, D6 katakchalarning har xil rangdagi chegaralari yoʻqolib, F6 katakchasida 30 soni paydo boʻladi. Shuningdek, boshqa bir katakchadagi formulada F6 katakcha nomidan ham foydalanishingiz mumkin
                        </p>

                        <p>
                           <b> Funksiya ustasidan foydalanish.</b> Formulalarni tuzish jarayonida tayyor standart funksiyalardan foydalanish vaqtni ancha tejash imkoniyatini beradi. Buning uchun Excelda har xil sohalarga taalluqli boʻlgan koʻplab standart funksiyalar mavjud. Funksiyalardan foydalanish uchun funksiya ustasini yuklash kerak.
                        </p>

                        <p>
                            <b>WordArt obyektlarini oʻrnatish. </b>Nafaqat hujjatingizga rasmlar oʻrnatish, balki matnning ba’zi boʻlaklarini, masalan, sarlavhasi matnning boshqa qismlaridan ajralib turishini xohlasangiz, unga har xil koʻrinishlar bera olasiz. Shu maqsadda WordArt obyektlaridan foydalaniladi. Вставка —WordArt... algoritmi boʻyicha harakatlansangiz, WordArt nomli muloqot darchasi ochiladi
                        </p>

                        <p>
                            Funksiya ustasi Вставка menyusining Вставить функцию bandini chertish yoʻli bilan yuklanadi. Natijada Мастер функций - шаг 1 из 2 (Funksiya ustasi - 2 qadamdan 1) nomli muloqot darchasi ochiladi.
                        </p>

                        <img src="../assets/img/theme/excel5.png" class="img-fluid" alt="">

                        <p>
                            Darchaning Поиск функции (Funksiyalarni izlash) yoʻlakchasiga siz izlayotgan funksiya nomini terib, Найти (Topmoq) tugmachasini chertsangiz, shu funksiya nomi Выберите функцию (Funksiyani tanlang) nomli yoʻlakchada paydo boʻladi.
                        </p>

                        <p>
                            Faqat funksiya nomini aniq, ya’ni bexato terishingiz shart. Muloqot darchasidagi keyingi yoʻlakcha Категория (Soha) deb nomlangan. Bu yoʻlakchadan kerakli sohaga taalluqli funksiyalar toʻplamini tanlaysiz. Tanlagan funksiyalar toʻplamiga oid funksiyalar roʻyxati Выберите функцию yoʻlakchasida paydo boʻladi. Ulardan keraklisini tanlasangiz, yoʻlakcha pastida tanlagan funksiyangizning umumiy koʻrinishi va u bajaradigan amallar toʻgʻrisida qisqacha ma’lumot chiqadi
                        </p>

                        <p>
                            Darchaning eng pastki qismidagi Справка по этой функции (Bu funksiya haqida ma’lumot) yozuvini chertsangiz, siz tanlagan funksiya haqida qoʻshimcha yordamchi ma’lumotlar ekraningizda paydo boʻladi. Masalan, Категория yoʻlakchasidan Математические bandini tanlab, Выберите функцию yoʻlakchasidan Римское bandini tanlang va OK tugmachasini cherting.Ekraningizda formulalar paneli hosil boʻladi va uning Число (Son) nomli yoʻlakchasiga 2022 sonini terib, OK tugmachasini cherting. Natijada joriy katakchada shu sonning rim raqamidagi yozuvi, ya’ni “MMXXII” yozuvi paydo boʻladi. Chunki bu funksiya arab raqamida yozilgan sonni rim raqamlarida yozilgan koʻrinishiga oʻtkazadi.Agar siz funksiya nomini klaviaturadan terayotganingizda kichik harflar bilan tergan boʻlsangiz Enter tugmachasini bosganingizda Excel avtomatik tarzda ularni katta harflar bilan almashtiradi.
                        </p>

                        <p>
                            Biz yuqorida tanishgan Римское nomli funksiyaning argumenti bitta. Lekin koʻp funksiyalarda argumentlari soni ikki yoki undan ortiq boʻlishi ham mumkin. Bunday hollarda argumentlar bir-biridan nuqtali vergul (;) bilan ajratilgan boʻladi.
                            Shuningdek, funksiyalar ichma-ich joylashgan boʻlishi ham mumkin. Demak, bir funksiya ikkinchi funksiyaning argumenti sifatida ishtirok etadi va hisoblash ishlarini bajarayotganda Excel eng ichki funksiyaning qiymatini hisoblashdan boshlaydi. Koʻpincha, formulalar paneli hujjatingiz varagʻining kerakli qismini toʻsib qoladi.U holda formulalar panelini ekranning xohlagan joyiga, hatto Excel darchasidan tashqariga ham surib qoʻyishingiz mumkin.
                        </p>

                        <p>
                            <b>Roʻyxatdagi ma’lumotlarni qayta ishlashda filtr imkoniyatlaridan foydalanish. </b>Biz yuqorida ma’lumotlami tez kiritishning ba’zi usullari bilan tanishdik. Shuningdek, Excel kiritilgan ma’lumotlarni qayta ishlash bilan bogʻliq boʻlgan ajoyib imkoniyatlarga ham ega. Quyida Фильтр (Filtr) imkoniyatlari bilan tanishamiz.
                        </p>

                        <p>
                            Ba’zi hollarda u yoki bu ma’lumotlarni oʻta tez topishga toʻgʻri keladi. Agar siz ishlayotgan ma’lumotlarning hajmi kichik boʻlsa, bu ish sezilarli qiyinchilik tugʻdirmaydi.Ammo ma’lumotlar hajmi katta boʻlganda foydalanuvchi oldida muammo paydo boʻlishi tabiiy, Bunda avtofiltrni ishga tushirish kerak. Avtofiltrni ishga tushirish uchun qayta ishlanayotgan sohadagi biror katakcha joriy boʻlishi kerak. Aks holda bu muhitda ishlay olmaysiz.
                        </p>

                        <p>
                            Данные—>Фильтр algoritmi boʻyicha harakatlansangiz, maydon nomlari yonida koʻrsatkichli tugmachalar paydo boʻladi. Ulardan ixtiyoriy birini cherting. Endi qoʻshimcha bandlar bilan tanishamiz:
                            	Bсe (Hammasi) bandi chertilganda, joriy maydondagi barcha ma’lumotlar keltiriladi.
                            	Пустые (Boʻsh) bandi chertilganda, ichida ma’lumotlar boʻlmagan, ya’ni boʻsh kataklar keltiriladi.
                            	Непустые (Boʻsh boʻlmagan) bandi chertilganda, ichida ma’lumotlar boʻlgan katakchalar keltiriladi.
                            	Ochilgan ostpanelda Пустые va Непустые bandlari boʻlishi uchun joriy maydonda kamida bitta boʻsh katakcha ham boʻlishi kerak.
                            	Agar filtrlanayotgan ma’lumot turi matnli boʻlsa, ochilgan banddan Текстовые фильтры (Matn filtrlari) bandi tanlanadi va bu bandda 7 ta amal buyruqlari joylashgan. Ochilgan banddan birorta buyruq tanlansa, Пользовательский автофильтр (Maxsus avtofiltr) nomli muloqot darchasi ochiladi.
                            Darchada toʻrtta yoʻlakcha boʻlib, ularning yuqori qismida joriy maydon nomi yozilgan boʻladi. Chap tarafdagi ikki yoʻlakchadan shartlarni, oʻng tomondagi ikki yoʻlakchadan joriy maydondagi roʻyxatdan keraklisini tanlaysiz. Bu ikki satrdagi yoʻlakchalar orasida «И» (Va), «ИЛИ» (Yoki) soʻzlari mavjud boʻlib, agar «И» (Va) soʻzi joriy boʻlsa, har ikkala satrlardagi shartlarni qanoatlantiruvchi elementlar, «ИЛИ» (Yoki) soʻzi joriy boʻlsa, ikkala shartdan hech boʻlmaganda birini qanoatlantiruvchi elementlar tanlanadi.
                        </p>

                        <p>
                            Ushbu jarayon yaxshiroq tushunarli boʻlishi uchun masalan, guruh “Talabalar roʻyxati” ni yaratib, roʻyxatdan «Ismi» maydonini joriy qilib, Текстовые фильтры bandidan, Начинается с: (Bilan boshlanadi) bandi tanlanadi, natijada Пользовательский автофильтр nomli muloqot darchasi ochiladi va ochilgan darchaning har ikkala satrning chap yoʻlakchalarida:
                        </p>

                        <p>
                            1. «И» soʻzini joriy qiling:
                            a) birinchi yoʻlakchaga K harfini, ikkinchi yoʻlakchaga B harfini;
                            b) birinchi yoʻlakchaga K harfini, ikkinchi yoʻlakchaga M harfini;
                            c) faqat birinchi yoʻlakchaga G harfini.
                            2. «ИЛИ» soʻzini joriy qilib:
                            a) birinchi yoʻlakchaga О harfini, ikkinchi yoʻlakchaga A harfini;
                            b) birinchi yoʻlakchaga T harfini, ikkinchi yoʻlakchaga B harfini;
                            c) birinchi yoʻlakchaga faqat A harfini yozib, OK tugmachasini cherting va natijalarni tahlil qiling.
                        </p>

                        <p>
                            Shuningdek, Текстовые фильтры (Matn filtrlari) bandida fayllar bilan ishlash buyruqlarida foydalanilgan «?» va «*» belgilaridan ham foydalanish mumkin. Masalan, «Ismi» nomli maydonni joriy qiling va birinchi yoʻlakchada начинается с (bilan boshlanadi) bandini tanlab, ikkinchi yoʻlakchaga:
                            a) T???? yozuvini yozib;
                            b) T* yozuvini yozib, OK tugmachasini cherting va natijalarni tahlil qiling.
                        </p>

                        <p>
                           <b> Roʻyxat ma’lumotlarini qayta ishlashda saralash imkoniyatlaridan foydalanish.</b> Saralash imkoniyatlaridan foydalanish uchun Данные—Сортировка algoritmi boʻyicha harakatlanasiz. Natijada Сортировка диапазона (sohani saralash) nomli muloqot darchasi ochiladi. Ammo shuni unutmaslik kerakki, sohani saralash nomli muloqot darchasi ochilishi uchun ham xuddi filtrlashda boʻlgani singari saralash jarayoni oʻtkazilayotgan sohaning biror katakchasi joriy boʻlishi kerak. Sohani saralash muloqot darchasida ma’lumotlarni saralashga moʻljallangan uchta yoʻlakcha boʻlib, har birining yonida по возрастанию (oʻsish tartibida) va по убыванию (kamayish tartibida) nomli muhitlar mavjud. Agar oʻsish tartibida muhiti joriy boʻlsa, joriy maydondagi sonlar oʻsish tartibida joylashadi.
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
                                <h5><i class="bi bi-play-circle text-success"></i> Ma’lumot turlari va formatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('excel.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Elekrton jadvallarda grafik obyektlardan foydalanish</h5>
                            </div>
                        </a>
                        <a href="{{ route('excel.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Elektron jadvallarda hisoblashlarni bajarish</h5>
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
