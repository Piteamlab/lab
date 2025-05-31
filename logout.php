<?php
session_start();
session_destroy(); // Hủy session

header("Location: Dangnhap.html"); // Quay lại trang đăng nhập
exit;
?>
