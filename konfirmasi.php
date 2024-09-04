<?php
// Ambil data dari URL
$nama = $_GET['nama'];
$email = $_GET['email'];
$tanggal_lahir = $_GET['tanggal_lahir'];
$umur = $_GET['umur'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$agama = $_GET['agama'];
$no_telepon = $_GET['no_telepon'];
$saran = $_GET['saran'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Konfirmasi Data yang Anda Masukkan</h2>
    <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Tanggal Lahir:</strong> <?php echo htmlspecialchars($tanggal_lahir); ?></p>
    <p><strong>Umur:</strong> <?php echo htmlspecialchars($umur); ?></p>
    <p><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($jenis_kelamin); ?></p>
    <p><strong>Agama:</strong> <?php echo htmlspecialchars($agama); ?></p>
    <p><strong>No Telepon:</strong> <?php echo htmlspecialchars($no_telepon); ?></p>
    <p><strong>Saran:</strong> <?php echo htmlspecialchars($saran); ?></p>

    <footer>
        <p>&copy; 2024 Formulir Kontak. All rights reserved.</p>
    </footer>
</body>
</html>
