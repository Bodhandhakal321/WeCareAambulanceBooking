<?php
session_start();
// echo"welcome " . $_SESSION['username'];
// <p> echo"welcome " . $_SESSION['username']> </p>;




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<!-- <link rel="stylesheet" href="./frontend/css/das.css"> -->
<link rel="stylesheet" href="./css/das.css">

<style>
    .logout{
        border: none;
        border-radius:10px;
        background: rgb(16, 134, 16);
        padding: 10px;
        font-size: 20px;
        color: white;
        margin-left: 3rem;
        
        cursor: pointer;
    }
 .logout:hover{
    background: rgba(160, 8, 8, 0.8);
   
 }
 .prf {
    text-decoration: none;
    border: none;
        border-radius:10px;
        background: lightskyblue;
        padding: 10px;
        font-size: 20px;
        color: white;
        margin-left: 3rem;
        
        cursor: pointer;
    
 }
 .profile{
    margin-left: 20px;
    
 }
 .parent {
    /* background: rgba(211, 211, 211, 0.438); */
    padding: 2px;
    margin-top: 0rem;
    
}
</style>
<div class="parent">

    <body class="container"> 
        <div class="container">
            
            
            <div class="navbar">
                <div class="logo">
                    
                    <img src="../img/logo.png" height="60px" width="50px">
                </div>
   
        <div class="navbar_items">
            <a href="#">ABOUT</a>
            <a href="services.php">SERVICES</a>
            <a href="#">PLANS</a>
        </div>
     
        <div class="profile"> 
          
        <button id="profile" class="prf">Profile</button>
   
            <a href="logout.php"><input type="submit" value="Logout" class="logout"></a>
        </div>
        
    </div>
    
    
    <nav id="detailP">
        <div class="details container">
            <h1>Meet WeCare</h1>
            <h3>For Emergency Medical service</h3>
            <p><b>Help / Rescues the patient in the case of Emergency <br> sutiation by doing just a click.<br>
            WeCare Ambulance comes right in front of the door for help.
        </b></p>
        <div class="book">
            
            <a href="booktesting.php"><button>BOOK NOW</button></a>
        </div>
    </div>
    
    
    <div class="details1 container">
        <img src="../img/amb.png"  height="320px">
        
    </div>
 

</nav>

</div>
</div>

<!-- <footer>
    <p id="foot">Design and Develop by Saroj Shrestha and Bodhan Dhakal @copyright 2023</p>
</footer> -->
</body>
</html>
<?php
require "../includes/database.php";
require "./profile2.php";
if(isset($_SESSION['useremail'])){
if($_SESSION['useremail']== true){

}

else{
    header('location:login.php');
}
}

// if(isset($_SESSION['useremail'])){

//     if(strlen($_SESSION['useremail'])==0){
//         header('location:login.php');
//     }
// }

?>

