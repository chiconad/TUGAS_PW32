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

// SQL untuk mengambil semua data
$sql = "SELECT * FROM form";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body background = "bg-pw.jpeg">
    <h2>Data Kontak yang Dimasukkan</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>No Telepon</th>
            <th>Saran</th>
        </tr>
        
        <?php
        if ($result->num_rows > 0) {
            $no = 1;

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; 
                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
                echo "<td>" . htmlspecialchars($row['umur']) . "</td>";
                echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                echo "<td>" . htmlspecialchars($row['agama']) . "</td>";
                echo "<td>" . htmlspecialchars($row['no_telepon']) . "</td>";
                echo "<td>" . htmlspecialchars($row['saran']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>Tidak ada data yang tersedia.</td></tr>";
        }
        ?>
    </table>

    <footer>
        <p>&copy; Nadila Yanuarika Rimawati | 233140701111028</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
