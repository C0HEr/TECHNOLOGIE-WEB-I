<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
</head>
<?php 
    
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $image = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $image;

    $size_file = ($_FILES["file"]["size"]) / 1000;

    $uploadOk = 0;

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $ex = array("jpg","png","jpeg","gif");
    //echo in_array($imageFileType,$ex,TRUE);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check != false) {
        if($size_file >= 1 ){
            $uploadOk = 1;
        }
        else {
            echo "Size > 1 Mo";
            $uploadOk = 0;
        }
            

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        } else {
            $uploadOk = 1;
        }
            
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if($uploadOk === 1){
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "Le fichier est upload !!!";
    } 
}


// Set cookies variables

setcookie('Cookies', 'CookiesVal',(time() + 3600 * 24 * 10),'/','localhost',true,true);

// Set session variables

$_SESSION["name"] = "user";

?>

<body>
    <form action="#" method='POST' enctype="multipart/form-data">
        <fieldset>
            <legend> Upload file : </legend>
            <input type="file" name="file">
            <input type="submit" name="submit" value="Envoyer">
        </fieldset>
    </form>
    <br/>
    <a href="page2.php"> Page 1</a>
</body>
</html>