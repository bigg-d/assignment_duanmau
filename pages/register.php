<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/resgister.css">
    <!-- <link rel="stylesheet" href="./shop.css"> -->
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
                    <h1>Account</h1>
                </div>
            </div>
        </header>
        <!-- REGISTER CONTAINER  -->
        <form action="./register_logic.php" method='post' id="register_container" >
            <div id="title">
                <a href="./login.php" style="color:grey">SIGN IN </a>
                <a href="#">REGISTER</a>
            </div>
            <label for="userName">USERNAME*</label>
            <input name='name' id="userName" type="text" placeholder="Your Username" required>

            <label for="email">EMAIL*</label>
            <input name='email' id="email" type="email" placeholder="Your Email Address" required>

            <label for="password">PASSWORD</label>
            <input name= 'password' id="password" type="password" style="margin-bottom: 12px;" placeholder="Your Password" required>
            <span id="errMess" style="color: red;"></span>
            <input id='submit' style='background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white' name='submit' type="submit" />
            <hr>
        </form>
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
        function validateForm(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form submit

                const password = document.getElementById("password").value;
                const errMess = document.getElementById('errMess')
                if (password.length < 6) {
                    errMess.innerText = 'Mat khau it nhat 6 ki tu'
                    return false;
                }

                // alert("Form submitted successfully!");
        }
    </script>
</body>
    </html>
