//Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
Hiển thị thông tin của tất cả sản phẩm trong mảng.
Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity).
<?php
// Tạo mảng kết hợp chứa thông tin sản phẩm
$products = array(
    array(
        "name" => "Sản phẩm A",
        "price" => 10,
        "quantity" => 5
    ),
    array(
        "name" => "Sản phẩm B",
        "price" => 20,
        "quantity" => 3
    ),
    array(
        "name" => "Sản phẩm C",
        "price" => 15,
        "quantity" => 8
    )
);

// Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "Thông tin của các sản phẩm: <br>";
foreach ($products as $product) {
    echo "Tên: " . $product['name'] . ", Giá: $" . $product['price'] . ", Số lượng: " . $product['quantity'] . "<br>";
}

// Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

$totalValue = calculateTotalValue($products);
echo "<br>Tổng giá trị của tất cả sản phẩm là: $" . $totalValue;
?>

//Câu 3: Biến trong PHP bắt đầu bằng ký tự gì
d. $
Câu 4: Hàm nào dùng để in ra màn hình trong PHP?
a. echo()
Câu 5: Trong PHP, sự khác biệt giữa == và === là gì?
a. == so sánh giá trị, === so sánh giá trị và kiểu dữ liệu
