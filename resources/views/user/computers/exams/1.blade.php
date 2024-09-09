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
                        <li class="current">Zamonaviy kompyuter</li>
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
            ["Tezkor xotira qanday qurilmalardan yasaladi?", ["Tranzistorlar", "Resistorlar", "Diodalar", "Kapasitatorlar"]],
            ["Diskli jamlagichlar qaysi ikki turga bo'linadi?", ["Egiluvchan disklar va qattiq disklardagi jamlagichlar", "Kompakt disklar va DVD", "Audioadapterlar va modemlar", "Skanerlar va plotterlar"]],
            ["Kompyuterning asosiy vazifasi nima?", ["Turli ma’lumotni qayta ishlash", "Matnlarni tahrirlash", "Elektr energiyasini tejash", "Ma’lumotlarni saqlash"]],
            ["Qattiq disklarning asosiy funktsiyasi nima?", ["Axborotni doimiy saqlash", "Tovush signallarini yozish", "Ekran tasvirlarini ko'rsatish", "Kiritish va chiqarish portlarini boshqarish"]],
            ["Tezkor xotiraning asosiy ikki turi qanday?", ["Dinamik va statik", "Analog va raqamli", "Katta va kichik", "Har xil va bir xil"]],
            ["Diskli jamlagichlar qaysi ikki turga bo'linadi?", ["Egiluvchan disklar va qattiq disklardagi jamlagichlar", "Kompakt disklar va DVD", "Audioadapterlar va modemlar", "Skanerlar va plotterlar"]],
            ["Insoniyat tarixidagi birinchi hisoblash vositasi qaysi edi?", ["Odamlarning barmoqlari", "Abak", "Schyot", "Neper tayoqchalari"]],
            ["Statik tezkor xotira qanday mikrosxemalardan iborat?", ["Registrlar", "Kondensatorlar", "Transformatorlar", "Tranzistorlar"]],
            ["Diskdagi ma'lumotga kirish vaqti va o'qish yozish tezligi qaysi omillarga bog'liq?", ["Disk yurituvchining o'ziga, disk bilan axborot almashish kanali parametrlariga, disk kontrolyorining turi va mikroprotsessor tezligiga", "Faqat disk yurituvchining o'ziga", "Faqat disk kontrolyorining turi va mikroprotsessor tezligiga", "Faqat disk bilan axborot almashish kanali parametrlariga"]],
            ["Dastlabki personal kompyuter qachon yaratilgan?", ["1973-yilda", "1981-yilda", "1977-yilda", "1990-yilda"]],
            ["Kompyuterlarning qaysi turi bir sekundda o‘n trillion amal bajaradi?", ["Super kompyuterlar", "Server kompyuterlar", "Shaxsiy kompyuterlar", "Mini kompyuterlar"]],
            ["Dinamik tezkor xotira qanday mikrosxemalardan iborat?", ["Tranzistorlar va kondensatorlar", "Resistorlar va diodalar", "Transformatorlar va registrlar", "Shlyuzlar va fototransistorlar"]],
            ["CD-ROM ning unumdorligi qanday o'lchanadi?", ["Kilabayt/s, Megabayt, Gigabayt", "Bajt, Kbayt, Mbayt", "Gigabayt, Terabayt", "Kilobayt, Megabayt"]],
            ["Apple kompaniyasi tomonidan qaysi shaxsiy kompyuter birinchi bo'lib ommaviy ravishda chiqarildi?", ["Apple-II", "Apple-I", "IBM PC", "XEROX Alto"]],
            ["Dastlabki personal kompyuter qachon yaratilgan?", ["1973-yilda", "1981-yilda", "1977-yilda", "1990-yilda"]],
            ["Audioadapter nima uchun kerak?", ["Stereofonik ovozni chiqarish va tashqi qurilmalarga tovush signallarini yozish", "Grafik tasvirlarni ko'rsatish", "Internetga ulanish", "Printer va skanerlarni boshqarish"]],
            ["Hozirgi paytda tezkor xotiralarning qaysi turi keng tarqalgan?", ["Dinamik mikrosxemalar", "Statik mikrosxemalar", "Kapsulalar", "Kondensatorlar"]],
            ["Kompyuterlarning qaysi turi bir sekundda o‘n trillion amal bajaradi?", ["Super kompyuterlar", "Server kompyuterlar", "Shaxsiy kompyuterlar", "Mini kompyuterlar"]],
            ["Modem va faks-modemlar qaysi funksiyani bajaradi?", ["Telefon tarmog'i orqali aloqa qilish va faksimil xabarlarni qabul qilish va jo'natish", "Grafik tasvirlarni chiqarish", "Tovush signallarini yozish", "Raqamli signallarni analogli signallarga aylantirish"]],
            ["Audioadapter nima uchun kerak?", ["Stereofonik ovozni chiqarish va tashqi qurilmalarga tovush signallarini yozish", "Grafik tasvirlarni ko'rsatish", "Internetga ulanish", "Printer va skanerlarni boshqarish"]],
            ["Skanerlar qanday ma'lumotlarni kiritadi?", ["Matn, rasm, slayd, fotosurat", "Tovush signallari", "Raqamli kodlar", "Videoni qayta ishlash"]],
            ["Qaysi dasturiy ta’minot kompyuter ishini minimal toʻplam bilan ta’minlaydi?", ["Asosiy dasturiy ta’minot", "Xizmat koʻrsatuvchi dasturiy ta’minot", "Amaliy dasturiy ta’minot", "Dasturlash vositalari"]],
            ["DDRI xotiralarning takt chastotasi qanday qiymatlarda bo'lishi mumkin?", ["266, 333, 400, 667 MGs", "100, 200, 300, 500 MGs", "500, 600, 700, 800 MGs", "1000, 1200, 1500, 1800 MGs"]],
            ["Kompyuterning dasturiy ta’minoti qanday toifalarga bo'linadi?", ["Sistemaviy dasturiy ta’minot, amaliy dasturiy ta’minot, dasturlash texnologiyasining uskunaviy vositalari", "Sistemaviy dasturiy ta’minot, operatsion tizimlar, ofis dasturlari", "Multimediali dasturlar, ma’lumot bazalari, o'yin dasturlari", "Internet dasturlari, tizim tizimlari, tasvir muhitlari"]],
            ["Audioadapter nima uchun kerak?", ["Stereofonik ovozni chiqarish va tashqi qurilmalarga tovush signallarini yozish", "Grafik tasvirlarni ko'rsatish", "Internetga ulanish", "Printer va skanerlarni boshqarish"]],
            ["Sistemaviy dasturiy ta’minot qaysi funksiyalarni bajaradi?", ["Kompyuterning va kompyuter tarmoqlarining ishonchli va samarali ishlashini ta’minlash", "Foydalanuvchining matnli hujjatlarni yaratishini ta’minlash", "Internetga ulanishni ta’minlash", "Grafik tasvirlarni yaratish"]],
            ["Dastlabki personal kompyuter qachon yaratilgan?", ["1973-yilda", "1981-yilda", "1977-yilda", "1990-yilda"]],
            ["Amaliy dasturiy ta’minot nima?", ["Aniq bir predmet sohasi boʻyicha ma’lum bir masalalar sinfini yechishga moʻljallangan dasturlar majmuasi", "Kompyuter apparatini boshqaruvchi dasturlar", "Foydalanuvchining ish muhitini tashkil etuvchi dasturlar", "Kompyuter resurslarini boshqaruvchi dasturlar"]],
            ["Operatsion tizimlar qanday funktsiyalarni bajaradi?", ["Kompyuter resurslarini boshqarish va foydalanuvchi bilan muloqot yaratish", "Matnli hujjatlarni formatlash va chop etish", "Internetga ulanish va tarmoq ishini ta’minlash", "Dasturlarni yaratish va testlash"]],
            ["Qaysi dasturiy ta’minot utilit deb ataladi?", ["Ma’lumotni qayta ishlashda qoʻshimcha operatsiyalarni bajarishga yoki kompyuterga xizmat koʻrsatishga moʻljallangan dasturlar", "Matnli hujjatlarni formatlash va rasmiylashtiruvchi dasturlar", "Grafik tasvirlarni yaratish dasturlari", "Internet orqali aloqa qilish dasturlari"]],
            ["Qanday dasturiy ta’minot dasturlash texnologiyasining uskunaviy vositalaridan biridir?", ["Dasturlarni ishlab chiqish, saqlash va joriy etishga moʻljallangan maxsus dasturlar", "Foydalanuvchi interfeysini yaratish dasturlari", "Sistemaviy dasturiy ta’minot", "Amaliy dasturiy ta’minot"]],
            ["Sistemaviy dasturiy ta’minotga qanday dasturlar kiradi?", ["Operatsion sistema va tarmoq sistemasi", "Buxgalteriya dasturlari va matn muharrirlari", "Grafik muharrirlar va elektron jadvallar", "Tarjimon dasturlar va rejalashtiruvchilar"]],
            ["Qaysi dasturiy ta’minot kompyuter ishini minimal toʻplam bilan ta’minlaydi?", ["Asosiy dasturiy ta’minot", "Xizmat koʻrsatuvchi dasturiy ta’minot", "Amaliy dasturiy ta’minot", "Dasturlash vositalari"]],
            ["DOS operatsion tizimi qanday xususiyatlarga ega edi?", ["16 razryadga ega bo'lib, buyruqlar satri orqali muloqot qilgan", "Grafik interfeysga ega bo'lgan", "Kompyuter resurslarini avtomatik ravishda boshqaradigan", "Yangi dasturlarni ishlab chiqish uchun maxsus vositalar taqdim etgan"]],
            ["Operatsion tizimlar qanday funktsiyalarni bajaradi?", ["Kompyuter resurslarini boshqarish va foydalanuvchi bilan muloqot yaratish", "Matnli hujjatlarni formatlash va chop etish", "Internetga ulanish va tarmoq ishini ta’minlash", "Dasturlarni yaratish va testlash"]],
            ["Qaysi operatsion tizim kompyuter industriyasida yangi bosqichni vujudga keltirdi?", ["Windows 95", "Windows 98", "Windows XP", "DOS"]],
            ["Fon Neyman tamoyillari asosida yaratilgan zamonaviy kompyuterlarning asosiy qismlari nimalardan iborat?", ["Protsessor, xotira, tarmoq qurilmalari", "Monitor, klaviatura, sichqoncha", "CD va DVD o‘quvchilar, modemlar, videoprotsessor", "Klaviatura, printer, skaner"]],
            ["Tashqi interfeys qanday komponentlardan iborat?", ["Tashqi portlar, shinalar, kompyuterlar birlashmasi va tashqi qurilmalar", "Faks-modemlar, audioadapterlar, plotterlar", "Kompakt disklar, DVD, qattiq disklar", "Sichqonchalar, trekbol, skanerlar"]],
            ["DOS operatsion tizimi qanday xususiyatlarga ega edi?", ["16 razryadga ega bo'lib, buyruqlar satri orqali muloqot qilgan", "Grafik interfeysga ega bo'lgan", "Kompyuter resurslarini avtomatik ravishda boshqaradigan", "Yangi dasturlarni ishlab chiqish uchun maxsus vositalar taqdim etgan"]],
            ["DDR II xotiralarning sig‘imi qanday bo'lishi mumkin?", ["512, 1024, 2048 MB", "128, 256, 512 MB", "1, 2, 4 GB", "8, 16, 32 GB"]],
            ["DDR III xotiralarning sig‘imi qanday bo'lishi mumkin?", ["1, 2, 4 GB", "512, 1024, 2048 MB", "128, 256, 512 MB", "8, 16, 32 GB"]],
            ["Operatsion tizimlar qanday funktsiyalarni bajaradi?", ["Kompyuter resurslarini boshqarish va foydalanuvchi bilan muloqot yaratish", "Matnli hujjatlarni formatlash va chop etish", "Internetga ulanish va tarmoq ishini ta’minlash", "Dasturlarni yaratish va testlash"]],
            ["Kompyuterning qaysi turi mobil ixcham shaxsiy kompyuter hisoblanadi?", ["Noutbuk", "Super kompyuter", "Server kompyuter", "Mini kompyuter"]],
            ["Video protsessorlar qaysi sohalarda ishlatiladi?", ["Grafika va video", "Matematika va statistika", "Musiqa va ovoz", "Jismoniy mashqlar"]],
            ["Elektr energiyasini uzluksiz ta’minlash tizimlari nimaga mo‘ljallangan?", ["Kompyuter texnikasini himoyalash", "Ma’lumotlarni saqlash", "Dasturiy ta’minotni yangilash", "Internetga ulanish"]],
            ["DDR III xotiralarning sig‘imi qanday bo'lishi mumkin?", ["1, 2, 4 GB", "512, 1024, 2048 MB", "128, 256, 512 MB", "8, 16, 32 GB"]],
            ["BIOSning asosiy vazifalari qanday?", ["Klaviatura, ekran va boshqa portlarni boshqarish", "Video ishlov berish", "Internet ulanishi", "Printer va skanerlarni sozlash"]],
            ["Kompyuterning elektr ta’minoti tizimida katta quvvat talab qiluvchi qurilmalar qaysi?", ["Lift motorlari, konditsioner, muzlatgichlar", "Protsessor, monitor, klaviatura", "Printer, skaner, sichqoncha", "Noutbuk, flesh xotira, mikrofon"]],
            ["Elektr tokining birdan o‘chib qolishi kompyuterning qaysi tizimiga zarar yetkazishi mumkin?", ["Fayl tizimi", "Operatsion tizim", "Dasturiy ta’minot", "Xotira bloki"]]
        ];
    </script>
@endsection
