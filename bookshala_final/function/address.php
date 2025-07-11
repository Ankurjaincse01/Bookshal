<?php 
    require 'connection.php';
    require 'session.php';

    $user_id = $_SESSION['MEMBER_ID'];
    $addressline1 = "";
    $addressline2 = "";
    $city = "";
    $district = "";
    $state = "";
    $pincode = "";
    $telephone = "";

    if (isset($_POST['submit'])) {
           
        $addressline1 = $_POST['add1'];
        $addressline2 = $_POST['add2'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $telephone = $_POST['telephone'];


            // $sql = "INSERT INTO admin_data (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            $sql = "INSERT INTO address (user_id, address_line_1, address_line_2, city, district, state, pin_code, telephone) VALUES ('$user_id', '$addressline1', '$addressline2', '$city', '$district', '$state', '$pincode', '$telephone')";
            
            // echo "hello check 21";
            
            if (mysqli_query($conn, $sql)) {
                echo'<script type="text/javascript">
                alert("Address added Successfully");
                    window.location = "../index.php";
                </script>';
           } else {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }

        }
    
?>