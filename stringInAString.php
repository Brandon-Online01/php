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
        $pattern = '/[^\w]fox\s/';
            if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')){
                echo "'fox' is present..."."\n";
            }else
                echo "'fox' is not present..."."\n";
    ?>
</body>
</html>