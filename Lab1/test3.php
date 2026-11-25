<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 3 (test3.php)</title>
</head>
<body>

<?php
// 1. Sử dụng trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi
echo "<h3>1. Loại bỏ khoảng trắng ở đầu và cuối chuỗi bằng trim()</h3>";
$chuoi1 = "    Xin chào sinh viên lớp Lập trình Web 1    ";
// Dùng thẻ <pre> để trình duyệt giữ nguyên và hiển thị rõ các dấu cách thừa
echo "<pre>Chuỗi ban đầu : [" . $chuoi1 . "]</pre>";
echo "<pre>Sau khi trim(): [" . trim($chuoi1) . "]</pre><hr>";

// 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
echo "<h3>2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)</h3>";
$chuoi2 = "    Thực hành PHP & MySQL cơ bản    ";
echo "<pre>Chuỗi ban đầu  : [" . $chuoi2 . "]</pre>";
echo "<pre>Sau khi ltrim(): [" . ltrim($chuoi2) . "]</pre>";
echo "<pre>Sau khi rtrim(): [" . rtrim($chuoi2) . "]</pre><hr>";

// 3. Cắt chuỗi bằng substr() (khai báo chuỗi có > 30 ký tự)
echo "<h3>3. Cắt chuỗi với hàm substr()</h3>";
$chuoiDai = "Hoc lap trinh web PHP va MySQL co ban tai truong";
echo "Chuỗi gốc (" . strlen($chuoiDai) . " ký tự): '$chuoiDai' <br>";

// Lấy 10 ký tự đầu tiên (bắt đầu từ vị trí 0, lấy độ dài 10)
$muoiKyTuDau = substr($chuoiDai, 0, 10);
echo "10 ký tự đầu tiên: '$muoiKyTuDau' <br>";

// Lấy từ ký tự thứ 5 đến hết chuỗi (vị trí index 4 tính từ 0)
$tuKyTuThu5 = substr($chuoiDai, 4);
echo "Từ ký tự thứ 5 đến hết chuỗi: '$tuKyTuThu5' <br><hr>";

// 4. Thay thế chuỗi bằng str_replace() (khai báo chuỗi > 30 ký tự)
echo "<h3>4. Thay thế chuỗi với hàm str_replace()</h3>";
$chuoiGoc = "Mon hoc Lap trinh web 1 su dung ngon ngu Python de xay dung website";
$chuoiThayThe = str_replace("Python", "PHP", $chuoiGoc);

echo "Chuỗi trước khi thay thế: '$chuoiGoc' <br>";
echo "Chuỗi sau khi thay thế: '$chuoiThayThe' <br>";
?>

</body>
</html>