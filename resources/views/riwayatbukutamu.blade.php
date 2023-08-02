<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Buku Tamu - Nyurat</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer-sekre.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<style>
*,
*::before,
*::after {
    padding: 0;
    margin: 0;
    box-sizing: inherit;
}

html {
    font-family: "Roboto", sans-serif;
    background-color: #ccc5be;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 50px;
    margin-top: 50px;
    margin-bottom: 50px;
    color: #ab6135;
}

.boxriw1 {
    font-size: 15px;
    color: black;
    background-color: #ddd;
    align-items: center;
    padding: 10px 0 10px 0;
    width: 100%;
}

.boxriw2 {
    background-color: #f2f2f2;
    align-items: center;
    height: fit-content;
    width: fit-content;
}

.scroll1 {
    max-width: 100%;
    max-height: fit-content;
}

.scroll2 {
    height: 100%;
    max-width: 100%;
    overflow: auto;
}


table {
    min-width: 100%;
    border: none;
}

table th,
table td {
    text-align: left;
    min-width: 100px;
    white-space: nowrap;
    padding: 8px 20px;
    border: none;
}

table tr:hover {
    background: #eee;
}

.nomer {
    min-width: 30px;
}
</style>

<body>
    <nav class="nav">
        <a class="active" href="/sekre-home"><img src=" https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/pengajuan/riwayat">Nomor Surat</a>
        <a href="/bukutamu/riwayat">Buku Tamu</a>
    </nav>
    <center>
        <h1>Riwayat Buku Tamu - Nyurat</h1>
    </center>
    <div class="scroll1">
        <div class="scroll2">
            <div class="boxriw1">
                <table border="0">
                    <thead>
                        <tr>
                            <th class="nomer" width="30px">No</th>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Jenis</th>
                            <th>Kegiatan</th>
                            <th width="200px">File</th>
                        </tr>
                        <?php $no = 0; ?>
                        @forelse($buku_tamu as $bk)
                        <?php $no++; ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{$bk->nama}}</td>
                            <td>{{$bk->kontak}}</td>
                            <td>{{$bk->jenis}}</td>
                            <td>{{$bk->kegiatan}}</td>
                            <td>{{$bk->file}}</td>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 12px">Tidak ada buku tamu</td>
                        </tr>
                        @endforelse
                    </thead>
                </table>
            </div>
            <div class="boxriw2"></div>
        </div>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>