 
<?php
/*
    $severname = " localhost";
    $username ="dat";
    $password ="123456";
    $dbname ="usernamelog";
    $conn= new mysqli ($severname,$username,$password,$dbname);
    if( $conn-> connect_error){
        die( "Kết nối thất bại : ".$conn-> connect_error);
    }
    $user= $_POST['username'];
    $pass= password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql= "INSERT INTO users( username , password) VALUES ('$user','$pass')";
    if($conn -> query($sql)=== TRUE){
        echo "Đăng kí thành công";}
    else{
        echo "Lỗi: " . $conn-> error;
    }
    $conn-> close();
    */




    /*require 'connect.php';
    if(isset($_POST['register'])){
        $username =$_POST['username'];
        $password =$_POST['password'];
        if(!empty($username)&&!empty($password)){
            echo "<pre>";
            print_r($_POST);

            /*$sql= "INSERT INTO  `users` (`username`,`password`) VALUES ('$username','$password')";

            if($conn-> query($sql)===TRUE){
                echo "Lưu giữ liệu thành công";
            }
            else{
                echo "Lỗi{$sql}". $conn->error;  
            
        }
        else{
            echo " Bạn cần nhập đầy đủ thông tin";
        }
    }*/

    /*
$servername = "localhost";  // thường là localhost
$username = "root";         // user MySQL
$password = "";             // mật khẩu MySQL (nếu có)
$dbname = "dangkihocvienlab";      // tên database

// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$user = $_POST['username'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];

// Kiểm tra dữ liệu

if (empty($user) || empty($pass) || empty($repass)) {
    echo "Vui lòng điền đầy đủ thông tin.";
    exit;

}
if ($pass !== $repass) {
    echo "Mật khẩu không khớp.";
    exit;
}

// Mã hóa mật khẩu
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Chuẩn bị truy vấn
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $hashed_password);

// Thực thi truy vấn
if ($stmt->execute()) {
    echo "<script>
        setTimeout(function() {
            window.location.href = 'Dangnhap.html';
        }, 3000);
    </script>";
    echo '
    <div style="text-align: center; font-family: Arial, sans-serif; padding: 50px;background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
">
        <h2 style="color: green;">Đăng ký thành công!</h2>
        <p>Bạn sẽ được chuyển đến trang đăng nhập sau 3 giây...</p>
        <div class="loader" style="
            margin: 20px auto;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        "></div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "Dangnhap.html";
        }, 3000);
    </script>

    <style>
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
';
} else {
    if ($conn->errno === 1062) {
        echo "Tên đăng nhập đã tồn tại.";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$stmt->close();
$conn->close();
*/
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dangkihocvienlab";

// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra nếu dữ liệu được gửi bằng POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'], $_POST['password'], $_POST['repassword'])) {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];

    // Kiểm tra rỗng
    if (empty($user) || empty($pass) || empty($repass)) {
        echo "Vui lòng điền đầy đủ thông tin.";
        exit;
    }

    // Kiểm tra mật khẩu khớp
    if ($pass !== $repass) {
        echo "Mật khẩu không khớp.";
        exit;
    }

    // Mã hóa mật khẩu
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Kiểm tra username đã tồn tại chưa
    $check_sql = "SELECT uid FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $user);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "Tên đăng nhập đã tồn tại.";
        $check_stmt->close();
        $conn->close();
        exit;
    }
    $check_stmt->close();

    // Chuẩn bị truy vấn thêm người dùng mới
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
            setTimeout(function() {
                window.location.href = 'Dangnhap.html';
            }, 3000);
        </script>";
        echo '
        <div style="text-align: center; font-family: Arial, sans-serif; padding: 50px;background: linear-gradient(to right, #0f2027, #203a43, #2c5364);">
            <h2 style="color: green;">Đăng ký thành công!</h2>
            <p>Bạn sẽ được chuyển đến trang đăng nhập sau 3 giây...</p>
            <div class="loader" style="
                margin: 20px auto;
                border: 6px solid #f3f3f3;
                border-top: 6px solid #3498db;
                border-radius: 50%;
                width: 40px;height: 40px;
                animation: spin 1s linear infinite;
            "></div>
        </div>

        <style>
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>';
    } else {
        echo "Lỗi khi đăng ký: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Dữ liệu không hợp lệ.";
}

$conn->close();
?>
?>
