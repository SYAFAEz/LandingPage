<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $pesan = $_POST['pesan'];

    if(empty($nama) || empty($no_hp) || empty($email) || empty($subject) || empty($pesan)) {
      
        echo "Semua field harus diisi!";
    } else {

        echo "Pesan berhasil dikirim!";
    }
}
?>