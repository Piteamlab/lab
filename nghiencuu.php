<?php
session_start();
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Pitechlab - Nghiên cứu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="nghiencuu.css">
</head>
<body>
    <header>
    <h1>Pitechlab</h1>
    <nav>
      <div style="display: flex;">
        <div>
          <a href="trangchu.php">Trang chủ</a>
          <a href="gioithieu.php">Giới thiệu</a>
          <a href="thuctap.php">Thực tập</a>
          <a href="baigiang.php">Bài giảng</a>
          <a href="nghiencuu.php"style="color: #00f7ff;">Nghiên cứu</a>
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

  <section class="research-section">
    <h2>Nghiên cứu nổi bật</h2>
    <p>Khám phá những xu hướng công nghệ mới nhất mà Pitechlab đang tập trung nghiên cứu và phát triển.</p>
    <div class="research-grid">
      <a href="AI.php">
      <div class="research-card">
        <i class="fas fa-robot"></i>
        <h3>Trí tuệ nhân tạo</h3>
        <p>Phát triển mô hình AI thông minh phục vụ các bài toán phức tạp trong y tế, giáo dục và công nghiệp.</p>
      </div>
      </a>
      <a href="">
        <div class="research-card">
        <i class="fas fa-satellite"></i>
        <h3>Cảm biến & IoT</h3>
        <p>Xây dựng hệ thống cảm biến thông minh kết nối dữ liệu thực tế với nền tảng phân tích từ xa.</p>
      </div>
      </a>
      <a href="">
        <div class="research-card">
        <i class="fas fa-shield-alt"></i>
        <h3>An ninh mạng</h3>
        <p>Phát hiện và ngăn chặn các mối đe dọa mạng bằng công nghệ mã hóa và machine learning hiện đại.</p>
      </div>
      </a>
    </div>
  </section>
  <footer>
    © 2025 Pitechlab. All rights reserved.<br>
    Địa chỉ: số 25 ngõ 24 Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội <br>
    SĐT: 0123456789 <br>
    email: pitech@gmail.com <br>
    website: pitech
  </footer>
</body>
</html>
