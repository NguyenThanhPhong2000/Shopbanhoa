<?php  
session_start(); // Bắt đầu phiên làm việc  

// Kiểm tra xem giỏ hàng có tồn tại trong phiên không  
if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = [];  
}  

// Thêm sản phẩm vào giỏ hàng khi biểu mẫu được gửi  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $product_name = $_POST['product_name'];  
    $product_price = $_POST['product_price'];  

    // Thêm sản phẩm vào giỏ hàng (session)  
    $_SESSION['cart'][] = [  
        'name' => $product_name,  
        'price' => (float)$product_price,  
    ];  
}  

// Tính tổng giá trị giỏ hàng  
$total = 0;  
foreach ($_SESSION['cart'] as $item) {  
    $total += $item['price'];  
}  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Giỏ Hàng</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  

<div class="container mt-5">  
    <h2>Giỏ Hàng Của Bạn</h2>  
    <?php if (empty($_SESSION['cart'])): ?>  
        <p>Giỏ hàng rỗng.</p>  
    <?php else: ?>  
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
                        <td><?php echo "$".number_format($item['price'], 2); ?></td>  
                    </tr>  
                <?php endforeach; ?>  
                <tr>  
                    <td><strong>Tổng</strong></td>  
                    <td><strong><?php echo "$".number_format($total, 2); ?></strong></td>  
                </tr>  
            </tbody>  
        </table>  
        <!-- Nút Thanh Toán -->  
        <a href="checkout.php" class="btn btn-success">Thanh Toán</a>  
    <?php endif; ?>  
    <a href="index.php" class="btn btn-primary">Tiếp Tục Mua Sắm</a>  
</div>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>