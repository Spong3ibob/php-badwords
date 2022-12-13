<?php
    $text = "Guarda che bella giornata che c'è oggi sarebbe propio bello andare a sciare.";
    $text2 = "Scrivi qui la tua password ";

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
    <h1> <?php echo $text2, "***"; ?></h1>
    <h3>Lunghezza: <?php echo strlen($text2); ?> </h3>
    <h3>Password: <?php echo strlen($_GET["name"]); ?></h3>


</body>
</html>