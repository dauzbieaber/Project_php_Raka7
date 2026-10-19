<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 20px;
        }
        .card {
            background: white;
            width: 450px;
            margin: auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }
        input, textarea {
            width: 95%;
            padding: 6px;
            border: 1px solid #999999;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        textarea {
            height: 100px;
        }
        .tombol {
            background: pink;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            display: inline-block;
            cursor: pointer;
        }
        .abu {
            background: #6b7280;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Form Pesan Mahasiswa</h1>

    <form method="POST" action="hasil_pesan.php">
        <b>Nama</b><br>
        <input type="text" name="nama"><br>

        <b>Kelas</b><br>
        <input type="text" name="kelas"><br>

        <b>Pesan / Kesan</b><br>
        <textarea name="pesan"></textarea><br>

        <button type="submit" class="tombol">Kirim</button>
        <a href="index.php" class="tombol abu">Kembaluy</a>
    </form>
</div>

</body>
</html>