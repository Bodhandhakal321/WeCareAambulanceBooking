<?php
require "../includes/database.php";

if (!isset($_GET['id'])) {
    // echo $_GET['id'];
    exit;
}
$sql = "SELECT * FROM admin where id = " . $_GET['id'];
$query = mysqli_query($conn, $sql);
$data = mysqli_num_rows($query);

$result = mysqli_fetch_assoc($query);
// var_dump($result);
// exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>org details</title>
    <link rel="stylesheet" href="./css/orgdata2.css">
</head>
<style>
    h1 {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
        border-bottom: 2px solid black;
        
    }
    img.re{
        width: 12rem;
        height: 12rem;
        border: 6px solid rgb(95, 214, 137);
    border-radius: 1rem;
    }
   
</style>

<body>


<h1>Organation details form</h1>
<form action="" method="post">

    <div class="main">
        <div class="detailsss">
            
            
            <div class="detailitem">

                <p>orgination/personal name: <?php echo $result['oname']; ?></p>
            </div>
            <div class="detailitem">
                
                <p>orgination/personal Address: <?php echo $result['oaddress']; ?></p>
            </div>
            <div class="detailitem">
                
                <p>orgination/personal phone: <?php echo $result['ophone']; ?></p>
            </div>
            <div class="detailitem">
                
                <p>orgination/personal email: <?php echo $result['oemail']; ?></p>
            </div>
            <div class="detailitem">
                <p>Register Number:<?php echo $result['registernum']; ?> </p>
            </div>
            
        </div>
        
        <div class="image">
            
            <div class="img">
                <a href="../upload/pan/<?= $result['pancertificate'] ?>">
                    
                <img src="../upload/pan/<?= $result['pancertificate'] ?>" class="pan" value="pan">
            </a>
            <p>PAN certificate</p>
            
        </div>
        <div class="img">
            
            <a href="../upload/register/<?= $result['registercertificate'] ?>">
                
            <img src="../upload/register/<?= $result['registercertificate'] ?>" class="re"> 
        </a>
        <p>Register certificate</p>
    </div>
</div>
</div>
<div class="btn">
    <div>
        <input type="submit" value="Accept" class="btn1" name="acpt" >
        
    </div>
    <div>
        <input type="submit" value="Decline" class="btn2" name="dec" >
   
    </div>
</div>

</form>

</body>

</html>
   
<?php

if(isset($_POST['acpt'])){
    $verificationStatus = 1;
    $id = $_GET['id'];
    $sql = "UPDATE admin SET verified = $verificationStatus WHERE id = $id";
    
    $result = mysqli_query($conn,$sql);
    if($result){

        header('location:/wecare/superadmin/');
    }
    else{
        echo"error";
    }
}
elseif(isset($_POST['dec'])) {
$id =$_GET['id'];
$query = "DELETE FROM  admin  where id ='$id'";
 $data = mysqli_query($conn,$query);
if($data){

    header('location:/wecare/superadmin/');
} else{
    echo"error";
}
}

else{
  
    exit;
}



?>