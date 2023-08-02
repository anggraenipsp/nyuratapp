<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Customer Service - Nyurat</title>
</head>
<style>
html,
body {
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #CCC5BE;
}

section {
    box-sizing: border-box;
    width: 100%;
    display: flex;
    margin-top: 0;
    align-items: center;
    justify-content: center;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 100px;
    margin-top: 50px;
    color: #ab6135;
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
    width: 75%;
    height: 20vh;
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
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
}

.answer {
    max-height: 0;
    position: relative;
    padding-top: 10px;
    background-repeat: #212838;
    transition: max-height 650ms;
}

.answer p {
    color: white;
    font-size: 15px;
    padding-left: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
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
        <h1>Customer Service</h1>
    </center>

    <section>
        <div class="container">
            <div class="faq">
                <div class="faq-item" id="question1">
                    <a class="faq-link">
                        <b>Sekretaris 1</b>
                    </a>
                    <div class="answer">
                        <p>Line - yushintaprassanty (Yushinta) </p>
                    </div>
                </div>

                <div class="faq-item" id="question2">
                    <a class="faq-link">
                        <b>Sekretaris 2</b>
                    </a>
                    <div class="answer">
                        <p>Line - nsboo (Khairunnisa)</p>
                    </div>
                </div>

                <div class="faq-item" id="question3">
                    <a class="faq-link">
                        <b>Sekretaris 3</b>
                    </a>
                    <div class="answer">
                        <p>Line - vharetta02 (Elvaretta)</p>
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