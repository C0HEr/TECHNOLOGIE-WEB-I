<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>
<body>

    <?php

        function chack($_tinput) {
            if (gettype($_tinput) === 'string') {
                throw new Exception('the value is a string');
            } else {
                return $_tinput;
            }
        }
        
        try {
            echo chack('hello');
        } catch (Exception $e) {
            echo  $e->getMessage(), "\n";
        }


    ?>
</body>
</html>