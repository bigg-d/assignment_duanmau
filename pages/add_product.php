<?php
    require_once 'connect.php';
    if(isset($_POST['submit']) && $_POST['submit']){
        $product_name = $_POST['product_name'];
        $product_image = $_FILES['product_image'];
        $product_price = $_POST['product_price'];
        

        $target_dir ="img/";
        $target_file = $target_dir. basename($product_image['name']);
        echo $target_file;
        var_dump($product_image);
        move_uploaded_file($product_image['tmp_name'], $target_file); 

        echo $target_file;

        $sql = "INSERT INTO product(product_name, product_image, product_price) VALUES('$product_name', '$target_file', '$product_price')";
        $stmt = $conn -> prepare($sql);
        $stmt-> execute();

        header("location: user.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST' enctype='multipart/form-data'>
        Nhập tên : <input type="text" name='product_name'> <br>
        Nhập ảnh : <input type="file" name='product_image'> <br>
        Nhập giá : <input type="number" name='product_price'> <br>
        <input type="submit" value='submit' name='submit'>
    </form>
</body>
</html>