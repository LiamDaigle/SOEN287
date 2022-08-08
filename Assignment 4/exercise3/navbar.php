<?php
    echo "<nav>",
    '<a href="index.php" id="home-link">Home</a>',
    '<a href="find.php">Find a Dog/Cat</a>',
    '<a href="dogcare.php">Dog Care</a>',
    '<a href="catcare.php">Cat care</a>';
    if(isset($_SESSION['username'])){
        echo '<a href="petgiveaway.php">Have a Pet to Give Away?</a>';    
    }
    else{
        echo '<a href="login.php">Have a Pet to Give Away?</a>';
    }
    
    echo '<a href="contact.php">Contact Us</a>',
    '<a href="create-account.php">Create an Account</a>',
    '<a href="logout.php">Log Out</a>',
    '</nav>';
?>