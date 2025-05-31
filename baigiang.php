<?php
session_start();
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Pitechlab - Bài giảng</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="baigiang.css">
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
      <a href="baigiang.php"style="color: #00f7ff;">Bài giảng</a>
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

  <section>
    <h2 class="section-title">📚 Bài giảng</h2>
    <p class="section-description">Các bài học chất lượng cao dành cho sinh viên Công nghệ Thông tin.</p>
    <div class="lecture-grid">
      <div class="lecture-card">
        <h3>Nhập môn Lập trình</h3>
        <p>Làm quen với C++, biến, điều kiện, vòng lặp, và cấu trúc cơ bản.</p>
        <a href="nhapmonlaptrinh.php">Xem chi tiết</a>
      </div>
      <div class="lecture-card">
        <h3>Cấu trúc Dữ liệu & Giải thuật</h3>
        <p>Học về danh sách, cây, đồ thị và các thuật toán quan trọng.</p>
        <a href="#">Xem chi tiết</a>
      </div>
      <div class="lecture-card">
        <h3>Phát triển Web</h3>
        <p>Tạo website bằng HTML, CSS, JavaScript và công nghệ hiện đại.</p>
        <a href="#">Xem chi tiết</a>
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
