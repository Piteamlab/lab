<?php
session_start();

$username = $_SESSION['username'];
$avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($username) . '&background=dbeafe&color=2563eb';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title>Pitechlab - Sự kiện</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="sukien.css">
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
          <a href="sanpham.php">Sản phẩm</a>
          <a href="sukien.php"style="color: #00f7ff;" >Sự kiện</a>
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

  <section class="event-section">
    <h2>Sự kiện nổi bật</h2>
    <p>Cập nhật các hoạt động, hội thảo và chương trình mới nhất tại Pitechlab.</p>
    <div class="timeline">
      <div class="timeline-event left">
        <div class="content">
          <div class="date">15/06/2025</div>
          <h3>Hội thảo AI & Giáo dục</h3>
          <p>Ứng dụng trí tuệ nhân tạo trong nâng cao chất lượng dạy và học.</p>
        </div>
      </div>
      <div class="timeline-event right">
        <div class="content">
          <div class="date">01/07/2025</div>
          <h3>Cuộc thi lập trình sinh viên</h3>
          <p>Thử thách với các bài toán thực tế, giải thưởng hấp dẫn và cơ hội tuyển dụng.</p>
        </div>
      </div>
      <div class="timeline-event left">
        <div class="content">
          <div class="date">20/08/2025</div>
          <h3>Demo sản phẩm công nghệ</h3>
          <p>Trình diễn các sản phẩm công nghệ mới với sự tham gia của chuyên gia.</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
