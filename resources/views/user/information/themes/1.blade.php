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
                            <h1>Tarmoq va axborot xavfsizligi tushunchasi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                        <li class="current">AXBOROTLARNI HIMOYALASHNING TEXNIK VA DASTURIY TA’MINOTI</li>
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
                            Barcha hujumlar Internet ishlashi prinsiplarining qandaydir  chegaralangan soniga asoslanganligi sababli masofadan boʻladigan namunaviy hujumlami ajratish va ularga qarshi qandaydir kompleks choralarni tavsiya etish mumkin. Bu choralar, haqiqatan, tarmoq xavfsizligini taʻminlaydi.Internet protokollarining mukammal emasligi sababli tarmoqdagi axborotga masofadan boʻladigan asosiy namunaviy hujumlar quiyidagilar:
                        </p>

                        <ul>
                            <li>
                                tarmoq trafigini tahlillash;
                            </li>

                            <li>
                                tarmoqning yolgʻon obyektini kiritish;
                            </li>

                            <li>
                                yolgʻon marshrutni kiritish;
                            </li>

                            <li>
                                xizmat qilishdan voz kechishga undaydigan hujumlar.
                            </li>
                        </ul>

                        <p>
                            <b>Tarmoq trafigini tahlillash.</b> Serverdan Internet tarmogʻi bazaviy protokollari FTP (Fayllarni uzatish protokoli) va TELNET (Virtual terminal protokoli) boʻyicha foydalanish uchun foydalanuvchi identifikatsiya va autentifikatsiya muolajalarini oʻtishi lozim. Foydalanuvchini identifikatsiyalashda axborot sifatida uning identilikatori (ismi) ishlatilsa, autentifikatsiyalash uchun parol ishlatiladi.
                        </p>

                        <p>
                            FTP va TELNET protokollarining xususiyati shundaki, foydaluvchilarning paroli va identifikatori tarmoq orqali ochiq, shifrlanmagan koʻrinishda uzatiladi. Demak, Internet xostlaridan foydalanish uclum Foydalanuvchining ismi va parolini bilish kifoya.
                        </p>

                        <p>
                            Axborot almashinuvida Internetning masofadagi ikkita uzeli almashinuv axborotini paketlarga ajratadi. Paketlar aloqa kanallari orqali uzatiladi va shu paytda ushlab qolinishi mumkin
                        </p>

                        <p>
                            FTP va TELNET protokollarining tahlili koʻrsatadiki, TELNET parolni simvollarga ajratadi va parolning har bir simvolini mos paketga joylashtirib, bittalab uzatadi, FTP esa, aksincha, parolni butunlayicha bitta paketda uzatadi. Parollar shifrlanmaganligi sababli paketlarning maxsus skaner-dasturlari yordamida foydalanuvchining ismi va paroli boʻlgan paketni ajratib olish mumkin. Shu sababli, hozirda ommaviy tus olgan ICQ (Bir lahzali almashish xizmati) dasturi ham ishonchli emas. ICQning protokollari va axborotlarni saqlash, uzatish formatlari ma’lum va demak, uning trafigi ushlab qolinishi va ochilishi mumkin
                        </p>

                        <p>
                            <b>Asosiy muammo almashinuv protokolida.</b> Bazaviy tatbiqiy prokollarning TCP/IP oilasi ancha oldin (60-yillarning oxiri va 80- yillarning boshi) ishlab chiqilgan va shundan beri umuman oʻzgartirilmagan. Oʻtgan davr mobaynida taqsimlangan tarmoq xavfsizligini taʻminlashga yondashish jiddiy oʻzgardi.
                        </p>

                        <p>
                            Tarmoq ulanishlarini himoyalashga va traflkni shifrlashga imkon beruvchi axborot almashinuvining turli protokollari ishlab chiqildi. Ammo bu protokollar eskilarining oʻrnini olmadi (SSL bundan istisno) va standart maqomiga ega boʻlmadi. Bu protokollarning standart boʻlishi uchun esa tarmoqdan foydalanuvchilarning barchasi ularga oʻtishlari lozim. Ammo, Internetda tarmoqni markazlashgan boshqarish boʻlmaganligi sababli, bu jarayon yana koʻp yillar davom etishi mumkin.
                        </p>

                        <p>
                           <b> Tarmoqning yolgʻon obyektini kiritish.</b> Har qanday taqsimlangan tarmoqda qidirish va adreslash kabi “nozik joylari” mavjud. Ushbu jarayonlar kechishida tarmoqning yolgʻon obyektini (odatda bu yolgʻon xost) kiritish imkoniyati tugʻiladi. Yolgʻon obyektning kiritilishi natijasida adresatga uzatmoqchi boʻlgan barcha axborot aslida niyati buzuq odamga tegadi. Taxminan, buni tizimingizga, odatda elektron pochtani joʻnatishda foydalanadigan provayderingiz serveri adresi yordamida kirishga kimdir uddasidan chiqqani kabi tasavvur etish mumkin. Bu holda niyati buzuq odam unchalik qiynalmasdan elektron xat-xabaringizni egallashi mumkin, siz esa hatto undan shubhalanmasdan oʻzingiz barcha elektron pochtangizni joʻnatgan boʻlar edingiz. Qandaydir xostga murojaat etilganida adreslarni maxsus oʻzgartirishlar amalga oshiriladi (IP-adresdan tarmoq adapteri yoki marshrutizatorining fizik adresi aniqlanadi). Internetda bu muammoni yechishda ARP (Kanal sathi protokoli) protokolidan foydalaniladi. Bu quyidagicha amalga oshiriladi: tarmoq resurslariga birinchi murojaat etilganida xost keng koʻlamli ARP-soʻrovni joʻnatadi. Bu soʻrovni tarmoqning berilgan segmentidagi barcha stansiyalar qabul qiladi. Soʻrovni qabul qilib, xost soʻrov yuborgan xost xususidagi axborotni oʻzining ARP-jadvaliga kiritadi, soʻngra unga oʻzining Ethernet-adresi boʻlgan ARP-javobni joʻnatadi. Agar bu segmentda bunday xost boʻlmasa, tarmoqning boshqa segmentlariga murojaatga imkon beruvchi marshrutizatorga murojaat qilinadi. Agar foydalanuvchi va niyati buzuq odam bir segmentda boʻlsa, ARP-soʻrovni ushlab qolish va yolgʻon ARP-javobni yoʻllash mumkin boʻladi. Bu usulning taʻsiri faqat bitta segment bilan chegaralanganligi tasalli sifatida xizmat qilishi mumkin. ARP bilan boʻlgan holga oʻxshab DNS-soʻrovni ushlab qolish yoʻli bilan Internet tarmogʻiga yolgʻon DNS-serverni kiritish mumkin. Bu quyidagi algoritm boʻyicha amalga oshiriladi:
                        </p>

                        <ul>
                            <li>DNS-soʻrovni kutish</li>
                            <li>olingan soʻrovdan kerakli ma’lumotni chiqarib olish va tarmoq boʻyicha soʻrov yuborgan xostga yolgʻon DNS javobni haqiqiy DNS-server nomidan uzatish. Bu javobda yolgʻon DNSserverning IP-adresi koʻrsatilgan boʻladi</li>
                            <li>xostdan paket olinganida paketning IP-sarlavhasidagi IPadresni yolgʻon DNS serveming IP-adresiga oʻzgartirish va paketni serverga uzatish (ya’ni yolgʻon DNS-server oʻzining nomidan server bilan ish olib boradi)</li>
                            <li>serverdan paketni olishda paketning IP-sarlavhasidagi IPadresni yolgʻon DNS-serverning IP-adresiga oʻzgartirish va paketni xostga uzatish (yolgʻon DNS serverni xost haqiqiy hisoblaydi)</li>
                        </ul>

                        <p>
                            <b>Yolgʻon marshrutni kiritish.</b> Ma’lumki, zamonaviy global tarmoqlari bir-biri bilan tarmoq uzellari yordamida ulangan tarmoq segmentlarining majmuidir. Bunda marshrut deganda ma’lumotlarni manbadan qabul qiluvchiga uzatishga xizmat qiluvchi tarmoq uzellariniug ketma-ketligi tushuniladi. Marshrutlar xususidagi axborotni almashishni unifikatsiyalash uchun marshrutlarni boshqaruvchi maxsus protokollar mavjud. Internetdagi bunday protokollarga yangi marshrutlar xususida xabarlar almashish protokoli - ICMP (Tarmoqlararo boshqaruvchi xabarlar protokoli) va marshrutizatorlarni masofadan boshqarish protokoli SNMP (Tarmoqni boshqarishning oddiy protokoli) misol boʻla oladi. Marshrutni oʻzgartirish hujum qiluvchi yolgʻon xostni kiritishidan boʻlak narsa emas. Hatto oxirgi obyekt haqiqiy boʻlsa ham marshrutni axborot baribir yolgʻon xostdan oʻtadigan qilib qurish mumkin.
                        </p>

                        <p>
                            Marshrutni oʻzgartirish uchun hujum qiluvchi tarmoqqa tarmoqni boshqaruvchi qurilmalar (masalan, marshrutizatorlar) nomidan berilgan tarmoqni boshqaruvchi protokollar orqali aniqlangan 33 maxsus xizmatchi xabarlarni joʻnatishi lozim. Marshrutni muvaffaqiyatli oʻzgartirish natijasida hujum qiluvchi taqsimlangan tarmoqdagi ikkita obyekt almashadigan axborot oqimidan toʻla nazoratga ega boʻladi, soʻngra axborotni ushlab qolishi, tahlillashi, modiflkatsiyalashi yoki oddiygina yoʻqotishi mumkin. Boshqacha aytganda, tahdidlarning barcba turlarini amalga oshirish imkoniyati tugʻiladi
                        </p>

                        <p>
                            Xizmat qilishdan voz kechishga undaydigan taqsimlangan hujumlar - DDoS (Xizmat qilishdan taqsimlangan voz kechish) kompyuter jinoyatchiligining nisbatan yangi xili boʻlsada, qoʻrqinchli tezlik bilan tarqalmoqda. Bu hujumlarning oʻzi anchagina yoqimsiz boʻlgani yetmaganidek, ular bir vaqtning oʻzida masofadan boshqariluvchi yuzlab hujum qiluvchi serverlar tomonidan boshlanishi mumkin. Xakerlar tomonidan tashkil etilgan uzellarda DDoS hujumlar uchun uchta instrumental vositani topish mumkin: trinoo, TribeFloodNet (TFN) va TFN2K
                        </p>

                        <p>
                            Hozirda 29-avgust 1997-yili qabul qilingan “Oʻzbekiston Respublikasining milliy xavfsizligi konsepsiyasini tasdiqlash toʻgʻrisida” qonuni amalda. Ushbu qonunga asoslanib, milliy xavfsizlik tushunchasiga quyidagicha taʻrif berish mumkin. Oʻzbekiston Respublikasining milliy xavfsizligi deganda Oʻzbekiston Respublikasining suverenitetini ifodalovchi va hokimiyatning yagona manbai hisoblanuvchi koʻp millatli xalqining xavfsizligi tushuniladi. Milliy xavfsizlikning, shartli ravishda, quyidagi tashkil etuvchilarini koʻrsatish mumkin: - iqtisodiy xavfsizlik; - ichki siyosiy xavfsizlik; - ijtimoiy xavfsizlik; - maʻnaviy xavfsizlik; - xalqaro xavfsizlik; - axborot xavfsizligi; - harbiy xavfsizlik; - chegaraviy xavfsizlik; - ekologik xavfsizlik
                        </p>

                        <p>
                            <b>Iqtisodiy xavfsizlik</b> - shaxs, jamiyat va davlatning iqtisodiy sohadagi hayctiy muhim manfaatlarining ichki va tashqi tahdidlardan himoyalanganligi. Iqtisodiy xavfsizlikka binoan xalq oʻzining iqtisodiy rivojlanish yoʻllari va shakllarini tashqaridan aralashishsiz va bosimsiz mustaqil ravishda aniqlay oladi
                        </p>

                        <p>
                            <b>Ichki siyosiy xavfsizlik</b> - hokimiyat institutlarining barqarorligi va samaradorligi, hokimiyat tuzilmalarining siyosiy jarayonlami nazoratlash qobiliyati, aksariyat fuqarolar tomonidan madadlashga erishish, jamiyatda siyosiy barqarorlikni taʻminlovchi, samarali faoliyat yurituvchi nodavlat siyosiy institutlaming mavjudligi bilan xarakterlanadi. Ichki siyosiy xavfsizlikka binoan siyosiy munosabatlar sohasida qarama-qarshilik, siyosiy ekstremizmning ommaviy tus olishi, hokimiyat bilan xalq orasida qarama-qarshilik boʻlmaydi. Fuqarolarning siyosiy ongi holati va jamiyatning siyosiy madaniyati jamiyatning xavfsiz siyosiy rivojiga jiddiy taʻsir koʻrsatadi.
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
                        <a href="{{ route('information.1') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Tarmoq va axborot xavfsizligi tushunchasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('information.2') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Axborotlarni himoyalashning texnik va dasturiy vositalari</h5>
                            </div>
                        </a>

                        <a href="{{ route('information.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Kompyuter virus tushunchasi va ularning turlari</h5>
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
            [
                "Masofadan bo'ladigan tarmoq hujumlariga qarshi qanday choralar ko'rish mumkin?",
                [
                    "Tarmoq xavfsizligini ta'minlash uchun kompleks choralar tavsiya etiladi.",
                    "Tarmoqni faqat apparat vositalari bilan himoya qilish lozim.",
                    "Yolg'on obyektlarni kiritish kerak.",
                    "Trafikni tahlil qilish zarur."
                ]
            ],
            [
                "FTP va TELNET protokollari orqali foydalanuvchi identifikatsiya va autentifikatsiya ma'lumotlari qanday uzatiladi?",
                [
                    "Shifrlanmagan ko'rinishda",
                    "Shifrlangan ko'rinishda",
                    "Qisqartirilgan ko'rinishda",
                    "Asosan simvollarga bo'lingan holda"
                ]
            ],
            [
                "ICQ dasturining xavfsizlik nuqtai nazaridan qanday kamchiligi bor?",
                [
                    "Trafigi ushlab qolinishi va ochilishi mumkin.",
                    "Parollari shifrlangan holda uzatiladi.",
                    "Foydalanuvchi ma'lumotlarini shifrlaydi.",
                    "Yolg'on obyektlarni kiritish mumkin emas."
                ]
            ],
            [
                "Tarmoqning yolg'on obyektini kiritish qanday amalga oshiriladi?",
                [
                    "Tarmoqning “nozik joylari”dan foydalanish orqali",
                    "Fayllarni shifrlash orqali",
                    "Barcha paketlarni bitta faylga yig'ish orqali",
                    "Qo'shimcha apparat vositalaridan foydalanish orqali"
                ]
            ],
            [
                "ARP protokoli qaysi sohada foydalaniladi?",
                [
                    "Adreslarni fizik adreslarga o'zgartirishda",
                    "Shifrlangan ma'lumotlarni uzatishda",
                    "Trafikni tahlil qilishda",
                    "Yolg'on obyektlarni tarmoqdan olib tashlashda"
                ]
            ],
            [
                "Yolg'on marshrutni kiritish qanday amalga oshiriladi?",
                [
                    "Marshrutni yolg'on xost orqali o'tadigan qilib qurish orqali",
                    "Yolg'on obyektlarni kiritish orqali",
                    "Parollarni shifrlash orqali",
                    "Serverni qayta yuklash orqali"
                ]
            ],
            [
                "Xizmat qilishdan voz kechishga undaydigan taqsimlangan hujumlar qanday nomlanadi?",
                [
                    "DDoS",
                    "FTP",
                    "TELNET",
                    "ICMP"
                ]
            ],
            [
                "ICMP protokoli qanday maqsadda qo'llaniladi?",
                [
                    "Yangi marshrutlar xususida xabarlar almashish uchun",
                    "Ma'lumotlarni shifrlash uchun",
                    "Foydalanuvchi ma'lumotlarini uzatish uchun",
                    "Serverni himoya qilish uchun"
                ]
            ],
            [
                "Internetda tarmoq ulanishlarini himoya qilish va trafikni shifrlash imkonini beruvchi protokol qaysi?",
                [
                    "SSL",
                    "TELNET",
                    "FTP",
                    "ICMP"
                ]
            ],
            [
                "“O'zbekiston Respublikasining milliy xavfsizligi” konsepsiyasida qanday xavfsizlik turlari ko'rsatilgan?",
                [
                    "Iqtisodiy, ichki siyosiy, ijtimoiy, maʻnaviy, xalqaro, axborot, harbiy, chegaraviy, ekologik",
                    "Tarmoq, ma'lumot, apparat, dasturiy",
                    "Shaxsiy, ijtimoiy, siyosiy",
                    "Fizik, kimyoviy, biologik"
                ]
            ]
        ];
    </script>
@endsection
