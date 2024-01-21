<?php
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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./responsive.css"> -->
</head>
<body>
    <div id="content">
        <!-- HEADER CONTAINER  -->
        <header id="header_container">
            <nav id="header_container_list">
                    <li class="header_container_item" class="text-3xl font-bold underline"><a href="./about.php">About</a></li>
                <li class="header_container_item"><a href="./shop.php">Shop</a></li>
                <li class="header_container_item" id="subNav_container"><a href="">Pages </i> <i id="navIcon2" class="fa-solid fa-chevron-down"></i></a> 
                    <ul id="subNav">
                        <li><a href="./about.php">ABOUT</a></li>
                        <li><a href="./shop.php">SINGLE PRODUCT</a></li>
                        <li><a href="./cart.php">CART</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">SINGLE POST</a></li>
                        <li><a href="./contact.php">CONTACT</a></li>
                    </ul>
                </li>
                <li id="logo" class="header_container_item"><img src="../pages/img/main-logo.png" alt=""></li>
                <li class="header_container_item"><a href="">Search</a></li>
                <li class="header_container_item"><a href="login.php">Account</a></li>
                <li class="header_container_item"><a href="cart.php">Cart</a></li>
                <li id="navIcon"><i class="fa-solid fa-bars"></i></li>
            </nav>
            <div id="banner">
                <div id="text">
                    <h1>Ceramic Soft Pot</h1>
                    <p>This ceramic soft pot is specially designed by concept of traditional designs.</p>
                    <span>Shop now</span>
                </div>
            </div>
        </header>
        <!-- ABOUT CONTAINER  -->
        <article id="about_container">
            <h3>ABOUT US</h3>
            <h1>Vaso Is The Only Best Online Store For Varieties Of Collection Of Clean And Beautiful Vases.</h1>
            <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta. Ut nisl, tortor, aliquam blandit vitae vehicula vivamus leo nullam urna, scelerisque unc lectus phasellus adipiscing arcu. Tristique facilisis nunc consectetur at tempor cursusut porta.</p>
        </article> 

        <!-- PRODUCT CONTAINER -->
        <section id="product_container">
            <div id="product_container_header">
                <h1 id="product_container_header_title">Best Selling Items</h1>
                <div id="product_container_header_right">
                    <h3 id="product_container_header_right-text">View All Items</h3>
                    <div id="btns">
                        <i class="fa-solid fa-arrow-left"></i>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <ul id="product_container_list">
                <?php foreach ($list as $row) {?>
                    <li class="product_container_item">
                        <div class="product">
                            <img src=<?php echo $row['product_image']?> alt="">
                            <div class="overlay">
                                <a href="singleProduct.php?id=<?php echo $row['product_id']?>" class="addToCartBtn">Detail</a>
                            </div>
                        </div>
                        <a style='text-decoration: none' href="singleProduct.php?id=<?php echo $row['product_id']?>">
                            <h2><?php echo $row['product_name']?></h2>
                        </a>
                        <p><?php echo $row['product_sale_price']?>$</p>
                    </li>
                <?php }?>    
                
            </ul>
        </section>

        <div id="feedBack_container">
            <h1>What Our Customers Says</h1>
            <p>“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</p>
            <span>ANNA GARCIA</span>
        </div>
        <!-- FIGURE CONTAINER  -->
        <section id="figure_container">
            <img src="../img/text-pattern.png" alt="">
            
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

        <aside id="mobile_menu_container" class="closed_mobile_menu_btn">
            <img src="./img/main-logo.png"></img>
            <h1 id="close_mobile_menu">X</h1>
            <ul id="mobile_menu_container_list">
                <li class="mobile_menu_container_item"><a href="./about.html">About</a></li>
                <li class="mobile_menu_container_item"><a href="./shop.html">Shop</a></li>
                <li class="mobile_menu_container_item"><a href="./account.html">Account</a></li>
                <li class="mobile_menu_container_item"><a href="./cart.html">Cart</a></li>
            </ul>
        </aside>
    </div>
    <script>
        const showMenuBtn = document.getElementById('navIcon')
        const hideMenuBtn = document.getElementById('close_mobile_menu')
        const mobile_menu = document.getElementById('mobile_menu_container')
        function showMenu() { 
            mobile_menu.classList.add('open_mobile_menu_btn')
        }
        function hideMenu() {
            mobile_menu.classList.remove('open_mobile_menu_btn')
        }
        showMenuBtn.addEventListener('click',showMenu)
        hideMenuBtn.addEventListener('click', hideMenu)

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>