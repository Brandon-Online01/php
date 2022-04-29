<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a string</title>
</head>
<body>
    <?php
        function reverse_string($str1){
            $n = strlen($str1);
                if($n == 1){
                    return $str1;
                }
                else{
                    $n--;
                    return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
                }
        }
        print_r(reverse_string('1234')."\n"."was reversed from 1234");
        //this is much short and cleaner 
        echo "<br/>";
        $string = "php can be fun but its a bit old now javascript is the best";  
        echo "Reversed string is => ".strrev( $string );  
    ?>
</body>
</html>