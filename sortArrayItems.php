<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort the countries dude</title>
</head>
<body>
    <?php
        $countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
        "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
        "Finland"=>"Helsinki", "France" => "Paris",
        "Slovakia"=>"Bratislava",) ;
        asort($countries);

        foreach($countries as $country => $capital){
            echo "The capital of $country is $capital"."<br/>" ;
        }
    ?>
</body>
</html>