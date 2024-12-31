<?php  
session_start();  

// Kiểm tra xem giỏ hàng có tồn tại trong phiên không  
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {  
    header('Location: shopping_cart.php'); // Nếu giỏ hàng rỗng, quay lại trang giỏ hàng  
    exit();  
}  

// Tính tổng giá trị giỏ hàng  
$total = 0;  
foreach ($_SESSION['cart'] as $item) {  
    $total += $item['price'];  
}  
?>  

<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Thanh Toán</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <style>  
        .btn-confirm {  
            padding: 10px 20px;  
            background-color: #28a745;  
            color: white;  
            border: none;  
            border-radius: 5px;  
        }  
        .btn-confirm:hover {  
            background-color: #218838;  
        }  
    </style>  
</head>  
<body>  

<div class="container mt-5">  
    <h2>Thông Tin Thanh Toán</h2>  
    <form action="process_payment.php" method="POST">  
        <div class="form-group">  
            <label for="name">Họ và Tên</label>  
            <input type="text" class="form-control" id="name" name="name" required>  
        </div>  
        <div class="form-group">  
            <label for="email">Email</label>  
            <input type="email" class="form-control" id="email" name="email" required>  
        </div>  
        <div class="form-group">  
            <label for="address">Địa Chỉ Giao Hàng</label>  
            <input type="text" class="form-control" id="address" name="address" required>  
        </div>  
        <div class="form-group">  
            <label for="phone">Số Điện Thoại</label>  
            <input type="text" class="form-control" id="phone" name="phone" required>  
        </div>  
        
        <h4>Đơn Hàng</h4>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>Tên Sản Phẩm</th>  
                    <th>Giá</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($_SESSION['cart'] as $item): ?>  
                    <tr>  
                        <td><?php echo htmlspecialchars($item['name']); ?></td>  
                        <td><?php echo "$" . number_format($item['price'], 2); ?></td>  
                    </tr>  
                <?php endforeach; ?>  
                <tr>  
                    <td><strong>Tổng</strong></td>  
                    <td><strong><?php echo "$" . number_format($total, 2); ?></strong></td>  
                </tr>  
            </tbody>  
        </table>  
        
        <button type="submit" class="btn-confirm">Xác Nhận Thanh Toán</button>  
        <a href="shopping_cart.php" class="btn btn-secondary">Quay Lại</a>  
    </form>  
</div>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>