<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$userAge = $_GET["age"];
$age = intval($userAge);
$mailPart = explode( "@", $mail);
$mailDot = strstr($mailPart[0], ".");
$mailAt = strstr($mail, "@");

if((strlen($name) >= 3) && ($age > 0)){
    if($mailDot && $mailAt){
        echo "ACCESSO RIUSCITO";
    }else{
        die("ACCESSO NEGATO");
    }
}else{
    die("ACCESSO NEGATO");
}


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
    <header>
        <h1><?php echo "nome: $name" ?></h1>
        <h1><?php echo "mail: $mail" ?></h1>
        <h1><?php echo "età: $age" ?></h1>
        
    </header>
</body>
</html>