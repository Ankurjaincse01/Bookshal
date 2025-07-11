<?php

    $server  ="localhost";
    $username="root";
    $password="";
    $database ="bookshala";

    // $conn = mysqli_connect($server, $username, $password);
    $conn = mysqli_connect($server, $username);
    mysqli_select_db($conn, $database) or die("could not select database");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
          }
?> 