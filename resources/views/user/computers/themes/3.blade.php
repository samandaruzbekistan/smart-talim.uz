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
                            <h1>Axborotlarni saqlash qurilmalari</h1>
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

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            <b>Diskli jamlagichlar.</b> Ma’lumotni saqlash, hujjatlarni va dasturlarni bir joydan ikkinchi joyga olib oʻtish, bir kompyuterdan ikkinchisiga oʻtkazish, kompyuter bilan ishlaganda foydalanadigan axborotni doimiy saqlash uchun disklardagi jamlagichlar ishlatiladi. Ular ikki turda boʻlib, egiluvchan disklar (disketalar) va qattiq disklardagi jamlagichlar (vinchesterlar) deb ataladi. Egiluvchan disklar (disketalar)ga ma’lumotni yozish va ulardan ma’lumotni oʻqish uchun disk yurituvchi (diskovod) qurilmasi ishlatiladi.  Disk yurituvchining ikki turi mavjud: 3,5 dyuymli disketaga moʻljallangan model va 5,25 dyuymli disketaga moʻljallangan eskirgan model.
                        </p>

                        <p>
                            Qattiq disklardagi jamlagichlar (vinchesterlar) kompyuter bilan ishlaganda foydalaniladigan axborotni doimiy saqlashga moʻljallangan. Masalan, operatsion tizim dasturlari, koʻp ishlatiladigan dasturlar paketlari, hujjatlar tahrirlagichlari, dasturlash tillari uchun translyatorlar va boshqalar. Kompyuterda qattiq diskning mavjudligi u bilan ishlashda qulaylikni oshiradi. Foydalanuvchi uchun qattiq diskdagi jamlagichlar bir-biridan, diskka qancha axborot sigʻishi bilan farq qiladi.
                        </p>

                        <p>
                            Hoziigi paytda kompyuterlar asosan sigʻimi 200 Gbayt va undan koʻp boʻlgan vinchesterlar bilan jihozlanmoqda. Fayl serverlar nafaqat katta sigʻimli,balki tezkor boʻlgan bir nechta vinchesterlar bilan jihozlanishi mumkin. Diskning ish tezligi ikki koʻrsatkich bilan aniqlanadi;
                            1. Diskdagi ma’lumotga kirish vaqti.
                            2. Diskdan ma’lumotni oʻqish va unga ma’lumot yozish tezligi.
                            Shuni alohida taʻkidlash lozimki, ma’lumotga kirish vaqti va oʻqish yozish tezligi faqat disk yurituvchining oʻzigagina bogʻliq emas, balki disk bilan axborot almashish kanali parametrlariga, disk kontrolyorining turi va kompyuter mikroprotsessorining tezligiga ham bogʻliq.
                        </p>

                        <p>
                            <b>Kompakt disklar.</b> Optik disk (CD-ROM) uchun disk yurituvchining ish prinsipi egiluvchan disklar uchun disk yurituvchilarning ish prinsipiga oʻxshashdir. CD-ROMning yuzasi lazer kallakka nisbatan oʻzgarmas chiziqli tezlik bilan harakatlanadi, burchak tezlik esa kallakning radial joylashishiga qarab oʻzgaradi. CD-ROM ning unumdorligi, odatda, uning biror vaqt davomida ma’lumotni uzluksiz oʻzlashtirishidagi tezlik xarakteristikalari va ma’lumotga yetishning oʻrtacha tezligi bilan aniqlanadi.Ular mos ravishda Kilabayt/s, Megabayt, Gigabayt birliklarda oʻlchanadi.DVD —keyingi yillar katta sigʻimga ega boʻlgan diskli klich tarqalmoqda.
                        </p>

                        <p>
                            <b>Audioadapter.</b> Har qanday multimediaviy shaxsiy kompyuter tarkibida audioadapter platasi mavjud. U nima uchun kerak? Creative Labs firmasi oʻzining birinchi audioadapterini Sound Blaster deb atagani uchun, ular koʻpincha «saundblasterlar» deyiladi. Audioadapter kompyuterga faqat stereofonik ovozni emas, balki tashqi qurilmalarga tovush signallarini yozish imkonini ham beradi. Shaxsiy kompyuterlarning diskli jamlagichlariga oddiy (analogli) tovush signallarini yozish mumkin emas. Ular faqat raqamli signallarnigina yozishga moʻljallangan.
                        </p>

                        <p>
                            Audioadapter tovush signali darajasini davriy ravishda aniqlab, uni raqamli kodga aylantirib beruvchi analog-raqamli oʻzgartirgichga ega. Mana shu ma’lumot tashqi qurilmaga raqamli signal koʻrinishida yozib qoʻyiladi. Ushbu jarayonga teskari jarayonni amalga oshirish uchun raqam-analogli oʻzgartirgich qoʻllaniladi. U raqamli signallarni analogli signallarga aylantirib beradi. Filtratsiya qilingandan soʻng ularni kuchaytirish va akustik kolonkalarga uzatish mumkin.
                        </p>

                        <p>
                            <b>Modem va faks-modemlar. </b>Modem — telefon tarmogʻi orqali kompyuter bilan aloqa qilish imkonini beruvchi qurilma.
                        </p>

                        <p>
                            <b>Faks-modem</b> — faksimil xabarlarni qabul qilish va joʻnatish imkonini beruvchi modem. Tashqi koʻrinishi va oʻrnatilish joyiga qarab modemlar ichki va tashqi modemlarga boʻlinadi. Ichki modemlar bevosita sistemali blok ichiga oʻrnatiladigan elektron platadan iborat. Tashqi modemlar — kompyuter tashqarisida boʻlgan va portlardan biriga ulanadigan avtonom elektron qurilma. Soʻnggi yillarda modemlar va faks-modemlarga boʻlgan talab oshib ketdi.
                        </p>

                        <p>
                            Modemlar bir kompyuterdan ikkinchisiga hujjatlar paketini yetarlicha tez oʻtkazish, elektron pochta orqali bogʻlanish imkonini beradi. Shuningdek, xorijiy hamkorlar bilan aloqa qilish uchun global kompyuter tarmogʻi (Internet va boshqalar) ga kirishni taʻminlaydi.
                        </p>

                        <p>
                            <b>Sichqoncha va trekbol.</b> Sichqoncha va trekbol kompyuterga axborotni kiritishning koordinatali qurilmalari hisoblanadi. Ular klaviaturaning oʻrnini toʻlaligicha bosa olmaydi. Bu qurilmalar asosan ikki yoki uchta boshqaruv tugmachasiga ega. Sichqoncha ulanishining uch usulini koʻrsatish mumkin. Eng koʻp tarqalgan usul ketma-ket port orqali ulanishdir. Shinali interfeysli sichqonchalar kamroq tarqalgan. Ularni ulash uchun maxsus interfeys yoki «sichqoncha» porti kerak boʻladi. Uchinchi koʻrinishdagi ulanish PS/2 stilidagi sichqonchalarda amalga oshirilgan. Hoziigi kunda ular portativ kompyuterlarda ishlatilmoqda.
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('computers.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter va uning turlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Protsessor texnologiyasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Axborotlarni saqlash qurilmalari</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Zamonaviy kompyuterlarning dasturiy ta’minoti</h5>
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
            ["Diskli jamlagichlar qaysi ikki turga bo'linadi?", ["Egiluvchan disklar va qattiq disklardagi jamlagichlar", "Kompakt disklar va DVD", "Audioadapterlar va modemlar", "Skanerlar va plotterlar"]],
            ["Qattiq disklarning asosiy funktsiyasi nima?", ["Axborotni doimiy saqlash", "Tovush signallarini yozish", "Ekran tasvirlarini ko'rsatish", "Kiritish va chiqarish portlarini boshqarish"]],
            ["Diskdagi ma'lumotga kirish vaqti va o'qish yozish tezligi qaysi omillarga bog'liq?", ["Disk yurituvchining o'ziga, disk bilan axborot almashish kanali parametrlariga, disk kontrolyorining turi va mikroprotsessor tezligiga", "Faqat disk yurituvchining o'ziga", "Faqat disk kontrolyorining turi va mikroprotsessor tezligiga", "Faqat disk bilan axborot almashish kanali parametrlariga"]],
            ["CD-ROM ning unumdorligi qanday o'lchanadi?", ["Kilabayt/s, Megabayt, Gigabayt", "Bajt, Kbayt, Mbayt", "Gigabayt, Terabayt", "Kilobayt, Megabayt"]],
            ["Audioadapter nima uchun kerak?", ["Stereofonik ovozni chiqarish va tashqi qurilmalarga tovush signallarini yozish", "Grafik tasvirlarni ko'rsatish", "Internetga ulanish", "Printer va skanerlarni boshqarish"]],
            ["Modem va faks-modemlar qaysi funksiyani bajaradi?", ["Telefon tarmog'i orqali aloqa qilish va faksimil xabarlarni qabul qilish va jo'natish", "Grafik tasvirlarni chiqarish", "Tovush signallarini yozish", "Raqamli signallarni analogli signallarga aylantirish"]],
            ["Sichqoncha qanday usullar bilan ulanishi mumkin?", ["Ketma-ket port, shinali interfeys, PS/2", "USB, HDMI, VGA", "FireWire, Thunderbolt, SATA", "LAN, Wi-Fi, Bluetooth"]],
            ["Trekbol qanday ishlaydi?", ["Sharcha harakatga keltiriladi, kursor boshqarish aniqligini oshiradi", "Ekrandagi tasvirlarni ko'rsatadi", "Tovush signallarini yozadi", "Internetga ulanishni ta'minlaydi"]],
            ["Skanerlar qanday ma'lumotlarni kiritadi?", ["Matn, rasm, slayd, fotosurat", "Tovush signallari", "Raqamli kodlar", "Videoni qayta ishlash"]],
            ["Tashqi interfeys qanday komponentlardan iborat?", ["Tashqi portlar, shinalar, kompyuterlar birlashmasi va tashqi qurilmalar", "Faks-modemlar, audioadapterlar, plotterlar", "Kompakt disklar, DVD, qattiq disklar", "Sichqonchalar, trekbol, skanerlar"]]
        ];
    </script>
@endsection
