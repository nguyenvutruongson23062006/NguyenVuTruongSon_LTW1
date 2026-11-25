<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Giới thiệu sản phẩm</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        /* Banner */
        .hero-banner {
            background: linear-gradient(135deg, #0d6efd 0%, #052c65 100%);
            color: white;
            padding: 60px 0;
            border-radius: 0 0 20px 20px;
        }
        /* Card sản phẩm */
        .product-card {
            transition: transform 0.25s, box-shadow 0.25s;
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        /* Thương hiệu */
        .brand-box {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
            transition: all 0.3s;
            cursor: pointer;
        }
        .brand-box:hover {
            background: #0d6efd;
            color: #fff;
            border-color: #0d6efd;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <?php
    // 1. Mảng Menu
    $menus = ["Trang chủ", "Sản phẩm", "Thương hiệu", "Khuyến mãi", "Báo giá", "Liên hệ"];

    // 3. Mảng nhiều chiều chứa 8 sản phẩm
    $defaultImg = "https://placehold.co/400x300/e7f1ff/0d6efd?text=Tech+Product";
    $products = [
        ["name" => "Laptop Gaming ASUS ROG Strix G16", "price" => 32990000, "image" => $defaultImg],
        ["name" => "MacBook Air M3 13 inch 2024", "price" => 27490000, "image" => $defaultImg],
        ["name" => "Điện thoại Samsung Galaxy S24 Ultra", "price" => 29990000, "image" => $defaultImg],
        ["name" => "iPhone 16 Pro Max 256GB", "price" => 34990000, "image" => $defaultImg],
        ["name" => "Máy tính bảng iPad Pro M4 11 inch", "price" => 28500000, "image" => $defaultImg],
        ["name" => "Tai nghe Sony WH-1000XM5", "price" => 7990000, "image" => $defaultImg],
        ["name" => "Bàn phím cơ Keychron Q1 Pro", "price" => 4250000, "image" => $defaultImg],
        ["name" => "Màn hình Dell UltraSharp U2723QE 4K", "price" => 13800000, "image" => $defaultImg]
    ];

    // 4. Mảng 6 thương hiệu nổi bật
    $brands = ["Apple", "Samsung", "ASUS", "Dell", "Sony", "Logitech"];

    // 5. Dữ liệu Form đăng ký nhận báo giá
    $categories = ["Laptop & MacBook", "Điện thoại thông minh", "Máy tính bảng", "Phụ kiện & Màn hình"];
    $quoteMethods = [
        "email" => "Gửi qua Email",
        "zalo" => "Tư vấn qua Zalo",
        "phone" => "Gọi điện thoại trực tiếp"
    ];
    ?>

    <!-- 1. Thanh Menu (Bootstrap 5 Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="#">⚡ TECHSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#"><?= $menu ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Banner giới thiệu cửa hàng -->
    <section class="hero-banner mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 class="display-5 fw-bold mb-3">Hệ Thống Thiết Bị Công Nghệ Chính Hãng</h1>
                    <p class="lead mb-4">Cung cấp giải pháp Laptop, Smartphone và Phụ kiện công nghệ hiệu năng cao dành cho sinh viên và doanh nghiệp với mức giá ưu đãi nhất.</p>
                    <a href="#products" class="btn btn-light btn-lg fw-bold text-primary">Khám phá ngay</a>
                </div>
                <div class="col-md-5 text-center mt-4 mt-md-0">
                    <img src="https://placehold.co/500x300/ffffff/0d6efd?text=TECHSTORE+BANNER" class="img-fluid rounded shadow" alt="Banner cửa hàng">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Danh sách sản phẩm -->
    <section id="products" class="container mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary m-0">Sản Phẩm Nổi Bật</h2>
            <span class="badge bg-primary fs-6">Tổng cộng: <?= count($products) ?> sản phẩm</span>
        </div>

        <div class="row g-4">
            <?php foreach ($products as $product) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 product-card shadow-sm">
                        <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fs-6 fw-bold"><?= $product['name'] ?></h5>
                            <p class="card-text text-danger fw-bold fs-5 mt-auto mb-3">
                                <?= number_format($product['price'], 0, ',', '.') ?> đ
                            </p>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm flex-fill">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary btn-sm flex-fill">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- 4. Thương hiệu nổi bật -->
    <section class="container mb-5">
        <h2 class="fw-bold text-center text-primary mb-4">Thương Hiệu Nổi Bật</h2>
        <div class="row g-3">
            <?php foreach ($brands as $brand) { ?>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-box shadow-sm">
                        <?= $brand ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- 5. Form đăng ký nhận báo giá -->
    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0 rounded-4 p-4">
                    <h3 class="fw-bold text-center text-primary mb-4">Đăng Ký Nhận Báo Giá</h3>
                    <form action="#" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Họ và tên</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Số điện thoại</label>
                                <input type="tel" class="form-control" name="phone" placeholder="090xxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Danh mục sản phẩm quan tâm</label>
                                <select class="form-select" name="category">
                                    <?php foreach ($categories as $category) { ?>
                                        <option value="<?= $category ?>"><?= $category ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold d-block">Hình thức nhận báo giá</label>
                                <?php foreach ($quoteMethods as $key => $method) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quote_method" id="method_<?= $key ?>" value="<?= $key ?>">
                                        <label class="form-check-label" for="method_<?= $key ?>"><?= $method ?></label>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Nội dung yêu cầu</label>
                                <textarea class="form-control" name="note" rows="3" placeholder="Nhập cấu hình hoặc số lượng sản phẩm cần báo giá..."></textarea>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary px-4 fw-semibold">Gửi yêu cầu</button>
                                <button type="reset" class="btn btn-secondary px-4 fw-semibold ms-2">Làm mới</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold text-primary">CỬA HÀNG CÔNG NGHỆ TECHSTORE</h5>
                    <p class="small text-secondary mb-0">Chuyên cung cấp thiết bị điện tử, máy tính chính hãng và giải pháp công nghệ toàn diện.</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-1 small">Địa chỉ: 20 Tăng Nhơn Phú, P. Phước Long B, TP. Thủ Đức, TP.HCM</p>
                    <p class="mb-0 small">Hotline: 1900 1234 | Email: contact@techstore.vn</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>