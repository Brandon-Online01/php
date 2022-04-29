<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try a for Loop dude</title>
</head>
<body>
    <?php
    // my colors
        $color = array('white', 'green', 'red');
    //loop and display in a list 
        foreach ($color as $c)
            {
            echo "$c, ";
            }
                sort($color);
                echo "<ul>";

        foreach ($color as $y)
            {
            echo "<li>$y</li>";
            }
                echo "</ul>";
    ?>
</body>
</html>