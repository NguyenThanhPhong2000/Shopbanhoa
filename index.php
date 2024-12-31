<?php  
session_start();  

// Kiểm tra xem người dùng đã đăng nhập chưa  
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {  
    header('Location: login.php'); // Nếu không đăng nhập, chuyển hướng đến trang đăng nhập  
    exit;  
}  
?>
<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    <title>Cửa hàng hoa</title>  
    <style>  
        .footer {  
    padding: 40px 0;  
}  

.footer h5 {  
    margin-bottom: 20px;  
    font-size: 1.25rem;  
    text-transform: uppercase;  
}  

.footer a {  
    text-decoration: none;  
    color: white;  
    transition: color 0.3s;  
}  

.footer a:hover {  
    color: #ffcc00; /* Màu sắc khi hover */  
}  

.list-unstyled {  
    padding-left: 0;  
    list-style: none;  
}  
        body {  
            background-color: #f8f9fa;  
        }  
        header {  
            background-color: #e9ecef;  
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  
        }  
        .navbar-brand {  
            font-weight: bold;  
            font-size: 1.5rem;  
        }  
        .card {  
            border: none;  
            border-radius: 10px;  
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  
            transition: transform 0.2s ease;  
        }  
        .card:hover {  
            transform: scale(1.05);  
        }  
        .footer {  
            background-color: #343a40;  
            color: white;  
        }  
    </style>  
</head>  
<body>  
<header>  
    <nav class="navbar navbar-expand-lg navbar-light">  
        <div class="container">  
            <a class="navbar-brand" href="#">SHOP BAN HOA</a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
                <span class="navbar-toggler-icon"></span>  
            </button>  
            <div class="collapse navbar-collapse" id="navbarNav">  
                <ul class="navbar-nav ml-auto">  
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>  
                    <li class="nav-item dropdown">  
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                            Chủ đề  
                        </a>  
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalChucMung">Hoa Chúc Mừng</a>  
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCuoiCamTay">Hoa Cưới Cầm Tay</a>  
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalTangLe">Hoa Tang Lễ</a>  
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalTinhYeu">Hoa Tình Yêu</a>    
                        </div>  
                    </li>  
                    <li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>  
                    <li class="nav-item"><a class="nav-link" href="login.php">Đăng Nhập</a></li>  
                    <li class="nav-item"><a class="nav-link" href="register.php">Đăng ký</a></li>  
                </ul>  
            </div>  
        </div>  
    </nav>  
</header>  

<!-- Modal cho các sản phẩm -->  
<!-- Hoa Chúc Mừng -->  
<div class="modal fade" id="modalChucMung" tabindex="-1" aria-labelledby="modalChucMungLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="modalChucMungLabel">Sản phẩm Hoa Chúc Mừng</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">  
                    <span>&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <div class="row">  
                    <div class="col-md-4">  
                        <img src="images/home/m1.jpg" class="img-fluid" alt="Sản phẩm 1">  
                        <div class="card-body">  
                        <h5 class="card-title">Hồng tươi</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="Hồng tươi">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>   
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/m2.jpg" class="img-fluid" alt="Sản phẩm 2">  
                        <div class="card-body">  
                        <h5 class="card-title">bó hoa chúc mừng</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="bó hoa chúc mừng">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>     
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/m3.jpg" class="img-fluid" alt="Sản phẩm 3">  
                        <div class="card-body">  
                        <h5 class="card-title">bó hoa hồng vàng</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="bó hoa hồng vàng">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>    
                    </div>  
                </div>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>  
            </div>  
        </div>  
    </div>  
</div>  

<!-- Hoa Cưới Cầm Tay -->  
<div class="modal fade" id="modalCuoiCamTay" tabindex="-1" aria-labelledby="modalCuoiCamTayLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="modalCuoiCamTayLabel">Sản phẩm Hoa Cưới Cầm Tay</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">  
                    <span>&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <div class="row">  
                    <div class="col-md-4">  
                        <img src="images/home/c1.webp" class="img-fluid" alt="Sản phẩm 1">  
                        <div class="card-body">  
                        <h5 class="card-title">Hoa cưới mao lương trắng</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="bó hoa hồng vàng">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>  
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/c2.webp" class="img-fluid" alt="Sản phẩm 2">  
                        <div class="card-body">  
                        <h5 class="card-title">Hoa Cưới New Beginning</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="bó hoa hồng vàng">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>  
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/c3.webp" class="img-fluid" alt="Sản phẩm 3">  
                        <div class="card-body">  
                        <h5 class="card-title">bó hoa hồng vàng</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="bó hoa hồng vàng">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm </button>  
                        </form>  
                    </div>  
                    </div>  
                </div>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>  
            </div>  
        </div>  
    </div>  
</div>  
<!-- Hoa Tang Lễ -->  
<div class="modal fade" id="modalTangLe" tabindex="-1" aria-labelledby="modalTangLeLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="modalTangLeLabel">Sản phẩm Hoa Tang Lễ</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">  
                    <span>&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <div class="row">  
                    <div class="col-md-4">  
                        <img src="images/home/t1.webp" class="img-fluid" alt="Hoa tang lễ 1">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa trắng thanh khiết</h5>  
                            <p class="card-text">Giá: 89$</p>  
                            <p class="card-text">Thể hiện sự kính trọng và tưởng nhớ.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa trắng thanh khiết">  
                                <input type="hidden" name="product_price" value="89">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>   
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/t2.webp" class="img-fluid" alt="Hoa tang lễ 2">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa cúc trắng</h5>  
                            <p class="card-text">Giá: 79$</p>  
                            <p class="card-text">Mang lại sự yên bình cho người đã khuất.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa cúc trắng">  
                                <input type="hidden" name="product_price" value="79">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>     
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/t3.webp" class="img-fluid" alt="Hoa tang lễ 3">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa ly trắng</h5>  
                            <p class="card-text">Giá: 99$</p>  
                            <p class="card-text">Biểu tượng của tình yêu và sự thanh thản.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa ly trắng">  
                                <input type="hidden" name="product_price" value="99">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>    
                    </div>  
                </div>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>  
            </div>  
        </div>  
    </div>  
</div>
<!-- Hoa Tình Yêu -->  
<div class="modal fade" id="modalTinhYeu" tabindex="-1" aria-labelledby="modalTinhYeuLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="modalTinhYeuLabel">Sản phẩm Hoa Tình Yêu</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">  
                    <span>&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <div class="row">  
                    <div class="col-md-4">  
                        <img src="images/home/y1.webp" class="img-fluid" alt="Bó hoa tình yêu 1">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa hồng đỏ</h5>  
                            <p class="card-text">Giá: 129$</p>  
                            <p class="card-text">Biểu tượng của tình yêu nồng nàn và mãnh liệt.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa hồng đỏ">  
                                <input type="hidden" name="product_price" value="129">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>   
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/y2.webp" class="img-fluid" alt="Bó hoa tình yêu 2">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa ly dịu dàng</h5>  
                            <p class="card-text">Giá: 99$</p>  
                            <p class="card-text">Đem lại sự dịu dàng, nữ tính cho người nhận.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa ly dịu dàng">  
                                <input type="hidden" name="product_price" value="99">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>     
                    </div>  
                    <div class="col-md-4">  
                        <img src="images/home/y3.webp" class="img-fluid" alt="Bó hoa tình yêu 3">  
                        <div class="card-body">  
                            <h5 class="card-title">Bó hoa lan hồ điệp</h5>  
                            <p class="card-text">Giá: 139$</p>  
                            <p class="card-text">Mang lại sự sang trọng và thanh lịch cho ngày đặc biệt.</p>  
                            <form action="shopping_cart.php" method="POST">  
                                <input type="hidden" name="product_name" value="Bó hoa lan hồ điệp">  
                                <input type="hidden" name="product_price" value="139">  
                                <button type="submit" class="btn btn-primary">Thêm </button>  
                            </form>  
                        </div>    
                    </div>  
                </div>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>  
            </div>  
        </div>  
    </div>  
</div>


<!-- Các modal khác tương tự cho các chủ đề khác... -->

    <main class="container mt-4">  
        <h2 class="text-center">Sản phẩm nổi bật</h2>  
        <div class="row">  
            <!-- Sản phẩm 1 -->  
            <div class="col-md-4">  
                <div class="card mb-4">  
                    <img src="images/shop/hoa1.webp" class="card-img-top" alt="Sản phẩm 1" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">  
                    <div class="card-body">  
                        <h5 class="card-title">Mẩu sản phẩm 1</h5>  
                        <p class="card-text">Giá: 99$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="Mẩu sản phẩm 1">  
                            <input type="hidden" name="product_price" value="99">  
                            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                        </form>  
                    </div>  
                </div>  
            </div>  

            <!-- Sản phẩm 2 -->  
            <div class="col-md-4">  
                <div class="card mb-4">  
                    <img src="images/shop/hoa2.webp" class="card-img-top" alt="Sản phẩm 2" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">  
                    <div class="card-body">  
                        <h5 class="card-title">Mẩu sản phẩm 2</h5>  
                        <p class="card-text">Giá: 129$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="Mẩu sản phẩm 2">  
                            <input type="hidden" name="product_price" value="129">  
                            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                        </form>  
                    </div>  
                </div>  
            </div>  

            <!-- Sản phẩm 3 -->  
            <div class="col-md-4">  
                <div class="card mb-4">  
                    <img src="images/shop/hoa3.webp" class="card-img-top" alt="Sản phẩm 3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">  
                    <div class="card-body">  
                        <h5 class="card-title">Mẩu sản phẩm 3</h5>  
                        <p class="card-text">Giá: 89$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="Mẩu sản phẩm 3">  
                            <input type="hidden" name="product_price" value="89">  
                            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                        </form>  
                    </div>  
                </div>  
            </div>  

            <!-- Sản phẩm 4 -->  
            <div class="col-md-4">  
                <div class="card mb-4">  
                    <img src="images/shop/hoa4.webp" class="card-img-top" alt="Sản phẩm 4" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">  
                    <div class="card-body">  
                        <h5 class="card-title">Mẩu sản phẩm 4</h5>  
                        <p class="card-text">Giá: 75$</p>  
                        <form action="shopping_cart.php" method="POST">  
                            <input type="hidden" name="product_name" value="Mẩu sản phẩm 4">  
                            <input type="hidden" name="product_price" value="75">  
                            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                        </form>  
                    </div>  
                </div>  
            </div>  

            <!-- Sản phẩm 5 -->  
        <div class="col-md-4">  
            <div class="card mb-4">  
                <img src="images/shop/hoa5.webp" class="card-img-top" alt="Sản phẩm 5">  
                <div class="card-body">  
                    <h5 class="card-title">Mẩu sản phẩm 5</h5>  
                    <p class="card-text">Giá: 110$</p>  
                    <form action="shopping_cart.php" method="POST">  
                        <input type="hidden" name="product_name" value="Mẩu sản phẩm 5">  
                        <input type="hidden" name="product_price" value="110">  
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                    </form>  
                </div>  
            </div>  
        </div>  

        <!-- Sản phẩm 6 -->  
        <div class="col-md-4">  
            <div class="card mb-4">  
                <img src="images/shop/hoa6.webp" class="card-img-top" alt="Sản phẩm 6">  
                <div class="card-body">  
                    <h5 class="card-title">Mẩu sản phẩm 6</h5>  
                    <p class="card-text">Giá: 95$</p>  
                    <form action="shopping_cart.php" method="POST">  
                        <input type="hidden" name="product_name" value="Mẩu sản phẩm 6">  
                        <input type="hidden" name="product_price" value="95">  
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div> <!-- Đóng hàng sản phẩm đầu tiên -->  

    <div class="row"> <!-- Mở hàng mới cho sản phẩm 7, 8, 9 -->  
        <!-- Sản phẩm 7 -->  
        <div class="col-md-4">  
            <div class="card mb-4">  
                <img src="images/shop/hoa7.webp" class="card-img-top" alt="Sản phẩm 7">  
                <div class="card-body">  
                    <h5 class="card-title">Mẩu sản phẩm 7</h5>  
                    <p class="card-text">Giá: 110$</p>  
                    <form action="shopping_cart.php" method="POST">  
                        <input type="hidden" name="product_name" value="Mẩu sản phẩm 7">  
                        <input type="hidden" name="product_price" value="110">  
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                    </form>  
                </div>  
            </div>  
        </div>  

        <!-- Sản phẩm 8 -->  
        <div class="col-md-4">  
            <div class="card mb-4">  
                <img src="images/shop/hoa8.webp" class="card-img-top" alt="Sản phẩm 8">  
                <div class="card-body">  
                    <h5 class="card-title">Mẩu sản phẩm 8</h5>  
                    <p class="card-text">Giá: 140$</p>  
                    <form action="shopping_cart.php" method="POST">  
                        <input type="hidden" name="product_name" value="Mẩu sản phẩm 8">  
                        <input type="hidden" name="product_price" value="140">  
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                    </form>  
                </div>  
            </div>  
        </div>  

        <!-- Sản phẩm 9 -->  
        <div class="col-md-4">  
            <div class="card mb-4">  
                <img src="images/shop/hoa9.webp" class="card-img-top" alt="Sản phẩm 9">  
                <div class="card-body">  
                    <h5 class="card-title">Mẩu sản phẩm 9</h5>  
                    <p class="card-text">Giá: 120$</p>  
                    <form action="shopping_cart.php" method="POST">  
                        <input type="hidden" name="product_name" value="Mẩu sản phẩm 9">  
                        <input type="hidden" name="product_price" value="120">  
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div> <!-- Đóng hàng sản phẩm -->  

</main> <!-- Đóng phần chính -->  

<footer class="footer text-center py-4" style="background-color: #343a40; color: white;">  
    <div class="container">  
        <div class="row">  
            <div class="col-md-4 mb-4">  
                <h5 class="font-weight-bold">CHĂM SÓC KHÁCH HÀNG</h5>  
                <ul class="list-unstyled">  
                    <li><a href="#" class="text-white">Giới Thiệu</a></li>  
                    <li><a href="#" class="text-white">Liên Hệ</a></li>  
                    <li><a href="#" class="text-white">Chính Sách Vận Chuyển</a></li>  
                    <li><a href="#" class="text-white">Câu Hỏi Thường Gặp</a></li>  
                    <li><a href="#" class="text-white">Hình Thức Thanh Toán</a></li>  
                    <li><a href="#" class="text-white">Bảo Mật Thông Tin</a></li>  
                    <li><a href="#" class="text-white">Chính Sách Hoàn Tiền</a></li>  
                    <li><a href="#" class="text-white">Xử Lý Khiếu Nại</a></li>  
                    <li><a href="#" class="text-white">Tại Sao Nên Chọn FlowerCorner.vn</a></li>  
                    <li><a href="#" class="text-white">Blog</a></li>  
                </ul>  
            </div>  
            <div class="col-md-4 mb-4">  
                <h5 class="font-weight-bold">THEO DÕI</h5>  
                <ul class="list-unstyled">  
                    <li><a href="#" class="text-white">Facebook</a></li>  
                    <li><a href="#" class="text-white">Twitter</a></li>  
                    <li><a href="#" class="text-white">Instagram</a></li>  
                    <li><a href="#" class="text-white">Linkedin</a></li>  
                    <li><a href="#" class="text-white">Youtube</a></li>  
                </ul>  
            </div>  
            <div class="col-md-4 mb-4">  
                <h5 class="font-weight-bold">SHOP HOA Nguyễn Thanh Phong</h5>  
                
            </div>  
        </div>  
    </div>  

    <div class="text-center mt-3">  
        <p>&copy; 2024 Cửa hàng hoa. Tất cả quyền lợi được bảo lưu.</p>  
    </div>  
</footer> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>