<?php 
    session_start(); 
    if(isset($_COOKIE['remember'])){

        $id = $_COOKIE['remember'];
        require_once 'connect.php';
        $sql = "select * from user where user_id =$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $each = $stmt->fetch();
        var_dump($each);
        // $result = mysqli_query($conn,$sql);
        // $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['user_id'];
        $_SESSION['name'] = $each['user_name'];

    }

    if (isset($_SESSION['id'])){
        header('location:user.php');
        exit();
    }

?>

<?php 
    if(isset($_GET['suss'])){
        echo $_GET['suss'];
    }
    if(isset($_GET['error'])){
        echo $_GET['error'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login.css">
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
        <form action="./login_logic.php" method='post' id="login_container">
            <div id="title">
                <a href="#">SIGN IN </a>
                <a href="./register.php" style="color: grey;">REGISTER</a>
            </div>
            <label for="email">EMAIL ADDRESS *</label>
            <input name ='email' id="userName" type="email" placeholder="Your Email">
            <label for="password">PASSWORD</label>
            <input name= 'password' type="password" placeholder="Your Password" required>
            <div id="recoverPas">
                <input name='remember' type="checkbox"> <p>REMEMBER ME</p>
                <h3><a href="">FORGOT PASSWORD</a></h3>
            </div>
            <button name='submit'>Login </button>
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
</body>
</html>