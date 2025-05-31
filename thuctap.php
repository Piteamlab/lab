<?php
session_start();
$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thực tập CNTT - Pitechlab</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="thuctap.css">
</head>
<body>

    <header>
    <h1>Pitechlab</h1>
    <nav>
      <div style="display: flex;">
        <div>
          <a href="trangchu.php">Trang chủ</a>
          <a href="gioithieu.php">Giới thiệu</a>
          <a href="thuctap.php"style="color: #00f7ff;">Thực tập</a>
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
    <h2>Chương trình Thực tập CNTT tại Pitechlab</h2>

    <div class="section">
      <h3>📌 Giới thiệu</h3>
      <p>Chương trình thực tập tại Pitechlab nhằm tạo cơ hội cho sinh viên tiếp cận với môi trường làm việc thực tế, nâng cao kỹ năng lập trình, làm dự án và phát triển tư duy công nghệ.</p>
    </div>

    <div class="section">
      <h3>🎯 Đối tượng và Yêu cầu</h3>
      <ul>
        <li>Sinh viên năm 3, 4 ngành CNTT, Khoa học máy tính</li>
        <li>Biết lập trình cơ bản (C++, Java, Python hoặc Web)</li>
        <li>Có tinh thần học hỏi và làm việc nhóm</li>
      </ul>
    </div>

    <div class="section">
      <h3>🛠️ Nội dung thực tập</h3>
      <ul>
        <li>Tham gia dự án thực tế tại lab</li>
        <li>Được hướng dẫn bởi mentor</li>
        <li>Thực hành: Web, AI, App, Data, v.v.</li>
        <li>Báo cáo định kỳ và trình bày sản phẩm cuối kỳ</li>
      </ul>
    </div>

    <div class="section">
      <h3>🎁 Quyền lợi</h3>
      <ul>
        <li>Giấy chứng nhận thực tập</li>
        <li>Học hỏi từ mentor giàu kinh nghiệm</li>
        <li>Sử dụng sản phẩm làm đồ án</li>
        <li>Cơ hội cộng tác dài hạn với Pitechlab</li>
      </ul>
    </div>

    <div class="section">
      <h3>🕒 Thời gian & Hình thức</h3>
      <p>Thời gian linh hoạt: 8–12 tuần, có thể online kết hợp offline. Lịch trình được sắp xếp phù hợp với từng nhóm.</p>
    </div>

    <div class="section">
      <h3>📝 Đăng ký tham gia</h3>
      <p>Điền form đăng ký trước <strong>15/06/2025</strong>:</p>
      <a href="Dangki.html" class="btn">📄 Đăng ký ngay</a>
      <p>Hoặc liên hệ: <a href="Lienhe.html" style="color:#00ffff;">thuctap@pitechlab.vn</a></p>
    </div>
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
