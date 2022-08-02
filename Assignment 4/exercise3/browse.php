<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/default.css">
    <link rel="stylesheet" href="styles/browse.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <?php include "navbar.php"?>

    <div class="content">
        <table class="pet-table">
            <tr>
                <td class="cell">
                    <img src="styles/images/black_lab.jpg">
                    <p>
                        Type: Dog<br>
                        Breed: Black Lab<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </td>
                <td class="cell">
                    <div class="cell-div">
                    <img src="styles/images/chocloate_lab.jpg">
                    <p>
                        Type: Dog<br>
                        Breed: Chocolate Lab<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </div>
                </td>
                <td class="cell">
                    <img src="styles/images/golden_retriever.jpg">
                    <p>
                        Type: Dog<br>
                        Breed: Golden Retriever<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </td>
            </tr>
            <tr>
                <td class="cell">
                    <img src="styles/images/persian_cat.jpg">
                    <p>
                        Type: Cat<br>
                        Breed: Persian<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </td>
                <td class="cell">
                    <img src="styles/images/maine_coon.jpg">
                    <p>
                        Type: Cat<br>
                        Breed: Maine Coon<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </td>
                <td class="cell">
                    <img src="styles/images/bengal_cat.png">
                    <p>
                        Type: Cat<br>
                        Breed: Bengal<br>
                        Age: 2<br>
                        Gender: Male<br>
                        Gets along with Dogs, Cats, Children
                    </p>
                    <button>Interested</button>
                </td>
            </tr>
        </table>
        <br><br><br><br><br><br><br>
    </div>
    
    <?php include "footer.php" ?>
    
    <script src="scripts/date.js"></script>
</body>
</html>