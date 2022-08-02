<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/default.css">
    <link rel="stylesheet" href="styles/find.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <?php include "navbar.php"?>

    <div class="content">
        <form method="post">
            <label>Type of Pet:</label>
            <label>Dog</label><input type="radio" name="pet-type" id="dog">
            <label>Cat</label><input type="radio" name="pet-type" id="cat">
            <br><br>
            <label>Pet Breed:</label>
            <select name="breed">
                <option id="breed-black-lab">Black Lab (Dog)</option>
                <option id="breed-chocolate-lab">Chocolate Lab (Dog)</option>
                <option id="breed-golden-retriever">Golden Retriever (Dog)</option>
                <option id="breed-chihuahua">Chihuahua (Dog)</option>
                <option id="breed-basset-hound">Basset Hound (Dog)</option>
                <option id="breed-siamese">Siamese (Cat)</option>
                <option id="breed-persian">Persian (Cat)</option>
                <option id="breed-maine-coon">Maine Coon (Cat)</option>
                <option id="breed-bengal">Bengal (Cat)</option>
                <option id="breed-other">Does not matter</option>
            </select>
            <br><br>
            <label>Preffered Age: </label>
            <select name="age">
                <option id="age-0-1">0 - 1</option>
                <option id="age-1-2">1 - 2</option>
                <option id="age-2-3">2 - 3</option>
                <option id="age-3-6">3 - 6</option>
                <option id="age-6-8">6 - 8</option>
                <option id="age-8+">8+</option>
                <option id="age-other">Does not matter</option>
            </select>
            <br><br>
            <label>Preffered Gender: </label>
            <input type="radio" name="gender" id="gender-male">Male
            <input type="radio" name="gender" id="gender-female">Female
            <input type="radio" name="gender" id="gender-other">Other
            <br><br>
            <label>Gets Along With: </label>
            <input type="checkbox" name="get-along" id="get-along-dog">Dogs
            <input type="checkbox" name="get-along" id="get-along-cat">Cat
            <input type="checkbox" name="get-along" id="get-along-children">Children
            <br><br>
            <input type="submit" name="submit" id="submit-button">
            <input type="reset" name="reset" id="reset-button">
        </form>
    </div>
    
    <?php include "footer.php" ?>
    
    <script src="scripts/date.js"></script>
    <script src="scripts/find-validation.js"></script>
</body>
</html>