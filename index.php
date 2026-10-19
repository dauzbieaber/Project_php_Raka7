<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 20px;
        }
        .card {
            background: white;
            width: 1000px;
            margin: auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }
        .atas {
            overflow: hidden;
        }
        .kiri {
            float: left;
        }
        .kanan {
            float: right;
        }
        h1 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background: #e8bff3;
            text-align: left;
            padding: 8px;
            border: 1px solid #aaaaaa;
        }
        td {
            padding: 8px;
            border: 1px solid #aaaaaa;
        }
        .tombol {
            background: pink;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            padding: 10px 20px;
            display: inline-block;
        }
        .lulus {
            color: green;
            font-weight: bold;
        }
        .tidak {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// data mahasiswa
$mahasiswa = [
    ["nim" => "25001", "nama" => "Dauz Bieber", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "dauz@upi.edu", "nilai" => 98],
    ["nim" => "25002", "nama" => "Anies", "jurusan" => "Sistem Telekomunikasi", "email" => "anies@upi.edu", "nilai" => 76],
    ["nim" => "25003", "nama" => "Citra Lestari", "jurusan" => "Mekatronika dan Kecerdasan Buatan", "email" => "citra@upi.edu", "nilai" => 67],
    ["nim" => "25004", "nama" => "Dina Maharani", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "dina@upi.edu", "nilai" => 82],
    ["nim" => "25005", "nama" => "Prabowo", "jurusan" => "Sistem Pemerintahan gelap", "email" => "prabowo@upi.edu", "nilai" => 11]
];

$no = 1;
?>

<div class="card">
    <div class="atas">
        <div class="kiri">
            <h1>Daftar Mahasiswa</h1>
            <small>First mini Website PHP Dasar</small>
        </div>
        <div class="kanan">
            <a href="form_pesan.php" class="tombol">Isi Form Pesan</a>
        </div>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>

        <?php // looping data ?>
        <?php foreach ($mahasiswa as $data): ?>
            <?php
            $nilai = $data["nilai"];

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

            // cek lulus atau tidak
            if ($nilai >= 90) {
                $status = "Lulus";
                $kelas = "lulus";
            } else {
                $status = "Tidak Lulus";
                $kelas = "tidak";
            }

            // data buat dikirim lewat GET
            $url = "detail.php?nim=" . $data["nim"]
                . "&nama=" . $data["nama"]
                . "&jurusan=" . $data["jurusan"]
                . "&email=" . $data["email"]
                . "&nilai=" . $nilai;
            ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data["nim"] ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["jurusan"] ?></td>
            <td><?= $nilai ?></td>
            <td><?= $grade ?></td>
            <td class="<?= $kelas ?>"><?= $status ?></td>
            <td><a href="<?= $url ?>" class="tombol">Lihat Detail</a></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>