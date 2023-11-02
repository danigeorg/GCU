<?php
include("connect.php");


if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    
    
    $sql =" SELECT * FROM login WHERE email = '$email' and password = '$password'";
    $result=mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);


    if($num>0){
     header("location:index.php");

    }
    else{
      echo'<script>alert("Email Id and Password is not matching")</script>';

      
    }

}



?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginstyke.css">
</head>
<body>
    <header>
        <div class="title"></div>
        <h1 class="head">StudNet</h1>
        <nav>
            <a href="signup.php"><button id="butt">Join Us</button></a>
        </nav>
    </header>


    <section class="login">
        <!-- <h2 class="l">Login</h2> -->
        <div id="log">
            <h2 class="l">Login</h2>
            <form action="" method="POST">
                <label for="email" class="email">EMAIL:</label><br>
                <input type="text" name="email" id="email" placeholder="@insitution.edu.in" required><br>

                <label for="password" class="password">PASSWORD:</label><br>
                <input type="password" name="password" id="password" placeholder="password" required><br>

             <input type="submit" name="submit" id="submit" >
            </form>
        </div>
    </section>
    
</body>
</html>