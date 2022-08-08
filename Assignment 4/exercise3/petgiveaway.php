
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
        <form method="post" action="petgiveaway.php" enctype ="multipart/form-data">
            <label>Pet type: </label>
            <label>Dog</label><input type="radio" name="pet-type" id="dog" value="Dog">
            <label>Cat</label><input type="radio" name="pet-type" id="cat" value="Cat">
            <br><br>
            <label>Breed of Dog/Cat: </label>
            <input type="text" placeholder="Breed" id="breed-text" name="breed">
            <br><br>
            <label>Age of Pet: </label>
            <input type = "text" name="age">
            <br><br>
            <label>Pet Gender: </label>
            <input type="radio" name="gender" id="gender-male" value="Male">Male
            <input type="radio" name="gender" id="gender-female" value="Female">Female
            <br><br>
            <label>Gets along with: </label>
            <input type="checkbox" name="get-along[]" id="get-along-dog" value="Dogs">Dogs
            <input type="checkbox" name="get-along[]" id="get-along-cat" value="Cats">Cats
            <input type="checkbox" name="get-along[]" id="get-along-children" value="Children">Children
            <br><br>
            <label>About the dog:</label><br>
            <textarea name="about-pet" id="about-pet" placeholder="Enter text here..."></textarea>
            <br><br>
            <label>First Name: </label>
            <input type="text" name="name-first" id="name-first">
            <label>Last Name: </label>
            <input type="text" name="name-last" id="name-last">
            <br><br>
            <label>Current Owner's Email: </label>
            <input type="email" name="email" id="email-owner">
            <br><br>
            <label>Upload Picture of Pet: </label>
            <input type="file" name = "picture" id = "picture">
            <br><br>
            <input type="submit" name="submit" id="submit-button">
            <input type="reset" name = "reset" id="reset-button">
        </form>

        <?php include "scripts/animal-submit.php"?>

    </div>
    
    <?php include "footer.php" ?>
    
    <script src="scripts/date.js"></script>
    <script src="scripts/giveaway-validation.js"></script>
</body>
</html>