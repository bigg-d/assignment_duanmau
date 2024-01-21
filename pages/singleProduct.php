<?php
    require_once 'connect.php';
    $id = $_GET['id'];
    $sql = " SELECT * FROM product WHERE product_id = '$id' ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
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
   <link rel="stylesheet" href="../css/singleProduct.css">
    <style>
        #singleProduct_container_info a{
            width: 100px;
            padding: 16px;
            text-align:center;
            text-decoration: none;
            background-color: black;
            color: white;
            border: none;
        }
        #singleProduct_container_info  a:hover{
            background-color: #87826E;
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
                    <h1>Single Product</h1>
                </div>
            </div>
        </header>
       <!-- SINGLE Product CONTAINER  -->
       <div id="singleProduct_container">
            <img src=<?php echo $result['product_image']?> alt="" >
            <div id="singleProduct_container_info">
                <h3><?php echo $result['product_name']?></h3>
                <p style="font-size: 32px;"><?php echo $result['product_sale_price'] ?>$<span style="font-size: 24px; text-decoration: line-through; color: grey; margin-bottom: 24px; margin-left: 10px"><?php echo $result['product_price']?>$</span></p>
                <p style="font-size: 28px; font-weight: 200; color: grey;" id="singleProduct_info_des"><?php echo $result['product_description']?></p>
                <hr>
                <div id="singleProduct_container_color">
                    <h4>COLOR</h4>
                    <ul>
                        <li>GREEN</li>
                        <li>ORANGE</li>
                        <li>RED</li>
                    </ul>
                </div>
                <a href='cart_logic.php?id=<?php echo $result['product_id']?>'>Đặt hàng</a>
            </div>
       </div>
        
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
                    <img src="../img/main-logo.png" alt="">
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
        const quantity = document.getElementById('cart_item_quantity').value
        
    </script>
</body>
</html>