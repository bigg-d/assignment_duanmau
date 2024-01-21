<div class="banner">
    <div id="text">
        <h1>Cart</h1>
    </div>
</div>

<?php
if (isset($_SESSION['mycart']) && $_SESSION['mycart']) {
    $sum = 0;
    $i = 0;
    ?>
    <section>
        <table id="cart_container">
            <tr id="cart_container_title">
                <th style="width: 400px">PRODUCT</th>
                <th>QUANTITY</th>
                <th style="width: 170px; text-align: left">SUBTOTAL</th>
            </tr>

            <?php foreach ($_SESSION['mycart'] as $product) { ?>
                <tr class="cart_container_item">
                    <td style="width: 400px">
                        <img src="view/img/<?php echo $product[2] ?>" alt="">
                        <div class="cart_container_item_infor">
                            <h3><?php echo $product[1] ?></h3>
                            <p style="display: inline">
                                <p style="display:inline" id="price"><?php echo $product[3] ?></p>$
                            </p>
                        </div>
                    </td>
                    <td style="width: 240px">
                        <input class="quantity" id="quantity" value="<?php echo $product[4] ?>" type="number" min="1" step="1" style="padding: 6px; text-align: center; font-size: 20px;">
                    </td>
                    <td style="width: 170px; display:flex; justify-content:space-between">
                        <div>
                            $<p style="display:inline" id="totalPrice"><?php echo ($product[4] * intval($product[3])) ?></p>
                        </div>
                        <a class="deleteBtn" style="display:block" href="index.php?act=deletecart&idcart=<?php echo $i ?>">X</a>
                    </td>

                    <?php
                    $totalPrice = ($product[4] * intval($product[3]));
                    $sum += $totalPrice;
                    ?>
                </tr>

                <?php $i += 1;
            } ?>
        </table>
        <a id="deleteBtn" style="margin-bottom: 12px" href="destroy.php">Delete All</a>
        <div style="margin-top: 12px" id="cart_container_price">
            <h1>Cart Total</h1>
            <h2><?php echo $sum ?></h2>
        </div>
        <a style="text-decoration: none; text-align: center; width:180px; display:block; border: none; margin: 40px 100px; padding: 8px; background-color: #87826e; color: #fff;" href="index.php">Tiep tuc mua hang</a>
        <a style="text-decoration: none; text-align: center; width:180px; display:block; border: none; margin: 40px 100px; padding: 8px; background-color: #87826e; color: #fff;" href="index.php?act=bill">Check now</a>
    </section>
    <?php
} 
else {
    echo "<div style='padding: 100px; min-height: 500px'><p style='font-family: serif;
    font-size: 48px;
    font-weight: 300;'>Chưa có sản phẩm trong giỏ hàng</p>
    <a id='deleteBtn' style='display: block; width: 160px; text-align:center; text-decoration:none; margin-top: 22px; border: none;
    margin: 40px 100px;
    padding: 8px;
    background-color: #87826e;
    color: #fff;' href='index.php?act=shop'>Continue shopping</a>
    </div>";
}
?>
