
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/default.css">
    <link rel="stylesheet" href="styles/petgiveaway.css">
</head>
<body>
    <?php include 'header.php'; ?>  

    <?php include "navbar.php"?>

    <div class="content">
        <form method="post">
            <label>Pet type: </label>
            <label>Dog</label><input type="radio" name="pet-type" id="dog">
            <label>Cat</label><input type="radio" name="pet-type" id="cat">
            <br><br>
            <label>Breed of Dog/Cat: </label>
            <input type="text" placeholder="Breed" id="breed-text">
            <br><br>
            <label>Age of Pet: </label>
            <select name="age">
                <option id="age-0-1">0 - 1</option>
                <option id="age-1-2">1 - 2</option>
                <option id="age-2-3">2 - 3</option>
                <option id="age-3-6">3 - 6</option>
                <option id="age-6-8">6 - 8</option>
                <option id="age-8+">8+</option>
            </select>
            <br><br>
            <label>Pet Gender: </label>
            <input type="radio" name="gender" id="gender-male">Male
            <input type="radio" name="gender" id="gender-female">Female
            <br><br>
            <label>Gets along with: </label>
            <input type="checkbox" name="get-along" id="get-along-dog">Dogs
            <input type="checkbox" name="get-along" id="get-along-cat">Cats
            <input type="checkbox" name="get-along" id="get-along-children">Children
            <br><br>
            <label>About the dog:</label><br>
            <textarea name="about-pet" id="about-pet" placeholder="Enter text here..."></textarea>
            <br><br>
            <label>First Name: </label>
            <input type="text" name="name" id="name-first">
            <label>Last Name: </label>
            <input type="text" name="name" id="name-last">
            <br><br>
            <label>Current Owner's Email: </label>
            <input type="email" name="email" id="email-owner">
            <br><br>
            <input type="submit" name="submit" id="submit-button">
            <input type="reset" name = "reset" id="reset-button">
        </form>
    </div>
    
    <?php include "footer.php" ?>
    
    <script src="scripts/date.js"></script>
    <script src="scripts/petgiveaway-validation.js"></script>
</body>
</html>