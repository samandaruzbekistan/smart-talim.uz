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
                            <h1>Taqdimotlar muharrirlari</h1>
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

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            Har qanday mutaxassis oʻzining ish faoliyati davomida hamkasabalariga yoki boshqa mutaxassislarga oʻzining qilayotgan ishi yoki faoliyati haqida, rejalari va takliflari haqida soʻzlab berish uchun maʻruza qilishiga toʻgʻri keladi. Bunday paytlarda u maʻruzani tez, yaxshi, sifatli, tushunarli va chiroyli qilib tayyorlashi zarur boʻladi. Ushbu muammoni hal qilish uchun u qanday dasturviy ta’minot turlaridan foydalanishi mumkin? Matn muharriri uning barcha muammolarini hal qilib bera oladimi? Bir necha xil dasturlardan foydanish va ularning natijalarini umumlashtirish tezda kerakli yechimga olib kelishi mumkinmi?
                        </p>

                        <p>
                            Power Point dasturi Microsoft Office firmasining Windows qobigʻi yordamida yaratilgan boʻlib, dastur prezentatsiyalar bilan ishlash (tanishtirish, taqdimotlar qilish) uchun eng qulay dasturiy vositalardan biridir. Bu dastur orqali xilma-xil turdagi koʻrgazmali qurollarni yaratish mumkin va ayrim joylarda esa uni ma’lumot bazasi sifatida ham qoʻllash mumkin. Ayrim hollarda esa bu dasturda multimedia vositalarni boshqarish va ularni qoʻllab, namoyish etuvchi qurilmalarga yuborish vazifalarini ham bajarish mumkin. Bu yerda asosiy tushunchalar: slayd va prezentatsiyalar hisoblanadi.
                        </p>

                        <p>
                            <b>Slayd </b>– ma’lum bir oʻlchamga ega boʻlgan muloqot varaqalari hisoblanadi. Ularda yaratilayotgan namoyish elementlari joylanadi
                        </p>

                        <p>
                            <b>Prezentatsiya</b> – yaratilayotgan slaydlar turkumi va uni namoyish etish uchun beriladigan fayl nomi. Masalan: Презентатция1-PowerPoint dasturi ochilganda, sarlavhalar qatori paydo boʻlib, unda yaratilayotgan yoki yaratilgan prezentatsiyaning ayni vaqtdagi nomi hosil boʻladi. Bu nomni keyinchalik oʻz hohishingizga koʻra almashtirishingiz mumkin
                        </p>

                        <p>
                            <b>Microsoft Power Point 2010 dasturini ishga tushirish. </b>Bu dasturni ishga tushirishni Windows ish stolidan boshlash zarur. Ish stolidagi quyidagi buyruqlarni bajarish orqali dastur ishga tushiriladi. Пуск, Программы, Microsoft Office, Microsoft Power Point. Power Point ishga tushgandan soʻng ish koʻrgazma yaratish muloqot darchasi va mavjud prezentatsiyalar bilan boshlanadi. Power Point ishga tushirilgan ekranda rasmda koʻrsatilgan muloqot darchasini koʻrish mumkin:
                        </p>

                        <img src="https://www.tutorialspoint.com/powerpoint/images/powerpoint.jpg" class="img-fluid" alt="">

                        <p>
                            Har bir foydalanuvchi bu dasturda ish olib boorish uchun yuqoridagi boʻlimlaridan birini oʻz maqsadiga koʻra tanlashi mumkin. Dastur ishini boʻsh koʻrgazmadan ham boshlash mumkin. Bunda ham rang sxemasi, harf koʻrinishlari, turlari va boshqa parametrlari saqlanib qoladi. Buning uchun sichqoncha koʻrsatkichi «Пустую презентацию» (Boʻsh prezentatsiya) boʻlimiga olib keladi va «OK» tugmasi bosiladi. Bunda quyidagi muloqot darchasi hosil boʻladi.
                        </p>

                        <p>
                            <b>Power Point dasturining umumiy koʻrinishi va uning tuzilishi.</b> Power Point dasturining umumiy koʻrinishi: Sarlavhalar qatori, gorizontal menyu, uskunalar paneli («standart», «formatlash» va rasmlar bilan ishlash), tartib tugmachalari (slaydlar tartibi, strukturalar tartibi, saralash tartibi, namoyishlar tartibi) va ishchi maydonni oʻz ichiga oladi.
                        </p>

                        <p>
                            <b>Yangi koʻrgazmalar yaratish.</b> «Файл-Создать» (Fayl-Yaratish) buyruqlari bajariladi.Bu buyruqlar bajarilgandan soʻng «Создать презентацию» (Prezentatsiya yaratish)  muloqot darchasi qoʻllanadi. Bu darchada quyidagi funksiyalarni bajaruvchi buyruqlar mavjud:
                            1.  Umumiy (Общие) – yangi koʻrgazma yaratish qolipi:
                            2.  Prezentatsiya dizaynlari (Презентацию дизайн)-turli koʻrgazmalarning tasvir ranglari va qoplamlarini koʻrsatish, ya’ni rang turi, harflar koʻrinishi va koʻrgazmaning boshqa atributlarini aniqlash uchun Power Pointning dizayn shablonini tanlashingiz mumkin.
                        </p>

                        <img src="../assets/img/theme/power1.png" class="img-fluid" alt="">
                        <img src="../assets/img/theme/power4.png" class="img-fluid" alt="">
                        <img src="../assets/img/theme/power3.png" class="img-fluid" alt="">
                        <br>
                        <p>
                            <b>Slaydlar tartibida ishlash. </b>Bu tartibda yangi slayd yaratish, uning belgisini oʻzgartirish, slayd matnini tahrir qilish, slaydlarni guruhlash, rang sxemasini oʻzgartirish hamda maxsus fon yaratish mumkin. Slaydga matn kiritish va uni tahrir qilish 2 usulda amalga oshiriladi:
                            1) Matn uchun ajratilgan maydonga sichqoncha koʻrsatkichi olib kelib bosiladi va kursor paydo boʻlgandan soʻng matn klaviatura orqali kiritiladi;
                            2) Sichqoncha koʻrsatkichi «A» tugma (piktogramma)siga olib kelinib bosiladi va kerakli sohaga matn kiritiladi.
                            	Slaydlarni kichraytirish uchun matn bloki tanlanadi yoki obyekt va tanlash markeri chegaralari tanlanadi.
                            Oʻzgartirish kiritish uchun sichqonchaning oʻng tugmachasi bosiladi. Ekranda yordamchi (konteksli) menyu tartib tanlab olinadi.
                        </p>
                        <img src="../assets/img/theme/power6.png" class="img-fluid" alt="">

                        <p>
                            <b>Slaydlarni saralash tartibida ishlash.</b> Slaydlarni saralash tartibi piktogrammasi tanlangandan soʻng ekranda rasmda berilgan koʻrinishdagi darcha hosil boʻladi.
                        </p>
                        <img src="../assets/img/theme/power7.png" class="img-fluid" alt="">

                        <p>
                            —  video  va  audio  axborotlarni  kompyuterda  qayta  ishlash  va  aks ettirish  uchun  markaziy  protsessoming  harakatchanligini,  ma’lumotni  uzatish  shinasining  oʻtkazish  qobiliyatini,  tezkor va  video-xotira hajmini,  katta  sigʻimli  tashqi  xotirani,  kompyuter  kirish-chiqish kanallari  boʻyicha  almashuv  tezligini  taxminan  ikki  baravar  oshirish talab  etiladi;
                            <br>
                            —  «inson  —  kompyuter  —  inson»  interfaol  muloqotining  yangi darajasining taʻminlanishi nazarda tutiladi.  Foydalanuvchi texnik muloqot jarayonida  ancha keng va har tomonlama  mukammal  axborotlarni olishi  osonlashadi  va  tezlashadi. Hozirgi amaliyot shuni  koʻrsatmoqdaki,  multimedia vositalari  yordamida  tinglovchilarni  oʻqitish  anʻanaviy  ta’limdan  ikki barobar  samarali  boʻlmoqda
                        </p>

                        <p>
                            <b>Multimedia  vositalari  bilan  ishlash.</b>Video  yoki  audio  multimedia vositalari  kompyuterda  juda  koʻp  dasturlar  orqali  ishlatiladi.  Video, audio  bilan  ishlovchi  dasturlar  qatoriga,  jumladan,  Windows  Media Player,  Winamp  va  boshqalar  kiradi.Windows  Media  Player  dasturini  ishlatishni  koʻrib  oʻtamiz.Windows oʻrnatilgan barcha kompyuterlarda Windows Media Player dasturi Windows bilan birgalikda  oʻrnatilgan boʻladi.  Windows  Media Player  dasturini  ishga  tushirish  uchun  Windowsning  Pusk  tugmasi bosiladi,  keyin  Bosh  menyudagi  Программы  menyusi  ostidan  Стандартные  qismiga  kiriladi  va  Windows  Media  Player  ishlatiladi.
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
                        <a href="{{ route('multimedia.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Multimedia tushunchasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Multimedia imkoniyatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Multimediyaning dasturiy ta’minoti</h5>
                            </div>
                        </a>
                        <a href="{{ route('multimedia.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Taqdimotlar muharrirlari</h5>
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
