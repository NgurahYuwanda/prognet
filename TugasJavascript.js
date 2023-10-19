function validateForm() {
  // Validasi Nama Lengkap (hanya huruf)
  var nama = document.getElementById("nama").value;
  if (!/^[A-Za-z\s]+$/.test(nama)) {
    alert("Kolom Nama hanya bisa menginput huruf.");
    return false;
  }

  // Validasi NIM (hanya angka, 10 digit)
  var nim = document.getElementById("nim").value;
  if (!/^\d{10}$/.test(nim)) {
    alert("Kolom NIM hanya bisa menginput angka dan harus terdiri dari 10 digit.");
    return false;
  }

  // Validasi Email (harus mengandung @)
  var email = document.getElementById("email").value;
  if (!email.includes("@")) {
    alert('Kolom Email harus mengandung simbol "@".');
    return false;
  }

  // Validasi Telepon (hanya angka)
  var noHp = document.getElementById("telp").value;
  if (!/^\d+$/.test(noHp)) {
    alert("Kolom Telepon hanya bisa menginput angka.");
    return false;
  }

  // Mengambil nilai dari elemen-elemen formulir
  var namaLengkap = document.getElementById("nama").value;
  var NIM = document.getElementById("nim").value;
  var jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;
  var agama = document.getElementById("agama").value;
  var alamat = document.getElementById("alamat").value;
  var telepon = document.getElementById("telp").value;
  var hobi = [];
  var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  for (var i = 0; i < checkboxes.length; i++) {
    hobi.push(checkboxes[i].value);
  }
  var prodi = document.getElementById("prodi").value;
  var email = document.getElementById("email").value;

  // Menampilkan data yang diinput
  var output = "Data yang Anda masukkan telah tersimpan\n\n";
  output += "Nama Lengkap: " + namaLengkap + "\n";
  output += "NIM: " + NIM + "\n";
  output += "Jenis Kelamin: " + jenisKelamin + "\n";
  output += "Agama: " + agama + "\n";
  output += "Alamat: " + alamat + "\n";
  output += "Telepon: " + telepon + "\n";
  output += "Hobi: " + hobi.join(", ") + "\n";
  output += "Program Studi: " + prodi + "\n";
  output += "Email: " + email + "\n";

  // Tampilkan output dalam alert
  alert(output);

  return true; // Formulir akan terus dikirim
}
