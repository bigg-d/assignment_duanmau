<?php include 'connect.php';
    session_start();
?>

<?php 
$id = $_GET['id'];
// session_destroy();
// die();
$sql = "SELECT * FROM product where product_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($product);
// $product = mysqli_fetch_assoc($query);//

echo "<pre>";
var_dump($product);

$item = [
    'id' => $product['product_id'],
    'name' => $product['product_name'],
    'image'=>$product['product_image'],
    'price' => $product['product_sale_price'],
    'quantity' => 1
];
   

if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
}
else{
    $_SESSION['cart'][$id] = $item;
}
// session_destroy();
// die();
header('Location: cart.php');
?> 