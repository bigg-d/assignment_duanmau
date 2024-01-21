<?php include 'connect.php';
    session_start();
?>

<?php 
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../css/cart.css">
   <style>
    *{
        margin: 0;
        padding: 0;
    }

    .deleteBtn{
        width:40px;
        font-size: 24px;
        /* padding: 4px; */
        text-align:center;
        text-decoration: none;
        color: black;
        /* background-color:#87826e; */
    }
    .deleteBtn:hover{
        background-color: red;
    }
    #deleteBtn{
        text-decoration: none;

    }
    #deleteBtn:hover{
        background-color: red;
    }
   </style>
</head>
<body>
    <div id="content">
        <!-- HEADER CONTAINER  -->
        <header id="header_container">
            <nav id="header_container_list">
                <li class="header_container_item"><a href="./about.php">About</a></li>
                <li class="header_container_item"><a href="./shop.php">Shop</a></li>
                <li class="header_container_item" id="subNav_container"><a href="">Pages <i id="navIcon2" class="fa-solid fa-chevron-down"></i></a>
                    <ul id="subNav">
                        <li><a href="./about.php">ABOUT</a></li>
                        <li><a href="./shop.php">SINGLE PRODUCT</a></li>
                        <li><a href="./cart.php">CART</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">SINGLE POST</a></li>
                        <li><a href="./contact.php">CONTACT</a></li>
                    </ul>
                </li>
                <li class="header_container_item"  id="logo"><a href="./index.php"><img src="../img/main-logo.png" alt=""></a></li>
                <li class="header_container_item"><a href="">Search</a></li>
                <li class="header_container_item"><a href="./login.php">Account</a></li>
                <li class="header_container_item"><a href="./cart.php">Cart</a></li>
                <li id="navIcon"><i class="fa-solid fa-bars"></i></li>
            </nav>
            <div class="banner">
                <div id="text">
                    <h1>Cart</h1>
                </div>
            </div>
        </header>
       <!-- CART CONTAINER  -->
       <section>
        <table id="cart_container">
            <tr id="cart_container_title">
                <th style='width: 400px'>PRODUCT</th>
                <th>QUANTITY</th>
                <th style='width: 170px; text-align: left'>SUBTOTAL</th>
            </tr>
            
            <?php $sum = 0; foreach($cart as $product) {?>
            <tr class="cart_container_item">
                <td style='width: 400px'>
                    <img src=<?php echo $product['image']?> alt="">
                    <div class="cart_container_item_infor">
                        <h3><?php echo $product['name']?></h3>
                        <p style='display: inline'>
                            <p style='display:inline' id='price' ><?php echo $product['price']?></p>$
                        </p>
                    </div>
                </td>
                <td style='width: 240px'>
                    <input class='quantity' id='quantity' value=<?php echo $product['quantity']?> type="number" min="1" step="1" style=" padding: 6px;  text-align: center; font-size: 20px;">
                </td>
                <td style='width: 170px; display:flex; justify-content:space-between'>
                    <div>
                        $<p style='display:inline' id="totalPrice"><?php echo ($product['quantity'] * $product['price'] )?></p>
                    </div>
                    <a class='deleteBtn' style='display:block' href="delete_cart.php?id=<?php echo $product['id']?>">X</a>
                </td>
                <?php
                    
                    $totalPrice = ($product['quantity'] * $product['price']) ;
                    $sum += $totalPrice;
                ?>
            </tr>
            <?php }?>
        </table>
        <a id='deleteBtn' style='margin-bottom: 12px' href="destroy.php">Delete All</a>
        <div style='margin-top: 12px' id="cart_container_price">
            <h1>Cart Total</h1>
            <h2><?php echo $sum?></h2>
        </div>
        <a style='text-decoration: none;text-align: center; width:180px;display:block;border: none;margin: 40px 100px; padding: 8px; background-color: #87826e;color: #fff;' href='index.php'>Tiep tuc mua hang</a>
       </section>
        
        <!-- SUBCRIBE CONTAINER  -->
        <section id="subcribe_container">
            <div id="title">
                <h1>Subscribe To Our Newsletter</h1>
                <p>Get latest news, updates and deals directly mailed to your inbox</p>
            </div>
            <form action="">
                <input type="email" placeholder="Your email address here" required>
                <button>Subcribe</button>
            </form>
        </section>
        
       
        <!-- FOOTER CONTAINER  -->
        <footer id="footer_container">
            <ul id="footer_container_list">
                <li id="logo_slogan">
                    <img src="./img/main-logo.png" alt="">
                    <p>Nunc tristique facilisis consectetur vivamus ut porta porta aliquam vitae vehicula leo nullam urna lectus.</p>
                </li>
                <li class="footer_container_item">Quick Links
                    <h3>About</h3>
                    <h3>Shop</h3>
                    <h3>Account</h3>
                    <h3>Contact</h3>
                </li>
                <li class="footer_container_item">Contact Info
                    <h3>Tea Berry, Marinette, USA</h3>
                    <h3>+55 111 222 333 44</h3>
                    <h3>yourinfo@gmail.com</h3>
                </li>
                <li class="footer_container_item">Social Info
                    <h3 style="width: 260px;">You can follow us on our social platforms to get updates.</h3>
                </li>
            </ul>
            <hr>
            <p id="copyright">
                © Copyright 2023 Vaso. Design by TemplatesJungle</p>
        </footer>
    </div>
    <script>
       document.getElementById('quantity').addEventListener('change', function() {
        var quantity = parseInt(document.getElementById('quantity').value);
        // Tính toán giá tiền mới
        var price = parseInt(document.getElementById('price').innerText) // Giá tiền ban đầu
        var newPrice = price * quantity;
        console.log(price);
        // Cập nhật giá tiền mới vào phần tử HTML
        document.getElementById('totalPrice').innerText =  newPrice;
       })
    </script>
</body>
</html>