<?php
    include 'function/connection.php';
    include 'function/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>shop</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
   <link href="cart.css" rel="stylesheet">

</head>
<body>
    <div class="heading">
       <h1>Shopping Book</h1>
    </div><br><br><br>

<!-- engneering book       -->
    <div class="gallery">
 
    <?php
        $query = "SELECT * FROM items";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0){
            echo '<ul id=recs>';
            while($tb_data = mysqli_fetch_assoc($data)){
              
                echo '
                        <div class="content">
                            <img src="data/book_img/'.$tb_data['image_thumbnail'].'">
                            <h6>'.$tb_data['title'].'</h6>
                            <p class="card-text">'.$tb_data['description'].'</p>
                            <h6>'.$tb_data['price'].'</h6>
                            <a href="include/buynow.php?book_id='.$tb_data['item_id'].'" class="btn btn-success">Buy now  </a>
                            <a href="function/addtocart.php?book_id='.$tb_data['item_id'].'" class="btn btn-warning">Add Cart </a>          
                        </div>
            ';

            }
        }else{
            echo("<center>No Data Records Found</center>");
        }
    ?>

    </div>
</body>
</html>