<?php
$name= $_POST["user_name"];
$firstName= $_POST["user_firstname"];
$email= $_POST["user_email"];
$telephone= $_POST["user_telephone"];
$subject= $_POST["user_subject"];
$message= $_POST["user_message"];
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
    <p>Merci <?=$firstName?> <?=$name?> de nous avoir contacté à propos de “<?=$subject ?>”. <br><br>
    
Un de nos conseillers vous contactera soit à l’adresse <?=$email?> ou par téléphone au <?=$telephone?> dans les plus brefs délais pour traiter votre demande : <br><br>

<?=$message?></p>
    
</body>
</html>