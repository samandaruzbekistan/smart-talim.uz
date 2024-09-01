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
                            <h1>Protsessor texnologiyasi</h1>
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
                            <b>Tezkor xotira.</b> Mikroprotsessor sirkdagi koʻz boylagichga oʻxshaydi. Koʻz boylagʻich turli moʻjizalar koʻrsata oladi, lekin oʻzidan bir necha metr naridagi koptokni ola olmaydi. Uni yordamchilari orqali oladi. Koʻz boylagʻichga oʻxshab, mikroprotsessorga ham yordamchi kerak. Bu vazifani tezkor xotira bajaradi. Tezkor xotirada mikroprotsessor uchun dasturlar, ma’lumot va hisob-kitob natijalari vaqtincha saqlanadi.
                        </p>

                        <p>
                            <b>Tezkor xotira elektron qurilmalar </b> – tranzistorlardan yasaladi va mikrosxema koʻrinishida boʻladi. Mikrosxemalarda yasalgan xotiraning qulay tomonlari: oʻlchamlari kichik, kam quvvat sarflaydi, sigʻimi katta va tez ishlashidir. Tezkor xotira mikrosxemalari ikki xil boʻladi: dinamik va statik. Statik mikrosxemalarda har bir xotira katakchasi registr koʻrinishida boʻlib, bu registrlarning har biri uchun 6 ta tranzistor ishlatiladi. Bu mikrosxemalar nisbatan tez ishlaydi.
                        </p>

                        <p>
                            Dinamik mikrosxemalarda har bir katakcha ikkita tranzistor yordamida yasaladi, ulardan biri katakchani tanlash uchun kalit vazifasini bajarsa, ikkinchisi mitti kondensator vazifasini bajaradi, kondensatorning zaryadlangan holati 1 ga, zaryadsiz holati 0 ga mos keladi. Bunday mikrosxemalardan yasalgan tezkor xotira nisbatan sekin ishlaydi va ulardagi ma’lumot oʻchib ketmasligi uchun ularni bir sekundda bir necha oʻn ming marta zaryadlab turish kerak boʻladi. Bu kamchiliklariga qaramay, ularning sigʻimi kattaroq va ularning narxi ancha arzon. Hozirgi paytda tezkor xotiralarning deyarli barchasi dinamik mikrosxemalar asosida ishlab chiqiladi.
                        </p>

                        <p>
                            Tezkor xotiraning asosiy parametrlari ularning sigʻimi va tezligi (takt chastotasi)dir. Tezkor xotiraning sigʻimi har doim ikkining darajasi koʻrinishidagi songa teng boʻladi. Buularning manzilini aniqlash bilan bogʻliq. Hozirgi paytda DIMM,SIMM, DDRI, DDR II, DDRIII ваDDRIV rusumli tezkor xotiralardan foydalaniladi.
                        </p>

                        <p>
                            DDRI xotiralarning sigʻimi 128, 256, 512, 1024 MB, takt chastotasi 266, 333, 400, 667, 800, 1333, 1600 MGs boʻlishi mumkin. DDR xotiralarda takt chastota bilan birga ma’lumot uzatish tezligidan ham foydalanila boshlandi. Masalan, DDR 2100 deb takt chastotasi 266 MGs boʻlgan xotira belgilangan.  Bu chastotada ishlaydigan xotira bir sekundda 266 MGs * 8 bit = 2100 Megabit axborot uzata oladi. Shu kabi DDR 2700 va DDR 3200 rusumli xotiralar ham bor.
                        </p>

                        <p>
                            DDR II turidagi xotiralar 512, 1024, 2048 MB sigʻimli va 4200, 5300, 6400 Mb tezlikda, DDR III turdagi mikrosxemalar 1, 2, 4 GB sigʻimli va 11000, 13000, 16000 va 20 000 Mb tezlikda boʻlishi mumkin. DIMM va DDR rusumidagi tezkor xotiralar hozir ishlab chiqarilmaydi.
                        </p>

                        <p>
                            <b>Video protsessorlar.</b> Zamonaviy kompyuterlar uch oʻlchovli grafika, yuqori sifatli video bilan ishlaydi. Bu ulardan ekranga chiqariladigan murakkab axborotni tezda qayta ishlay olishini talab qiladi. Shu sababli, video protsessorlar hisoblash ishlarini bajara olish quvvati boʻyicha allaqachon markaziy mikroprotsessorlardan oʻzib ketdilar. Ulardagi tranzistorlar soni mikroprotsessordagidan bir necha barobar koʻp boʻlishi mumkin. Hozirgi video protsessorlarning razryadlari soni 128 dan kam emas, 256 va xatto 384 razryadli video protsessorlar ham mavjud.Video protsessorlar oʻz tezkor xotiralariga ham ega boʻladilar. Bu video xotira sigʻimi 256 MB dan 2GB gacha boʻlishi mumkin.
                        </p>

                        <p>
                            Video protsessorlarning bu quvvatidan oddiy hisob-kitoblarda ham foydalanish mumkin. Maxsus ishlab chiqilgan dasturiy ta’minot yordamida video protsessorda 80 xonali (oʻnli sanoq sistemasida) aniqlikda matematik hisob ishlari bajariladi. Hozirgi paytda video protsessor oʻrniga PCI Express slotiga oʻrnatiladigan, 32 yadroli mikroprotsessorga ega va sekundiga yarim trilliongacha amal bajara oladigan bloklar ishlab chiqarilmoqda. Bu bloklar yordamida oddiy kompyuterni super kompyuterga aylantirish mumkin.
                        </p>

                        <p>
                            <b>Kiritish-chiqarishning tayanch tizimi (BIOS). </b>Aytib oʻtilganidеk BIOS kompyutеrni ishga tushirish va boshqarish uchun zarur va uncha katta boʻlmagan dasturni namoyon qiladi. U doimiy saqlash хotirasida saqlanadi (oʻchmaydigan хotirada). Kompyutеr yoqilganda koʻrsatmalar chiqariladi va BIOS ishlay boshlaydi. Bunda хotira qurilmalari birinchi bor sinovdan oʻtadi va joriy хtira koʻrsatkichi ekranga chiqariladi. Endi BIOS kompyutеrni intеrpritatsiyalarni ishga tushirish va foydalanuvchi dasturlarini yuklashga kirishadi. Bu jarayon tizimni dastlabki yuklanishi dеb nomlanadi. BIOSning asosiy funksiyalari quyidagilar hisoblanadi:
                        </p>
                        <ul>
                            <li>Klaviaturadan tugmalarni bosish va ma’lumotni asosiy хotirada saqlash intеrprеtatsiyasi.</li>
                            <li>Ekran va printеrni boshqarish.</li>
                            <li>Boshqa portlar orqali ma’lumotni kirish va chiqishini ishga tushirish.</li>
                        </ul>

                        <p>
                            BIOSning asosiy afzalliklaridan biri shundaki yangi kiritish\chiqarish qurilmalarining kompyutеrda paydo boʻlishi bilan darhol sеzib, uni oʻzining roʻyхatalarida aks ettiradi. Drayvеrlar dеb atalgan dasturiy vositalarning oʻrnatilishi bilan joriy kompyutеr bilan ushbu qurilmalar ishlay boshlaydi. Drayvеrlar kiritish/chiqarish qurilmalari ishlashini boshqaruvchi vosita hisoblanadi. Ya’ni shunday dasturiy vositaki, har doim doimiy saqlash qurilmasida saqlanadi va foydalanuvchi tomonidan oʻzgartirib boʻlmaydi.
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
                                <h5 class="text-success"><i class="bi bi-play-circle text-success"></i> Protsessor texnologiyasi</h5>
                            </div>
                        </a>
                        <a href="{{ route('computers.3') }}">
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bi bi-play-circle text-success"></i> Axborotlarni saqlash qurilmalari</h5>
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
            ["Tezkor xotira qanday qurilmalardan yasaladi?", ["Tranzistorlar", "Resistorlar", "Diodalar", "Kapasitatorlar"]],
            ["Tezkor xotiraning asosiy ikki turi qanday?", ["Dinamik va statik", "Analog va raqamli", "Katta va kichik", "Har xil va bir xil"]],
            ["Statik tezkor xotira qanday mikrosxemalardan iborat?", ["Registrlar", "Kondensatorlar", "Transformatorlar", "Tranzistorlar"]],
            ["Dinamik tezkor xotira qanday mikrosxemalardan iborat?", ["Tranzistorlar va kondensatorlar", "Resistorlar va diodalar", "Transformatorlar va registrlar", "Shlyuzlar va fototransistorlar"]],
            ["Hozirgi paytda tezkor xotiralarning qaysi turi keng tarqalgan?", ["Dinamik mikrosxemalar", "Statik mikrosxemalar", "Kapsulalar", "Kondensatorlar"]],
            ["DDRI xotiralarning takt chastotasi qanday qiymatlarda bo'lishi mumkin?", ["266, 333, 400, 667 MGs", "100, 200, 300, 500 MGs", "500, 600, 700, 800 MGs", "1000, 1200, 1500, 1800 MGs"]],
            ["DDR II xotiralarning sig‘imi qanday bo'lishi mumkin?", ["512, 1024, 2048 MB", "128, 256, 512 MB", "1, 2, 4 GB", "8, 16, 32 GB"]],
            ["DDR III xotiralarning sig‘imi qanday bo'lishi mumkin?", ["1, 2, 4 GB", "512, 1024, 2048 MB", "128, 256, 512 MB", "8, 16, 32 GB"]],
            ["Video protsessorlar qaysi sohalarda ishlatiladi?", ["Grafika va video", "Matematika va statistika", "Musiqa va ovoz", "Jismoniy mashqlar"]],
            ["BIOSning asosiy vazifalari qanday?", ["Klaviatura, ekran va boshqa portlarni boshqarish", "Video ishlov berish", "Internet ulanishi", "Printer va skanerlarni sozlash"]]
        ];

    </script>
@endsection
