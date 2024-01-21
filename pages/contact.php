<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./shop.css">
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
        /* CONTACT CONTAINER  */
        #contac_container{
            display: flex;
            padding: 170px 110px;
        }
        #contact_container_infor{
            padding: 0 22px;
            width: 50%;
        }
        #contact_container_infor > h1{
            font-size: 60px;
            font-weight: 400;
            font-family: serif;
            margin-bottom: 16px;
        }
        #contact_container_infor > p{
            font-size: 20px;
            opacity: 0.6;
            margin-bottom: 16px;
        }
        #contact_container_list{
            display: flex;
            justify-content: space-between;
        }
        .contact_container_item{
            width: 45%;
            list-style: none;
            font-size: 20px;
        }
        .contact_container_item h2{
            font-size: 30px;
            font-weight: 500;
            text-decoration: underline;
            font-family: serif;
            margin-bottom: 20px;
        }
        .contact_container_item li{
            opacity: 0.6;
            margin-bottom: 18px;
        }
        #contact_container_form{
            width: 50%;
        }
        #contact_container_form h1{
            font-size: 60px;
            font-weight: 500;
            font-family: serif;
        }
        #contact_container_form p{
            margin: 14px 0 26px;
            font-size: 20px;
        }
        #contact_container_form label{
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 14px;
        }
        #contact_container_form input{
            width: 100%;
            padding: 12px ;
            margin-bottom: 32px;
            font-size: 18px;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
            background-color: #f7f7f7;
        }
        #contact_container_form button{
            width: 100%;
            padding: 20px;
            background-color: #000;
            color: #fff;
            font-size: 20px;
            border: none;
        }
        #contact_container_form button:hover{
            background-color: #87826E;
            transition: 0.3s ease;
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
                    <h1>Contact</h1>
                </div>
            </div>
        </header>
        <!-- CONTAC CONTAINER  -->
        <section id="contac_container">
            <div id="contact_container_infor">
                <h1>Contact Info</h1>
                <p>Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
                <div id="contact_container_list">
                    <ul class="contact_container_item">
                        <h2>OFFICE</h2>
                        <li>730 Glenstone Ave 65802, Springfield, US</li>
                        <li>+123 987 321</li>
                        <li>+123 123 654</li>
                        <li>vaso@yourinfo.com</li>
                    </ul>
                    <ul class="contact_container_item">
                        <h2>MANAGEMENT</h2>
                        <li>730 Glenstone Ave 65802, Springfield, US</li>
                        <li>+123 987 321</li>
                        <li>+123 123 654</li>
                        <li>vaso@yourinfo.com</li>
                    </ul>
                </div>
            </div>
            <form action="" id="contact_container_form">
                <h1>Any Questions?</h1>
                <p>Use the form below to get in touch with us.</p>
                <label for="name">YOUR NAME *</label>
                <input type="text" name="name" id="name" placeholder="Write your name here" required>
                <label for="name">YOUR EMAIL *</label>
                <input type="text" name="email" id="email" placeholder="Write your email here" required>
                <label for="name">PHONE NUMBER</label>
                <input type="text" name="phone" id="phone" placeholder="Write your phone number" required>
                <label for="name">SUBJECT *</label>
                <input type="text" name="subject" id="subject" placeholder="Write your subject" required>
                <label for="name">YOUR MESSAGE *</label>
                <input type="text" name="message" id="message" placeholder="Write your message here" required>
                <button>Submit</button>
            </form>
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
</body>
</html>