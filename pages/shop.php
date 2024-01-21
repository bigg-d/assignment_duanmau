<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./owlCss/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlCss/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/shop.css">
    <!-- <link rel="stylesheet" href="./responsive.css"> -->
    <style>
        
    </style>
    <link rel="stylesheet" href="./shopResponsive.css">

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
                    <h1>Shop</h1>
                </div>
            </div>
        </header>
        <!-- PRODUCT CONTAINER  -->
        <article id="product_container">
            <ul id="product_container_list1"  class="owl-carousel">
                <li class="product_container_item">
                    <img src="../img/product-item3.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item1.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item2.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item3.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item1.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item2.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item3.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                    <a href="#" class="addToCartBtn">Add to cart</a>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item1.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                </li>
                <li class="product_container_item">
                    <img src="../img/product-item2.jpg" alt="">
                    <h2>Matt Black</h2>
                    <p>$870</p>
                </li>
            </ul>
            
        </article>
        <aside id="search_container">
            <div id="search_input">
                <h1>Search</h1>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <ul class="search_container_list"> <h1>CATEGORIES</h1>
                <li class="search_container_item">All</li>
                <li class="search_container_item">Japanese</li>
                <li class="search_container_item">Ceramic</li>
                <li class="search_container_item">Ancient</li>
                <li class="search_container_item">Soft Pots</li>
            </ul>
            <ul class="search_container_list"> <h1>TAGS</h1>
                <li class="search_container_item">Off-White</li>
                <li class="search_container_item">Cheap</li>
                <li class="search_container_item">Vintage</li>
                <li class="search_container_item">Morden</li>
            </ul>
            <ul class="search_container_list"><h1>OTHER PRODUCTS</h1> 
                <li class="search_container_item">Bowls</li>
                <li class="search_container_item">Anchora</li>
                <li class="search_container_item">Plates</li>
            </ul>
            <ul class="search_container_list"> <h1>FILTER BY PRICE</h1>
                <li class="search_container_item">Less Than $100</li>
                <li class="search_container_item">$100 - $200</li>
                <li class="search_container_item">$200 - $300</li>
                <li class="search_container_item">$300 - $400</li>
                <li class="search_container_item">$400 - $500</li>
            </ul>
        </aside>
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
        function displayMenu() { 
            mobile_menu.classList.toggle('open_mobile_menu_btn')
        }
       
        showMenuBtn.addEventListener('click',displayMenu)
        hideMenuBtn.addEventListener('click', displayMenu)
        
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script>
        if(window.innerWidth <= 884){
            console.log('============= window.screenX',window.innerWidth)
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })

        }
    </script>
</body>
</html>