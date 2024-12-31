<?php  
session_start();  
include 'db_connect.php'; // Kết nối đến cơ sở dữ liệu  

$message = ""; // Biến lưu thông báo  

// Kiểm tra nếu là yêu cầu POST  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Lấy dữ liệu từ form  
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $phone = $_POST['phone'];  
    $address = $_POST['address'];  
    $password = $_POST['password'];  

    // Mã hóa mật khẩu  
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);  

    // Sử dụng prepared statement để tránh SQL injection  
    $sql = "INSERT INTO customers (name, email, phone, address, password) VALUES (?, ?, ?, ?, ?)";  
    $stmt = $conn->prepare($sql);  
    $stmt->bind_param("sssss", $name, $email, $phone, $address, $hashed_password);  

    // Thực thi câu lệnh  
    if ($stmt->execute()) {  
        // Chuyển hướng đến trang đăng nhập  
        header('Location: login.php');  
        exit; // Dừng thực thi sau khi chuyển hướng  
    } else {  
        $message = "Có lỗi xảy ra: " . $stmt->error; // Ghi lại lỗi nếu xảy ra  
    }  
    $stmt->close(); // Đóng statement  
}  

$conn->close(); // Đóng kết nối  
?>  

<!-- HTML cho trang đăng ký -->  
<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Đăng Ký</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  
    <div class="container">  
        <h2>Đăng Ký</h2>  
        <!-- Hiển thị thông báo nếu có -->  
        <?php if ($message): ?>  
            <div class="alert alert-info"><?php echo $message; ?></div>  
        <?php endif; ?>  
        <form method="POST">  
            <div class="form-group">  
                <label for="name">Tên:</label>  
                <input type="text" class="form-control" name="name" required>  
            </div>  
            <div class="form-group">  
                <label for="email">Email:</label>  
                <input type="email" class="form-control" name="email" required>  
            </div>  
            <div class="form-group">  
                <label for="phone">Số Điện Thoại:</label>  
                <input type="text" class="form-control" name="phone" required>  
            </div>  
            <div class="form-group">  
                <label for="address">Địa Chỉ:</label>  
                <input type="text" class="form-control" name="address" required>  
            </div>  
            <div class="form-group">  
                <label for="password">Mật Khẩu:</label>  
                <input type="password" class="form-control" name="password" required>  
            </div>  
            <button type="submit" class="btn btn-primary">Đăng Ký</button>  
        </form>  
        <div class="mt-3">  
            <a href="login.php" class="btn btn-link">Đã có tài khoản? Đăng Nhập</a>  
        </div>  
    </div>  
</body>  
</html>