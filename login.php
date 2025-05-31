<?php
session_start();  // Bắt đầu session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dangkihocvienlab";

// Kết nối CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ form
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

if (empty($user) || empty($pass)) {
    echo "Vui lòng nhập đầy đủ thông tin.";
    exit;
}

// Kiểm tra thông tin người dùng
$sql = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($pass, $hashed_password)) {
        // Lưu thông tin vào session
        $_SESSION['username'] = $user;

        // Chuyển đến trang chủ
        header("Location: trangchu.php");
        exit;
    } else {
        echo "Tài khoản hoặc mật khẩu không đúng.";
    }
} else {
    echo "Tài khoản hoặc mật khẩu không đúng.";
}

$stmt->close();
$conn->close();
?>
