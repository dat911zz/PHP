<h1>Giỏ Hàng</h1>
<?php
session_start();
$cart = $_SESSION["cart"];

if(isset($_POST["add"])){
    $_SESSION["cart"]->addItem(new Product($item->MaSP, $item->TenSP, $item->GiaBan));
}
if ($cart->getTotal() == 0) {
    echo '<h4>Không tìm thấy sp</h4>';
} else {
?>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
            <th></th>
        </tr>
        <?php foreach ($cart->getItems() as $itemId => $item) : ?>
            <?php $product = $item['product']; ?>
            <tr>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->price; ?></td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
                        <input class="quantity-input" type="number" name="quantity" value="<?php echo $item['quantity']; ?>">
                        <input class="update-button" type="submit" value="Cập nhật">
                    </form>
                </td>
                <td><?php echo $product->price * $item['quantity']; ?></td>
                <td><a href="#">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="3">Tổng cộng</th>
            <th><?php echo $cart->getTotal(); ?></th>
            <th></th>
        </tr>
    </table>

<?php
}

?>