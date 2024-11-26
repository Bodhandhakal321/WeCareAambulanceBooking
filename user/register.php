<?php
session_start();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WE CARE register</title>
  <link rel="stylesheet" href="./css/register.css" />
</head>
<style>
  #field {
    display: flex;
    justify-content: center;
    margin-top: 10px;
    color: darkred;
    font-size: 20px;
  }
 

</style>

<body>

  <!-- <div class="logo">
     
    </div> -->
  <form method="post">
    <div class="main">

      <div class="content">
        <h1>WE CARE</h1>
        <p>
          We Care is an innovative and user-friendly application designed to
          streamline the process of emergency medical services.
        </p>
        <img src="../img/amb.png" height="171px" width="250px" />
      </div>
      <div class="form">

        <h1 id="form">REGISTER FORM</h1>
        <div class="label_class">
          <label for="user">User Name</label>
        </div>
        <input type="text" class="in" placeholder="your username" name="username" required />


        <div class="label_class">
          <label for="user">Email</label>
        </div>

        <input type="email" class="in" placeholder="your email" name="email" required />
        <p para2></p>

        <div class="label_class">
          <label for="user">Phone</label>
        </div>

        <input type="number" class="in" placeholder="your Phone" name="phone" required />

        <div class="label_class">
          <label for="type">Types</label>
        </div>

        <div class="label_class1">
          <input type="radio" name="type" value="o" checked />
          <label for="organation">Organation/personal</label>
          <input type="radio" name="type" value="n" />
          <label for="normal">Normal USer</label>
        </div>
      </div>
    </div>
    <div class="classbtn">

      <input type="submit" value="REGISTER" name="register" class="sub">
      <a href="../login.php"><input id="Submit" value="LOGIN" name="register" class="su"></a>
      

    </div>
  </form>





</body>

</html>
<?php
require "../includes/database.php";
// $userprofile=$_SESSION['useremail'];
// if($userprofile){
//   echo($userprofile);
// }
// else{
//     header('location:login.php');
// }


if (isset($_POST['register'])) {
  // print_r($_POST);
  $uname = $_POST['username'];
  $uemail = $_POST['email'];
  $uphone = $_POST['phone'];
  $utype = $_POST['type'];
  // if($uname!=''&& $uemail!=''&&$uphone!='' && $utype!=''){

  $sql = "insert into register (username,email,phone,type) values('$uname','$uemail','$uphone','$utype')";
  // echo $sql;
  // exit;
  $data = mysqli_query($conn, $sql);

  // print_r($_SESSION);die;

  // exit;
  if ($data) {
    if ($utype == 'o') {
    
header('location:/wecare/login.php');

    } elseif ($utype =='n') {

      header('Location:/wecare/login.php');
    }
  } else {
    echo "connection fail";
  }
}
// else{
//   echo"<p id='field'>Fill the items!!!</P>";
// 


?>