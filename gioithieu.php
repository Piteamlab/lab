<?php
session_start();
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giới thiệu - Pitechlab</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="gioithieu.css">
</head>
<body>
    <header>
    <h1>Pitechlab</h1>
    <nav>
      <div style="display: flex;">
        <div>
      <a href="trangchu.php">Trang chủ</a>
      <a href="gioithieu.php"style="color: #00f7ff;">Giới thiệu</a>
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

  <div class="container">
    <h2>Giới thiệu về Pitechlab</h2>
    <p>
      <strong>Pitechlab</strong> là phòng nghiên cứu và phát triển trong lĩnh vực Công nghệ Thông tin, 
      trực thuộc Khoa CNTT. Lab được thành lập nhằm tạo môi trường kết nối giữa lý thuyết và thực hành, 
      giữa nghiên cứu và ứng dụng thực tiễn.
    </p>
    <p>
      Tại đây, sinh viên có cơ hội làm việc trực tiếp với các giảng viên và chuyên gia trong các lĩnh vực như:
      trí tuệ nhân tạo, phát triển phần mềm, web, khoa học dữ liệu và chuyển đổi số. 
    </p>
    <p>
      Với định hướng phát triển bền vững, sáng tạo và chia sẻ tri thức, Pitechlab hướng đến việc xây dựng 
      các sản phẩm có giá trị thực tiễn cao, đồng thời đóng góp tích cực vào công tác đào tạo và nghiên cứu.
    </p>
    <p>
      Lab luôn mở cửa chào đón những bạn trẻ có đam mê công nghệ, yêu thích sáng tạo và mong muốn phát triển bản thân.
    </p>
  </div>

  <footer>
    © 2025 Pitechlab. All rights reserved. <br>
    Địa chỉ: số 25 ngõ 24 Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội <br>
    SĐT: 0123456789 <br>
    email: pitech@gmail.com <br>
    website: pitech
  </footer>
</body>
</html>
