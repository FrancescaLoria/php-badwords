<?php 
$badWordValue = $_POST["badword"];
$textAreaValue = $_POST["paragh"];
$censuredText = str_replace( $badWordValue, "***",$textAreaValue);

?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h2>TESTO ORIGINALE</h2>
    <p> <?php echo $textAreaValue ?> </p>
    <h2>BADWORD: <?php echo $badWordValue ?> </h2>
    <h2>TESTO CENSURATO</h2>
    <p> <?php echo $censuredText ?></p>

</body>
</html>