<?php
    include "Functions/Functions.php";
    include "Functions/Dates.php";

    $sample = new Sample();
    $sample->setName("Ryan Gregoire");

    $title = new Sample();
    $title->setName("Welcome To Website | Home");

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Pages/styles/main.css">
    <link rel="stylesheet" href="Pages/styles/mobile.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title->getName() ?></title>
</head>
<body>

    <header>
        <div>
            <h1>Welcome, <?php echo $sample->getName() ?></h1>
        </div>

        <ul>
            <li>
                <a target="_blank" href="main.php">Home</a>
                <a target="_blank" href="./Pages/Projects.php">Projects</a>
                <a href="./Pages/AboutMe.php">About</a>
                <a target="_blank" href="CustomFunctions/CountingDownDays.php">Birthday</a>

                <button id="dark">Dark</button>
                <button id="light">Light</button>

            </li>

        </ul>
    </header>

    <div class="container">
        <h2 id="el"><?php echo $sample->getName()?></h2>
        <h3 id="date"><?php new Date()->getDate()?></h3>
        <button id="button" onclick="">Click Me See Message</button>

    </div>

    <footer>
        <div>
            <p>&copy 2025 | Ryan James </p>
        </div>
    </footer>

    <script src="TypeScript/main.js"></script>
    <script src="ColorsButtons/DarkButtonColor.js"></script>
    <script src="ColorsButtons/LightButtonColor.js"></script>

</body>
</html>
