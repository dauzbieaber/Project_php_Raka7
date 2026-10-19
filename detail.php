<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 20px;
        }
        .card {
            background: white;
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }
        .baris {
            background: #f2f2f2;
            padding: 8px;
            margin-bottom: 6px;
        }
        .tombol {
            background: pink;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            padding: 10px 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Detail Mahasiswa</h1>

    <?php
    if (isset($_GET["nim"]) && isset($_GET["nama"]) && isset($_GET["jurusan"]) && isset($_GET["email"]) && isset($_GET["nilai"])) {
        // ambil data dari GET
        $nim = $_GET["nim"];
        $nama = $_GET["nama"];
        $jurusan = $_GET["jurusan"];
        $email = $_GET["email"];
        $nilai = $_GET["nilai"];

        // cek nilai buat grade
        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 75) {
            $grade = "B";
        } elseif ($nilai >= 60) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        // cek status
        if ($nilai >= 90) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
    ?>

    <div class="baris"><b>NIM:</b> <?= $nim ?></div>
    <div class="baris"><b>Nama:</b> <?= $nama ?></div>
    <div class="baris"><b>Jurusan:</b> <?= $jurusan ?></div>
    <div class="baris"><b>Email:</b> <?= $email ?></div>
    <div class="baris"><b>Nilai:</b> <?= $nilai ?></div>
    <div class="baris"><b>Grade:</b> <?= $grade ?></div>
    <div class="baris"><b>Status:</b> <?= $status ?></div>

    <?php
    } else {
        echo "<p>Data tidak ditemukan</p>";
    }
    ?>

    <br>
    <a href="index.php" class="tombol">Kembali</a>
</div>

</body>
</html>
