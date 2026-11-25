<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 1</title>
</head>
<body>

    <?php
    echo "<h3>1. Sử dụng echo để in ra các thông tin: Họ tên, Ngày sinh, Mã số sinh viên </h3>";
    echo "Họ và tên: Nguyen Vu Truong Son <br>";
    echo "Ngày sinh: 23/06/2006 <br>";
    echo "Mã số sinh viên: 2124110xxx <br><hr>";
    echo "<h3>2. Khai báo các biến lưu: họ tên, mã số sinh viên, số điện thoại, ngày sinh; sau đó sử dụng echo để in giá trị của 4 biến trên</h3>";
    $hoTen = "Nguyen Vu Truong Son";
    $mssv = "2124110xxx";
    $sdt = "090xxxxxxx";
    $ngaySinh = "23/06/2006";

    echo "Họ tên: " . $hoTen . "<br>";
    echo "Mã số sinh viên: " . $mssv . "<br>";
    echo "Số điện thoại: " . $sdt . "<br>";
    echo "Ngày sinh: " . $ngaySinh . "<br><hr>";

    echo "<h3>3. Khai báo các hằng số lưu thông tin kết nối CSDL: HOST, DATABASE, USERNAME PASSWORD . Hiển thị giá trị các hằng số vừa khai báo</h3>";
    define("HOST", "localhost");
    define("DATABASE", "db_ltw1");
    define("USERNAME", "root");
    define("PASSWORD", "");

    echo "HOST: " . HOST . "<br>";
    echo "DATABASE: " . DATABASE . "<br>";
    echo "USERNAME: " . USERNAME . "<br>";
    echo "PASSWORD: '" . PASSWORD . "'<br><hr>";

    echo "<h3>4. Viết ví dụ sự khác nhau giữa chuỗi sử dụng dấu nháy kép và dấu nháy đơn </h3>";
    $monHoc = "Lập trình Web 1";

    echo "Dùng nháy kép: Tôi đang học môn $monHoc <br>";

    echo 'Dùng nháy đơn: Tôi đang học môn $monHoc <br>';

    // Đây là comment một dòng (single-line)
    # PHP cũng hỗ trợ comment một dòng bằng dấu thăng như thế này

    /*
    * Đây là comment nhiều dòng (multi-line)
    * Dùng để mô tả tổng quan chức năng của đoạn code bên dưới
    * Mọi nội dung trong cặp dấu này đều không chạy ra trình duyệt
    */
    ?>
</body>
</html>