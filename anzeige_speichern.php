<?php 

require_once 'class/fahrzeug.class.php';

if (isset($_POST['modell'])) {

  $auto = new Fahrzeug();

  $autoDaten = [
    'mark' => $auto->cleanString($_POST['title']),
    'modell' => $auto->cleanString($_POST['modell']),
    'color' => $auto->cleanString($_POST['color']),
    'mileage' => $auto->cleanString($_POST['mileage']),
    'price' => $auto->cleanString($_POST['price']),
    'transmission' => $auto->cleanString($_POST['transmission']),
    'tankVolume' => $auto->cleanString($_POST['tankVolume']),
    'consumption' => $auto->cleanString($_POST['consumption']),
  ];

  // $auto->__construct($autoDaten);
  $auto->saveData('data/anzeigen.php', $autoDaten);

  header('Location: anzeige_aufgegeben.php');

}

// header('HTTP/1.0 404 Not Found');
echo 'Anzeige wurde nicht gespeichert.';
header('refresh:3 url=fahrzeug_anzeige_erstellen.php');