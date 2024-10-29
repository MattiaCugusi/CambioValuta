<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio</title>
</head>
<body>
    <?php
    $importo = $_GET("importo");
    $cambio = array("Dollaro" => 1.08 , "Yen" => 166.04 , "Franco" => 0.94  , "Sterlina" => 0,83);
    
    const $commWeek = 0.025;
    const $commWeekEnd = 0.05;

    $data = date("d-m-Y");

    ?>
</body>
</html>