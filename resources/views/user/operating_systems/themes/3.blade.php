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
                            <h1>Xizmat koʻrsatuvchi dasturlar</h1>
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
                            Xizmat koʻrsatuvchi dasturlarning (shuningdek, utilitlar deb ataladigan) asosiy maqsadi kompyuter tizimini tekshirish, sozlash va sozlash ishlarini avtomatlashtirishdir. Koʻpgina hollarda, ular tizim dasturlarining funktsiyalarini kengaytirish yoki yaxshilash uchun ishlatiladi. Dastlab operatsion tizimga ba’zi yordam dasturlari (odatda parvarishlash dasturlari) kiradi, ammo aksariyat dasturlar operatsion tizim uchun tashqi boʻlib, uning ishlash imkoniyatlarini kengaytirishga xizmat qiladi.Xizmat koʻrsatuvchi dasturlarni ishlab chiqish va ishlashida ikkita muqobil yoʻnalish mavjud: operatsion tizim bilan integratsiya va avtonom ishlash. Birinchi holda, Xizmat koʻrsatuvchi tizim dasturlarining isteʻmol xususiyatlarini oʻzgartirib, ularni amaliy ish uchun qulayroq qilishi mumkin. Ikkinchi holda, ular tizim dasturiy ta’minoti bilan chambarchas bogʻliq, ammo foydalanuvchiga apparat va dasturiy ta’minot bilan oʻzaro taʻsirini shaxsiylashtirish uchun koʻproq imkoniyatlarni taqdim etadi.
                        </p>

                        <p>
                            Qattik diskka xizmat koʻrsatish amallari deganda nima tushuniladi? Ma’lumki, kompyuter elektr tarmogʻiga ulanganda vinchester diskchalari harakatga tushadi va uning aylanish tezligi 6500 –10000 martagacha yetadi. Bu juda katta tezlik. Xuddi shuningdek, kompyuterning boshqa qurilmalari ham ish jarayonida katta kuchlanishga ega boʻladi va  elektr toki oʻtishi natijasida oʻzidan issiqlik chiqaradi. Qattik diskka koʻrsatiladigan xizmatlar undagi ma’lumotga ishlov berishdan iborat. Ularni qanday amalga oshirishni koʻrib chiqamiz. Diskka fayllar bilan ishlaganda operatsion tizim, oʻzak, katalog, fayllar joylashish jadvali (FAT – Fail allacation Table ), diskning yuklanish dasturi yozilgan qismidagi ma’lumotdan foydalaniladi. Agar diskning tizimli qismi buzilsa, diskdagi ma’lumotdan toʻla yoki qisman ham foydalanib boʻlmaydi. Diskning tizimli boʻlimini (Disk Edit turidagi dastur yordamida) qayta tiklash mumkin. Lekin bunday ish foydalanuvchidan yuqori malaka va koʻp vaqt talab qiladi. Agar tizimli boʻlim fayllarini doimiy ravishda Image dasturi yoradamida nusxalanib qoʻyilsa, diskning tizimli sohasi buzilganda uni qayta tiklash ancha yengil bajariladi. Image.exe dasturi diskning tizimli sohasi haqidagi ma’lumotni Image. dat fayliga yozib qoʻyadi. U bu faylni yuklash jarayonida fayllar joylashish jadvali va oʻzak katalog haqida ma’lumot tasvirlanadi. Har safar Image.exe fayli ishga tushirilganda undagi axborot yangilanib turadi, faylning avvalgi holati esa, Image.bak faylida saqlanadi.
                        </p>

                        <p>
                            <b>Image [disk yurituvchi nomi].</b> Agar disk yurituvchi koʻrsatilmasa, faol (joriy) disk yurituvchi tushuniladi. Image.bak faylini hosil qilishni bekor qilish uchun Image/Noback buyrugʻi beriladi. Image dasturining bajarilish vaqti juda qisqa, shuning uchun uni tez-tez bajarib turish tavsiya yetiladi. Yordamchi diskni tayyorlab qoʻyish ham foydalanuvchi uchun muhimdir. Yordamchi disk nima va uning vazifasi qanday, degan savolga javob beraylik. Kompyuterning boshlangʻich yuklanish jarayonida DOS ning tizimlarini ochish va ularni ishlatish uchun (ya’ni boshqarishni buyruq fayllarga berish uchun) BIOS dasturlaridan foydalaniladi. Agar bu dasturdagi ma’lumot buzilgan boʻlsa, kompyuter ishga tushmaydi (yuklanish oxiriga yetmaydi) yoki ba’zi bir mantiqiy disklar (diskdan yuklanish roʻy berganda) «koʻrinmaydi». Bunday holatda yoʻqolgan yoki buzilgan ma’lumotni tiklash oson ish emas, hatto mutaxassislar uchun ham talaygina vaqt talab qiladi. Bu vaziyatda Rescue dasturi yordam beradi. Ushbu dastur ma’lumotni (yuklash dasturini) yordamchi diskka yozib qoʻyadi va ularni shu diskdan qayta tiklab beradi. Yordamchi diskni tayyorlash uchun 2-3 dakika vaqt sarf yetiladi va har safar DOS konfiguratsiyasi oʻzgartirilganda yordamchi diskni yangilab turish tavsiya yetiladi. Kompyuterni ishlatish jarayonida diskda juda koʻp keraksiz va bak kengaytmali fayllar hosil boʻladi. Xotirani kengaytirish, tozalash maqsadida qattiq disklarni keraksiz fayllardan tozalash uchun Wipeinfo dasturidan foydalanish mumkin. Kompyuterdan qancha koʻp foydalanilsa, qattiq disklar fayllarga toʻlib qolish ehtimoli shuncha ortadi. Albatta, har qanday axborotni ishlatib boʻlingach, xotiradan oʻchirish kerak boʻladi. Lekin shunda ham bazi bir «keraksiz» fayllar soni koʻpayib ketadi. Bunday hollarda (bazan, axborot hajmi anchagina katta boʻlganda), axborotlarni «siquvchi» maxsus arxivlash dasturlari qoʻllaniladi. Arxivlash dasturlari maxsus uslublarni qoʻllash hisobiga axborotlarni «siqish» imkonini beradi, yani axborotning nisbatan kichik hajmdagi nusхasini yaratish hamda bir nechta faylni bitta faylga birlashtirish imkonini beradi. Diskni doimiy ishlatish jarayonida – fayllarni yozish, oʻchirish, qayta yozishda juda koʻp boʻsh joylar hosil boʻladi va koʻpgina fayllar boʻlak-boʻlak boʻlib ajralib qoladi.Shunga oʻxshash hollarda fayllar joylashishini optimallashtiruvchi dastur, masalan, Spee Disk yoki Scan Disk dasturlaridan foydalanish mumkin. Bu dasturlar barcha fayllarni disk (manzil) boshlanishiga koʻchiradi va fayllarning boʻlaklarga ajralishini toʻgʻrilaydi. Bunday dasturlarning bajarilishi bir necha minutni tashkil yetadi. Shu bois, vaqti-vaqti bilan kompyuterning barcha mantiqiy disklarini optimallashtirish maqsadga muvofik. Kompyuterdan foydalanuvchi uning resurs va imkoniyatlarini yaxshi bilishi kerak. Kompyuterning asosiy tashkil etuvchilari—markaziy protsessor, qattik disk (vinchester), xotira va boshqalar uning ishlashi jarayonida katta yuklanma (nagruzka) oladi. Buni quyidagicha oʻxshatish bilan tushuntirish mumkin. Har bir avtomobil haydovchisi oʻz mashinasida yurish uchun unga doimiy ravishda benzin quyib turishi, yuvishi, texnik xizmatlar koʻrsatishi va shu kabi ishlarni oʻz vaqtida bajarib turishi lozim. Agar bu ishlar uz vaqtida bajarilmasa, uning natijasi juda achinarli boʻladi. Xuddi shuningdek, kompyuterdan foydalanuvchilar ham uni faqat oʻz masalalarini yechishda yoki turli xil kompyuter oʻyinlarni tashkil etishda foydalanmasdan, xotiradagi keraksiz fayllarni oʻchirishi, turli oʻzgarishlarni toʻgʻrilashi, fayllar tizimining butunligini saqlash kabi amallarni bajarib turishi kerak.Kompyuter axborotlarni qayta ishlovchi qurilma sifatida xizmat qilar ekan, undan foydalanish inson uchun qulay va sodda boʻlishi kerak. Bunday imkoniyatni esa, har bir foydalanuvchi oʻziga moslab «yaratib oladi». Bunday muhitga nimalar kiradi?
                        </p>
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
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Xizmat koʻrsatuvchi dasturlar</h5>
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
            ["Xizmat koʻrsatuvchi dasturlarning asosiy maqsadi nima?",
                [
                    "Kompyuter tizimini tekshirish, sozlash va avtomatlashtirish",
                    "Dasturiy ta'minotni ishlab chiqish",
                    "Internet xizmatlarini taqdim etish",
                    "O'yinlarni ishlab chiqish"
                ],
            ],
            ["Xizmat koʻrsatuvchi dasturlar qanday ikkita muqobil yoʻnalishda ishlaydi?",
                [
                    "Operatsion tizim bilan integratsiya va avtonom ishlash",
                    "Internet orqali aloqa va lokal tarmoq orqali aloqa",
                    "Fayl menejeri va arxivator",
                    "Kompyuter xavfsizligi va diagnostika vositalari"
                ],
            ],
            ["Qattik diskka xizmat koʻrsatish amallari nima?",
                [
                    "Diskdagi ma'lumotni ishlov berish",
                    "Fayllarni siqish va arxivlash",
                    "Ma'lumotlarni tozalash va optimallashtirish",
                    "Yordamchi disk tayyorlash va fayllarni qayta tiklash"
                ],
            ],
            ["Diskning tizimli boʻlimini qayta tiklash uchun qaysi dasturdan foydalaniladi?",
                [
                    "Image.exe",
                    "Wipeinfo",
                    "Spee Disk",
                    "Scan Disk"
                ],
            ],
            ["Rescue dasturining vazifasi nima?",
                [
                    "Yordamchi diskka ma'lumotni yozib qo‘yish va qayta tiklash",
                    "Diskni defragmentatsiya qilish",
                    "Keraksiz fayllarni tozalash",
                    "Arxivlash dasturini yangilash"
                ],
            ],
            ["Qaysi dastur fayllarning joylashishini optimallashtiradi?",
                [
                    "Spee Disk yoki Scan Disk",
                    "Image.exe",
                    "Wipeinfo",
                    "Rescue"
                ],
            ],
            ["Disklarni defragmentatsiya qilish uchun Windows 7 operatsion tizimida qanday amallar bajariladi?",
                [
                    "Пуск -> Все программы -> Стандартные -> Служебные -> Дефрагментация диска",
                    "Пуск -> Все программы -> Служебные -> Оптимизация диска",
                    "Панель управления -> Система и безопасность -> Управление дисками",
                    "Пуск -> Программы -> Системные утилиты -> Дефрагментация"
                ],
            ],
            ["Qaysi dastur keraksiz fayllarni tozalash uchun ishlatiladi?",
                [
                    "Wipeinfo",
                    "Spee Disk",
                    "Rescue",
                    "Image.exe"
                ],
            ],
            ["Foydalanuvchi qanday holatda kompyuterni qulay ishlashini ta'minlaydi?",
                [
                    "Texnik jihatdan talabga javob beradigan, qulay interfeys va qurilmalardan foydalanish",
                    "Foydalanuvchiga mos kelmaydigan qurilmalarni ishlatish",
                    "Dasturlarni doimo yangilab turmaslik",
                    "Xotirani tozalash va fayllarni siqmaslik"
                ],
            ],
            ["Qanday holatda yordamchi diskni yangilab turish tavsiya etiladi?",
                [
                    "DOS konfiguratsiyasi o'zgarganda",
                    "Fayllarni tozalashdan so'ng",
                    "Defragmentatsiya qilingandan so'ng",
                    "Ma'lumotlar siqilgandan so'ng"
                ],
            ]
        ];

    </script>
@endsection
