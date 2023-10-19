<?php
include "config/koneksi.php";

if (isset($_POST['create'])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $prodi = $_POST["prodi"];
    $email = $_POST["email"];

    $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";

    $q_input = "INSERT INTO tb_form VALUES ('$nama', '$nim',  '$jenis_kelamin', '$agama', '$alamat', '$telp', '$hobi', '$prodi', '$email')";

    $sql = mysqli_query($conn, $q_input);

    if (!$sql) {
        echo "<script type='text/javascript'>alert('Data gagal disimpan!');</script>" . mysqli_error($conn);
    }
}

if (isset($_POST['edit'])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $prodi = $_POST["prodi"];
    $email = $_POST["email"];

    $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";

    $q_edit = "UPDATE tb_form SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat', telp = '$telp', prodi = '$prodi', email = '$email', hobi = '$hobi' WHERE nim = '$nim'";

    $exec = mysqli_query($conn, $q_edit);
    if (!$exec) {
        echo "<script type='text/javascript'>alert('Data gagal diedit!');</script>" . mysqli_error($conn);
    } else {
        echo "<script type='text/javascript'>alert('Data telah diedit!');</script>";
    }
}

if (isset($_POST['hapus'])) {
    $nim = $_POST['nim'];
    $q_hapus = "DELETE FROM tb_form WHERE nim = '$nim'";
    $ex_hapus = mysqli_query($conn, $q_hapus);
    if (!$ex_hapus) {
        echo "<script type='text/javascript'>alert('Data gagal dihapus!');</script>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Formulir</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- <script src="validasi.js"></script> -->
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="jumbotron" style="min-height: 50rem;">
        <div class="container py-5 w-50">
            <div class="col-md">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <h3 class="h2 text-black mb-3" style="text-align: center;">DATA DIRI MAHASISWA</h3>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "config/koneksi.php";
                                $ambildataform = mysqli_query($conn, "SELECT * FROM tb_form");
                                $i = 1;
                                while ($form = mysqli_fetch_array($ambildataform)) {
                                    $nama = $form['nama'];
                                    $nim = $form['nim'];
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $nama; ?></td>
                                        <td><?= $nim; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" name="input" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $form['nim'] ?>">Detail</button>
                                            <button type="button" class="btn btn-warning" name="input" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $form['nim'] ?>">Edit</button>
                                            <button type="button" class="btn btn-danger" name="input" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $form['nim'] ?>">Hapus</button>
                                        </td>
                                    </tr>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="detailModal<?php echo $form['nim'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Nama</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['nama'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">NIM</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['nim'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['jenis_kelamin'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Agama</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['agama'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Alamat</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['alamat'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Telepon</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['telp'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Hobi</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['hobi'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Program Studi</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['prodi'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Email</label>
                                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $form['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal<?php echo $form['nim'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editModalLabel">Edit Formulir</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form onsubmit="return validateForm()" method="post" action="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" value="<?php echo $form['nama'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $form['nim'] ?>" readonly>
                                </div>
                                <label for="agama" class="form-label">Agama</label>
                                <select class="mb-3 form-select" id="agama" name="agama">
                                    <option selected hidden>
                                        <?php echo $form['agama'] ?>
                                    </option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                                <label for="prodi" class="form-label">Program Studi</label>
                                <select class="mb-3 form-select" id="prodi" name="prodi">
                                    <option selected hidden>
                                        <?php echo $form['prodi'] ?>
                                    </option>
                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                </select>
                                Jenis Kelamin
                                <div class="mt-2 form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" <?php if ($form['jenis_kelamin'] == 'Laki-Laki') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                    <label class="form-check-label" for="laki-laki">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php if ($form['jenis_kelamin'] == 'Perempuan') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                                Hobi
                                <br>
                                <?php
                                    $hobbies = $form['hobi'];

                                    // Split the values into an array
                                    $hobbyArray = explode(', ', $hobbies);

                                    // Define a list of possible hobbies
                                    $possibleHobbies = array("Olahraga", "Membaca", "Main Musik", "Lain-Lain");

                                    // Create checkboxes for each possible hobby
                                    foreach ($possibleHobbies as $hobby) {
                                        $isChecked = in_array($hobby, $hobbyArray) ? 'checked' : '';
                                        echo "<input class='form-check-input' type='checkbox' name='hobi[]' value='$hobby' $isChecked> $hobby<br>";
                                    }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $form['alamat'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $form['telp'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $form['email'] ?>">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hapusModal<?php echo $form['nim'] ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="hapusModalLabel">PERHATIAN!!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <h3>Apakah Anda Yakin Ingin Menghapus
                                <?php echo $form['nama'] ?>?
                            </h3>
                            <input type="hidden" value="<?php echo $form['nim'] ?>" name="nim">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
                                }
    ?>
    </tbody>
    </table>
    <a href="index.html" class="btn btn-secondary card-link mt-3">Kembali</a>
    </div>
    </div>
    <script src="TugasJavascript.js"></script>
</body>

</html>