<?php
$servername='localhost';
$username ='root';
$password ='';
$bdname ='wecare';

$conn=mysqli_connect($servername,$username,$password,$bdname );
if($conn){
    // echo"connection done!!";
}
else{
    echo"failed";
}
?>