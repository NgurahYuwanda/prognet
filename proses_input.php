<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <link rel="stylesheet" href="style.css" />
    <style >
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Hasil Input</h1>
    
    <?php
    // Periksa apakah data telah dikirim melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai yang dikirimkan dari form pada home.php
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        $alamat = $_POST["alamat"];
        $telp = $_POST["telp"];
        $hobi = isset($_POST["hobi"]) ? $_POST["hobi"] : array();
        $prodi = $_POST["prodi"];
        $email = $_POST["email"];
    ?>

    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><?php echo $agama; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <th>No Telepon</th>
            <td><?php echo $telp; ?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td><?php echo implode(", ", $hobi); ?></td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
    </table>

    <a href="home.php">Kembali ke Form</a>

    <?php
    } else {
        // Jika tidak ada data yang dikirimkan, tampilkan pesan kesalahan
        echo "<p>Data tidak tersedia.</p>";
    }
    ?>
</body>
</html>
