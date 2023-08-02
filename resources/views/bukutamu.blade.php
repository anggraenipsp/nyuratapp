<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Buku Tamu - Nyurat</title>
</head>
<style>
html,
body {
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #CCC5BE;
}

input,
select {
    width: 100%;
    height: 50px;
    background: #f3f1f1;
    border: #f3f1f1;
    border-radius: 13px;
    margin-bottom: 32px;
    margin-left: -5px;
    padding-left: 10px;
    box-sizing: content-box;

}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
}

h1 {
    color: #AB6135;
    size: 20px;
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
    width: 75%;
    height: 25vh;
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
}

.answer p,
ol {
    color: white;
    font-size: 15px;
}

form {
    margin: 0 auto;
    width: 600px;
}

.submit {
    width: 100%;
    color: #fff;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    background-color: #AB6135;
    font-size: 14px;
    border-radius: 8px;
    font-weight: bold;
    outline: none;
    border: none;
}

footer {
    min-height: auto;
    background-image: url("https://i.postimg.cc/k51JwQqW/Footer.png");
    width: 100%;
    min-height: 200px;
    font-family: "Open Sans";
    padding-top: 170px;
    color: #fff;
    background-repeat: no-repeat;

}

h3 {
    font-style: normal;
    font-weight: 800;
    font-size: 100px;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.footer-content h3 {
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}

.socials {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 0 20px 0;
    padding: 0;
}

.socials li {
    margin: 0 10px;
}

.socials a {
    text-decoration: none;
    color: #fff;
}

.socials a i {
    font-size: 1.1rem;
    transition: color 0.4s ease;
}

.socials a:hover i {
    color: aqua;
}

.faqcon {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0 20px 0;
    padding: 0;
}

.faqcon li {
    margin: 0 10px;
}

.faqcon a {
    text-decoration: none;
    color: #fff;
}

.faqcon a i {
    font-size: 1.1rem;
    transition: color 0.4s ease;
}

.faqcon a:hover i {
    color: aqua;
}

.footer-bottom {
    background: #485b51;
    padding-bottom: 20px;
    text-align: center;
}

.footer-bottom p {
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}

.footer-bottom span {
    text-transform: uppercase;
    opacity: 0.4;
    font-weight: 200;
}

.footer-content img {
    width: 70px;
    height: auto;
    margin-top: 30px;
    display: flex;
    align-items: center;
}

label {
    color: #4D4A4A;
    font-weight: bold;
}
</style>

<body>
    <nav class="nav">
        <a class="active" href="/home"><img src=" https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/riwayatPengajuan">Riwayat Saya</a>
        <a href="/pengajuan">Nomor Surat</a>
        <a href="/bukutamu">Buku Tamu</a>
    </nav>
    <center>
        <h1>Buku Tamu</h1>
    </center>
    <section>
        <div class="container">
            <div class="faq">
                <div class="faq-item" id="question1">
                    <a class="faq-link">
                        <b>Alur Pengajuan Buku Tamu</b>
                    </a>
                    <div class="answer">
                        <ol>
                            <li>
                                Menyiapkan softfile dokumen
                            </li>
                            <li>
                                Mengisi form buku tamu
                            </li>
                            <li>
                                Melakukan konfirmasi setelah submit ke customer service yang ada di web
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="box">
        <div class="container">
            <form action="/bukutamu/store" method="post">
                {{ csrf_field() }}
                <label>Nama</label><br />
                <input id="nama" name="nama" required="required" placeholder="Tata Angela" /><br />
                <label>Kontak</label><br />
                <input id="kontak" name="kontak" required="required" placeholder="Line - angellll34" /><br />
                <label>Jenis</label><br />
                <input id="jenis" name="jenis" required="required" placeholder="Undangan/Poster" /><br />
                <label>Kegiatan</label><br />
                <input id="kegiatan" name="kegiatan" required="required" placeholder="Webinar Front-End" /><br />
                <label>File</label><br />
                <input id="file" type="url" name="file" required="required"
                    placeholder="https://bit.ly/PosterWebinarFE" /><br />
                <button class="submit" type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
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
</body>

</html>