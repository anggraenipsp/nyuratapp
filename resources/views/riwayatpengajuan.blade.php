<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat - Nyurat</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer-sekre.css') !!}">
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
    padding: 10px 0 10px 0;
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
    min-width: 150px;
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
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
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

.nomorSuratModal {
    margin-left: 12px;
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
                            <th>Nama</th>
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
                            <td>
                                <form action="/pengajuan/updateStatus" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $p->idNo }}"/>
                                    <select name="status" class="pengajuanStatusDropdown"
                                        onfocus="this.setAttribute('PrvSelectedValue',this.value);" style="padding: 5px 10px; margin: 4px 2px; cursor: pointer;">
                                        <option value="Diulas" {{ $p->status == "Diulas" ? "selected" : ""}}> Diulas
                                        </option>
                                        <option value="Ditolak" {{ $p->status == "Ditolak" ? "selected" : ""}}> Ditolak
                                        </option>
                                        <option value="Diterima" {{ $p->status == "Diterima" ? "selected" : ""}}> Diterima
                                    </option>
                                    </select>
                                </form>
                            </td>
                            <td><button class="komentarModal" data-id="{{ $p->idNo }}"
                                    data-komentar="{{ $p->feedback }}" style="padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Lihat Komentar</button></td>
                            <td>{{ $p->nomorSurat ?? "" }}<button class="nomorSuratModal" data-id="{{ $p->idNo }}"
                                    data-nomor="{{ $p->nomorSurat }}" style="padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Edit Nomor Surat</button></td>
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
            <p>copyright &copy;2023 KBMSI FILKOM UB</p>
        </div>
    </footer>
    <div id="pengajuanModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close komentar-close">&times;</span>

            <h1>Komentar</h1>

            <form action="/pengajuan/updateKomentar" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="modal-id" />
                <textarea id="modal-komentar" name="komentar" style="width: 95%; padding: 12px" rows="10"
                    placeholder="Komentarnya apa..."></textarea>

                <button style="border: none; background-color: red; color: white; padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Cancel</button>
                <button style="color: black; padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Change</button>
            </form>
        </div>

    </div>

    <div id="nomorSuratModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close nomor-close">&times;</span>

            <h1>Nomor Surat</h1>

            <form action="/pengajuan/updateNomorSurat" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="modal-id-nomor" />
                <textarea id="modal-nomor-surat" name="nomorSurat" style="width: 95%; padding: 12px" rows="10"
                    placeholder="Masukkan Nomor Surat"></textarea>

                <button style="border: none; background-color: red; color: white; padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Cancel</button>
                <button style="padding: 5px 10px; margin: 4px 2px; cursor: pointer;">Change</button>
            </form>
        </div>

    </div>
    <footer>
        <div class=" footer-content">
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
    <script>
    $(document).ready(function() {
        // ===== BUAT MODAL KOMENTAR =====
        var modal = document.getElementById("pengajuanModal");

        $(".komentarModal").click(function() {
            modal.style.display = "block";
            $("#modal-komentar").val($(this).data("komentar"));
            $("#modal-id").val($(this).data("id"));
        });

        $(".komentar-close").click(function() {
            modal.style.display = "none";
            modalClose()
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modalClose()
            }
        }

        function modalClose() {
            $("#modal-komentar").val("");
            $("#modal-id").val("");
        }

        // ===== BUAT MODAL KOMENTAR =====
        var modalNomor = document.getElementById("nomorSuratModal");

        $(".nomorSuratModal").click(function() {
            modalNomor.style.display = "block";
            $("#modal-nomor-surat").val($(this).data("nomor"));
            $("#modal-id-nomor").val($(this).data("id"));
        });

        $(".close").click(function() {
            modalNomor.style.display = "none";
            modalClose()
        });

        window.onclick = function(event) {
            if (event.target == modalNomor) {
                modalNomor.style.display = "none";
                modalNomorClose()
            }
        }

        function modalNomorClose() {
            $("#modal-nomor-surat").val("");
            $("#modal-id-nomor").val("");
        }

        // ===== BUAT GANTI STATUS =====
        $(".pengajuanStatusDropdown").on('change', function() {
            if (confirm('Do you want to change?') == false) {
                this.value = this.getAttribute('PrvSelectedValue');
                return false;
            }

            this.form.submit();
        });
    });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>