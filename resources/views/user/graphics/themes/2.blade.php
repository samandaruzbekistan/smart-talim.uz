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
                            <h1>Adobe Photoshop rasm tahrirlagichi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">KOMPYUTER GRAFIKASI</li>
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
                            Hozirgi kunda sodda va murakkab rastrli grafika tahrirlash dasturlari mavjud. Sodda grafik muharrirlardan biri - Windows operasion tizimi tarkibiga kiruvchi Paint dasturidir. Mazkur dastur oddiy amallarni bajarish imkonini beradi, lekin professional darajadagi imkoniyatlardan foydalanish uchun maxsus rastrli grafik dasturlaridan foydalanish kerak boʻladi. Adobe Photoshop, Corel PhotoPaint va hokazo. Adobe Photoshop dasturi hozirgi kunda eng mashhur va butun dunyo mutaxassislari tomonidan tan olingan dastur hisoblanadi. Buning asosiy sabablari - uning boy va keng imkoniyatlari, qulay va oson interfeysi (muloqoti), deyarli barcha  grafik formatlar va tizimlar bilan ishlashi. Adobe Photoshop tasvir tahrirlagichi yordamida fotosuratlarga qoʻshimchalar kiritish, fotosuratdagi dogʻlarni oʻchirish va eski rasmlarni qayta ishlash va tiklash, rasmlarga matn kiritish, qoʻshimcha maxsus samaralar bilan boyitish, bir fotosuratdagi elementlarni ikkinchi fotosuratga olib oʻtish, suratdagi ranglarni oʻzgartirish, almashtirish mumkin. Adobe Photoshop imkoniyatlari kyeng qamrovli boʻlib, u gazeta va jurnallarni turli-tuman rasmlar bilan boyitishda juda katta qulayliklar yaratadi:
                        </p>

                        <ol>
                            <li>
                                	Adobe Photoshopda tasvirni import qilish - skaner, raqamli fotoapparatdan kiritish, boshqa formatdagi rasmlarni kiritish (bmp, jpg, png, tif, gif va boshqalar);
                            </li>

                            <li>
                                	Tasvirni tahrirlash - oʻzgartirishlar kiritish, ranglar bilan boʻyash, chizish, oʻchirish, yorqinlik va aniqlik darajasini oʻzgartirish;
                            </li>

                            <li>
                                	Rang rejimini oʻzgartirish;
                            </li>

                            <li>
                                	Chop etish;
                            </li>

                            <li>
                                	Boshqa nom va formatda saqlash;
                            </li>

                            <li>
                                	har xil effektlarni qoʻllash;
                            </li>

                            <li>
                                	tasvirdagi ranglarni turli usullarda filtrlash imkoniyatlari mavjud.
                            </li>
                        </ol>

                        <p>
                            <b>Adobe Photoshop dasturi, ishchi oynasi va asosiy tushunchalar. </b>Bosh oynaning elementlari. Demak, Adobe Photoshop tahrirlagichini oʻrnatdingiz va roʻyxatdan samarali oʻtib, birinchi marta uni ishga tushirdingiz. Ekranda dasturning asosiy oynasi hosil boʻladi. Oynaning markazida asosiy ish bajariladigan hujjat oʻrni mavjud boʻlib, unda grafik fayl ishga tushiriladi. Ushbu interfeys Adobening barcha tahrirlagichlari uchun standart hisoblanadi va Photoshopda interfeysdan foydalangandan soʻng esa, shu firmaning boshqa dasturlarini oʻrganishda olingan koʻnikmalarni qoʻllash mumkin. Adobe Photoshop Adobe System, Inc kompaniyasi tomonidan ishlab chiqarilgan boʻlib, rastrli grafikada tahrir qiluvchi, foydalanishdagi alohida qulayliklari bilan mashhur boʻlgan dasturdir.
                        </p>
                        <img src="../assets/img/theme/photo1.png" class="img-fluid" alt="">
                        <p>
                            Adobe Photoshop dasturi ishga tushirilgandan soʻng ekranda dastur oynasi hosil boʻladi. Oynaning yuqori qismida sarlavha satri va Windowsga xos elementlar joylashadi. Sarlavha satridan soʻng menyu satri joylashgan. Dasturning asosiy oyna tarkibini koʻrib oʻtamiz.
                            Menyu satri. Barcha ilovalar uchun standart element hisoblanadi. Unda butun dunyo boʻylab qabul qilingan standartlar mavjud boʻlib, Photoshop ham bundan mustasno emas, balki u ham File bilan boshlanib Help da tugaydi.
                        </p>

                        <p>
                            Файл/File – Ushbu menyu asosan ishning boshida va soʻngida qoʻllaniladi, chunki uning koʻpchilik funktsiyalari fayllarni yaratish, yuklash, va xotiraga saqlash bilan bogʻliq.
                            <br>
                            Редактирование/Edit – bu menyuda tahrirlashning asosiy buyruqlari joylashgan.<br>
                            Изображение/Image – menyusi esa, tasvirlar bilan ishlash uchun yaratilgan. Uning buyruqlari koʻpgina amallarda qoʻllaniladi.<br>
                            Слой /Layer – qatlamlar bilan ishlash.<br>
                            Выделение /Select – rasm qismini ajratish (soha tanlash) va oʻzgartirish.<br>
                            Филтр /Filter – bu menyuda filtrlar koʻrsatilgan boʻlib, bir qancha funktsiyalarni bajaruvchi Photoshop dasturining qoʻshimcha modullaridir.<br>
                            Вид /View –interfeysni sozlashning turli koʻrinishi boʻlib, foydalanuvchi oʻziga mos ravishda qoʻllaydi.<br>
                            Окно/Window – Ushbu menyu yordamida ekrandagi uskunalar panelini va hujjatlarning joylashuvini oʻzgartirish mumkin.<br>
                            Помощь /Help – tizim haqida ma’lumot beruvchi buyruqlar toʻplami.<br>

                        </p>

                        <p>
                            <b>Uskunalar paneli.</b> Dasturning ushbu elementi boshqa barcha buyruqlarga nisbatan koʻpiroʻq qoʻllaniladi. Unda uskunalar joylashgan boʻlib, barcha asosiy amallar ular yordamida bajariladi. Koʻpchilik uskunalarda strelka belgisi koʻrsatilganligiga eʻtibor bering. Bu esa oʻz navbatida, uning tagida qoʻshimcha uskunalar paneli joylashganligini bildiradi. Uni ochish uchun uskuna tugmasini sichqoncha bilan belgilab ma’lum vaqt bosib turish lozim. Ushbu paneldan biron uskuna tugmasi belgilanganda, asosiy panelda hosil boʻladi. Bu usul panel hajmini qisqartirish maqsadida bajariladi.
                        </p>

                        <p>
                            Koʻplab Yevropalik rassomlar – Renessans ulugʻlaridan XX asr buyuklarigacha – temuriylar davridagi sharqona miniatura va bezak san’atidan ilhom izlaganini e’tirof etgan. Ana shu e’tirofdan kelib chiqib, ikki buyuk daho – Kamoliddin Behzod va Leonardo da Vinchi ijodini qiyosan oʻrganish oʻrinlidir.
                            Ikki buyuk musavvir – ikki Renessans namoyandalari ijodi jahon madaniyati tarixida beqiyos iz qoldirgan. Ular deyarli tengdosh: Kamoliddin Behzod 1455-yili tugʻilgan, 1536-yili vafot etgan, qabri noma’lum. Leonardo da Vinchi 1452-yili tugʻilgan, 1519-yili vafot etgan, uning ham qabri noma’lum. Ijodiy qismatlarida oʻxshash – Kamoliddin Behzodning sanoqli asarlari bizgacha yetib kelgan – bugun musavvir oʻz qoʻllari bilan chizgan atigi uchta miniatura ma’lum, bu benazir durdonalar AQSH (Baltimor), Angliya (Britaniya muzeyi) va Rossiya (Sankt-Peterburg)da saqlanadi. Leonardo da Vinchining ham aksar asarlari bizgacha yetib kelmagan.Ikki rassom ham e’tiborda boʻlgani bois hukmdorlar saroyida ijod qilgan va hayotligidayoq bemisl shuhrat qozongan. Ular turli makonda, turli ijtimoiy-siyosiy va iqtisodiy sharoitda faoliyat yuritgan, ular yashagan jamiyatdagi diniy-madaniy muhit ham farqli boʻlgan. Temuriylar davri miniaturalari va Yevropada XV–XVI asrlarda yaratilgan tasviriy sanʻat asarlari oʻrtasida oʻlcham, uslub va fazoviy yechimda unchalik  katta farq yoʻq. Ikki buyuk musavvirning asarlarida ohanglar umumiyligi va mavzular muvofiqligi koʻzga tashlanadi.
                            Oʻrta asrlar sanʻatida Sharq-u Gʻarb aloqalari Usmonli saltanatida birmuncha kuzatilgan. Xususan, XV asr oxirlarida sulton saroyida venetsiyalik musavvir Jentile Bellini ijod qilgan. U Gʻarb rangtasviriga xos nur-soya, boʻrtma andaza anʻanalaridan foydalangan holda sharqona uslubda betakror suvratlar ishlagan. Usmonlilar sultoni ushbu rassom asarlaridan Hirotga ham yuborib, adabiyot va san’atga homiyligi bilan shuhrat qozongan Husayn Boyqaroni lol qoldirmoqchi boʻlgan. Asosiy maqsad esa Hirot maktabi san’atkorlarini ijodiy raqobatga chorlash edi. Natijada ikkala madaniy markaz namoyandalari bitta portretni oʻziga xos tarzda chizib, mahorat sinoviga kirishgan.
                            Husayn Boyqaro Kamoliddin Behzodga Usmonli sultonining chaqirigʻiga munosib javob berishni buyuradi. Musavvir sharqona tasviriy san’atga xos boʻlmagan turkum portretlar ishlagan. Bu asarlarda Yevropa rangtasviri ta’siri sezilib turar edi. Ana
                            shunday miniaturalardan biri “Bagʻdodlik darvesh” 1500-yili chizilgan. Kamoliddin Behzod mazkur asarida usta miniaturachi sifatidagi yuksak mahoratini, rangtasvirning akademik an’analaridan yaxshi xabardorligini namoyish etib, nozik psixologik obraz yaratgan. Tavoze bilan oʻtirgan odamning yuz ifodasi va kayfiyatini juda aniq tasvirlagan. Darvesh oq qalpoq ustidan sipogina salla oʻrab, yelkasiga oddiy jun abo tashlagan, abo tagidan koʻk koʻylagi koʻrinib turibdi. Tomoshabinni xotirjam va sirli tikilgan ma’noli nigohdan – eng muhim ma’nodan hech narsa chalgʻitmaydi. Leonardo da Vinchining “Mona Liza”si ham ayni shu davrda yaratilgan. Mazkur kartina Yevropa tasviriy san’atida psixologik portret yoʻnalishidagi oʻziga xos hodisa hisoblanadi.
                            “Bagʻdodlik darvesh” va “Mona Liza”ni solishtirsak, qiziq manzaralarga guvoh boʻlamiz. Tashqi talqinda ham, ruhiyatga xos injaliklar sharhida ham umumiylik borligi yaqqol koʻzga tashlanadi. Antik estetikada zohiriy olam va tana goʻzalligi muqaddaslashtirilgan boʻlsa, Kamoliddin Behzod va Leonardo da Vinchi ichkariga – koʻngil olamiga kirdi, ularning asarlarida ruhiyat manzaralari birlamchi ahamiyat kasb etdi.

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
                        <a href="{{ route('graphics.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter grafikasi turlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('graphics.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Adobe Photoshop rasm tahrirlagichi</h5>
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
            ["Adobe Photoshop dasturida tasvirni qanday import qilish mumkin?",
                ["Skaner orqali", "Raqamli fotoapparat orqali", "Boshqa formatdagi rasmlarni kiritish orqali", "Barcha yuqoridagilar"]],
            ["Adobe Photoshop dasturining qaysi menyusi tasvirni tahrirlash uchun ishlatiladi?",
                ["Edit", "Image", "Layer", "Select"]],
            ["Rastrli grafika haqida nima to‘g‘ri?",
                ["Tasvir piksellardan tashkil topgan", "Tasvir matematik formulalar yordamida yaratiladi", "Ranglar soni 256 dan ortiq bo‘lsa, sifat yo‘qoladi", "Xotirada tasvirlar formulalar yordamida saqlanadi"]],
            ["Adobe Photoshop dasturida tasvirni qanday tahrirlash mumkin?",
                ["Ranglar bilan bo‘yash", "Yorqinlik va aniqlik darajasini o‘zgartirish", "O‘chirish", "Barcha yuqoridagilar"]],
            ["GIF formatining xususiyatlari haqida nima to‘g‘ri?",
                ["Rang palitrasi 256 rangni qo‘llaydi", "Tasvir sifatini zichlashtirish orqali saqlaydi", "JPEG formatiga nisbatan kamroq ranglarni qo‘llaydi", "Yuqori sifatli tasvirlarni zichlashtirish uchun ishlatiladi"]],
            ["JPEG formatining asosiy xususiyati nima?",
                ["Sifat yo‘qotishi bilan zichlashtiradi", "Yuqori sifatli rasmlar uchun mos keladi", "Rang palitrasi 16,777,216 rangni qo‘llaydi", "Chegaralangan ranglar soniga ega"]],
            ["PNG grafik formatining afzalliklari haqida nima to‘g‘ri?",
                ["GIF va JPEG formatlarining afzalliklarini o‘zida mujassamlashtiradi", "Zichlashtirish jarayonida sifat yo‘qoladi", "Juda kamroq ranglarni qo‘llaydi", "Tarmoq sahifalarida ishlatilmaydi"]],
            ["RGB rang modeli qanday komponentlardan iborat?",
                ["Qizil, yashil, ko‘k", "Ko‘k, purpur, sariq", "Qora, oq", "Sariq, qora, ko‘k"]],
            ["CMYK rang modeli nima uchun ishlatiladi?",
                ["Bosmada tasvirlar chiqarishda", "Monitorlarda tasvirlarni ko‘rsatishda", "Fraktal grafikada", "Rastrli grafikada"]],
            ["Grayscale holati qanday ranglarni ifodalaydi?",
                ["Kulrangning 254 ko‘rinishini", "Yuqori rangli tasvirlarni", "Ikkita rang holatini", "Ranglarning to‘liq palitrasini"]],
            ["Bitmap holati nima uchun ishlatiladi?",
                ["Faqat oq va qora ranglarni qo‘llaydi", "Rangli tasvirlarni qo‘llaydi", "Grayscale holatidan foydalanadi", "Rangli grafikalar yaratadi"]]
        ];
    </script>
@endsection
