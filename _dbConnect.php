<?php
// connection to the database
$servername ="localhost";
$username ="root";
$password ="";
$database = "idiscuss";

// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// die if connection not successful
if(!$conn){
    die("failed to connect".mysqli_connect_error());
}
?>