<?php
    include "../Functions/Functions.php";

    $sample = new Sample();
    $sample->setName("Ryan Gregoire");

    $title = new Sample();
    $title->setName("Welcome To Website | Home");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mobile.css">
    <link rel="stylesheet" href="../styles/main.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website | About Me</title>
</head>
<body>

<header>
    <div>
        <h1>Welcome, <?php echo $sample->getName() ?></h1>
    </div>

    <ul>
        <li>
            <a target="_blank" href="../main.php">Home</a>
            <a target="_blank" href="./Projects.php">Projects</a>
            <a href="#">Contact</a>

            <button id="dark">Dark</button>
            <button id="light">Light</button>

        </li>

    </ul>
</header>

    <div class="wrapper">
        <p>Hello I am Ryan James, and I am a Developer using Thr Following</p>
        <ul>
            <li>1: PHP</li>
            <li>2: JavaScript</li>
            <li>3: TypeScript</li>
        </ul>
    </div>


</body>
</html>
