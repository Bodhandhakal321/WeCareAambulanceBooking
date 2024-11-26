<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>
<div class="register-box">
            <div class="register-items">
                <h1>Register Ambulance</h1>

                <div class="labeltag">

                    <label for="name">Ambulance </label>
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
                
                
                <div class="btn">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </div>

            </div>

        </div>
</body>
</html>