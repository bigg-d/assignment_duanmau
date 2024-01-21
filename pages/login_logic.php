<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember'])){
        $remember = true;
    }else $remember = false;

    // $remember = isset($_POST['remember'])?true:false;
    require_once 'connect.php';

    // Check xem user và pass đã tồn tại hay chưa   
    $sql = "select * from user where user_email='$email' and password='$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $num_rows = $stmt->rowCount(); // đếm số dòng
    // $result = mysqli_query($conn,$sql);
    // $num_rows = mysqli_num_rows($result);
    if ($num_rows >0 ){
        
        session_start();
        $row = $stmt->fetch();
        // $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['name'] = $row['user_name'];
        
        var_dump($_SESSION['id']);
        if($remember){
            setcookie('remember', $row['id'], time() + 60*60*24*30);//cookie ton tai 1 thang
        }
        
        header('location: user.php');
        exit();
    }

    header('location: login.php?error=Vui lòng nhập đúng thông tin!');
?>