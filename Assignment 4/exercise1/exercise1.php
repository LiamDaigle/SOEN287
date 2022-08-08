<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise1</title>
    <link rel="stylesheet" href="exercise1.css">
</head>
<body>
    <h1 id='function-header'>
        <?php
            if(isset($_POST['submit-button-sum']))
                echo 'Sum Function';
            else if(isset($_POST['submit-button-first-last']))
                echo 'First/Last Upper Function';
            else
                echo 'Function Header';
        ?>
    </h1>
    <h2>
       <?php
            require __DIR__ . '/exercise1-functions.php';
            if(isset($_POST['submit-button-sum']) && isset($_POST['sum-array'])){
                $values = findAverage_and_Median([$_POST['sum-array']]);
                echo 'Average: ', $values[0], ' Median: ', $values[1];
            }
            else if(isset($_POST['submit-button-first-last']) && isset($_POST['first-last-string'])){
                echo uppercaseFirstandLast($_POST['first-last-string']);
            }
       ?>
    </h2>
    <br>
    <form method="POST">
        <label>Average/Median Function:</label>
        <input type='text' id='sum-array-id' name = 'sum-array' placeholder='Seperate numbers by commas'>
        <input type='submit' id='submit-button-sum-id' name = 'submit-button-sum'>
    </form>
    <br>
    <form method="POST">
        <label>Last and First Character To Upper Function:</label>
        <input type='text' id='first-last-string-id' name = 'first-last-string' placeholder = 'Input a string of words/characters'>
        <input type='submit' id='submit-button-first-last-id' name = 'submit-button-first-last'>
    </form>

    
</body>
</html>