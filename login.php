<?php  
session_start();  
require 'db_connect.php'; // Kết nối đến cơ sở dữ liệu  

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {  
    $username = $_POST['username'];  
    $password = $_POST['password'];  

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");  
    $stmt->bind_param("s", $username);  
    $stmt->execute();  
    $result = $stmt->get_result();  

    if ($result->num_rows > 0) {  
        $row = $result->fetch_assoc();  
        if (password_verify($password, $row['password'])) {  
            $_SESSION['loggedin'] = true;  
            $_SESSION['user_id'] = $row['id'];  
            header("Location: cart.php"); // Chuyển hướng đến giỏ hàng  
            exit;  
        } else {  
            echo "Sai mật khẩu.";  
        }  
    } else {  
        echo "Người dùng không tồn tại.";  
    }  
}  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Đăng Nhập</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  

<div class="container mt-5">  
    <h2>Đăng Nhập</h2>  
    <form method="post" action="">  
        <div class="form-group">  
            <label for="username">Tên Người Dùng:</label>  
            <input type="text" class="form-control" name="username" required>  
        </div>  
        <div class="form-group">  
            <label for="password">Mật Khẩu:</label>  
            <input type="password" class="form-control" name="password" required>  
        </div>  
        <button type="submit" name="login" class="btn btn-primary">Đăng Nhập</button>  
    </form>  
</div>  

</body>  
</html>