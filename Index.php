
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="container-fluid bg-secondary">
            <header>
                <h1 style="text-align: center;">Silahkan Berkomentar</h1><br>
            </header>
        </div>

    </div>
    <!--Isi Form-->
    <div class="container">
        <article>
            <form action="Koneksi.php" method="post">
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="Nama"><br><br>
                <label>Kelas</label><br>
                <input type="text" name="kelas" placeholder="Kelas"><br><br>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Email"><br><br>
                <label>Kelamin</label><br>
                <select name="gender">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    <option value="TM">Tidak Memilih</option>
                </select><br><br>
                <label>Alamat</label><br>
                <textarea id="textarea1" name="alamat" placeholder="Alamat" rows="5" class="form-control"></textarea><br><br>
                <input type="submit" value="Submit" class="btn-outline-success">
            </form>
        </article>
    </div>

</body>
</html>
