<?php
require "../includes/database.php";

if (!isset($_GET['id'])) {
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept'])) {
        $verificationStatus = 1;
    } elseif (isset($_POST['decline'])) {
        $verificationStatus = 0;
    } else {
        exit;
    }

    $id = $_GET['id'];
    $sql = "UPDATE admin SET status = $verificationStatus WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        exit;
    }

    // Redirect to the same page after updating the status
    header("Location: {$_SERVER['PHP_SELF']}?id=$id");
    exit;
}

$sql = "SELECT * FROM admin WHERE id = " . $_GET['id'];
$query = mysqli_query($conn, $sql);
$data = mysqli_num_rows($query);

$result = mysqli_fetch_assoc($query);
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
    /* Styles for your HTML elements */
</style>

<body>
    <h1>Organation details form</h1>
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
                <p>Register Number:<?php echo $result['registernum']; ?></p>
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
        <form method="POST">
            <div>
                <button type="submit" name="accept" class="btn1">Accept</button>
            </div>
            <div>
                <button type="submit" name="decline" class="btn2">Decline</button>
            </div>
        </form>
    </div>

</body>

</html>
