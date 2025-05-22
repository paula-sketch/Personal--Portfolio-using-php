<?php
// Single-line comment: This is a basic PHP portfolio

/*
 Multi-line comment:
 This file shows basic PHP syntax and integration
 with front-end code (HTML, CSS, JavaScript)
*/

$name = "Ma. Paula A. Guevarra";          // String
$age = 20;                      // Integer
$height = 4.9;                  // Float
$isStudent = true;             // Boolean

$intro = "Hello, my name is " . $name . ". Welcome to my portfolio!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?>'s Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $name; ?></h1>
        <nav>
            <a href="#about">About Me</a>
            <a href="#hobbies">Hobbies</a>
            <a href="#favorites">Favorites</a>
        </nav>
    </header>

    <main>
        <section id="intro">
            <h2>Welcome</h2>
            <p><?php echo $intro; ?></p>
            <p>I am <?php echo $age; ?> years old and <?php echo $height; ?> feet tall.</p>
            <p>Status: <?php echo $isStudent ? "Currently a student." : "Not a student."; ?></p>
        </section>

        <section id="about">
            <h2>About Me</h2>
            <p>I am passionate about the things i love to do. I enjoy building creative and responsive websites.</p>
        </section>

        <section id="hobbies">
            <h2>Hobbies</h2>
            <ul>
                <li>Painting</li>
                <li>Watching movies</li>
                <li>Reading wattpad books</li>
            </ul>
        </section>

        <section id="favorites">
            <h2>Favorites</h2>
            <?php
                $favoriteColor = "Pink & Yellow";
                $favoriteNumber = 22;
                $likesMusic = true;
            ?>
            <p>Favorite Color: <?php echo $favoriteColor; ?></p>
            <p>Favorite Number: <?php echo $favoriteNumber; ?></p>
            <p>Music Lover: <?php echo $likesMusic ? "Yes!" : "No."; ?></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
