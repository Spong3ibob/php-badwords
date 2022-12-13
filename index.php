<?php
    $text = "Guarda che bella giornata che c'è oggi sarebbe propio bello andare a sciare.";
    $name = "bella";
    if (strpos($text,$name)===false) echo "Parola '$name' NON trovata";
    else echo "Parola '$name' trovata";
    $text_modificato=str_replace(["$name",],"***",$text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1> <?php echo $text; ?></h1>
    <h3>Lunghezza: <?php echo strlen($text); ?> </h3>
    <h1> <?php echo $text_modificato; ?></h1>
    <h3>Lunghezza nuova: <?php echo strlen($text_modificato); ?> </h3>


</body>
</html>