<?php
require_once __DIR__ . './prodotti/Cibo.php';
require_once __DIR__ . './prodotti/Gioco.php';
require_once __DIR__ . './prodotti/Cuccia.php';
require_once __DIR__ . '/Validatore.php';


// $croccantini = new Cibo('CROCCANTINI', 1.2, '100', 'Cane');
$palla = new Gioco('Palla', '4.99', 'Cane', 'Gomma');

$cuccie = [
    [
        "titolo" => "Cuccia Wow",
        "prezzo" => "15.99",
        "altezza" => "150 cm",
        "larghezza" => "180 cm",
        "profondita" => "120cm",
        "materiale" => "Acciaio",
        "animale" => "Cane",
        "cover" => "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1781223459"

    ],
    [
        "titolo" => "Cuccia Mega",
        "prezzo" => "15.99",
        "altezza" => "150 cm",
        "larghezza" => "180 cm",
        "profondita" => "120cm",
        "materiale" => "Acciaio",
        "animale" => "Gatto",
        "cover" => "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1781223459"

    ],
    [
        "titolo" => "Cuccia Zeus",
        "prezzo" => "15.99",
        "altezza" => "150 cm",
        "larghezza" => "180 cm",
        "profondita" => "120cm",
        "materiale" => "Acciaio",
        "animale" => "Cane",
        "cover" => "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1781223459"

    ]
];

$cibi = [
    [
        "titolo" => "Panino Wow",
        "prezzo" => "15.99",
        "peso" => "200",
        "animale" => "Gatto",
        "cover" => "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1682695180/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno"
    ],
    [
        "titolo" => "Carne Wow",
        "prezzo" => "15.99",
        "peso" => "200",
        "animale" => "Cane",
        "cover" => "https://petgreen.shop/media/catalog/product/cache/a8f52adc57a106b2558dcaca7a8745d6/u/l/ultra_eenregy_web_.jpg"
    ],
    [
        "titolo" => "Carne Wow",
        "prezzo" => "15.99",
        "peso" => "200",
        "animale" => "Cane",
        "cover" => null,
    ]
];


$CuccieClasslist = [];
foreach ($cuccie as $cuccia) {
    $cucciaClass = new Cuccia(
        _titoloProdotto: $cuccia['titolo'],
        _prezzoProdotto: $cuccia['prezzo'],
        _materiale: $cuccia['materiale'],
        _altezza: $cuccia['altezza'],
        _profondita: $cuccia['profondita'],
        _larghezza: $cuccia['larghezza'],
        _animale: $cuccia['animale'],
        _cover: $cuccia['cover']
    );
    $CuccieClasslist[] = $cucciaClass;
}

$CiboListClas = [];

foreach($CiboListClas as $cibo){
    try{
        if($cibo->ControllImmage() != true){
            echo 'ottimo';
        }
    }catch(Validatore $e){
        echo '<p> errore in :'.$e->getMessage().'</p>';
    }
    
}


foreach ($cibi as $cibo) {
    $ciboClass = new Cibo(_titoloAlimento: $cibo['titolo'], _prezzoProdotto: $cibo['prezzo'], _PesoAlimento: $cibo['peso'], _animale: $cibo['animale'], cover: $cibo['cover']);
    $CiboListClas[] = $ciboClass;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-">
            <h4>Le nostre Casette</h4>
            <ul class="list-group list-group-flush lista-cuccie">
                <?php
                foreach ($CuccieClasslist as $CucciaS) {
                ?>
                    <li class="list-group-item card-cuccia">
                        <div class="card " style="height:100%;">
                            <img class="logo" src="<?php echo $CucciaS->getImmagineAnimal() ?>" alt="">
                            <img src="<?php echo $CucciaS->getImmagineProdotto() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $CucciaS->getTitoloProdotto() ?></h5>
                                <p><?php echo $CucciaS->getPrezzoProdotto() ?></p>
                                <p><?php echo $CucciaS->getMateriale() ?></p>
                                <p> Altezza: <?php echo $CucciaS->getAltezza() ?>
                                    Larghezza: <?php echo $CucciaS->getLargezza() ?>
                                    Profondità: <?php echo $CucciaS->getProfondita() ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php
                } ?>

            </ul>
        </div>
        <div class="col-">
            <h4>I Suoi Spuntini</h4>
            <ul class="list-group list-group-flush lista-cuccie">
                <?php
                foreach ($CiboListClas as $Cibos) {
                ?>
                    <li class="list-group-item card-cuccia">
                        <div class="card">
                            <img class="logo" src="<?php echo $Cibos->getImmagineAnimal() ?>" alt="">
                            <div class="container-img">
                                <img src="<?php echo $Cibos->getImmagineProdotto() ?>" class="card-img-top alimento-img" alt="">
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $Cibos->getTitoloProdotto() ?></h5>
                                <p>Prezzo: <?php echo $Cibos->getPrezzoProdotto() ?></p>
                                <p> Peso <?php echo $Cibos->getPesoAlimento() ?> G</p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
        </div>
    </div>
</body>

</html>