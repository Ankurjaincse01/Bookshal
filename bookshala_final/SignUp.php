<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> register page</title>
  <link rel="stylesheet" href="assets/css/login.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Register now!</h1>
    <p> to continue as a user of <br> Bookshala!</p>
    <form action="function/register.php" method="post" class="form">
    <input type="text" name="fname" placeholder="Enter First Name" autofocus="">
    <input type="text" name="lname" placeholder="Enter Last Name">
    <input type="email" name="email" class="form-control" placeholder="example@email.com">
    <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
            <button type="submit" name="submit">Sign Up</button>
      <p class="recover">
      </p>
    <closeform></closeform></form>
    <p class="or">
      ----- or -----
    </p>
    
    <div class="not-member">
    already a user <a href="login.php">login Now</a>
    </div>
  </div>
</body>
</html>