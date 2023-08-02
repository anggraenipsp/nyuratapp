<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat - Nyurat</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
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
    padding: 1rem;
    width: fit-content;
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

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    /* Could be more or less, depending on screen size */
    max-width: 800px;
}

.modal-content h1 {
    margin: 20px 0;
}

textarea {
    resize: vertical;
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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
        <h1>Riwayat Pengajuan</h1>
    </center>
    <div class="scroll1">
        <div class="scroll2">
            <div class="boxriw1">
                <table id="pengajuanTable" class="display">
                    <thead>
                        <tr>
                            <th class="nomer">No</th>
                            <th>Status</th>
                            <th>Komentar</th>
                            <th>No Surat</th>
                            <th width="0px">Nama</th>
                            <th>Kontak</th>
                            <th>Kementerian</th>
                            <th>Program Kerja</th>
                            <th>Jenis</th>
                            <th>Tujuan</th>
                            <th>Penerima</th>
                            <th width="300px">Perihal</th>
                            <th width="300px">File</th>
                        </tr>
                    </thead>
                    <?php $no = 0; ?>
                    @forelse($pengajuan as $p)
                    <?php $no++; ?>
                    <tbody>
                        <tr>
                            <td class="nomer">{{ $no }}</td>
                            <td>{{ $p->status }}</td>
                            <td>{{ $p->feedback }}</td>
                            <td>{{ $p->nomorsurat ?? "-" }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->kontak }}</td>
                            <td>{{ $p->kementrian }}</td>
                            <td>{{ $p->programKerja }}</td>
                            <td>{{ $p->jenis }}</td>
                            <td>{{ $p->tujuan }}</td>
                            <td>{{ $p->penerima }}</td>
                            <td>{{ $p->perihal }}</td>
                            <td><a href="{{ $p->file }}">{{ $p->file }}</a></td>
                        </tr>
                    </tbody>
                    @empty
                    <tr>
                        <td colspan="13" style="text-align: center; padding: 12px">Tidak ada pengajuan</td>
                    </tr>
                    @endforelse
                </table>
            </div>
            <div class="boxriw2"></div>
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>