<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $phone = $_POST['phone'];  
    $address = $_POST['address'];  

    // Kết nối đến cơ sở dữ liệu (thay đổi thông tin theo yêu cầu)  
    $servername = "localhost";  
    $username = "root"; // Tên người dùng của cơ sở dữ liệu  
    $password = ""; // Mật khẩu của cơ sở dữ liệu  
    $dbname = "ban_hoa"; // Tên cơ sở dữ liệu  

    // Tạo kết nối  
    $conn = new mysqli($servername, $username, $password, $dbname);  

    // Kiểm tra kết nối  
    if ($conn->connect_error) {  
        die("Kết nối thất bại: " . $conn->connect_error);  
    }  

    // Thực hiện câu lệnh SQL để chèn dữ liệu  
    $sql = "INSERT INTO customers (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";  

    if ($conn->query($sql) === TRUE) {  
        // Đăng ký thành công, chuyển hướng về trang index  
        header("Location: index.php");  
        exit();  
    } else {  
        echo "Lỗi: " . $sql . "<br>" . $conn->error;  
    }  

    $conn->close(); // Đóng kết nối  
}  
?>