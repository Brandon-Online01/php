<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100&display=swap');
    * {
        box-sizing: border-box;
    }
    body {
        font-family: 'Montserrat', sans-serif;
    }
    .container {
        text-align: center;
        float: left;
        padding: 3em;
        width: 50%;
    }
    .result  {
        float: right;
        margin-top: 3em;
        text-align: left;
        width: 50%;
    }
    .form-group {
        margin: 2em 0 2em 0;
        display: block;
    }
    label {
        margin: 1em 0 1em 0;
        font-size: 1.5em;
    }
    input {
        border: 1px solid #a0a0a0;
        border-radius: .2em;
        padding: 1em;
        width: 50%; 
        margin: 1em 0 1em 0;
    }
    input::placeholder {
        font-style: italic;
        font-size: 1.3em;
    }
    input:hover{
        border: 1px solid #f10000;
    }
    input:focus{
        outline: none;
        border: 1px solid #f10000;
    }
    button {
        height: 2em;
        font-size: 1.4em;
        cursor: pointer;
        border: 1px solid #f10000;
        border-radius: .2em;
    }
</style>
<body>
    <div class="container">
        <form action="captureAndDIsplayFormValues.php" method="post">
        <div class="form-group">
            <label for="name">Username</label>
            <br/>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <br/>
            <input type="text" name="password" placeholder="*************">
        </div>
        <button>Submit</button>
    </form>
    </div>
    <div class="result">
        The form data below
        <?php

            function pre_r($array) {
                echo "<pre>";
                    print_r($array);
                echo "</pre>";
                }
            
                pre_r($_POST);
        ?>
    </div>
</body>
</html>
