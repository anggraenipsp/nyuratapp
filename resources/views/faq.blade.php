<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ - Nyurat</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
}

body {
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #CCC5BE;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 100px;
    margin-top: 50px;
    letter-spacing: 0.25em;
    color: #ab6135;
}

.penj {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    margin: 10px;
    height: 50px;
    font-weight: 400;
    font-size: 15px;
    line-height: 23px;
    text-align: center;
}

section {
    box-sizing: border-box;
    width: 100%;
    display: flex;
    margin-top: auto;
    align-items: center;
    justify-content: center;
}

.container {
    width: 100%;
    max-width: 100rem;
    margin: 0 auto;
    padding: 0 1.5rem;
}

.faq-item {
    padding-top: 0px;
    background-color: #9b9494;
    border-radius: 1rem;
    margin-bottom: 1 rem;
    margin: 3rem auto;
    box-shadow: inset 0px 60px 20px rgba(0, 0, 0, 0.25);
}

.faq-link {
    font-size: 15px;
    color: black;
    text-decoration: none;
    background-color: #f6f4f1;
    border-radius: 1rem 1rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
}

.faq-link i {
    color: black;
    padding: 0.5rem;
}

.faq-link .icon2 {
    display: none;
}

.answer {
    max-height: 0;
    overflow: hidden;
    position: relative;
    background-repeat: #212838;
    transition: max-height 650ms;
}

.answer p,
ol {
    color: white;
    font-size: 15px;
    padding: 2rem;
}

.faq-item:target .answer {
    padding: 10px;
    max-height: 50rem;
}

.faq-item:target .faq-link .icon1 {
    display: none;
}

.faq-item:target .faq-link .icon2 {
    display: block;
}
</style>

<body>
    <nav class="nav">
        <a class="active" href="/home"><img src="https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/riwayatPengajuan">Riwayat Saya</a>
        <a href="/pengajuan">Nomor Surat</a>
        <a href="/bukutamu">Buku Tamu</a>
    </nav>

    <center>
        <h1>FAQ</h1>
    </center>

    <p class="penj">
        temukan jawaban atas semua pertanyaan yang paling sering diajukan
    </p>

    <section>
        <div class="container">
            <div class="faq">
                <div class="faq-item" id="question1">
                    <a class="faq-link" href="#question1">
                        <b>Bagaimana alur pengajuan surat di KBMSI?</b>
                        <i class="icon1">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </i>
                        <i class="icon2">
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </i>
                    </a>
                    <div class="answer">
                        <ol>
                            <li>
                                Pengaju membuat surat sesuai dengan format yang telah
                                diberikan
                            </li>
                            <li>
                                Pengaju meminta nomor surat ke sekretaris KBMSI lalu
                                sekretaris akan memberikan surat beserta nomor suratnya
                            </li>
                            <li>
                                Pengaju mengajukan tanda tangan ketua EMSI atau BPMSI ke
                                sekretaris KBMSI dan sekretaris akan memberikan surat beserta
                                tanda tangan
                            </li>
                            <li>Pengaju dapat memberikan surat ke orang yang dituju</li>
                        </ol>
                    </div>
                </div>

                <div class="faq-item" id="question2">
                    <a class="faq-link" href="#question2">
                        <b>Berapa lama proses dari pengajuan nomor surat?</b>
                        <i class="icon1">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </i>
                        <i class="icon2">
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </i>
                    </a>
                    <div class="answer">
                        <p>Durasi pemberian nomor surat maksimal 2 x 24 jam</p>
                    </div>
                </div>

                <div class="faq-item" id="question3">
                    <a class="faq-link" href="#question3">
                        <b>Dokumen apa saja yang bisa dipublikasikan?</b>
                        <i class="icon1">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </i>
                        <i class="icon2">
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </i>
                    </a>
                    <div class="answer">
                        <p>
                            Dokumen yang bisa dipublikasikan ke KBMSI yaitu, surat, poster,
                            MOU, dll.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <img src="https://i.postimg.cc/Pqp11spj/logo-2-Traced.png" alt="Nyurat">
            <ul class="faqcon">
                <li><a href="/customerservice">Contact Us</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
            <ul class="socials">
                <li><a href="https://instagram.com/kbmsi_ub?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                </li>
                <li><a href="https://twitter.com/emsi_ub?t=t31fcZHRh9EBvfcgmhvtYw&s=06"><i
                            class="fa fa-twitter"></i></a></li>
                <li><a href="https://youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 KBMSI FILKOM UB</p>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>