<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <div class="greeting">
            <?php echo "<h1>Hello " . $_SESSION['username'] . "</h1>"; ?>
        </div>
        <button type="button" class="logout" onclick="window.location.href='logout.php'">log out</button>
    </div>
</body>
</html>