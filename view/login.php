<!-- <?php
    if(isset($_COOKIE['$remember'])){
        $id = $_COOKIE['$remember'];
        $_SESSION['user'] = $id;
    }
?> -->
<div class="banner">
    <div id="text">
        <h1>Account</h1>
    </div>
</div>
<?php
if (isset($_SESSION["user"])) {
    echo "
    <div style='margin: 24px 100px'>
        <div style='display: flex; justify-content: space-between; align-items: center'>
            <h1 style='font-size: 42px;font-family: serif;
            font-weight: 300;
            margin-bottom: 14px;'>MY ACCOUNT</h1>

            <a href='index.php?act=logout' style='color: black'>LOG OUT</a>
        </div>

        <div style='display: flex;flex-direction: column; justify-content: center; align-items: center; margin-top: 16px'>

            <h2 style='font-family: serif;
            font-size: 28px;
            font-weight: 300;
            margin-top: 20px;'>{$_SESSION['user']['user']}</h2>

            <h2 style='font-family: serif;
            font-size: 28px;
            font-weight: 300;
            margin-top: 20px'>{$_SESSION['user']['email']}</h2>

            <div style='margin-top: 30px'>
                <a href='index.php?act=edit_taikhoan' style='text-decoration:none;color: white; background-color: black; padding:8px; margin-right: 18px'>UPDATE ACCOUNT</a>";

    if ($_SESSION['user']['role'] == 1) {
        echo "<a href='admin/index.php' style='text-decoration:none;color: white; background-color: black; padding:8px'>GO TO ADMIN</a>";
    }

    echo "
            </div>
        </div>
    </div>    
        ";
} else {
    echo '
    <form action="index.php?act=login" method="post" id="login_container">
        <div id="title">
            <a href="#">SIGN IN </a>
            <a href="index.php?act=register" style="color: grey;">REGISTER</a>
        </div>
        <label for="email">EMAIL ADDRESS *</label>
        <input name="email" id="userName" type="email" placeholder="Your Email">
        <label for="password">PASSWORD</label>
        <input name="password" type="password" placeholder="Your Password" required>
        <div id="recoverPas">
            <input name="remember" type="checkbox">
            <p>REMEMBER ME</p>
            <h3><a href="index.php?act=quenmk">FORGOT PASSWORD</a></h3>
        </div>
        <input name="submit" id="submit" type="submit" value="Login" style="background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white">
        <hr>';

if(isset($thongbao)) {
    echo $thongbao;
}

echo '
    </form>
';
}

?>

