<?php

require "../includes/database.php";
session_start();
if(isset($_SESSION['useremail'])){
    if($_SESSION['useremail']== true){
    //     echo"<pre>";
    // print_r($_SESSION);
    // exit;
    }
    
    else{
        header('location:login.php');
    }
    }
    $sql = "SELECT * FROM admin where reg_id = " . $_SESSION['userid'];
    
$query = mysqli_query($conn, $sql);
$data = mysqli_num_rows($query);

$result = mysqli_fetch_assoc($query);
// print_r($result);

if($result){

    // echo $result['verified'];
    
    
    if( $result['verified']==1){
        header('location:/wecare/org/dash.php');
        
    }else{
        include "./pending.php";
        exit;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin register</title>
    <link rel="stylesheet" href="../org/css/regtest.css">
</head>
<style>
    .register-items h1 {
        display: flex;
        justify-content: center;

        margin-bottom: 2rem;
        padding: 5px;
        border-bottom: 2px solid grey;
    }
</style>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="register-box">
            <div class="register-items">
                <h1>Register your Organation/Personal Details</h1>

                <div class="labeltag">

                    <label for="name">Organation/personal Name</label>
                </div>
                <input type="text" name="oname" placeholder="enter name" required>
                <div class="labeltag">

                    <label for="name">Organation/personal Address</label>
                </div>
                <input type="text" name="address" placeholder="enter address" required>
                <div class="labeltag">

                    <label for="name">Organation/personal phone.No</label>
                </div>
                <input type="text" name="phone" id="number" placeholder="enter phone.No" required>
                <div class="labeltag">

                    <label for="name">Organation/personal Email</label>
                </div>
                <input type="email" name="email" id="email" placeholder="enter email" required>
                <div class="labeltag">
                    <label for="">Pan certificate:</label>
                </div>
                <input type="file" placeholder="" name="pancertificate">

                <div class="labeltag">
                    <label for="">Register Number</label>
                </div>
                <input type="number" name="registernum">
                <div class="labeltag">
                    <label for="">Register certificate</label>
                </div>
                <input type="file" name="registercertificate">
                <div class="btn">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </div>

            </div>

        </div>

    </form>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $Organizationname = $_POST['oname'];
    $Organizationaddress = $_POST['address'];
    $Organizationphone = $_POST['phone'];
    $Organizationemail = $_POST['email'];

    $registernum = $_POST['registernum'];

    $folder = "../upload/";
    $pancertifiate = $_FILES["pancertificate"]["name"];
    $temp_file = $_FILES["pancertificate"]["tmp_name"];
    $folder_pan = "../upload/pan/" . $pancertifiate;
    // print_r($_FILES['pancertificate']);
    // exit;
    // $extn = pathinfo($_FILES['pancertificate']['name'], PATHINFO_EXTENSION);
    // $pancertifiate = (isset($temp_path)) ? $_POST['oname'] . '_pan_' . date('YmdHis') . '.' . $extn : null;
    move_uploaded_file($temp_file, $folder_pan);

    $registercertifate = $_FILES["registercertificate"]["name"];
    $tmp_file = $_FILES["registercertificate"]["tmp_name"];
    //    print_r($_FILES["registercertificate"]);
    $folder_reg = "../upload/register/" . $registercertifate;
    // $extn = pathinfo($_FILES['registercertificate']['name'], PATHINFO_EXTENSION);
    // $registercertifate = (isset($temp_path)) ? $_POST['oname'] . '_reg_' . date('YmdHis') . '.' . $extn : null;
    move_uploaded_file($tmp_file, $folder_reg);


    $sql = "insert into admin (oname,oaddress,ophone,oemail,pancertificate,registernum,registercertificate,reg_id) values('$Organizationname','$Organizationphone','$Organizationphone','$Organizationemail','$pancertifiate','$registernum','$registercertifate','".$_SESSION['userid']."')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location:/wecare/org/reg2.php');
    }
    // echo $sql;
    // exit;

    
}


?>
<?php







?>