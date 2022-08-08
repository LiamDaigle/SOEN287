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
        <?php
            session_destroy();
        ?>
        <h1>Successfully Logged Out</h1>
    </div>
    
    <?php include "footer.php" ?>
    
    <script src="scripts/date.js"></script>
</body>
</html>