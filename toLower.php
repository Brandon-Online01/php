<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Name = "Short Php dude ";
        $NewName = strtolower($Name);

        echo $NewName;

        echo "<br/>";

        $secondName = "the quick but lazy dog did something i can't tell you";
        $NewSecondName = strtoUpper($secondName);

        echo $NewSecondName;
    ?>
</body>
</html>