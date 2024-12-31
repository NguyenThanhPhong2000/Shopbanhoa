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

<main class="container mt-4">  
    <h2 class="text-center mb-4">Bài Viết Mới Nhất</h2>  
    <div class="row">  
        <!-- Bài viết 1 -->  
        <div class="col-md-4 mb-4">  
            <div class="card post-card">  
                <img src="images/blog/hinh1.jpg" class="card-img-top" alt="Bài viết 1">  
                <div class="card-body">  
                    <h5 class="card-title">Lợi ích của hoa tươi trong trang trí</h5>  
                    <p class="card-text">Khám phá cách hoa tươi có thể làm bừng sáng không gian sống của bạn.</p>  
                    <a href="http://www.songanhwedding.com/hoa-lua-va-hoa-tuoi-nen-chon-chat-lieu-nao-trong-trang-tri-tiec-cuoi-n456.html" class="btn btn-primary" target="_blank">Xem thêm</a>
                </div>  
            </div>  
        </div>  

        <!-- Bài viết 2 -->  
        <div class="col-md-4 mb-4">  
            <div class="card post-card">  
                <img src="images/blog/hinh2.jpg" class="card-img-top" alt="Bài viết 2">  
                <div class="card-body">  
                    <h5 class="card-title">Cách chọn hoa cho ngày đặc biệt</h5>  
                    <p class="card-text">Những mẹo chọn hoa hoàn hảo cho mọi dịp lễ và kỷ niệm.</p>  
                    <a href="https://kenh14.vn/tu-van-cach-chon-hoa-tinh-te-cho-ngay-dac-biet-2019070514120871.chn" class="btn btn-primary" target="_blank" >Xem thêm</a>  
                </div>  
            </div>  
        </div>  

        <!-- Bài viết 3 -->  
        <div class="col-md-4 mb-4">  
            <div class="card post-card">  
                <img src="images/blog/th.jpg" class="card-img-top" alt="Bài viết 3">  
                <div class="card-body">  
                    <h5 class="card-title">Ý nghĩa của các loài hoa</h5>  
                    <p class="card-text">Tìm hiểu ý nghĩa đặc biệt của các loại hoa mà bạn yêu thích.</p>  
                    <a href="https://hoanguyethy.com/y-nghia-hoa-2/" class="btn btn-primary" target="_blank">Xem thêm</a>  
                </div>  
            </div>  
        </div>  
    </div>  

    <div class="container mt-4">  
    <h2 class="text-center mb-4">Các bài viết</h2>  
    <ul class="list-group">  
        <li class="list-group-item"><a href="https://petalhaven.com/8-cach-cham-soc-hoa-huong-duong-de-no-ro-tuoi-tan/"target="_blank">Cách chăm sóc hoa dúng cách:</a>đóng vai trò quan trọng trong việc giúp hoa nở rộ và giữ được sự tươi tắn. Với màu sắc rực rỡ và khả năng thích ứng cao, hoa hướng dương là loài cây dễ trồng, nhưng cũng cần chú ý đến một số yếu tố quan trọng như ánh sáng, nước và dinh dưỡng. Hãy cùng tìm hiểu các bước cụ thể để chăm sóc hoa hướng dương nở đẹp nhất!</li>  

        <li class="list-group-item"><a href="https://suchinshop.com/y-tuong-trang-tri-hoa-trong-nha/"target="_blank">Cách trang trí hoa trong nhà:</a>Hoa luôn là vật dụng trang trí không thể thiếu góp phần khiến cho không gian ngôi nhà trở nên có sức sống. Cho dù bạn đang tìm kiếm những phong cách mới mẻ để trang trí thì vẫn cần có sự kết hợp của những bông hoa. Suchin khuyên bạn nên sử dụng hoa giấy handmade để trang trí. Ví chúng vừa sử dụng được lâu vừa không phải mất thời gian chăm chút lại vừa có đa dạng kiểu dáng, kích thước, màu sắc.</li>  
        <li class="list-group-item"><a href="https://potico.vn/blog/loai-hoa-nao-hop-voi-cung-hoang-dao-cua-ban"target="_blank">Loài hoa nào phù hợp với cung hoàng đạo của bạn?</a>Vẻ đẹp và ý nghĩa của hoa đã thu hút chúng ta trong suốt hàng thế kỷ. Mỗi loài hoa đều có sự quyến rũ riêng và mang thông điệp đặc biệt. Bạn có biết rằng cung hoàng đạo có thể cung cấp thông tin về tính cách và sở thích của bạn? Bằng cách khám phá mối liên hệ giữa chiêm tinh và hoa, chúng ta có thể tìm ra những bông hoa hoàn hảo phù hợp với cá nhân riêng của bạn. Trong bài viết này, chúng ta sẽ khám phá thế giới của chiêm tinh và gợi ý những bông hoa đẹp nhất cho mỗi cung hoàng đạo, cho phép bạn đắm mình vào thế giới quyến rũ của văn hóa loài hoa.</li>  
    </ul>  
</div>
</main>  

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