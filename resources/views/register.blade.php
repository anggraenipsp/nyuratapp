<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Akun - Nyurat</title>
</head>
<style>
html {
    font-family: "Roboto", sans-serif;
    font-size: 10px;
    box-sizing: border-box;
    background-color: #ccc5be;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 75px;
    margin-top: 50px;
    color: #ab6135;
}

.container {
    margin: 0 auto;
    width: 500px;
    background: #ffffff;
    border-radius: 31.37px;
    display: flex;
    flex-direction: column;
    align-items: end;
    padding: 32px;
}

form {
    width: 100%;
}

label, p {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 23px;
}

input, select {
    width: 98%;
    height: 45px;
    background: #f3f1f1;
    border: #f3f1f1;
    border-radius: 13px;
    margin-bottom: 20px;
    padding-left:10px; 
}

button {
    width: 117px;
    height: 47px;
    background: #ab6135;
    border: 1px solid #949aa4;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
    border-radius: 12px;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    text-align: center;
    color: #ffffff;
    float: right;
    cursor: pointer; 
}

#popup {
    width: 100%;
    height: 100%;
    position: fixed;
    background: rgba(0, 0, 0, .7);
    top: 0;
    left: 0;
    z-index: 9999;
}

.window {
    width: 400px;
    height: 100px;
    background: #fff;
    border-radius: 10px;
    position: relative;
    padding: 10px;
    text-align: center;
    margin: 15% auto;
}

.window h2 {
    margin: 30px 0 0 0;
    color: red;
}

/* Button Close */
.close-button {
    width: 6%;
    height: 20%;
    line-height: 23px;
    background: #000;
    border-radius: 50%;
    border: 3px solid #fff;
    display: block;
    text-align: center;
    color: #fff;
    text-decoration: none;
    position: absolute;
    top: -10px;
    right: -10px;
}

/* Memunculkan Jendela Pop Up*/
#popup:target {
    visibility: visible;
}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
}
</style>

<body>
    <center>
        <h1>BUAT AKUN</h1>
    </center>
    <div class="box">
        <div class="container">
            <form action="{{url('proses_daftar')}}" method="POST">
                @csrf
                <label>Nama</label>
                <input type="text" id="name" name="name" required="required" />
                <label>NIM</label>
                <input type="text" id="nim" name="nim" required="required" />
                <label>Password</label>
                <input type="password" id="password" name="password" required="required" />
                <label>Role</label>
                <select name="role" id="role" style="padding:10px; border:none;">
                    <option value="sekretaris">Sekretaris</option>
                    <option value="user">User</option>
                </select>
                <button type="submit">DAFTAR</button>
                <p>Sudah punya akun? <a href="/">Login</a></p>
            </form>

        </div>
        @if($errors->any())
        <div id="popup">
            <div class="window">
                <a href="/" class="close-button" title="Close">X</a>
                <h2>{{ $errors->first() }}</h2>
            </div>
        </div>
    </div>
    @enderror
    <img class=" footer" src="https://i.postimg.cc/85MmPkfw/undraw-moonlight-5-ksn-1-1.png" />
</body>

</html>