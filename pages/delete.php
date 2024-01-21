
<?php 
    session_start();
    
    $id = $_GET['id'];

    require_once 'connect.php';
    $sql = "DELETE FROM product WHERE product_id = $id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();

    header('location:user.php');

?>