<?php 
    require 'connection.php';
    require 'session.php';

    if (!logged_in()) {
        echo'
            <script type="text/javascript">
                window.location = "../login_page.php";
            </script>
        ';
        }
    
    $item_id = $_GET['book_id'];
    $user_id = $_SESSION['MEMBER_ID'];


            if($item_id){
                $query = "INSERT INTO orders (item_id, user_id, payment_method, order_status, order_date) VALUES ('$item_id', '$user_id', 'COD', 'Ordered', NOW())";
                if (mysqli_query($conn, $query)) {
                    echo "<script>
                        alert('Item Ordered');
                        window.location.href='../index.php';
                         </script>";
                }else{
                    echo "<script>
                            alert('POST ERROR: Try Again');
                            window.location.href='../index.php';
                        </script>";
                }
            }else{
                echo "<script>
                        alert('Something Went Wrong');
                        window.location.href='../index.php';
                </script>";
            }   
       
?>
?>