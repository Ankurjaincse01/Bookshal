<?php
    require "function/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Login page </title>
  <link rel="stylesheet" href="assets/css/login.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<?php
    if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
?>
<body>
  <div class="wrapper">
    <h1>Login  now!</h1>
    <p> to continue as a user of <br> Bookshala!</p>
    <form action="function/login.php" method="POST">
      <input type="email" name="email" name="password" placeholder="Enter email">
      <input type="password"name="password" placeholder="Password">
      <button type="submit" name="submit">Login in</button>
      <p class="recover">
      </p>
    <closeform></closeform></form>
    <p class="or">
      ----- or -----
    </p>
    
    <div class="not-member">
    not a user <a href="SignUp.php">Register now</a>
    </div>
  </div>
</body>
</html>
