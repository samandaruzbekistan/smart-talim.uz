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
                            <h1>Umumiy operatsion tizimlar</h1>
                            <p class="mb-0">Operatsion tizim - bu maxsus dastur boʻlib, bu dastur asosiy vazifasi - kompyuter ishini boshqarish, kompyuter va foydalanuvchi oʻrtasida muloqotni  oʻrnatish, tashqi qurilmalar ishlash holatlarini sozlash va ular bilan muloqotni oʻrnatish, har xil dasturlarni ishga tushirish va ular ishlash holatlarini ta’minlash.</p>
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
                            Hisoblash tizimini mavqeini asosan uning operatsion tizimi belgilaydi. Shunga qaramasdan, hisoblash tizimidan faol foydalanuvchilar, koʻpincha, unga ta’rif berishda anchayin qiynaladilar. Bu narsa, qisman, OT bir-biri bilan unga bogʻliq boʻlmagan ikkita funktsiyani bajarishi bilan bogʻliqdir: bu foydalanuvchiga, dasturchiga kengaytirilgan, virtual mashina imkoniyatini yaratish bilan qulaylik yaratish va ikkinchi kompyuterning resurslarini ratsional boshqarish bilan undan samarali foydalanishni oshirishdir.
                        </p>
                        <p>
                            Operatsion tizimlardan eng taniqlilari – bu Microsoft firmasining MS-DOS va Windows dasturlari, Apple firmasining Macintosh dasturi, Unix va Linux dasturlari. Dunyoning 70% kompyuterlari Microsoft korporatsiyasi tomonidan yaratilgan operatsion tizimlar bilan jihozlangan. Bulardan 1981 yilda yaratilgan - MS-DOS dasturi, 1991 yilda yaratilgan - Windows 3.1 dasturi, 1995 yilda yaratilgan - Windows 95 dasturi, 1998 yilda yaratilgan - Windows 98 dasturi, 2000 yilda yaratilgan - Windows 2000 dasturi, 2001 yilda yaratilgan - Windows Millennium Edition va Windows XP dasturlari, 2006 yilda yaratilgan - Windows Vista dasturi, 2009 yilda yaratilgan - Windows 7 dasturi, 2012 yilda yaratilgan -Windows 8 dasturi, 2015 yilda yaratilgan - Windows 10 dasturi.
                            Kompyuter ishlashi uchun zaruriy shart — dasturlarning mavjudligidir.
                        </p>
                        <p>
                            Dasturiy ta’minot ikki guruhdan iborat: <br>
                            <b>— sistemaning ishlashi bilan bogʻliq sistema dasturlari;</b> <br>
                            <b>— amaliy dasturlar.</b>
                        </p>
                        <p>
                            Tizim dasturlari kompyutering ishlashi uchun zarur dasturlar boʻlib, u kompyutering ishlashini boshqaradi, uning turli qurilmalari orasida muloqotni tashkil qiladi. Kompyuterdan foydalanishni osonlashtiruvchi sistema dasturlarining yadrosi operatsion sistemalardir.
                        </p>
                        <p>
                            Operatsion sistema foydalanuvchi bilan kompyuter orasida bevosita muloqot о‘rnatishni, kompyuteri boshqarishni, foydalanuvchi uchun qulaylik yaratishni, kompyuter resurslaridan oqilona foydalanish va hokazolarni ta’minlovchi dasturlardir.Bundan tashqari, xizmat qiluvchi dasturlar ham bor.Ular <b>dastur utilitlari</b> deb atalib, yordamchi amallarni bajarib, kompyuter ishlashini qulaylashtiradi.
                        </p>

                        <p>
                            Amaliy dasturlar predmet sohadan olingan alohida masalalar va ularning toʻplamini yechish uchun qaratilgan boʻlib, amaliy masalalarni yechish uchun moʻljallangan. Bunday dasturlar majmuyi <b>amaliy dasturlar paketi (ADP)</b> deb ataladi. Dasturlar, odatda, magnit yuritgichlarda joylashgan boʻladi. Ammo operatsion sistemalar va ular bilan bogʻliq dasturlar ancha kata hajmga ega boʻlgani tufayli keyingi paytlarda lazer disklarga yozilmoqda. Ba’zi bir sistemali dasturlar, masalan, kiritish-chiqarishning asosiy sistema dasturlari (ular BIOS (Basa Input Output System)) deb ataladi va u toʻgʻridan toʻgʻri kompyutering doimiy xotirasiga yozilgan boʻladi.
                        </p>

                        <p>
                            Operatsion sistema yordamida tezkor xotiradan foydalanish, disklardan axborotlarni oʻqish va axborotlarni disklarga yozish, amaliy dasturlarni ishga tushirish va shu kabi turli ishlarni amalga oshirish mumkin. Operatsion sistemaga ehtiyoj borligining asosiy sababi, yuqoridagi ishlarni bajarish uchun kompyuterning quyi bosqichdagi yuzlab yoki minglab elementar amallarni bajarishga toʻgʻri  keladi. Masalan, disk yurituvchi yoki vinchestr qurilmalari diskni aylantiruvchi dvigatellarini ishga tushirish yoki toʻxtatish, oʻqish qurilmalarini diskning biror silindiriga oʻtkazish, oʻqish qurilmalaridan birini tanlash, axborotni disk yoʻlidan kompyuterga oʻqish kabi elementar amallarnigina “tushinadi”. Shuning uchun biror faylni  bir diskdan boshqa diskka yozib qoʻyish kabi sodda jarayon ham, disk yurituvchi ishlari bilan bogʻlik minglab amallarni, ularni nazorati bilan bogʻlik amallarni,diskdagi fayllarning joylashish jadvalidan axborotni izlash va qayta ishlash amallarini va yana bir qancha amallarni oʻz ichiga oladi.
                        </p>

                        <p>
                            Operatsion sistemaning asosiy vazifasi foydalanuvchini uning bajarishi va umuman bilishi ham kerak boʻlmagan yuqoridagi zerikarli hamda juda murakkab ishlardan xolos etish, kompyuter bilan muloqot qilishda qulayliklar yaratishdir. Bundan tashqari, operatsion sistema fayllarni koʻchirish yoki bosmaga chiqarish, kerakli dasturlarni tezkor xotiraga yuklab ishga tushirish va boshqaruvni ularga uzatish, operativ xotirani dastur ishi soʻngida boʻshatib boshqaruvni yana oʻziga olish kabi ishlarni ham bajaradi.
                        </p>

                        <p>
                            Hozirgi  paytda operatsion sistemaning  bir necha turlari mavjud. Mac OS X operatsion tizimi, Linux-operatsion tizimi, Unix operatsion tizimi, Windows oilalari keng tarqalgan boʻlib bular oʻznavbatida bir necha turlarga boʻlinib ketadi.
                        </p>

                        <p>
                           <b> Mac OS X</b> operatsion tizimi. Mac OS X operatsion tizimi Macintosh firmasi kompyuterlar ishlab chiqarishni boshlagandan keyin, 1984 yildan boshlab  Apple firmasining Mac OS X operatsion tizimini ishlab chiqish boshlandi. Bu Mac OS X dan foydalanishda meyoriy qulayliklar yaratish uchun yangi GUI (grafik interfeys)lar model sifatida foydalanildi. Mac OS X operatsion tizimining eng oxirgi versiyasi koʻp funksiyali operatsion tizim boʻlib, Applening kompyuterlari uchun moʻljallangan
                        </p>
                        <img src="../assets/img/theme/5_1.png" class="img-fluid" alt="">
                        <p>
                            <b>UNIX</b> operatsion tizimi. UNIX 1970 yilning boshlarida Bell Laboratoriyasi olimlari tomonidan yaratildi. Tijorat bozorida  UNIX federal qoidalari normalari sababli faol targʻibot qilish man qilindi. UNIX koʻp sonli kolledj va universitetlar uchun litsenziya oldi. UNIX turli xildagi kompyuterlar uchun moʻljallangan edi. 1980 yilda telefon kompaniyalari sinishidan keyin (deregulirovaniye) UNIX texnik va dasturiy kompaniyalar tomonidan koʻplab litsenziyalarga ega boʻldi. Bu operatsion tizimning ba’zilari mavjud boʻlib, bir-biridan ozgina farq qiladi. Dasturchilar UNIXning bir versiyasidan boshqasiga amaliy dasturiy ta’minotni koʻchirayotgan paytda dasturni qayta yozishga toʻgʻri keladi. UNIXning ba’zi versiyalarida buyruqlar qatori berilgan boʻlsa, koʻpchiligida foydalanuvchining grafik interfeyslarini taklif qiladi.
                        </p>
                        <img src="https://www.debugpoint.com/wp-content/uploads/2022/09/The-beginning.jpg" class="img-fluid" alt="">

                        <p>
                            <b>LINUX-operatsion tizimi</b>. LINUX-tez oʻsib borayotgan operatsion tizimlardan biridir. Linux 1991 yilda yaratilgan boʻlib, koʻp vazifali, mashhur , UNIX operatsion toifasiga kiruvchi operatsion tizimdir.  Asosiy operatsionga qoʻshimcha ravishda  Linux oʻz ichiga koʻplab dasturlash tillarini va xizmatchi vosita(utilita)larni oʻz ichiga oladi. Linux operatsion tizimlar  kabi dasturlar mulkiy dasturiy mahsulot emas. Linux ochiq kodli dasturiy ta’minot boʻlib, Bu kodni oʻzgartirish va qayta taqsimlash uchun taqdim etiladi. Dasturiy ta’minotning ichki koʻrsatmalarini va qayta taqsimlanishining cheklovlari toʻgʻrisida hech qanday mualliflik huquqi mavjud emas. Koʻpgina dasturchilar  UNIXning eng yaxshi versiyalarini tayyorlash uchun Linuxni oʻzgartirish va qayta taqsimlash ishlarini olib borishgan. Aktivatorlarning ochiq kodli dasturiy ta’minotdan foydalanishining ikki asosiy afzalliklari mavjud: dasturiy ta’minotni oʻzgartiruvchilar boshqalar bilan dasturiy ta’minot imkoniyatlarini yaxshilash va foydalanuvchilarning dasturiy ta’minotga boʻlgan ehtiyojlarini qondirish imkoniyatiga ega boʻlishadi.
                        </p>
                        <img src="https://opencode.md/wp-content/uploads/2023/12/Why-use-Linux.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('operating.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Umumiy operatsion tizimlar</h5>
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
                                <h5><i class="bi bi-play-circle text-success"></i> Dasturiy ta’minot</h5>
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
            ["Kompyuterning dasturiy ta’minoti qanday toifalarga bo'linadi?",
                [
                    "Sistemaviy dasturiy ta’minot, amaliy dasturiy ta’minot, dasturlash texnologiyasining uskunaviy vositalari",
                    "Sistemaviy dasturiy ta’minot, operatsion tizimlar, ofis dasturlari",
                    "Multimediali dasturlar, ma’lumot bazalari, o'yin dasturlari",
                    "Internet dasturlari, tizim tizimlari, tasvir muhitlari"
                ],
            ],
            ["Sistemaviy dasturiy ta’minot qaysi funksiyalarni bajaradi?",
                [
                    "Kompyuterning va kompyuter tarmoqlarining ishonchli va samarali ishlashini ta’minlash",
                    "Foydalanuvchining matnli hujjatlarni yaratishini ta’minlash",
                    "Internetga ulanishni ta’minlash",
                    "Grafik tasvirlarni yaratish"
                ],
            ],
            ["Amaliy dasturiy ta’minot nima?",
                [
                    "Aniq bir predmet sohasi boʻyicha ma’lum bir masalalar sinfini yechishga moʻljallangan dasturlar majmuasi",
                    "Kompyuter apparatini boshqaruvchi dasturlar",
                    "Foydalanuvchining ish muhitini tashkil etuvchi dasturlar",
                    "Kompyuter resurslarini boshqaruvchi dasturlar"
                ],
            ],
            ["Operatsion tizimlar qanday funktsiyalarni bajaradi?",
                [
                    "Kompyuter resurslarini boshqarish va foydalanuvchi bilan muloqot yaratish",
                    "Matnli hujjatlarni formatlash va chop etish",
                    "Internetga ulanish va tarmoq ishini ta’minlash",
                    "Dasturlarni yaratish va testlash"
                ],
            ],
            ["Qaysi dasturiy ta’minot utilit deb ataladi?",
                [
                    "Ma’lumotni qayta ishlashda qoʻshimcha operatsiyalarni bajarishga yoki kompyuterga xizmat koʻrsatishga moʻljallangan dasturlar",
                    "Matnli hujjatlarni formatlash va rasmiylashtiruvchi dasturlar",
                    "Grafik tasvirlarni yaratish dasturlari",
                    "Internet orqali aloqa qilish dasturlari"
                ],
            ],
            ["Qanday dasturiy ta’minot dasturlash texnologiyasining uskunaviy vositalaridan biridir?",
                [
                    "Dasturlarni ishlab chiqish, saqlash va joriy etishga moʻljallangan maxsus dasturlar",
                    "Foydalanuvchi interfeysini yaratish dasturlari",
                    "Sistemaviy dasturiy ta’minot",
                    "Amaliy dasturiy ta’minot"
                ],
            ],
            ["Sistemaviy dasturiy ta’minotga qanday dasturlar kiradi?",
                [
                    "Operatsion sistema va tarmoq sistemasi",
                    "Buxgalteriya dasturlari va matn muharrirlari",
                    "Grafik muharrirlar va elektron jadvallar",
                    "Tarjimon dasturlar va rejalashtiruvchilar"
                ],
            ],
            ["Qaysi dasturiy ta’minot kompyuter ishini minimal toʻplam bilan ta’minlaydi?",
                [
                    "Asosiy dasturiy ta’minot",
                    "Xizmat koʻrsatuvchi dasturiy ta’minot",
                    "Amaliy dasturiy ta’minot",
                    "Dasturlash vositalari"
                ],
            ],
            ["DOS operatsion tizimi qanday xususiyatlarga ega edi?",
                [
                    "16 razryadga ega bo'lib, buyruqlar satri orqali muloqot qilgan",
                    "Grafik interfeysga ega bo'lgan",
                    "Kompyuter resurslarini avtomatik ravishda boshqaradigan",
                    "Yangi dasturlarni ishlab chiqish uchun maxsus vositalar taqdim etgan"
                ],
            ],
            ["Qaysi operatsion tizim kompyuter industriyasida yangi bosqichni vujudga keltirdi?",
                [
                    "Windows 95",
                    "Windows 98",
                    "Windows XP",
                    "DOS"
                ],
            ]
        ];

    </script>
@endsection
