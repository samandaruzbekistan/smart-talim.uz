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
                            <h1>HTML tilida Web-sahifa ustida ishlash</h1>
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

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            <b>HTML tilida rasmlar joylashtirish teglari.</b> Internet bilan ishlovchi dasturlar tasvirlarni (grafik elementlarni) ochish imkoniga ega boʻlishi bilan internetda mavjud sahifalarning deyarli barchasi tasvirli axborotlarni nashr eta boshladi. Siz yaratgan web-sahifa qiziqarli va chiroyli dizayn asosiga qurilgan boʻlsa uning oʻquvchilari soni shubhasiz ortadi. Tasvirlar yordamida harakatlanuvchi tugmalar va Gif animatsiyalarni kiritish mumkin. Biroq tasvirlar bilan ishlashda ularni hajmi va formatiga eʻtibor berish kerak. Hozirgi paytda internetga joylashtirilayotgan deyarli barcha sahifalarda ishlatilayotgan tasvirlar formati *.JPEG yoki *.GIF ni tashkil etadi. Bunga asosiy sabab, bu formatdagi tasvirlar hajmi juda kichik. Bu formatdagi tasvirlar ishlatilganda web-sahifa hajmi ortib ketmaydi va sizning web-sahifangizdan foydalanuvchi sahifani internetda ochilishini uzoq vaqt kutmaydi. Agar siz boshqa formatdagi tasvirlardan web-sahifani bezashda foydalansangiz uning hajmi ortib ketadi va undan foydalanuvchilarga sahifani ochishda muammolar keltirib chiqaradi. Web-sahifani bezatishda uning dizayniga *.GIF formatdagi tasvirlardan foydalaning. Boshqa maqsadlarda *.JPEG dan foydalanishingiz mumkin.
                        </p>

                        <p>
                            &lt;img&gt; tegini qoʻllash qoidalari. &lt;/IMG&gt;tegi bilan bogʻliq boʻlgan, quyida keltirilgan asosiy qoidalar bilan tanishib chiqing va oʻz sahifangizni yaratishda ushbu qoidalarga doim rioya qilishga harakat qiling
                        </p>

                        <p>
                            • Tasvir nomi va joylashgan oʻrnini yozganda harflarning bir hilda boʻlishini taʻminlash katta ahamiyatga ega. Tasvir joylashgan papka nomi va tasvirning nomini kiritganda harflarni bir hilda yozilishi shart. Biror bir harfni tushirib qoldirish yoki hato yozilishi tasvirni ochishda hatoliklarni keltirib chiqaradi.
                            • Tasvir yoki papka nomini kiritganda probel ishlatmang. Web-sahifani yaratayotganingizda fayllar yoki papkalar nomini kiritganda probel (boʻsh joy) ishlatmang. Agar siz kiritgan nom ikki yoki undan ortiq soʻzlardan iborat boʻlsa, probel oʻrnida (pastgi chiziqcha) ishlatishingiz mumkin. Masalan: .../Chet _elga _sayohat/Ispaniya/Malaga_01.jpeg
                            • Internetda ishlatiluvchi tasvir formatlari. Hozirgi paytda internetda ikki hil formatdagi tasvirlar keng qoʻllanilib kelinmoqda. Bu formatlar: GIF (bu formatdagi tasvirlar *.gif qisqartmasiga ega) hamda JPEG (bu formatdagi tasvirlar esa *. Jpg
                            yoki *.jpeg qisqartmasiga ega). Siz ham ushbu formatdagi tasvirlardan foydalaning. Boshqa formatdagi tasvirlarni aksariyat brauzerlar ocha olmaydi.
                            • Har doim WIDTH va HEIGHT oʻlchamlarini kiritishga harakat qiling. Bu sizning web-sahifangizni ochilishini tezlashtiradi va tasvirlarni asl oʻlchamda boʻlishini taʻminlaydi.
                            • Tasvir hajmini sunʻiy kichraytirish. WIDTH va HEIGHT orqali tasvirning real oʻlchamini oʻlchamlarini kichraytirish mumkin. Ammo bu usuldan iloji boricha kamroq foydalanish kerak. Eng yaxshi usul tasvirni real oʻlchamini grafik muharrirlar yordamida kichraytirishdir. Bu usul tasvirning ochilish vaqtini kamaytiradi.
                            • Tasvir hajmini sunʻiy kattalashtirish. Tasvir oʻlchami kattalashtirilganda yoki kichraytirilganda uning sifatida oʻzgarish sodir boʻladi. Agar siz oʻlchamlarni oʻzgartirganda boʻyi va enini proportsionalligiga eʻtibor bermasangiz, tasvir sifatini buzilishiga olib keladi. WIDTH va HEIGHT oʻlchamlari orqali tasvir hajmini kattalashtirganda, real oʻlchamni 2 marta, 3 marta va shu tariqa oshishiga erishish kerak. Masalan, tasvirning real oʻlchami WIDTH = 100, HEIGTH = 200 ga teng boʻlsa, uni ikki marta kattalashtirganda WIDTH=200, HEIGTH= 400 ga teng boʻlishi shart. Bu usul tasvir sifatidagi salbiy oʻzgarishlarni bir oz yumshatadi. Shuningdek, ayni holatni tasvir oʻlchamini kichraytirishda ham qoʻllash maqsadga muvofiq.
                        </p>

                        <p>
                            • Har doim ALT oʻlchamini qoʻllang. Har doim ALTdan soʻng tasvirga aloqador qoʻshimcha axborotni kiritishga harakat qiling. Buning asosiy sababi, siz joylashtirgan tasvir ochilmagan taqdirda, Internetdan foydalanuvchi siz kiritgan tasvir izohini oʻqiydi va minimum axborotga ega boʻladi. Tarmoqda tasvirlar haqida gapirilganda aniqlangan ma’lum bir turdagi fayllar haqida gap ketadi. U raqamli kamera yoki skaner yordamida olingan rasm, tasvir, hattoki, grafik formatda ifodalangan matn bоʻlishi ham mumkin. Bu yerda faylning aniqlangan formati muhim rol оʻynaydi. Kоʻpchilik matn muharrirlari (Notepad, SimpleText) grafik fayllarni оʻzlarida tasvirlay (kоʻra, ifodalay) olmaydilar. Buning uchun maxsus tasvirlarni kоʻrish dasturi, grafik muharrirlar mavjud.

                        </p>

                        <p>
                            Tasvirlarni web-sahifaga joylashtirish juda oddiy. Buning uchun &lt;img> elementi kerak bоʻladi. Shuni tushunish kerakki, rasm sahifaga joylashtirilmaydi, balki rasmga sahifadan turib murojaat (rasmga yоʻl) kоʻrsatiladi. Rasm fayli esa kompyuterning qattiq diskida yoki tarmoqda joylashgan bоʻlishi mumkin. Tarmoqda tasvirlarning asosan JPEG (Joint Phorographic Experts Group «Djipeg» deb oʻqiladi), GIF (Graphics Interchange Format «gif» yoki «djif» deb oʻqiladi) va PNG (Portable Network Graphics «ping» deb оʻqiladi) kabi formatlari qоʻllaniladi. Bundan tashqari PCX, TIFF va PICT kabi formatlar ham internetda uchraydi. Agar foydalanuvchida boshqa formatdagi tasvirlar bоʻlib, uni web-sahifaga joylashtirmoqchi bоʻlsa, u holda uni yuqoridagi formatlardan birida ifodalab olishi maqsadga muvofiqdir. &lt;/img> elementi Web sahifaga tasvir qоʻyish imkoniyatini beradi. Bunda tasvirning URL adresini kоʻrsatish kerak bоʻladi. Tasvir fayli hamma fayllar saqlanayotgan kataloglarning birida bоʻladi yoki Internetda joylashgan bоʻlishi mumkin. &lt;img/> elementi quyidagi kоʻrinishda yoziladi:
                            &lt;img src= “image_URL”>
                            Agar tasvir internetdan yuklanishi rejalashtirilgan bоʻlsa, u holda uning tоʻliq adresini yozish kerak: &lt;img src=”http://www. Fakecorp.com/image”three/gif>.Agar tasvir оʻzimizning katalogda joylashgan bоʻlsa, uning adresini tоʻliq kоʻrsatish shart emas: &lt;img src= “Map.gif”>
                            &lt;img src= “/Images/Map. gif”>
                            alt atributida sahifaga qоʻyilayotgan tasvir ekranga yuklash imkoniyati bоʻlganda shu tasvir nima haqida ekanligini bildiruvchi matn joylashadi. Bu matn tasvir chiqishi kerak bоʻlgan, ammo ba’zi bir sabablarga kоʻra ekranda kоʻrinmay turgan joyda yoziladi.

                        </p>

                        <p>
                            Web-sahifada tovushdan foydalanish. Tovushli fayllarning juda koʻplab formatlari mavjud boʻlib, bularning hammasini ham web-sahifalarda ishlatish mumkin emas. Musiqali obyektni sahifaga oʻrnatish usullari bilan tanishib chiqamiz. Albatta, musiqali obyekt sahifada oʻrnatilgach, foydalanuvchi uni eshitishi mumkin, qachonki uning kompyuterida tovush kartasi oʻrnatilgan boʻlsa. Hozirgi kompyuterlarning barchasida tovush kartasi oʻrnatilgan. FONLI MUSIQA Fonli musiqani eshitish uchun  &lt;bgsound> tegidan foydalanish yaxshi samara beradi. Lekin bu teg faqat Internet Explorer va Mosaic brauzerlarida ishlaydi. Agar
                            &lt;Bgsound src= “beeth.mid” “loop=-1” Balance=“-5000” “Volume= “0”>
                                    deb yozilsa, web-sahifada fonli musiqa sifatida “Beeth.mid” fayli ijro etiladi. Loop atributi musiqali fragment tugagach, nima qilish kerakligini aniqlaydi.

                        </p>

                        <p>
                            Loop=-1 yoki loop=«infinite» shuni bildiradiki, foydalanuvchi web-sahifadan chiqib ketmaguncha cheksiz davom etaveradi. Bu atributning qiymati sifatida necha marta qaytarilishini koʻrsatuvchi musbat son kelishi mumkin, masalan, loop=5. Internet Explorer 4.0 va undan keyingilar uchun yana ikkita atributdan Volume va Balance dan foydalanish mumkin. Volume atributi yordamida tovushni pasaytirish mumkin. Uning qiymati jimlik boʻyicha «0» ga teng deb olinadi, bu esa maksimal balandlikni bildiradi.
                        </p>

                        <p>
                            Nazariy olganda volume= «-10000» boʻlishi mumkin, lekin amaliyotda esa volume=«-1000» dan past boʻlishining farqi yoʻq, chunki inson uni eshitmaydi. Balance atributi panorama boʻyicha tovushning siljishini belgilaydi. Uning qiymati -10000 dan +10000 gacha boʻlishi mumkin. Jimlik boʻyicha «0» ga teng. Bu koʻp hollarda optimal echim boʻlib, tovushni markaz boʻyicha joylashtiradi.
                        </p>

                        <p>
                            &lt;Bgsound> tegining yana bir atributi mavjud boʻlib, u faqat Mosaic brauzerida ishlaydi.
                                Bu atribut Delay boʻlib, fonli musiqa faylini ijro etilishidan oldin pauzani aniqlaydi. Bu atributni ishlatish faqatgina kichik audiokliplar uchun maʻnoga ega, chunki oddiy musiqali fayl uzoq yuklanganligi sababli, qandaydir vaqt oraligʻida ijro etiladi. Ayniqsa, faylning formati .wave yoki .aiff boʻlsa.

                        </p>

                        <p>
                            HTML tilida jadvallar hosil qilish. Jadval tuzish – HTML boʻyicha oʻzlashtirish qiyin boʻlgan boʻlimlardan biri.  Shu bois bu boʻlimni jadval tuzishni eng sodda usullaridan boshlaymiz. Web sahifani mukammal darajada yaratishni xohlasangiz, unda jadval tuzishni chuqur oʻrganib olishingiz kerak. Qisqa qilib aytganda jadvallar yordamida sahifani oʻzingiz hohlagan tarzda boshqara olishingiz mumkin. Jadval ichiga nafaqat matn, balki tasvir va boshqa elementlarni tartibli joylashtirish mumkin. Jadvalni hosil qilishning asosiy  elementi &lt;table> hisoblanadi. Ishlatilishi shart bоʻlmagan element &lt;caption> dir. &lt;table> ning ichida &lt;tr> – jadval qatorini bildiruvchi va &lt;td> jadval ustunini bildiruvchi elementlar joylashadi. Ustun yoki qator sarlavhasini &lt;th> elementi yordamida berish mumkin.
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
                        <a href="{{ route('web.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifa yaratuvchi dasturiy vositalar tasnifi va ularning imkoniyatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('web.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Web-sahifaning asosiy tuzilmasi</h5>
                            </div>
                        </a>

                        <a href="{{ route('web.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> HTML tilida Web-sahifa ustida ishlash</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- /Courses Course Details Section -->



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
