<?php

    function getAgeYears(int $years_old): int {

        return $years_old;
    }

    $date1 =new DateTime();
    $date2=new DateTime()->setDate(2025, 11, 17);

    $diff = date_diff($date1, $date2);

    if ($diff == $date2) {

        echo "Happy Birthday... You Are " . 1999 - new Date()->getDate();
        echo "You Are: " . getAgeYears(25 + 1);

    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Birthday is in: <?php echo $diff->format("%a days")?></h2>

</body>
</html>
