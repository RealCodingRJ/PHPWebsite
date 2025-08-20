<?php

    function getAgeYears(int $years_old): int {

        return $years_old;
    }

    $date1 =new DateTime();
    $date2=new DateTime()->setDate(2025, 11, 17);

    $diff = date_diff($date1, $date2);

    if ($diff == $date2) {

        $result = trim(str_shuffle(strtoupper("Happy Birthday... You Are " .  1999 - new Date()->getDate())));
        $message = trim(str_shuffle(strtoupper("You Are: " . getAgeYears(25 + 1))));
        echo $result;
        echo $message;

    }
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Pages/styles/mobile.css">
    <link rel="stylesheet" href="../Pages/styles/main.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<header>
    <div>
        <h1></h1>
    </div>

    <ul>
        <li>
            <a target="_blank" href="../main.php">Home</a>
            <a target="_blank" href="">Contact</a>
            <a href="../Pages/AboutMe.php">About</a>
            <a target="_blank" href="CountingDownDays.php">Birthday</a>

            <button id="dark">Dark</button>
            <button id="light">Light</button>

        </li>

    </ul>
</header>


<h2>Birthday is in: <?php echo $diff->format("%a days")?></h2>

<script src="../ColorsButtons/DarkButtonColor.js"></script>
<script src="../ColorsButtons/LightButtonColor.js"></script>

</body>
</html>
