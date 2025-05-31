<?php
session_start();
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title>Pitechlab - Sản phẩm</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="sanpham.css">
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
          <a href="nghiencuu.php">Nghiên cứu</a>
          <a href="sanpham.php"style="color: #00f7ff;">Sản phẩm</a>
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

  <section class="product-section">
    <h2>Sản phẩm công nghệ</h2>
    <p>Những sản phẩm sáng tạo do đội ngũ sinh viên và giảng viên Pitechlab phát triển, ứng dụng thực tế cao.</p>
    <div class="product-grid">
      <div class="product-card">
        <i class="fas fa-mobile-alt"></i>
        <h3>Ứng dụng sức khỏe</h3>
        <p>Theo dõi sức khỏe cá nhân và phân tích dữ liệu y tế bằng trí tuệ nhân tạo.</p>
      </div>
      <div class="product-card">
        <i class="fas fa-plug-circle-bolt"></i>
        <h3>Hệ thống tiết kiệm năng lượng</h3>
        <p>Giải pháp điều khiển và tối ưu hóa điện năng sử dụng trong nhà và doanh nghiệp.</p>
      </div>
      <div class="product-card">
        <i class="fas fa-graduation-cap"></i>
        <h3>Nền tảng học trực tuyến</h3>
        <p>Cung cấp hệ sinh thái học tập linh hoạt cho sinh viên và giảng viên.</p>
      </div>
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
