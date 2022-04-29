<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Prime or not</title>
</head>
<body> 
    <?php
        function IsPrime( $n )
        {
        for($x = 2; $x < $n; $x++ )
        {
            if($n %$x == 0)
                {
                return 0;
                }
            }
        return 1;
        }
        $a = IsPrime( 5 );
        if ( $a == 0 ) 
        echo 'This is not a Prime Number.....'."\n";
        else
        echo 'This is a Prime Number..'."\n";
    ?>
</body>
</html>