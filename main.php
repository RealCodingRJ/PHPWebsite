<?php
    include "Functions/Functions.php";

    $sample = new Sample();
    $sample->setName("Ryan Gregoire");

    $title = new Sample();
    $title->setName("Welcome To Website | Home");

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title->getName() ?></title>
</head>
<body>


    <h1>Welcome, <?php echo $sample->getName() ?></h1>
    <h2><?php echo $sample->getName()?></h2>

    <script src="TypeScript/main.js"></script>
</body>
</html>
