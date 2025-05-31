<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì quay lại trang login
if (!isset($_SESSION['username'])) {
    header("Location: Dangnhap.html");
    exit;
}
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pitechlab - Phòng nghiên cứu CNTT</title>
  <link rel="stylesheet" href="pitech.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet"/>
  
  <link rel="stylesheet" href="trangchu.css">
</head>
<body>
  <header>
    <h1>Pitechlab</h1>
    <nav>
      <div style="display: flex;">
        <div>
      <a href="trangchu.php"style="color: #00f7ff;">Trang chủ</a>
      <a href="gioithieu.php">Giới thiệu</a>
      <a href="thuctap.php">Thực tập</a>
      <a href="baigiang.php">Bài giảng</a>
      <a href="nghiencuu.php">Nghiên cứu</a>
      <a href="sanpham.php">Sản phẩm</a>
      <a href="sukien.php" >Sự kiện</a>
        </div>
<div class="user-dropdown">
  <div class="user-avatar" onclick="toggleDropdown()" style="
    width: 30px;margin-left: 20px;">
    <img src="<?php echo $avatarUrl; ?>" alt="Avatar" style="
    width: 100%;
    height: 30px;">
  </div>

  <div class="dropdown-menu" id="userDropdown">
    <a href="trangcanhan.php">Trang cá nhân</a>
    <a href="pitech.html">Đăng xuất</a>
  </div>
</div>
      </div>
<script>
  function toggleDropdown() {
    const menu = document.getElementById("userDropdown");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
  }

  window.addEventListener("click", function(e) {
    const dropdown = document.getElementById("userDropdown");
    const avatar = document.querySelector(".user-avatar");
    if (!avatar.contains(e.target)) {
      dropdown.style.display = "none";
    }
  });
</script>
    </nav>
  </header>

  <section class="hero">
    <h2>Chào mừng đến với Pitechlab</h2>
    <p>Nơi kết nối nghiên cứu, học tập và đổi mới sáng tạo trong lĩnh vực Công nghệ Thông tin.</p>
  </section>

  <section class="section">
    <h3>🎯 Mục tiêu của Pitechlab</h3>
    <p>Phát triển các dự án nghiên cứu thực tiễn, hỗ trợ sinh viên thực tập, và xây dựng các sản phẩm phần mềm hữu ích cho cộng đồng.</p>
  </section>

  <section class="section">
    <h3>🛠️ Các hoạt động chính</h3>
    <ul>
      <li>Hướng dẫn thực tập CNTT</li>
      <li>Chia sẻ bài giảng, tài liệu học tập</li>
      <li>Thực hiện các nghiên cứu khoa học</li>
      <li>Phát triển phần mềm</li>
      <li>Tổ chức sự kiện công nghệ</li>
    </ul>
  </section>

  <footer>
    © 2025 Pitechlab. All rights reserved. <br>
    Địa chỉ: số 25 ngõ 24 Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội <br>
    SĐT: 0123456789 <br>
    email: pitech@gmail.com <br>
    website: pitech
  </footer>
</body>
</html>

