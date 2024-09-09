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
                        <li class="current">Operatsion tizimlar</li>
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
            ],
            ["Mobil telefonning qanday asosiy vazifalari bor?",
                [
                    "Telefon, faks apparati, qaydlar kitobchasi",
                    "Faoliyatni avtomatlashtirish, texnik xizmat ko'rsatish",
                    "Grafik dizayn, videomontaj",
                    "Internet xizmatlari, ma'lumotlarni qayta ishlash"
                ],
            ],
            ["Mobil aloqa muhiti qanday tashkil topgan?",
                [
                    "Tayanch stantsiyalar va abonentlar tizimi",
                    "Internet provayder va tarmoq uzatuvchi",
                    "GPS va muloqot qurilmalari",
                    "Telefon operatorlari va xizmat ko'rsatuvchi markazlar"
                ],
            ],
            ["Mobil aloqa xizmati operatorlarining vazifalari nimalardan iborat?",
                [
                    "Radio chastotadan foydalanish va xizmat ko'rsatish hujjatlarini olish",
                    "Qurilma ishlab chiqarish va tarqatish",
                    "Internet xizmatlarini taklif qilish",
                    "Mijozlarni texnik yordam bilan ta'minlash"
                ],
            ],
            ["Qaysi mobil aloqa operatorlari O'zbekistonda xizmat ko'rsatmoqda?",
                [
                    "Uzdunrobita, Yunitel, Koskom, Rubicon wireless comunication, O'zbektelekom",
                    "MTS, Beeline, Ucell, Perfectum Mobile",
                    "Tele2, Megafon, VimpelCom, MTS",
                    "Vodafone, Orange, T-Mobile, Sprint"
                ],
            ],
            ["Android operatsion tizimi qaysi yadroga asoslanadi?",
                [
                    "Linux",
                    "Windows",
                    "Unix",
                    "MacOS"
                ],
            ],
            ["Android operatsion tizimining yaratilishi qachon boshlandi?",
                [
                    "2002-yillar",
                    "2010-yillar",
                    "1995-yillar",
                    "2005-yillar"
                ],
            ],
            ["Windows operatsion tizimi mobil telefonlarda qachon mashhur bo'la boshladi?",
                [
                    "Nokia Lumia liniyasi ishga tushgandan so'ng",
                    "Android chiqishi bilan",
                    "Apple iOS chiqishi bilan",
                    "Windows 7 ning chiqarilishi bilan"
                ],
            ],
            ["Android tizimida qancha turli ilovalar mavjud?",
                [
                    "Bir milliondan oshiq",
                    "Besh yuz mingdan oshiq",
                    "Yuz mingdan oshiq",
                    "O'n mingdan oshiq"
                ],
            ],
            ["Windows Phone OS ning qanday xususiyatlari bor edi?",
                [
                    "Jonli plitkalar va oddiy interfeys",
                    "Grafik interfeys va yuqori tezlik",
                    "Ochiq manbali va yuqori xavfsizlik",
                    "Keng tarqalgan va bepul ilovalar"
                ]
            ],
            ["Mobil operatsion tizimlarning qanday muhim vazifalari bor?",
                [
                    "Foydalanuvchi interfeysini boshqarish va dasturlarni qo'llab-quvvatlash",
                    "Internetga ulanish va tizim xavfsizligini ta'minlash",
                    "Dasturiy ta'minotni ishlab chiqish va tarqatish",
                    "Ma'lumotlarni saqlash va tarmoqlarni boshqarish"
                ],
            ],
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
            ],
            ["Dasturiy ta’minot nima?",
                [
                    "Kompyuterdan foydalanishni ta’minlaydigan dasturlar va tegishli hujjatlar toʻplami",
                    "Foydalanuvchining ma’lumotlarini saqlovchi apparat",
                    "Internetga ulanishni ta’minlovchi qurilma",
                    "Kompyuterning fizika qismlari"
                ],
            ],
            ["Tizim dasturiy ta’minoti qanday ikkita turga bo‘linadi?",
                [
                    "Asosiy va xizmat",
                    "Matn va jadvalli",
                    "Antivirus va arxivator",
                    "Ma’lumot bazasi va grafik tizimlari"
                ],
            ],
            ["Amaliy dasturiy ta’minotga nima kiradi?",
                [
                    "Matn protsessorlari, jadvalli protsessorlar, ma’lumot bazasi",
                    "Tarjimonlar, tuzatish vositalari, havola muharrirlari",
                    "Antiviruslar, diagnostika vositalari",
                    "Tarmoq operatsion tizimlari, qobiq"
                ],
            ],
            ["Dasturlash tizimlari qanday dasturlarni o‘z ichiga oladi?",
                [
                    "Tarjimonlar, dasturiy ta’minotni ishlab chiqish muhiti, kutubxonalar",
                    "Matn muharrirlari, grafik tizimlari, ekspert tizimlari",
                    "Arxivatorlar, tarmoq xizmatlari, diagnostika vositalari",
                    "Xavfsizlik dasturlari, yordamchi dasturlar, aloqani boshqarish"
                ],
            ],
            ["Dasturiy ta’minot litsenziyasi nima?",
                [
                    "Foydalanish va tarqatishni tartibga soluvchi huquqiy hujjat",
                    "Dasturiy ta’minotning ishlash tezligini oshiruvchi dastur",
                    "Kompyuter apparatiga xizmat ko‘rsatish qo‘llanmasi",
                    "Ma’lumotlarni arxivlash dasturi"
                ],
            ],
            ["Dasturiy ta’minot mualliflik huquqi bilan qanday himoyalanadi?",
                [
                    "Dastur nusxalarini ishlab chiqarish huquqi bilan",
                    "Dastur ishlash tezligi bilan",
                    "Tizim xavfsizligi bilan",
                    "Foydalanuvchi interfeysi bilan"
                ],
            ],
            ["Dastur interfeysi nima?",
                [
                    "Dasturning boshqarilish mumkin bo‘lgan qismlari",
                    "Kompyuterning apparat qismidagi qo‘llanmalar",
                    "Dasturiy ta’minotning texnik parametrlarini o‘z ichiga oladi",
                    "Tizimning ishonchlilik darajasini o‘lchash usuli"
                ],
            ],
            ["Tizim ishonchliligini qanday tavsiflash mumkin?",
                [
                    "Tizim amallari vaqt davomida kuzatilib, nosozliklar belgilangan talablarga mos kelishi",
                    "Tizimning ishlash tezligi va samaradorligi",
                    "Tizimda mavjud bo‘lgan dasturlar soni",
                    "Tizim interfeysi qulayligi"
                ],
            ],
            ["Ishonchlilik xavfsizlik va himoyalanganlikdan qanday farqlanadi?",
                [
                    "Ishonchlilik tizimning o‘lchasa bo‘ladigan xususiyatidir",
                    "Xavfsizlik faqat dasturiy ta’minotni himoya qiladi",
                    "Himoyalanganlik tizimning ishlash tezligi bilan bog‘liq",
                    "Ishonchlilik faqat apparat ishonchliligi bilan bog‘liq"
                ],
            ],
            ["Dasturiy ta’minotning qaysi turi amaliy dasturlar uchun mos keladi?",
                [
                    "Matn protsessorlari, jadvalli protsessorlar, grafik tizimlari",
                    "Tarjimonlar, tuzatish vositalari, havola muharrirlari",
                    "Antiviruslar, diagnostika vositalari",
                    "Arxivatorlar, tarmoq xizmatlari"
                ],
            ],

        ];
    </script>
@endsection
