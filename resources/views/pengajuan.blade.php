<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Pengajuan Surat - Nyurat</title>
</head>
<style>
html,
body {
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #CCC5BE;
    width: 100%;
    overflow-x: hidden;
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

select {
    padding-right: 10px;
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
</style>

<body>
    <nav class="nav">
        <a class="active"><img src="https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/riwayatPengajuan">Riwayat Saya</a>
        <a href="/pengajuan">Nomor Surat</a>
        <a href="/bukutamu">Buku Tamu</a>
    </nav>
    <center>
        <h1>Pengajuan Nomor</h1>
    </center>
    <section>
        <div class="container">
            <div class="faq">
                <div class="faq-item" id="question1">
                    <a class="faq-link">
                        <b>Alur Pengajuan Nomor Surat</b>
                    </a>
                    <div class="answer">
                        <ol>
                            <li>
                                Menyiapkan softfile surat
                            </li>
                            <li>
                                Mengisi form pengajuan nomor surat
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
            <form action="/pengajuan/store" method="post">
                {{ csrf_field() }}
                <label>Nama</label><br />
                <input id="nama" name="nama" required="required" placeholder="Tata Angela" /><br />
                <label>Kontak</label><br />
                <input id="kontak" name="kontak" required="required" placeholder="Line - angellll34" /><br />
                <label>Kementrian</label><br />
                <input id="kementrian" name="kementrian" required="required" placeholder="PSDM" /><br />
                <label>Program Kerja</label><br />
                <input id="programkerja" name="programkerja" required="required" placeholder="WOW SI 2022" /><br />
                <label>Jenis</label><br />
                <select name="jenis" id="jenis">
                    <option value="undangan">Undangan</option>
                    <option value="permohonan">Permohonan</option>
                    <option value="keterangan">Keterangan</option>
                    <option value="kerjasama">Kerjasama</option>
                    <option value="surattugas">Surat Tugas</option>
                    <option value="pengumuman">Pengumuman</option>
                    <option value="ucapan">Ucapan</option>
                    <option value="rekomendasi">Rekomendasi</option>
                    <option value="peringatan">Peringatan</option>
                    <option value="suratbalasan">Surat Balasan</option>
                    <option value="suratkeputusan">Surat Keputusan</option>
                </select> <br>
                <label>Tujuan</label><br />
                <select name="tujuan" id="tujuan">
                    <option value="internal">Internal</option>
                    <option value="eksternal">Eksternal</option>
                </select> <br>
                <label>Penerima</label><br />
                <input id="penerima" name="penerima" required="required"
                    placeholder="Dekan Fakultas Ilmu Komputer" /><br />
                <label>Perihal</label><br />
                <input id="perihal" name="perihal" required="required" placeholder="Perihal Peminjaman Gedung" /><br />
                <label>File</label><br />
                <input id="file" type="url" name="file" required="required"
                    placeholder="bit.ly/SuratPeminjaman" /><br />
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