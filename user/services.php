<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/services.css">
</head>
<body>
    <?php require '../includes/modal.php';?>   
    <div class="section">
        <div class="title">
            <h1>Our Services</h1>
        </div>
        <div class="services">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h2>Planning</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Id nam rerum quisquam provident sapiente voluptate error sequi totam et earum?</p>
                    <button class="button" onclick="openModal()">Read More</button>
                    
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-plus-square"></i>
                </div>
                <h2>User Interface</h2>
                <p>A user-friendly interface allows individuals or healthcare professionals to request an ambulance easily,
                     currently supporting web platform</p>
                    <button class="button" onclick="openModal('user interface','In future we will develop the mobile application for the ease of user')">Read More</button>
                    
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-handshake"></i> 
                </div>
                <h2>Support</h2>
                <p>The system allows users to make emergency requests for ambulance services. 
                    This can be done through various channels such as a dedicated hotline, mobile application, or online platform.</p>
                    <button class="button" onclick="openModal()">Read More</button>
                    
            </div>
        </div>
    </div>
    
</body>
</html>
