<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "bd_unidep";
//conection
$conn = new mysqli($servername,$username,$password,$dbname);
//chek
if($conn->connect_error){
    die("Connection failed: " - $conn->connect_error);
}
?>
