


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/default.css">
    <link rel="stylesheet" href="styles/create-account.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <?php include "navbar.php"?>

    <div class="content">
        <form method = "POST">
            <div name="username-group">
                <label for="username">Username: </label>
                <input type="text" name="username">
                <text id="username-rules">Username's may only contain letters and digits</text>
            </div>
            <div name="password-group">
                <label for="password">Password: </label>
                <input type="password" name="password">
                <text id="password-rules">Password's must have at least one letter,one digit, and may only contain letters and digits.</text>
            </div>
            <input type="submit" id="submit-button", name="submit-button">
        </form>
        <p><?php include 'scripts/login-validator.php'?></p>
    </div>
    
    <?php include "footer.php" ?>
    
</body>
</html>