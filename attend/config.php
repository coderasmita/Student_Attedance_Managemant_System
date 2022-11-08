<?php    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name = "new";
    
    $conn = new mysqli($server, $username, $password, $database_name);

    if(!$conn){
        die("not connected");
    }

?>