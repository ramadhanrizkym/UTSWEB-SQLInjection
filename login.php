<?php
// Koneksi AMAN
$host = "localhost";
$user = "root";
$pass = "";
$db = "test_db";

$conn = new mysqli($host, $user, $pass, $db);

// Tangkap input
$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h2>Login Berhasil! 🎉</h2>";
} else {
    echo "<h2>Login Gagal! ❌</h2>";
}

$stmt->close();
$conn->close();
?>