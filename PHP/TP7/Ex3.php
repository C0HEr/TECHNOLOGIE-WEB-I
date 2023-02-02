<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
        <h3>Login Form</h3>
        <label>Username: </label>
        <input type='text' name='userInput'><br/><br/>
        <label>Password: </label>
        <input type='password' name='pwdInput'><br/><br/>
        <input type='submit' value='Login' name='submitInput'>
        <input type='reset' value='Clear' name='clearInput'>
    </form>
    <?php 
         /*if(isset($_REQUEST['submitInput'])) {
             if(strlen($_REQUEST['userInput']) < 6 && strlen($_REQUEST['pwdInput']) < 6 ) {
                 echo "Le nome et le mots de passe doivent comporter au moins 6 caractères.";
             } else {
                 echo "Le nome et le mots de passe comporter par plus de 6 caractères.";
             }
         }*/

        if(isset($_POST['submitInput'])) {
            if(valid_input(strlen($_POST['userInput'])) < 6 && valid_input(strlen($_POST['pwdInput']) < 6 )) {
                echo "Le nome et le mots de passe doivent comporter au moins 6 caractères.";
            } else {
                echo "Le nome et le mots de passe comporter par plus de 6 caractères.";
            }

            echo '<br/>'. valid_input($_POST['userInput']) .' : '. valid_input($_POST['pwdInput']) .'<br/>';
        }


        /*if(isset($_GET['submitInput'])) {
            if(strlen($_GET['userInput']) < 6 && strlen($_GET['pwdInput']) < 6 ) {
                echo "Le nome et le mots de passe doivent comporter au moins 6 caractères.";
            } else {
                echo "Le nome et le mots de passe comporter par plus de 6 caractères.";
            }
        }*/


        function valid_input($data) {
          /*  $data = trim($data);
            $data = stripcslashes($data);*/
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>