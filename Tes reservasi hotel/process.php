<?php
$servername = "localhost"; // Ganti dengan nama server database Anda // Ganti dengan username database Anda
$username = "root";
$password = ""; // Ganti dengan password database Anda
$dbname = "hotel"; // Ganti dengan nama database Anda

// Membuat koneksi baru
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Pastikan ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Query SQL untuk menyimpan data ke dalam tabel reservations
    $sql = "INSERT INTO reservations (name, checkin_date, checkout_date)
            VALUES ('$name', '$checkin', '$checkout')";

    if ($conn->query($sql) === TRUE) {
        // Jika penyimpanan data berhasil, tampilkan halaman konfirmasi
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmation</title>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div class="container">
            <h1>Confirmation</h1>
            <p>Thank you, <?php echo $name; ?>, for your reservation.</p>
            <p>Your check-in date is <?php echo $checkin; ?> and your check-out date is <?php echo $checkout; ?>.</p>
        </div>
        </body>
        </html>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Jika tidak ada data yang dikirimkan melalui metode POST, arahkan pengguna kembali ke halaman utama
    header("Location: index.php");
    exit();
}

// Menutup koneksi database
$conn->close();
?>
