<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 2 (test2.php)</title>
</head>
<body>
    <?php
    // 1. Khai báo hai số nguyên và thực hiện các phép toán: Cộng, Trừ, Nhân, Chia, Chia lấy dư
    echo "<h3>1. Các phép toán số học</h3>";
    $a = 20;
    $b = 6;
    echo "Cho a = $a, b = $b <br>";
    echo "Cộng (a + b): " . ($a + $b) . "<br>";
    echo "Trừ (a - b): " . ($a - $b) . "<br>";
    echo "Nhân (a * b): " . ($a * $b) . "<br>";
    echo "Chia (a / b): " . ($a / $b) . "<br>";
    echo "Chia lấy dư (a % b): " . ($a % $b) . "<br><hr>";

    // 2. Khai báo một số nguyên (int) và một chuỗi số (string), so sánh bằng ==, ===, !=, !==
    echo "<h3>2. Toán tử so sánh</h3>";
    $soNguyen = 10;
    $chuoiSo = "10";

    echo "10 == '10': "; var_dump($soNguyen == $chuoiSo); echo "<br>";
    echo "10 === '10': "; var_dump($soNguyen === $chuoiSo); echo "<br>";
    echo "10 != '10': "; var_dump($soNguyen != $chuoiSo); echo "<br>";
    echo "10 !== '10': "; var_dump($soNguyen !== $chuoiSo); echo "<br>";
    /*
    * Comment:
    * - (==) và (!=): Chỉ so sánh GIÁ TRỊ (PHP tự động ép kiểu nên 10 bằng "10" -> == là true, != là false).
    * - (===) và (!==): So sánh nghiêm ngặt cả GIÁ TRỊ lẫn KIỂU DỮ LIỆU (int khác string -> === là false, !== là true).
    */
    echo "<hr>";

    // 3. Phép tăng trước (++$x) và tăng sau ($x++)
    echo "<h3>3. Phép tăng trước (++\$x) và tăng sau (\$x++)</h3>";
    $x = 5;
    echo "Giá trị x ban đầu: $x <br>";
    echo "Kết quả biểu thức ++\$x: " . (++$x) . "<br>";
    echo "Giá trị x sau khi chạy ++\$x: $x <br><br>";

    $y = 5;
    echo "Giá trị y ban đầu: $y <br>";
    echo "Kết quả biểu thức \$y++: " . ($y++) . "<br>";
    echo "Giá trị y sau khi chạy \$y++: $y <br>";
    /*
    * Comment:
    * - (++$x) Tăng trước: Cộng thêm 1 vào biến trước, sau đó mới trả về giá trị mới cho biểu thức.
    * - ($x++) Tăng sau: Trả về giá trị hiện tại của biến trước, sau đó mới cộng thêm 1 vào biến.
    */
    echo "<hr>";

    // 4. Toán tử nối chuỗi (.) và (.=)
    echo "<h3>4. Toán tử nối chuỗi (.) và (.=)</h3>";
    $chuoi1 = "Lập trình ";
    $chuoi2 = "PHP & MySQL";

    $ketQuaNoi = $chuoi1 . $chuoi2;
    echo "Dùng (.): $ketQuaNoi (biến \$chuoi1 gốc vẫn giữ nguyên: '$chuoi1') <br>";

    $chuoi1 .= $chuoi2;
    echo "Dùng (.=): biến \$chuoi1 bị nối thêm và gán đè thành '$chuoi1' <br>";
    /*
    * Comment:
    * - Toán tử (.): Nối hai chuỗi tạo thành chuỗi mới, không làm thay đổi giá trị của hai biến ban đầu.
    * - Toán tử (.=): Nối thêm chuỗi bên phải vào cuối chuỗi bên trái và lưu trực tiếp kết quả vào biến bên trái.
    */
    echo "<hr>";

    // 5. Đếm số lượng ký tự: strlen() và mb_strlen()
    echo "<h3>5. Đếm số lượng ký tự</h3>";
    $khongDau = "Lap trinh web 1";
    $coDau = "Lập trình web 1";

    echo "strlen('$khongDau'): " . strlen($khongDau) . "<br>";
    echo "mb_strlen('$coDau'): " . mb_strlen($coDau, "UTF-8") . "<br>";
    /*
    * Comment:
    * - strlen(): Đếm số BYTE của chuỗi. Tiếng Việt có dấu trong UTF-8 chiếm 2-3 byte/ký tự nên strlen() đếm sai số ký tự.
    * - mb_strlen(): Đếm chính xác số KÝ TỰ đa byte (multi-byte), cho kết quả đúng với chuỗi tiếng Việt có dấu.
    */
    echo "<hr>";

    // 6. Chuyển toàn bộ chuỗi thành chữ in hoa và chữ thường
    echo "<h3>6. Chuyển đổi chữ in hoa và chữ thường</h3>";
    $vanBan = "Lập Trình Web Với PHP";
    echo "strtoupper(): " . strtoupper($vanBan) . "<br>";
    echo "strtolower(): " . strtolower($vanBan) . "<br>";
    echo "mb_strtoupper(): " . mb_strtoupper($vanBan, "UTF-8") . "<br>";
    echo "mb_strtolower(): " . mb_strtolower($vanBan, "UTF-8") . "<br>";
    /*
    * Comment:
    * - strtoupper() / strtolower(): Chỉ chuyển hoa/thường được các chữ cái không dấu (ASCII), không đổi được chữ tiếng Việt có dấu.
    * - mb_strtoupper() / mb_strtolower(): Hỗ trợ UTF-8 nên chuyển đổi hoa/thường chính xác toàn bộ chữ tiếng Việt có dấu.
    */
    echo "<hr>";

    // 7. Ép kiểu chuỗi "123 abc" và "abc 123" về kiểu int và hiển thị bằng var_dump()
    echo "<h3>7. Ép kiểu chuỗi về int</h3>";
    $str1 = "123 abc";
    $str2 = "abc 123";

    $epInt1 = (int)$str1;
    $epInt2 = (int)$str2;

    echo "Ép kiểu '123 abc': "; var_dump($epInt1); echo "<br>";
    echo "Ép kiểu 'abc 123': "; var_dump($epInt2); echo "<br><hr>";

    // 8. Khai báo các kiểu dữ liệu: int, float, string, bool và kiểm tra bằng var_dump()
    echo "<h3>8. Kiểm tra các kiểu dữ liệu bằng var_dump()</h3>";
    $kieuInt = 2026;
    $kieuFloat = 9.5;
    $kieuString = "Nguyen Vu Truong Son";
    $kieuBool = true;

    var_dump($kieuInt); echo "<br>";
    var_dump($kieuFloat); echo "<br>";
    var_dump($kieuString); echo "<br>";
    var_dump($kieuBool); echo "<br>";
    ?>
</body>
</html>