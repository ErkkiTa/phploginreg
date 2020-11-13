<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tervist!</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="form">
        <p>Nüüd olete sisse logitud <?php echo $_SESSION['username']; ?>!</p>
        <p>This is secure area.</p>
        <a href="logout.php">Logi välja</a>
    </div>
</body>
</html>