<?php
    require_once 'connect.php';
    $id = $_GET['id'];
    
    
    $sql = "select * from product where product_id = $id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $row = $stmt -> fetch();

    if(isset($_POST['update']) && $_POST['update']){
        $newName = $_POST['name'];
        $newPrice = $_POST['price'];
        $oldImage = $_POST['upload'];
        //duong dan anh cu
        $target_file = $oldImage;

        $newImage = $_FILES['upload'];
        if($newImage['size'] > 0){
            $target_dir = 'img/';
            $target_file = $target_dir. $newImage['name'];
            echo $target_file;
            move_uploaded_file($newImage['tmp_name'], $target_file);
        }
        $sql = "UPDATE product SET product_name = '$newName', product_price='$newPrice', product_image ='$target_file' WHERE product_id = $id";
        
        // $sql = "UPDATE product SET name = '$newName', price = '$newPrice', image = '$target_file'
        //     WHERE id = '$id'
        // ";

        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        header('Location: user.php');

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
    <h3>Update form</h3>
    <form action="" method='post' enctype='multipart/form-data'>
        <input type="text" name='id' value= '<?php echo $row['product_id']?>' hidden>
        <input type="text" name='name' value= '<?php echo $row['product_name']?>' > <br>
        <input type="number" name='price' value= '<?php echo $row['product_price']?>' > <br>
        <img style='width: 100px' src="<?php echo $row['product_image']?>" alt="">
        
        <input type="hidden" name='upload' value= '<?php echo $row['product_image']?>' > <br>
        <input type="file" name='upload' > <br>
        <input type="submit" value='update' name='update'>
    </form>
</body>
</html>