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
                            <h1>Web saytlarning tuzilishi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">Internet</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="https://www.hubspot.com/hubfs/assets/hubspot.com/web-team/WBZ/Feature%20Pages/website-drag-and-drop/custom-website-en.webp" class="img-fluid" alt=""><br>
                        <p class="mt-3">
                            <b>Bosh sahifa</b> veb saytning birinchi sahifasidir. Web sayt bitta sahifadan yoki oʻnlab va hatto, yuzlab sahifadan iborat boʻlishi mumkin. Oxirgi holda bosh sahifa veb saytning mundarijasi vazifasini bajaradi va veb saytdagi ma’lumotni topishni osonlashtirish uchun xizmat qiladi.
                        </p>

                        <p>
                            Bosh sahifada ajratilgan yoki ostiga chizilgan <b>gipermurojaatlar</b> joylashgan boʻladi. Ular saytdagi boshqa sahifalarga oʻtishga xizmat qiladi
                        </p>

                        <p>
                            Serverda joylashgan va bir-biri bilan bogʻlangan hujjatlar birgalikdab <b> web saytni</b> tashkil etadi. Bitta serverda har biri alohida sohada (alohida papkada) joylashgan koʻplab saytlar boʻlishi mumkin. Ular bitta vinchesterda koʻplab papkalar joylashgani kabi joylashishadi. Ba’zi veb saytlar juda katta boʻladi yoki ularga har doim koʻplab murojaatlar boʻladi. Bunday saytlarni joylash uchun bitta server etarli boʻlmaydi. Bunday hollarda bitta sayt bir necha serverlarga yoki bir necha kompyuterlardan iborat serverga joylanadi.
                        </p>

                        <p>
                            Sayt yaratishda uning har bir sahifasidan orqaga va bosh sahifaga qaytish imkoni koʻzda tutilishi kerak. Bu usul foydalanuvchi uchun juda qulay boʻlib, u sayt ichida adashib qolmaydi. Foydalanuvchi har doim bosh sahifaga qaytib, boshqa yoʻnalishda sayt boʻylab yura oladi.
                        </p>

                        <p>
                            <b>Sayt</b> — bu umumiy tushuncha boʻlib, uni koʻrinishi, bajaradigan vazifasiga qarab bir necha turlarga boʻlish mumkin
                        </p>

                        <ul>
                            <li>
                                internet orqali tanishtiriluvchi saytlar;
                            </li>
                            <li>
                                axborot resurslari;
                            </li>
                            <li>
                                veb xizmatlar;
                            </li>
                        </ul>

                        <p>
                            Bu turlar asosiylari hisoblanib, oʻz navbatida bular ham ma’lum qismlarga boʻlinadi
                        </p>

                        <p>
                            <b>Intrenet orqali tanishtiriluvchi saytlar:</b> <br>
                            — vizitka saytlari;<br>
                            — korporativ saytlar;<br>
                            — internet doʻkonlar;<br>
                            — promo saytlar.<br>

                        </p>

                        <p>
                            <b>Axborot resurslari:</b><br>
                            — tematik saytlar;<br>
                            — internet portallar;<br>
                            — bloglar;<br>
                            — saytlar roʻyxati.<br>
                        </p>

                        <p>
                            <b>Veb xizmatlar:</b><br>
                            — qidiruv tizimlari;<br>
                            — pochta xizmatlari;<br>
                            — internet forumlar;<br>
                            — video, rasm, audio xostinglar;<br>
                            — eʻlonlar doskasi;<br>
                            — ijtimoiy tarmoqlar.<br>
                        </p>

                        <p>
                           <b> Vizitka saytlari </b>— bir shaxs yoki biror firma haqida 3, 4 ta sahifadan tashkil topgan, eng sodda koʻrinishga ega sayt. Bunday saytni tuzib berish ham unchalik katta mablagʻ talab qilmaydi. Firmalar bunday turdagi saytga ega boʻlishlaridan maqsad, oʻzlari haqida toʻliq ma’lumot berishlari, oʻz xizmatlari, narxlari va bogʻlanish mumkin boʻlgan ma’lumotni internet foydalanuvchilariga eʻlon qilishdan iborat.
                        </p>

                        <p>
                            <b>Korporativ saytlar</b> — toʻliq, murakkab koʻrinishdagi sayt. Bunday koʻrinishdagi saytlarda firma haqida toʻliq ma’lumot, ularning mahsulotlari haqida(rasmlari bilan birga), narxlari beriladi. Foydalanuvchilar oʻz fikrlarini qoldirishlari, sayt orqali buyurtmalar berishlari ham mumkin boʻladi. Har xil turdagi interaktiv xizmatlar ham mavjud boʻlishi mumkin.
                            Internet doʻkonlar — internet orqali savdo sotiqni yoʻlga qoʻyuvchilar uchun sayt. Bizda bu yoʻnalish endi rivojlanmoqda. Saytda asosan mahsulotlar, ularning narxlari, toʻlovlar haqida ma’lumot boʻladi. Asosiy sahifada yangi tovarlar rasmlari bilan berib boriladi.
                        </p>

                        <p>
                            <b>Promo saytlar</b> — ma’lum bir vaqt uchun yaratilgan saytlar. Qandaydir konferensiyalar, koʻrgazmalar, konsertlar uchun yaratilgan sayt. Bu bayramlar tugagandan soʻng, sayt yopilishi kerak, lekin koʻp hollarda unday emas, eski xabarlar bilan sayt ishlashda davom etadi. Bu eʻtiborsizlik natijasidir.
                        </p>

                        <p>
                            <b>Tematik saytlar</b> — ma’lum bir kichik doiradagilar uchun sayt, bitta mavzu boʻyicha yaratiladi. Sayt dizayni aynan shu mavzuga oid boʻlishi lozim va albatta kommentariya qoldirish mumkin boʻlishi kerak. Agar iloji boʻlsa, forumi ham boʻlishi lozim.
                        </p>

                        <p>
                            <b>Internet portal</b> — katta hajmdagi sayt, boshqa saytlarga yoʻllanmalar beradi. Internet foydalanuvchilarini toʻgʻri yoʻnaltirib yuboruvchi sayt. Oʻzida koʻp miqdorda havolalar(ssilka) saqlaydi va har xil turdagi ma’lumotni berib boradi(ob-havo ma’lumoti, eʻlonlar, forumlar, oʻyinlar,…). Eng asosiysi sodda boʻlishi kerak, foydalanuvchi darhol qayerga kirish kerakligini tushunib olishi lozim.
                        </p>

                        <p>
                            <b>Blog</b> — biror bir shaxsning internet kundaligi, bu yerda u biror mavzu boʻyicha oʻz fikrlarini yozib boradi. Oʻquvchilar bu fikrga oʻz qarashlarini bildirishadi
                        </p>

                        <p>
                            <b>Saytlar roʻyxati</b> — bunday saytlarda, boshqa saytlarning qisqacha taʻrifi keltirilgan boʻladi. Shu qisqa matnni oʻqib, qiziq boʻlsa shu saytga oʻtishni amalga oshirish mumkin boʻladi. Bu orqali saytlar oʻz darajalarini koʻtarib olishadi. Sayt roʻyhati ma’lum bir boʻlimlarga boʻlingan holda saqlanadi.
                        </p>

                        <p>
                            <b>Qidiruv tizimlari</b> — oʻz robot qidiruvlariga ega boʻlgan sayt. Bunday saytlar barcha saytlardan ma’lumot toʻplaydi va kerakli paytda chiqarib beradi. Bularga misol qilib, Google, Yandex qidiruv tizimlarini misol qilish mumkin.
                        </p>

                        <p>
                            <b>Xosting saytlar</b> — bunday saytlar har xil turdagi fayllarni(video, audio, rasm) oʻzida saqlaydi. Bu fayllarni foydalanuvchilar saytga kiritib qoʻyishadi va kerak paytda, internet orqali oʻz fayllarini olishlari mumkin boʻladi. Misol uchun, img.uz.
                        </p>

                        <p>
                            <b>Eʻlonlar doskasi</b> — foydalanuvchilar tomonidan kiritilgan har xil koʻrinishdagi eʻlonlarni chiqaruvchi saytlar. Bu saytlar biror narsani sotishda qoʻl keladi. Elektron bozor deb ham atasa boʻladi. Bunga misol qilib, albatta torg.uz saytini olish mumkin.
                        </p>
                        <p>
                            <b>Pochta xizmatlari</b> — internetning eng ommalashgan xizmati, elektron pochtalar ochish, boshqa pochtalarga xat joʻnatish va ulardan qabul qilib olish kabi vazifalarni bajaruvchi saytlar. Hozirda bunday turdagi saytlar, pochta xizmatidan tashqari boshqa xizmatlarni ham taklif qilishmoqda(qidiruv xizmatlari, fayllarni saqlash,…). Misol qilib, mail.ru, yandex.ru va boshqalarni keltirish mumkin.
                            Internet forum — muloqotni amalga oshirib beruvchi saytlar, bunday saytlar biror saytni alohida qismi yoki oʻzi alohida sayt boʻlishi mumkin. Asosiy vazifa, yozish orqali muloqot qilish, biror muammoni hal etishdan iborat. Undan tashqari mahsulotlarni reklama qilishda ham qoʻl keladi
                        </p>

                        <p>
                            <b>Ijtimoiy tarmoqlar</b> — foydalanuvchilar tomonidan toʻlatiladigan sayt. Bir xil dunyo qarashga ega boʻlgan har xil guruhlar yaratish, qiziqishlarni boshqalar bilan baham koʻrish, rasmlar qoʻyish, har xil aqlli gaplar kiritish uchun joy. Mani fikrim boʻyicha, oʻzini reklama qilish uchun eng optimal sayt. Bu turdagi saytlarga misollar ham shart emas shekili, mayli faqat bittasini yozaman, facebook.com
                        </p>

                    </div>

                    <div class="col-lg-4">
                        <h3>Mavzular:</h3>
                        <a href="{{ route('internet.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 ><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Web-sahifa va uning tuzilishi</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet tarmogʻi qidiruv tizimlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.4') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet axborot terurslari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.5') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Internet xizmatlari</h5>
                            </div>
                        </a>
                        <a href="{{ route('internet.6') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Elektron pochta xizmati</h5>
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
            ["Bosh sahifa veb saytning qanday rolni bajaradi?",
                [
                    "Veb saytning mundarijasi vazifasini bajaradi va ma’lumotni topishni osonlashtiradi",
                    "Veb saytning faqat birinchi sahifasi bo‘lib, boshqa sahifalar mavjud emas",
                    "Foydalanuvchilarga faqat reklama ko‘rsatadi",
                    "Veb saytning barcha sahifalarini avtomatik ravishda yangilaydi"
                ],
            ],
            ["Web saytlarni joylash uchun qanday tuzilma ishlatiladi?",
                [
                    "Server",
                    "Router",
                    "Modem",
                    "Hard disk"
                ],
            ],
            ["Sayt yaratishda qanday imkoni ko‘zda tutilishi kerak?",
                [
                    "Har bir sahifadan orqaga va bosh sahifaga qaytish",
                    "Foydalanuvchi har doim yangi sahifaga o'tishi kerak",
                    "Sahifalar orasida havolalar bo‘lmasligi kerak",
                    "Sayt avtomatik ravishda tahrirlanishi kerak"
                ],
            ],
            ["Qaysi turdagi saytlar odatda 3-4 ta sahifadan iborat va shaxs yoki firma haqida ma’lumot beradi?",
                [
                    "Vizitka saytlari",
                    "Internet do‘konlar",
                    "Promo saytlar",
                    "Tematik saytlar"
                ],
            ],
            ["Internet doʻkonlarida nimani koʻrish mumkin?",
                [
                    "Mahsulotlar, ularning narxlari, to‘lovlar haqida ma’lumot",
                    "Faqat yangi xabarlar",
                    "Internet portallar haqida ma’lumot",
                    "Shaxsiy fikrlar va bloglar"
                ],
            ],
            ["Tematik saytlar qanday maqsadga xizmat qiladi?",
                [
                    "Ma’lum bir mavzuni qamrab olish",
                    "Foydalanuvchilarning e’lonlarini joylashtirish",
                    "Pochta xizmatlarini taqdim etish",
                    "Sayt ro‘yxatini tuzish"
                ],
            ],
            ["Internet portallarining qanday xususiyati mavjud?",
                [
                    "Ko‘p miqdorda havolalar va turli xil ma’lumotlarni taqdim etadi",
                    "Faqat bloglar va maqolalarni nashr etadi",
                    "Har qanday sahifani avtomatik yangilaydi",
                    "Faoliyatini vaqtincha to‘xtatadi"
                ],
            ],
            ["Blog nima?",
                [
                    "Biror shaxsning internet kundaligi",
                    "Boshqa saytlarga yo‘llanmalar ro‘yxati",
                    "Elektron pochtaga asoslangan sayt",
                    "Mahsulotlar narxlari ro‘yxati"
                ],
            ],
            ["Qidiruv tizimlari qanday vazifani bajaradi?",
                [
                    "Barcha saytlardan ma’lumot to‘playdi va kerakli paytda chiqarib beradi",
                    "Foydalanuvchilarning shaxsiy ma’lumotlarini saqlaydi",
                    "Faqat rasm va videolarni saqlaydi",
                    "Mahsulotlarni sotish uchun sayt yaratadi"
                ],
            ],
            ["Xosting saytlar qanday vazifani bajaradi?",
                [
                    "Foydalanuvchilarga fayllarni saqlash va ulardan foydalanish imkonini beradi",
                    "Saytlarning dizaynini yaratadi",
                    "Mahsulotlarni ro‘yxatga oladi",
                    "Bloglarni yangilaydi"
                ],
            ]
        ];

    </script>
@endsection
