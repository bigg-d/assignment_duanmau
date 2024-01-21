<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
    <style>
        .banner{
            height: 500px;
            background-color: #e3e3e3;
            text-align: center;
            line-height: 500px;
        }
        .banner #text h1{
            font-family: serif;
            font-size: 88px;
            font-weight: 300;
        }
        #avt_container{
            padding: 100px ;
        }
        #avt_container #avt_container_list{
            list-style: none;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }
        #avt_container #avt_container_list .avt_container_item{
            width: 22%;
        }
        #avt_container #avt_container_list .avt_container_item i{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 1px solid grey;
            font-size: 18px;
            text-align: center;
            line-height: 60px;
            color: grey;
        }
        #avt_container #avt_container_list .avt_container_item h2{
            margin: 12px auto;
            font-family: serif ;
            font-weight: 300;
        }
        #avt_container #avt_container_list .avt_container_item p{
            color: #36332F;
        }
        /* ARTICLE  */
        article{
            display: flex;
            position: relative;
            padding: 100px;
        }
        
        article#article_container .img{
            width: 60%;
            height: 700px;
            background-image: url(../img/single-image3.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        article#article_container #article_container_content{
            width: 44%;
            height: 540px;
            padding: 60px;
            background-color: #f7f7f7;
            position: absolute;
            right: 80px;
            margin-top: 90px;
        }
        article#article_container #article_container_content h3{
            font-size: 14px;
            font-weight: 300;
            color: grey;
        }
        article#article_container #article_container_content h1{
            margin: 14px auto;
            font-family: serif;
            font-size: 60px;
            font-weight: 300;
        }
        article#article_container #article_container_content p{
            color: #36332F ;
            font-size: 20px;
        }
        /* FEEDBACK CONTAINER  */
#feedBack_container{
    padding: 170px;
    text-align: center;
}
#feedBack_container > div{
    width: 100%;
    text-align: center;
    /* display: flex;
    justify-content: space-between; */
}
.feedBack_container_item{
    text-align: center;
}

#feedBack_container h1{
    font-size: 42px;
    font-family: serif;
    font-weight: 500;
    margin-bottom: 48px;
}
#feedBack_container p{
    font-size: 28px;
    font-weight: 100;
    margin-bottom: 16px;
    opacity: 0.6;
}
#feedBack_container span{
    font-size: 18px;
    font-weight: 700;
}
        #subcribe_container{
            background-color: #dfe0dc;
            padding: 70px 100px ;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #subcribe_container #title{
            width: 45%;
        }
        #subcribe_container #title h1{
            font-size: 72px;
            font-family: serif;
            font-weight: 300;
            margin-bottom: 14px;
        }
        #subcribe_container form{
            width: 45%;
            border-bottom: solid 1px black;
            display: flex;
            justify-content: space-between;
        }
        #subcribe_container form input{
            font-size: 18px;
            font-weight: 400;
            width: 70%;
            outline: none;
            background-color: #dfe0dc;
            border: none;
        }
        #subcribe_container form button{
            background-color: #dfe0dc;
            border: none;
            font-size: 18px;
            font-weight: 500;
        }
        #subcribe_container form button:hover{
            color: grey;
        }
        /* section  > button{
            border: none;
            margin: 40px 100px;
            padding: 8px;
            background-color: #87826e;
            color: #fff;
        }
        section button:hover{
            background-color: black;
            color: #fff;
        } */
    </style>
    <link rel="stylesheet" href="./about.css">

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
                    <h1>About</h1>
                </div>
            </div>
        </header>
       <!-- ADVENTAGE CONTANER  -->
       <section id="avt_container">
            <ul id="avt_container_list">
                <li class="avt_container_item">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <h2>Free Delivery</h2>
                    <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
                </li>
                <li class="avt_container_item">
                    <i class="fa-solid fa-award"></i>
                    <h2>Quality Guarantee</h2>
                    <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
                </li>
                <li class="avt_container_item">
                    <i class="fa-solid fa-tag"></i>
                    <h2>Daily Offers</h2>
                    <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
                </li>
                <li class="avt_container_item">
                    <i class="fa-solid fa-shield"></i>
                    <h2>100% Secure Payment</h2>
                    <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
                </li>
            </ul>
       </section>

       <!-- ARTICLE CONTAINER -->
       <article id="article_container">
            <div class="img"></div>
            <div id="article_container_content">
                <h3>ABOUT US</h3>
                <h1>Vaso Is The Only Best Online Store For Varieties Of Collection Of Clean And Beautiful Vases.</h1>
                <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta. Ut nisl, tortor, aliquam blandit vitae vehicula vivamus leo nullam urna, scelerisque unc lectus phasellus adipiscing arcu. Tristique facilisis nunc consectetur at tempor cursusut porta.</p>
            </div>
       </article>

       <!-- FEEDBACK CONTAINER  -->
       <div id="feedBack_container">
           <h1>What Our Customers Says</h1>
           <div class="owl-carousel owl-theme" id="feedBack_container_list" >
               <div class="feedBack_container_item item" >
                   <p>“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</p>
                   <span>ANNA GARCIA</span>
               </div>
               
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

           $('.owl-carousel').owlCarousel({
               loop:true,
               margin:10,
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