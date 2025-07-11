<?php
    require '../function/connection.php';
    require '../function/session.php';
    
    if (!logged_in()) {
        echo'<script type="text/javascript">
            window.location = "../login.php";
    </script>
    ';
    }
    
    $user_id = $_SESSION['MEMBER_ID'];
    $query = "SELECT user_id FROM address WHERE user_id = $user_id";
    $data = mysqli_query($conn, $query);
    // Getting the total's data number
    $total = mysqli_num_rows($data);
   
    if ($total == 0) {
        echo '<script>
            alert("Oops Your Address is Not Available Fill the Address form to Proceed");
            window.location = "address.php";
        </script>';
    }

    $item_id = $_GET['book_id'];

    $query = "SELECT * FROM items WHERE item_id = $item_id";

    $data = mysqli_query($conn, $query);

    $tb_data2 = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyIt</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
   <link href="cart.css" rel="stylesheet">
</head>
<body>
    <br><br><br><center><h1>Buy Now</h1><br><br><br>
    <div class="container">
        <table class="table table-hover">
            <thead></thead>
            <tbody>
            <?php
                echo" 
                <tr>
                    <td><img src='../data/book_img/".$tb_data2['image_thumbnail']."' height='100' width='100' alt='Not found'/></td>
                    <td>".$tb_data2['title']."</td>
                    <td>".$tb_data2['author']."</td>
                    <td>".$tb_data2['description']."</td>
                    <td>".$tb_data2['price']."</td>
                </tr>";
?>
            </tbody>
         </table>
         </div>
                <?php echo'<a href="../function/buynow.php?book_id='.$item_id.'"><button class="btn btn-success">Buy Now</button></a>';?>
        </center>
</body>
</html>