 <?php
    include '../function/connection.php';
    include '../function/session.php';

    if (!logged_in()) {
        echo'<script type="text/javascript">
                 window.location = "../login.php";
             </script>';
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Your Address</title>
    <link rel="stylesheet" href="../assets/css/login.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
<center> 
    <div class="wrapper">
      <!-- Do not touch this -->
      <form action="../function/address.php" method="post" class="form">
      <!-- this -->
        <br>
        <h1>Fill your Address</h1>
        <br>

        <div>
            <!-- Do not touch this -->                        
            <input type="text" name="add1" class="form-control" placeholder="Address line 1">
            <input type="text" name="add2" class="form-control" placeholder="Address line 2">
            <!-- this -->
        </div>
        <br>
        <div><span></span>
        <!-- Do not touch this -->            
        <input type="text" name="city" placeholder="City" class="form-control" autofocus="">
        <input type="text" name="district" placeholder="District" class="form-control">
        <!-- this -->
        </div>

        <input type="text" name="state" placeholder="State" class="form-control">
       
        <input type="number" name="pincode" placeholder="Postal_Code" class="form-control">
        <br>
        <input type="number" name="telephone" placeholder="Telephone Number" class="form-control">

        <br>

        <!-- Do not touch this -->            
            <button type="submit" name="submit">Add the Address</button>
            <!-- this -->
    </form>
    </div>
    </center>
</body>
</html>
