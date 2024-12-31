<?php  
$servername = "localhost";  
$username = "root"; // Mặc định của XAMPP  
$password = ""; // Mặc định của XAMPP không có mật khẩu  
$dbname = "ban_hoa"; // Tên cơ sở dữ liệu mà bạn đã tạo  

// Kết nối tới MySQL  
$conn = new mysqli($servername, $username, $password, $dbname);  

// Kiểm tra kết nối  
if ($conn->connect_error) {  
    die("Kết nối thất bại: " . $conn->connect_error);  
}  
?>