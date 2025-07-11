<?php 
    require '../function/connection.php';
    require '../function/session.php';

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
    <title>Cart</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
   <link href="cart.css" rel="stylesheet">
</head>
<body>
   <br><br><br> <center><h1>Cart</h1></center><br><br><br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Photo</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan = "2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $user_id = $_SESSION['MEMBER_ID'];
            $query = "SELECT item_id FROM cart WHERE user_id = $user_id";
            $data = mysqli_query($conn, $query);
            // Getting the total's data number
            $total = mysqli_num_rows($data);
           
        if ($total != 0) {
              // Writing the data in clg
            while($tb_data = mysqli_fetch_assoc($data)){
                $item_id = $tb_data['item_id'];
                // mysqli_query($conn, "SELECT * FROM items WHERE item_id = $item_id");
                if($result = mysqli_query($conn, "SELECT * FROM items WHERE item_id = $item_id")){

                }else{
                        
                }

                $tb_data2 = mysqli_fetch_assoc($result);

            echo" 
                <tr>
                    <td>".$tb_data2['item_id']."</td>
                    <td><img src='../data/book_img/".$tb_data2['image_thumbnail']."' height='100' width='100' alt='Not found'/></td>
                    <td>".$tb_data2['title']."</td>

                    <td>".$tb_data2['author']."</td>
                    <td>".$tb_data2['description']."</td>
                    <td>".$tb_data2['price']."</td>
                    <td><a href='../function/removefromcart.php?id=$tb_data2[item_id]' class='btn btn-danger'>Remove</a></td>
                    <td><a href='buynow.php?book_id=$tb_data2[item_id]' class='btn btn-success'>Buy Now</a></td>
                </tr>";
                }
            }else{
              // NO data find
              echo("<tr><td colspan='9 '><center>No Data Records Found</center></td></tr>");
            }  
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>