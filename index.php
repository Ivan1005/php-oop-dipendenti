<?php
require_once 'classi/Dipendenti.php';
require_once 'classi/CapiReparto.php';
require_once 'classi/Facchini.php';


$dipendente1 = new Dipendenti('franco','trentalanci','mttvni6767','sda7788ds');
var_dump($dipendente1);
echo $dipendente1->getIban();


echo $stanzaSuperior->getContratto();

$facco = new Facchini ('joenny','sins','mttvni6767','sda7788ds','809e');
echo $facco->getBolla();

$boss = new CapiReparto ('rocco','siffrdi','mttvni6767','sda7788ds','azzuz');
