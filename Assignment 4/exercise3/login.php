<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/default.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <?php include "navbar.php"?>

    <div class="content">
        <form method="POST" action="login.php">
            <label>Username:</label>
            <input type="text" placeholder = "Enter username..." name = "username">
            <label>Password:</label>
            <input type="password" placeholder = "Enter password..." name = "password">
            <input type="submit" name="submit" id="submit">
            <?php include "scripts/login-validator.php"?>
    </div>
   
    <?php include "footer.php" ?>
    <script src="scripts/date.js"></script>
</body>
</html>