<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homepage - Nyurat</title>
    <style>
    html,
    body {
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #CCC5BE;
    }

    .selamatDatang {
        background-image: url('https://i.postimg.cc/h4ZkWbGh/welcome-1.png');
        width: 100%;
        height: 100%;
        margin-top: 100px;
        background-repeat: no-repeat;
        padding-bottom: 400px;
    }

    .selamatDatang h1 {
        margin-left: 500px;
        vertical-align: middle;
    }

    .nosurat {
        margin-top: 60px;
        display: flex;
        justify-content: center;
    }

    .bukutamu {
        margin-top: 60px;
        display: flex;
        justify-content: center;
        text-align: right;
    }

    .nosurat #tombol {
        color: #fff;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        background-color: #AB6135;
        font-size: 14px;
        border-radius: 8px;
        font-weight: bold;
    }

    .bukutamu #tombol {
        color: #fff;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        background-color: #AB6135;
        font-size: 14px;
        border-radius: 8px;
        font-weight: bold;
    }

    .nosurat #tombol:hover {
        background-color: #ddd;
        color: #1E1E1E;
    }

    .nosurat img {
        width: 400px;
    }

    .bukutamu img {
        width: 400px;
    }

    .keterangan {
        margin-top: 0;
    }
    </style>

</head>

<body>
    <nav class="nav">
        <a class="active" href="/home"><img src=" https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/riwayatPengajuan">Riwayat Saya</a>
        <a href="/pengajuan">Nomor Surat</a>
        <a href="/bukutamu">Buku Tamu</a>
    </nav>

    <div class="selamatDatang">
        <h1><br><br>SEMANGAT PAGI! <br>SELAMAT DATANG DI NYURAT</h1>
    </div>
    <div class="nosurat">
        <table cellpadding="10">
            <tr>
                <td><img src="https://i.postimg.cc/Hx9YHSLf/pengajuan-surat.png" alt="Ajukan Nomor Surat"></td>
                <td>
                    <p>Pada Pengajuan Nomor Surat digunakan <br>untuk internal KBMSI yang memerlukan <br>penomoran untuk
                        surat keluar, penerbitan <br>sertifikat, surat keterangan aktif <br>dan sebagainya</p>
                    <a id="tombol" href="/pengajuan">Ajukan Nomor Surat</a>
                </td>
            </tr>
        </table>
    </div>

    <div class="bukutamu">
        <table cellpadding="10">
            <tr>
                <td>
                    <a id="tombol" href="/bukutamu">Buku Tamu</a>
                    <p>Pada Pengajuan Nomor Surat digunakan <br>untuk internal KBMSI yang memerlukan <br>penomoran untuk
                        surat keluar, penerbitan <br>sertifikat, surat keterangan aktif <br>dan sebagainya</p>
                </td>
                <td><img src="https://i.postimg.cc/wjsJRBMr/buku-tamu.png" alt="Buku Tamu"></td>
            </tr>
        </table>
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