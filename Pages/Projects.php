<?php

    class WELCOMEUser
    {

        function getMessage(): string
        {

            $user = "to Projects";
            return "WELCOME " . $user;
        }

    }

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/main.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website | Projects</title>
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
            <a href="./AboutMe.php">About</a>
            <a target="_blank" href="../CustomFunctions/CountingDownDays.php">Birthday</a>

            <button id="dark">Dark</button>
            <button id="light">Light</button>

        </li>

    </ul>
</header>


    <main>

        <h2><?php echo new WELCOMEUser()->getMessage()?></h2>

    </main>

</body>
</html>
