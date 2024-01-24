<div class="banner">
    <div id="text">
        <h1>Account</h1>
    </div>
</div>
<form action="index.php?act=register" method='post' id="register_container">
    <div id="title">
        <a href="index.php?act=login" style="color:grey">SIGN IN </a>
        <a href="#">REGISTER</a>
    </div>
    <label for="userName">USERNAME*</label>
    <input name='name' id="userName" type="text" placeholder="Your Username" required>

    <label for="email">EMAIL*</label>
    <input name='email' id="email" type="email" placeholder="Your Email Address" required>

    <label for="password">PASSWORD</label>
    <input name='password' id="password" type="password" style="margin-bottom: 12px;" placeholder="Your Password"
        required>

    <span id="errMess" style="color: red;"></span>
    <input id='submit' style='background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white'
        name='submit' type="submit" />
    <hr>
    <p style="color:red"><?php if(isset($thongbao)) echo $thongbao?></p>
</form>
