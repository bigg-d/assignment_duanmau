<?php
    session_start();
    require_once 'connect.php';
    $sql = 'SELECT * FROM product';
    $stmt = $conn -> prepare($sql);
    $stmt->execute();
    $list = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Xin chào <?php echo $_SESSION['name'];?><a href="logout.php">Đăng xuất!</a> <br>

    <a href="add_product.php">Them san pham</a>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Function</th>
        </tr>
        <?php foreach($list as $row) {?>
            <tr> 
                <td><?php echo  $row['product_name']?></td>
                <td><img style='width: 100px' src='<?php echo  $row['product_image']?>' alt=""></td>
                <td><?php echo  $row['product_price']?>$</td>
                <td>
                    <a href="delete.php?id=<?php echo  $row['product_id']?>">xoa</a>
                    <a href="update.php?id=<?php echo  $row['product_id']?>">sua</a>
                </td>
            </tr>
        <?php }?>    
    </table>

</body>
</html>