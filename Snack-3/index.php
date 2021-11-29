
<?php
// generare 15 numeri casuali
// una volta verificata l'unicità pusharli negli array
$primoArray =[];
$secondoArray =[];


//avrei fatto una funzione ma non ci siamo ancora arrivati
for ($i=0; $i < 15; $i++) { 
    $num= random_int(0, 100);
    if(!in_array($num, $primoArray)){
        array_push($primoArray, $num);
    }else{
        $i--;
    }
}
for ($a=0; $a < 15; $a++) { 
    $num= random_int(0, 100);
    if(!in_array($num, $secondoArray)){
        array_push($secondoArray, $num);
    }else{
        $a--;
    }
}
/* var_dump($primoArray); */


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
        <ul >
            <h1>Primo array</h1>
            <?php 
            for ($i=0; $i < count($primoArray); $i++) { 
                echo "<li><h2>".$primoArray[$i]."</h2></li>";
            }
            ?>
        </ul>
        <ul >
        <h1>Secondo array</h1>

            <?php 
            for ($i=0; $i < count($secondoArray); $i++) { 
                echo "<li><h2>".$secondoArray[$i]."</h2></li>";
            }
            ?>
        </ul>
    </header>
</body>
</html>