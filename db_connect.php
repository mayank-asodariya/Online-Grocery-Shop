<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "rkmark";

    $conn = mysqli_connect($servername,$user,$pass,$db);

    if(!$conn)
    {
        die("Error While connecting to the server");
    }
    // else
    // {
    //     echo "Connection was successful";
    // }

?>