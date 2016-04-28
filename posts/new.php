<?php

$host = "127.0.0.1";
$user = "wmc3812";                     
$pass = "";                                  
$db = "c9";                                  
$port = 3306; 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $conn = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $post = $_POST['message'];
    
    $sql = "INSERT INTO blogposts (post) VALUES ('$post')";
    
    mysqli_query($conn, $sql);

}

?>