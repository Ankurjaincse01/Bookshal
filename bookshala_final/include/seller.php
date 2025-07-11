<?php
    // require "connection.php";
    require "../function/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell it</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
   <!-- <link href="../cart.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="../assets/css/login.css">


</head>
<?php
    if (!logged_in()) {
?>
   <script type="text/javascript">
            window.location = "../login_page.php";
    </script>
    <?php
}
?>
<body>
   <center> 
    <div class="container">
      <!-- Do not touch this -->
      <form action="../function/selling.php" method="POST" enctype="multipart/form-data" class="form">
      <!-- this -->
        <br>
        <h1>Fill to Sell</h1>
        <br>

        <div><span></span>
        <!-- Do not touch this             -->
         <input type="text" name="book_title" placeholder="Book Title"  autofocus="">
        <input type="text" name="book_author" placeholder="Author's Name" > 
        <!-- this -->
         </div>

        <br>
        
        <div>
        <!-- Do not touch this -->                        
        <input type="number" name="book_price"  placeholder="Price of The Book">
        <!-- this -->
        </div>

        <div>
            <!-- Do not touch this                         -->
            <input type="text" name="book_description" placeholder="Description of book">
            <!-- this -->
        </div>

        <br>
        
        <div>
        <!-- Do not touch this -->                        
        <input type="text" name="book_tags" placeholder="Tags Related to Books eg. sci-fi non-fiction romance">
        <!-- this -->
        </div>

        <br>

        
        <br>
        <!-- Front Page Upload -->
        <input type="file" name="image_thumbnail" id="image_thumbnail">
        
        <!-- <br> -->
        <!-- multiple image upload -->
        <!-- <input type="file" name="imageFile[]" required multiple > -->
        
        <br><br>


        <!-- Do not touch this -->            
        <input type="submit" value="Upload Image" name="submit">
        <!-- this -->
    </form>
    </div>
    </center>
</body>
</html>


