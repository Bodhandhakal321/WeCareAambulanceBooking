<?php

require "../includes/database.php";
if(isset($_SESSION['userid'])){

    $id = $_SESSION["userid"];
    $query = "select * from register where id='$id'";
    
    $data = mysqli_query($conn, $query);
    
    $result = mysqli_fetch_assoc($data);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        /* background: linear-gradient(right , #3a7bd5, #3a6073); */
        font-family: sans-serif;
        /* background-color: skyblue; */
        
    }
    /* .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .center button{
        padding:10px 20px;
        font-size: 15px;
        font-weight: 600;
        color: #222;
        background: #f5f5f5;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 5px;

    } */
    .popup{
        position: absolute;
        top: -150%;
        left: 50%;
        opacity:0;
        transform: translate(-50%,-50%) scale(1.25);
        width: 380px;
        padding: 20px 30px;
        background: lightgrey;
        box-shadow:2px 2px 5px 5px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
        transition: top 0ms ease-in-out 200ms, 
                    opacity 200ms ease-in-out 0ms,
                    transform 20ms ease-in-out 0ms;
        
    }
    .popup.active{
        top: 50%;
        opacity:1;
        transform: translate(-50%,-50%) scale(1);
        transition: top 0ms ease-in-out 0ms, 
                    opacity 200ms ease-in-out 0ms,
                    transform 200ms ease-in-out 0ms;
        

    }
    .popup .close-btn{
        position: absolute;
        top:10px;
        right: 10px;
        width: 15px;
        height: 15px;
        background: #888;
        color: #eee;
        text-align: center;
        line-height: 15px;
        border-radius: 15px;
        cursor: pointer;


    }
    .popup .form h2{
        text-align: center;
        color: #222;
        margin: 10px 0px 20px;
        font-size:25px;
    
    }
    .popup .form .form-element{
        font-size: 14px;
        color: #222;
    }
    .popup .form .form-element input[type="text"],
    .popup .form .form-element input[type="number"]{
        margin-top: 5px;
        display: block;
        width: 100%;
        padding: 10px;
        outline: none;
        border: 1px solid #aaa;
        border-radius: 5px;


    }
    .update {
        padding: 10px;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #e7214f9c;
        border: none;
        outline: none;
        border-radius: 5px;
        cursor: pointer;
        color: #fefefe;
    }

    .update:hover {
        background: lightblue;
    }
    
    h2 {
    border-bottom: 2px solid gray;
}


</style>
<body>
    
    <div class="popup">
        <div class="close-btn">&times;</div>
        <div class="form">
            <form action="" method="post">

                <h2>profile</h2>
                <div class="form-element">
                        <label for="user">User Name:</label>
                        <input type="text" class="in" placeholder="your username" id="uname" value="<?php echo $result['username']; ?>" name="username" required />
                    


                        <div class="form-element">
                            <label for="user">Email:</label>
                        <input type="text" class="in" id="email" placeholder="your email" value="<?php echo $result['email']; ?>" name="email" required />
                    </div>


                    
                    <div class="form-element">
                        <label for="user">Phone:</label>
                        <input type="number" class="in" id="phone" placeholder="your Phone" name="phone" value="<?php echo $result['phone']; ?>" required />
                    </div>
                    <input type="submit" value="Update" class="update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
    <script>	
    document.querySelector("#profile").addEventListener("click",function openprofile(){
        document.querySelector(".popup").classList.add("active");
    });
    document.querySelector(".close-btn").addEventListener("click",function openprofile(){
        document.querySelector(".popup").classList.remove("active");
    });


    
    </script>
   
</body>
</html>
<?php
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "Update register set username='$username',email ='$email',phone ='$phone' where id ='$id'";
    // echo "$sql";
    // exit;
    $data = mysqli_query($conn, $sql);
}


?>