<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer-sekre.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homepage Sekretaris - Nyurat</title>
    <style>
    html,
    body {
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #CCC5BE;
    }

    .selamatDatang p {
        margin-left: 160px;
        vertical-align: middle;
        justify-content: center;
        color: #AB6135;
        font-size: 60px;
        font-weight: bold;
    }

    .home {
        margin-top: 60px;
        margin-right: 100px;
        display: flex;
        justify-content: right;
        text-align: middle;
    }

    .home img {
        width: 600px;
        height: auto;
    }

    .home #tombol {
        color: #fff;
        text-align: center;
        padding: 12px;
        padding-left: 71px;
        padding-right: 71px;
        text-decoration: none;
        background-color: #AB6135;
        font-size: 16px;
        border-radius: 8px;
        font-weight: bold;
    }

    #tombol.bukutamu {
        padding-left: 76px;
        padding-right: 76px;
    }

    .home #tombol:hover {
        background-color: #ddd;
        color: #1E1E1E;
    }
    </style>

</head>

<body>
    <nav class="nav">
        <a class="active" href="/sekre-home"><img src=" https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/pengajuan/riwayat">Nomor Surat</a>
        <a href="/bukutamu/riwayat">Buku Tamu</a>
    </nav>

    <div class="selamatDatang">
        <p>SEMANGAT PAGI!</p>
    </div>
    <div class="home">
        <table cellpadding="10">
            <tr>
                <td>
                    <a id="tombol" href="/pengajuan/riwayat">Nomor Surat</a>
                    <br><br><br><br><br><br>
                    <a id="tombol" class="bukutamu" href="/bukutamu/riwayat">Buku Tamu</a>
                </td>
                <td>
                    <img src="https://i.postimg.cc/yxx1x5C6/homepage-sekre.png" alt="Semangat Pagi">
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <div class="footer-content">
            <img src="https://i.postimg.cc/Pqp11spj/logo-2-Traced.png" alt="Nyurat">
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