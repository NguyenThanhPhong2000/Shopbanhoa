<?php  
include 'db_connect.php'; // Kết nối đến cơ sở dữ liệu  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    // Nhận dữ liệu từ form  
    $name = $_POST['name'];  
    $address = $_POST['address'];  
    $phone = $_POST['phone'];  
    $payment_method = $_POST['payment_method'];  

    // Lưu thông tin đơn hàng vào cơ sở dữ liệu  
    $query = "INSERT INTO orders (name, address, phone, payment_method) VALUES (?, ?, ?, ?)";  
    
    $stmt = $conn->prepare($query);  
    $stmt->bind_param("ssss", $name, $address, $phone, $payment_method);  

    if ($stmt->execute()) {  
        // Thông báo thành công  
        echo "Cảm ơn bạn, $name! Đơn hàng sẽ được giao đến $address. Phương thức thanh toán: $payment_method.";  

        // Chuyển hướng về trang chủ sau 5 giây  
        header("refresh:5;url=index.php");  
        exit();  
    } else {  
        // Xử lý lỗi  
        echo "Có lỗi xảy ra: " . $stmt->error;  
    }  
    
    $stmt->close();  
    $conn->close();  
}  
?>