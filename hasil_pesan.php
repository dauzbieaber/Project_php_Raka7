<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
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
            background:pink;
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
    <?php
    // cek apakah ada data dari form
    if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["pesan"])) {
        // ambil data dari form
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $pesan = $_POST["pesan"];
    ?>

    <h1>Pesan Berhasil Dikirim</h1>
    <p>Terima kasih, <b><?= $nama ?></b>!</p>

    <div class="baris"><b>Nama:</b> <?= $nama ?></div>
    <div class="baris"><b>Kelas:</b> <?= $kelas ?></div>
    <div class="baris"><b>Pesan / Kesan:</b> <?= $pesan ?></div>

    <br>
    <a href="index.php" class="tombol">Kembali ke Data Mahasiswa</a>

    <?php
    } else {
        echo "<p>Silakan isi form terlebih dahulu</p>";
        echo "<a href='form_pesan.php'>Ke form pesan</a>";
    }
    ?>
</div>

</body>
</html>