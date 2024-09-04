<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "form_regist"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$no_telepon = $_POST['no_telepon'];
$saran = $_POST['saran'];

// SQL untuk menyimpan data
$sql = "INSERT INTO form (nama, email, tanggal_lahir, umur, jenis_kelamin, agama, no_telepon, saran)
VALUES ('$nama', '$email', '$tanggal_lahir', '$umur', '$jenis_kelamin', '$agama', '$no_telepon', '$saran')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman konfirmasi
    header("Location: konfirmasi.php?nama=$nama&email=$email&tanggal_lahir=$tanggal_lahir&umur=$umur&jenis_kelamin=$jenis_kelamin&agama=$agama&no_telepon=$no_telepon&saran=$saran");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
