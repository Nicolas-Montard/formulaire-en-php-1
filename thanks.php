<?php

$errors = [];


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['user_name'])|| trim($_POST['user_name']) === ''){
        $errors[] = 'vous devez renseigner votre nom <br>';
    }
    if(!isset($_POST['user_firstname'])|| trim($_POST['user_firstname']) === ''){
        $errors[] = 'vous devez renseigner votre prénom <br>';
    }
    if(!isset($_POST['user_email'])|| trim($_POST['user_email']) === ''){
        $errors[] = 'vous devez renseigner votre email <br>';
    }
    if(!isset($_POST['user_telephone'])|| trim($_POST['user_telephone']) === ''){
        $errors[] = 'vous devez renseigner votre numero de telephone <br>';
    }
    if(!isset($_POST['user_subject'])|| trim($_POST['user_subject']) === ''){
        $errors[] = 'vous devez renseigner votre sujet <br>';
    }
    if(!isset($_POST['user_message'])|| trim($_POST['user_message']) === ''){
        $errors[] = 'vous devez renseigner votre message <br>';
    }
     if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
         $errors[] =  'adresse email invalide <br>';
      }
    if(!empty($errors)){
        foreach($errors as $error){
            echo $error;
        }
    }
}

var_dump($errors)
?>

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
        if($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)):
        $name= $_POST["user_name"];
        $firstName= $_POST["user_firstname"];
        $email= $_POST["user_email"];
        $telephone= $_POST["user_telephone"];
        $subject= $_POST["user_subject"];
        $message= $_POST["user_message"]; ?>

<p>Merci <?=$firstName?> <?=$name?> de nous avoir contacté à propos de “<?=$subject ?>”. <br><br>
    
Un de nos conseillers vous contactera soit à l’adresse <?=$email?> ou par téléphone au <?=$telephone?> dans les plus brefs délais pour traiter votre demande : <br><br>

<?=$message?></p>
<?php endif ?>
    
</body>
</html>