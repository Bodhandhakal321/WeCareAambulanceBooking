<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superadmin</title>
    <link rel="stylesheet" href="../superadmin/./css/index.css">
</head>
<style>
    

</style>
<body>
    <div class="container">
        <div class="navbar">
            <h3></h3>
            <a href="../user/logout.php">Logout</a>

        </div>
    </div>
    
    <div class="menu">
        
            <div class="menuitems">
                <a href="">Dashboard</a>
                <a href="">requests</a>
                <a href="">Orgination</a>
                <a href="">Normal</a>
            </div>
        </div>
        <div class="table">

            <table id="table"  width="80%">
                
                    <tr>
                        <th>SN.No</th>
                        <th>Organization/Personal Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Location</th>
                        
                        <th>View Details</th>
                    </tr>
                
    
                    
                
            
                <?php
                    require "../includes/database.php";
                    
                    $sql = "SELECT * FROM admin where verified = '0'";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_num_rows($query);
                    
                    if ($data != 0) {
                        while ($result = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?=$result['id']?></td>
                                <td><?=$result['oname']?></td>
                                <td><?=$result['oaddress']?></td>
                                <td><?=$result['ophone']?></td>
                                <td><?=$result['oemail']?></td>
                                
                                <td><a href="./orgdata.php?id=<?=$result['id']?>"><input type='submit' value='Details' class='details'></a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
            
        </body>
</html>
<?php
// require "../includes/database.php";


?>