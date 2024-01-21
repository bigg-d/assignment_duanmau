<div class="banner">
    <div id="text">
        <h1>Account</h1>
    </div>
</div>
<form action="index.php?act=quenmk" method='post' id="register_container">
    <div id="title">
        <a href="#">RECOVER </a>
    </div>

    <label for="email">EMAIL*</label>
    <input name='email' id="email" type="email" placeholder="Your Email Address" required>

    <p style='color: red'><?php  echo ($thongbao ?? '')?></p>

    <input id='submit' style='background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white; margin-top: 24px'
        name='quenmk' type="submit" value="Quên mật khẩu"/>
    <hr>
</form>