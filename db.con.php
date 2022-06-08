<?php
    $dbserver   ="localhost";
    $dbuser     ="root";
    $dbPass     ="";
    $database   ="useraccounts";

    $conn = mysqli_connect($dbserver, $dbuser,$dbPass,    $database );
    if($conn){
        echo "done";
    }




?>