<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio</title>
</head>
<body>
    <?php
    $importoIniziale = $_GET["importo"];
    $importo = $importoIniziale;
    $cambio = array("Dollaro" => 1.09 , "Yen" => 166.04 , "Franco" => 0.94  , "Sterlina" => 0.83);
    
    $giorni = array("Mon" => "Lunedì" , "Tue" => "Martedì" , "Wen" => "Mercoledì" , "Thu" => "Giovedì" , "Fri" => "Venerdì");


    $moneta = $_GET["valuta"];
    $valuta;


    $commWeek = 0.025;
    $commWeekEnd = 0.05;
    $conversione;

    $dataAtt = date("d-m-Y");
    $data = date("w"); //0 domenica, 6 sabato


    if ($data == 0 || $data == 6){
        $importo = $importo - ($importo * $commWeekEnd);
    }else{
        $importo = $importo - ($importo * $commWeek);
    }

    $commissione_applicata = $importoIniziale - $importo;

    switch($moneta){
        case "1":
        $conversione = $importo * $cambio["Dollaro"];
        $conversioneGenerale = $importoIniziale * $cambio["Dollaro"]; //senza commissioni applicate
        $valuta = "Dollaro";
        break;

        case "2":
        $conversione = $importo * $cambio["Yen"];
        $conversioneGenerale = $importoIniziale * $cambio["Yen"]; //senza commissioni applicate
        $valuta = "Yen";
        break;

        case "3":
        $conversione = $importo * $cambio["Franco"];
        $conversioneGenerale = $importoIniziale * $cambio["Franco"]; //senza commissioni applicate
        $valuta = "Franco";
        break;

        case "4":
        $conversione = $importo * $cambio["Sterlina"];
        $conversioneGenerale = $importoIniziale * $cambio["Sterlina"]; //senza commissioni applicate
        $valuta = "Sterlina";
        break;
    
    }

    $giorno = date("D"); // prime 3 lettere del giorno in inglese
 
    echo "
    <div style = 'text-align: center; background-color:aquamarine; width: 50%; margin: auto; border: 1px solid black' >
    <h1 style = 'color: red'>Cambio valuta da Euro a " . $valuta . "</h1>
    <h2>Data: " . $dataAtt . "</h1>
    <p>Giorno della settimana: " . $giorni[$giorno] . "</h2>
    <p>Importo in euro digitato: " . $importoIniziale . "€ </p>
    <img src= './images/it-flag.gif' width='10%'>
    <p>Importo cambiato di valuta: " . $conversioneGenerale . " </p>";
    
    switch($moneta){
        case "1":
           $image = "./images/us-flag.gif";
           break;
        
        case "2":
            $image = "./images/ja-flag.gif";
            break;
        
        case "3":
            $image = "./images/sz-flag.gif";
            break;
        
        case "4":
            $image = "./images/uk-flag.gif";
            break;
    }

    echo "<img src= '" . $image . " 'width='10%'>
          <p>Commissioni applicate in euro: " . $commissione_applicata . "</p>
          <p>Importo in nuova valuta (comm. appl.): <strong><h2>" . $conversione . "</h2></strong></p>
      
    </div>";
    

  

    ?>
</body>
</html>