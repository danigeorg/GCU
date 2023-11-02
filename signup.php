<?php
include("connect.php");


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $username =$_POST['username'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $conpass =$_POST['conpass'];
    
    
    $sql ="SELECT * FROM login WHERE email ='$email'";
    $result=mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);


    if($num>0){
      echo'<script>alert("Email is already exist!!")</script>';

    }
    else{
      $insert = "INSERT INTO login(name,email,username,phone,password,conpass) VALUES('$name','$email','$username','$phone','$password','$conpass')";
      mysqli_query($conn,$insert);
      header("location:log.php");
      
    }

}



?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Sign Up</title>
    <link rel="stylesheet" href="signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Create An New Account</div>
    <div class="content">
      <form name="signup" action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="Username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="Email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="phone"  name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password"  id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="confirmpass" name="conpass" placeholder="Confirm your password" required>
          </div>
        </div>
       
        <div class="button">
          <input type="submit" name="submit" value="Register">
         <center><p>ALREADY HAVE AN ACCOUNT?<a href="login.php">Login</p> </a></center>
        </div>
      </form>
    </div>
  </div>


  <!-- <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxNOcuBGP8V6u8Jz2XaLh324PmKf1Wo-53sShjkD4APBrtKavM49fREayxtRhMsfMVXmQ/exec'
    const form = document.forms['signup']
    
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => alert("Thank you! your form is submitted successfully." ))
      .then(() => {  window.location.reload(); })
      .catch(error => console.error('Error!', error.message))
    })
    </script> -->

</body>
</html>