<html>

<?php

$host = "127.0.0.1";
$user = "wmc3812";                     
$pass = "";                                  
$db = "c9";                                  
$port = 3306; 

if ($_SERVER["REQUEST_METHOD"] == "GET")
{

    $conn = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $post1 = "SELECT 'post' FROM blogposts WHERE id=1";
    
    mysqli_query($conn, $post0);
    
    mysqli_close($conn);
}

echo $post1;
?>

</html>