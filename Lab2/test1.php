<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Test 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            padding-bottom: 50px;
        }

        /* 1. CSS Menu ngang */
        nav {
            background: rgb(4, 40, 94);
            margin-bottom: 30px;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav li {
            flex: 1;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
            transition: 0.3s;
        }
        nav ul li:hover {
            background: #084298;
        }

        /* Khung chung cho các section */
        section {
            max-width: 800px;
            margin: 0 auto 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.12);
        }
        section h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* 2. CSS Danh sách môn học (.s1) */
        .s1 {
            max-width: 500px;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: 0.3s;
        }
        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }
        .s1 .total {
            text-align: right;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        /* 3. CSS Bảng sinh viên (.s2) */
        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }
        .s2 th, .s2 td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .s2 th {
            background-color: #0d6efd;
            color: white;
        }
        .s2 tbody tr:nth-child(odd) {
            background-color: #f5f6f7;
        }
        .s2 tbody tr:hover {
            background-color: #d9e7fa;
        }

        /* 4. CSS Form đăng ký (.s3) */
        .s3 {
            max-width: 600px;
        }
        .s3 .form-group {
            margin-bottom: 15px;
        }
        .s3 label.title {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #333;
        }
        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .s3 .inline-group label {
            margin-right: 15px;
            cursor: pointer;
        }
        .s3 .btn-group {
            margin-top: 20px;
            text-align: center;
        }
        .s3 button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin: 0 5px;
        }
        .s3 button[type="submit"] {
            background-color: #0d6efd;
        }
        .s3 button[type="submit"]:hover {
            background-color: #084298;
        }
        .s3 button[type="reset"] {
            background-color: #6c757d;
        }
        .s3 button[type="reset"]:hover {
            background-color: #5c636a;
        }
    </style>
</head>
<body>

<?php
// Dữ liệu phần 1: Menu
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];

// Dữ liệu phần 2: Danh sách môn học
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

// Dữ liệu phần 3: Danh sách sinh viên (Mảng nhiều chiều)
$students = [
    ["id" => "SV001", "name" => "Nguyễn Văn An", "gender" => "Nam", "class" => "CNTT1"],
    ["id" => "SV002", "name" => "Trần Thị Bình", "gender" => "Nữ", "class" => "CNTT2"],
    ["id" => "SV003", "name" => "Lê Văn Cường", "gender" => "Nam", "class" => "CNTT1"],
    ["id" => "SV004", "name" => "Phạm Thị Dung", "gender" => "Nữ", "class" => "CNTT3"]
];

// Dữ liệu phần 4: Các mảng phục vụ Form đăng ký
$faculties = ["Công nghệ thông tin", "Quản trị kinh doanh", "Kế toán", "Ngôn ngữ Anh"];
$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>

<!-- 1. Menu ngang -->
<nav>
    <ul>
        <?php foreach ($menus as $menu) { ?>
            <li><a href="#"><?= $menu ?></a></li>
        <?php } ?>
    </ul>
</nav>

<!-- 2. Danh sách ngôn ngữ / môn học -->
<section class="s1">
    <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
    <ul>
        <?php foreach ($subjects as $subject) { ?>
            <li><?= $subject ?></li>
        <?php } ?>
    </ul>
    <p class="total">Tổng số môn học: <?= count($subjects) ?></p>
</section>

<!-- 3. Bảng danh sách sinh viên -->
<section class="s2">
    <h3>Danh sách sinh viên</h3>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["gender"] ?></td>
                    <td><?= $student["class"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<!-- 4. Form đăng ký thông tin sinh viên -->
<section class="s3">
    <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
    <form action="#" method="post">
        <div class="form-group">
            <label class="title">Họ và tên</label>
            <input type="text" name="fullname" placeholder="Nhập họ và tên sinh viên..." required>
        </div>

        <div class="form-group">
            <label class="title">Khoa</label>
            <select name="faculty">
                <?php foreach ($faculties as $faculty) { ?>
                    <option value="<?= $faculty ?>"><?= $faculty ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="title">Lớp</label>
            <select name="class">
                <?php foreach ($classes as $key => $class) { ?>
                    <option value="<?= $key ?>"><?= $class ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group inline-group">
            <label class="title">Giới tính</label>
            <?php foreach ($genders as $gender) { ?>
                <label>
                    <input type="radio" name="gender" value="<?= $gender ?>"> <?= $gender ?>
                </label>
            <?php } ?>
        </div>

        <div class="form-group inline-group">
            <label class="title">Sở thích</label>
            <?php foreach ($hobbies as $key => $hobby) { ?>
                <label>
                    <input type="checkbox" name="hobbies[]" value="<?= $key ?>"> <?= $hobby ?>
                </label>
            <?php } ?>
        </div>

        <div class="btn-group">
            <button type="submit">Đăng ký</button>
            <button type="reset">Làm mới</button>
        </div>
    </form>
</section>

</body>
</html>