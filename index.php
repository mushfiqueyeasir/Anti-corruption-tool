<?php
$error = "";
$success = "";

if(isset(($_POST['submit'])))
{
    $username = $_POST['username'];
     $password = $_POST['password'];
    if($username == "admin")
    {
        if($password == "admin")
        {
            $error = "";
            $success = "Welcome Admin!!!";           
            header("location:home.php");
        }
        else
        {
            $error = "Invalid Password!!!";
            $success = "";
        }
    }
    else
    {
            $error = "Invalid Username!!!";
            $success = "";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style> 

    html{
        background: url(image/02.jpg) no-repeat center center fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size: cover;    
         }

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 30px;
    font-family: monospace;

}
p1{
  
    font-size: 18px;
    font-family: monospace;
    color: #fff;
}
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    font-size: 22px;
    font-family: monospace;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}


.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #EDC98F;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 18px;
    color: #39dc79;
}
.login-box a:hover
{
    
    color: #EDC98F;
}

         .login-box input[type="submit"]
         {
    border: none;
    outline: none;
    height: 40px;
    background: #db1c1c;
    color: #fff;
    font-size: 20px;
    border-radius: 20px;
           }

         .login-box input[type="text"], input[type="password"]
            {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;

             }

</style>



</head>
    <body>
    <div class="login-box">
    <img src="image/avatar2.png" class="avatar">
        <h1>ADMIN</h1>
      
        &nbsp;&nbsp; <p1 class="error"><?php echo $error; ?></p1><p1 class="success"><?php echo $success; ?></p1>
     
            <form method="post">
                <div class="from-input">
            <i class="fa fa-user fa-2x cust" arial-hidden="ture"></i>
            <p>Username</p>
            <input type="text" name="username" value="" placeholder="Enter Username" required>
              <i class="fa fa-lock fa-2x cust" arial-hidden="ture"></i>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
         
        </div>
            
            </form>
        
        
        </div>
    
    </body>
</html>