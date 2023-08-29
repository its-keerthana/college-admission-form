<?php 
 require  ("connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mycss.css">
    <title>login</title>
</head>
<body>
    <div class="login-form">
        <h2> ADMIN LOGIN</h2>
        <form  method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="username" name="AdminName">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="AdminPassword">
            </div>
            <button type="submit" name="Login">Log in
            </button>
        </form>
    </div>
    <?php 
    if(isset($_POST['Login']))
{
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location:admin.php");
    }
    else{
         echo "<script>alert('incorrect password or username');</script>";
    }
}
?>
</body>
</html>
