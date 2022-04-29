<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <button onClick=randomPassword()>Generate a Random Password</button> -->
    <?php
        //generate a random password by using number and passwords  
        function randomPassword(){
            $password = "";
            $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
            $max = count($characters) - 1;
            for ($i = 0; $i < 8; $i++) {
                $password .= $characters[mt_rand(0, $max)];
            }
            return $password;
            console.log($password);
        }
        //come back and fix this so that the psw is generated from a button click 
        $x = rand(10e12, 10e16);
        echo base_convert($x, 10, 36)." is your strong password \n";
    ?>
</body>
</html>