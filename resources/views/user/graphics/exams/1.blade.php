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
                        <li class="current">KOMPYUTER GRAFIKASI</li>
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
            ["Vektorli grafika qanday xususiyatlarga ega?",
                ["Chiziqlar asosida quriladi va masshtablashda sifat yo‘qolmaydi", "Piksellardan tashkil topgan va sifatni o‘zgartiradi", "Matematik formulalar bilan tasvirlar hosil qiladi", "Faoliyatni faqat matematik hisoblashlar asosida yaratadi"]],
            ["Rastrli grafika haqida nima to‘g‘ri?",
                ["Tasvir piksellardan tashkil topgan", "Tasvir matematik formulalar yordamida yaratiladi", "Ranglar soni 256 dan ortiq bo‘lsa, sifat yo‘qoladi", "Xotirada tasvirlar formulalar yordamida saqlanadi"]],
            ["Fraktal grafika qanday asosga ega?",
                ["Formulalar yordamida tasvir yaratiladi", "Piksellardan tashkil topgan", "Ranglarning ko‘rinishlarini qo‘llaydi", "Kompyuter xotirasida tasvirlar saqlanadi"]],
            ["GIF formatining xususiyatlari haqida nima to‘g‘ri?",
                ["Rang palitrasi 256 rangni qo‘llaydi", "Tasvir sifatini zichlashtirish orqali saqlaydi", "JPEG formatiga nisbatan kamroq ranglarni qo‘llaydi", "Yuqori sifatli tasvirlarni zichlashtirish uchun ishlatiladi"]],
            ["JPEG formatining asosiy xususiyati nima?",
                ["Rang palitrasi 16,777,216 rangni qo‘llaydi", "Sifat yo‘qotishi bilan zichlashtiradi", "Yuqori sifatli rasmlar uchun mos keladi", "Chegaralangan ranglar soniga ega"]],
            ["PNG grafik formatining afzalliklari haqida nima to‘g‘ri?",
                ["GIF va JPEG formatlarining afzalliklarini o‘zida mujassamlashtiradi", "Zichlashtirish jarayonida sifat yo‘qoladi", "Juda kamroq ranglarni qo‘llaydi", "Tarmoq sahifalarida ishlatilmaydi"]],
            ["RGB rang modeli qanday komponentlardan iborat?",
                ["Qizil, yashil, ko‘k", "Ko‘k, purpur, sariq", "Qora, oq", "Sariq, qora, ko‘k"]],
            ["CMYK rang modeli nima uchun ishlatiladi?",
                ["Bosmada tasvirlar chiqarishda", "Monitorlarda tasvirlarni ko‘rsatishda", "Fraktal grafikada", "Rastrli grafikada"]],
            ["Grayscale holati qanday ranglarni ifodalaydi?",
                ["Kulrangning 254 ko‘rinishini", "Yuqori rangli tasvirlarni", "Ikkita rang holatini", "Ranglarning to‘liq palitrasini"]],
            ["Bitmap holati nima uchun ishlatiladi?",
                ["Faqat oq va qora ranglarni qo‘llaydi", "Rangli tasvirlarni qo‘llaydi", "Grayscale holatidan foydalanadi", "Rangli grafikalar yaratadi"]],
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
