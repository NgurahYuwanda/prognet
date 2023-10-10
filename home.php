<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Form Data Diri</title>
    <script src="TugasJavascript.js"></script>
  </head>
  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form onsubmit="return validateForm()" action="proses_input.php" method="POST">
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Nama Lengkap</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" id="nama" name="nama" class="form-control" required />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">NIM</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" id="nim" name="nim" class="form-control" pattern="[0-9]{10}" title="Kolom NIM hanya bisa di isi angka dan harus terdiri dari 10 digit." required />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Jenis Kelamin</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" required />
                  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required />
                  <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Agama</h6>
              </div>
              <div class="col-sm-9">
                <select type="text" id="agama" name="agama" class="form-select" aria-label="Default selectexample">
                  <option selected>Pilih Agama</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Kristen Katolik">Kristen Katolik</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Alamat</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" id="alamat" name="alamat" required />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Telepon</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" id="telp" name="telp" class="form-control" pattern="[0-9]+" title="No telepon hanya bisa di isi angka" required />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Hobi</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Olahraga" id="olahraga" name="hobi[]" />
                  <label class="form-check-label" for="inline CheckDefault"> Olahraga </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Membaca" id="membaca" name="hobi[] />
                  <label class="form-check-label" for="inline CheckDefault"> Membaca </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Main Musik" id="main_musik" name="hobi[] />
                  <label class="form-check-label" for="inline CheckDefault"> Main Musik </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Lain-Lain" id="lain_lain" name="hobi[] />
                  <label class="form-check-label" for="inline CheckDefault"> Lain-Lain </label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Program Studi</h6>
              </div>
              <div class="col-sm-9">
                <select type="text" id="prodi" name="prodi" class="form-select" aria-label="Default selectexample">
                  <option selected>Pilih Program Studi</option>
                  <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                  <option value="S1 Teknik Sipir">S1 Teknik Sipil</option>
                  <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                  <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                  <option value="S1 Teknik Arsitektur">S1 Teknik Arsitektur</option>
                  <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                  <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" id="email" name="email" class="form-control" required />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-9 text-secondary"></div>
            </div>
            <button name="submit" type="submit" class="btn btn-success" target="_blank">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="TugasJavascript.js"></script>
  </body>
</html>
