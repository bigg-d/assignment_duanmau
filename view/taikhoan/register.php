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

    <label for="password">CONFIRM PASSWORD</label>
    <input name='confirmPassword' id="confirmPassword" type="password" style="margin-bottom: 12px;"
        placeholder="Your Password" required>
    <span id="errMess" style="color: red;"></span>
    <input id='submit' style='background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white'
        name='submit' type="submit" />
    <hr>
    <p><?php echo $thongbao?></p>
</form>
<script>
    const submit = document.getElementById("submit");
    // submit.addEventListener("click", validateForm);

    function validateForm(event) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của form submit

        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;
        const errMess = document.getElementById('errMess');

        if (password.length < 6) {
            errMess.innerText = 'Mật khẩu tối thiểu 6 kí tự';
            return false;
        } else if (password !== confirmPassword) {
            errMess.innerText = 'Mật khẩu không trùng khớp';
            return false;
        } else {
            const form = document.getElementById("register_container");
            form.removeEventListener("submit", validateForm); // Xóa sự kiện submit trước đó
            form.submit(); // Gửi form
        }
        submit.addEventListener("click", validateForm);

    }
</script>