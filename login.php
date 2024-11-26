<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<style>
  body {
    background: linear-gradient(rgba(69, 108, 226, 0.566),
        rgba(173, 58, 94, 0.615));
    background-repeat: no-repeat;

    background-size: cover;
    height: 100vh;
  }

  .container {
    display: flex;
    justify-content: center;
    max-width: 500px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.323);
    margin: 2rem auto;
    padding: 30px;
    border: none;
    border-radius: 10px;
  }

  .item2 {
    width: 100%;
  }

  .item2 h1 {
    display: flex;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 30px;
    border-bottom: 2px solid grey;

  }

  .in1 input {
    margin-left: 2rem;
    width: 15rem;
    padding: 5px;
  }

  .item2 .btn {
    background-color: green;
    border: none;
    outline: none;
    padding: 10px;
    color: white;
    border-radius: 5px;
    width: 30%;
    margin-top: 15px;
    margin-left: 7.5rem;
    cursor: pointer;
  }

  .item2 .btn:hover {
    background: lightslategrey;

  }

  .in2 {
    margin-left: 6rem;
  }

  .in2 a {
    text-decoration: none;
    margin-left: 2rem;
    font-size: 17px;
  }

  #fail {
    display: flex;
    justify-content: center;
    font-size: 20px;
    color: darkred;
  }
</style>

<body>
  <div class="container">
    <!-- <div class="item1">
  <p>Book Ambulance Services <br>
for event with Best <i>Facility.</i></p>
</div> -->
    <form method="post">
      <div class="item2">

        <h1>Login</h1>
        <div class="in1">
          <input type="text" placeholder="Email" name="userm" required autocomplete="off">
        </div> <br> <br>
        <div class="in1">
          <input type="number" placeholder="Userphone.No" name="phone" required autocomplete="off">
        </div>
        <input type="submit" value="LOGIN" class="btn" name="login">
        <div class="in2">

          <p>If you are New Member</p>
          <a href="./user/register.php">SignUp</a>
        </div>
      </div>  
  </div>
  </form>
</body>

</html>
<?php
require "./includes/database.php";

if (isset($_POST['login'])) {
  $usermail = $_POST["userm"];
  $userphone = $_POST["phone"];
  
  $query = "SELECT * from register  WHERE email= '$usermail' && phone ='$userphone'";

  $data = mysqli_query($conn, $query);

  $record = mysqli_fetch_assoc($data);
  $total = mysqli_num_rows($data);

  // var_dump($record);
  // exit;

  // echo"$result";
  if ($total == 1) {
    $_SESSION['useremail'] = $record["email"];
    $_SESSION['userid'] = $record["id"];
    $_SESSION['username'] = $record["username"]; 
    $_SESSION['type'] = $record["type"];
    $_SESSION['superadmin'] = $record["superadmin"];

    if($record["type"]=='o'){
      if($record["superadmin"]==1){

header('location:./superadmin/');


      }
      else{

        header('location:./org/reg2.php');
      }
    }
    else if($record["type"]=='n'){

      header('location:./user/das.php');
    
    }
  } 
 
  

  
  else {
    echo "<p id='fail'>fail to login!!</p>";
  }
}

?>