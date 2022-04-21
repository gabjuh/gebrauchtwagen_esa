<?php 


require_once 'traits/dateibehandlung.trait.php';


class Fahrzeug {

  use Dateibehandlung;

  protected $modell = '';
  protected $color = '';
  protected $mileage = 0;
  protected $price = 0;
  protected $transmission = '';
  protected $tankVolume = 0;
  protected $consumption = 0.0;

  public function __construct(array $daten = []) {
    $this->setDaten($daten);
  }

  public function setDaten(array $daten) {
    if ($daten) {
      foreach ($daten as $key => $val) {
        $setterName = 'set' . ucfirst($key);
        if (method_exists($this, $setterName)) {
          $this->$setterName($val);
        }
      }
    }
  }

  public function setModell($modell) {
    $this->modell = $modell;
  }

  public function getModell() {
    return $this->modell;
  }

  public function setColor($color) {
    $this->color = $color;
  }

  public function getColor() {
    return $this->color;
  }

  public function setMileage($mileage) {
    $this->mileage = $mileage;
  }

  public function getMileage() {
    return $this->mileage;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setTransmission($transmission) {
    $this->transmission = $transmission;
  }

  public function getTransmission() {
    return $this->transmission;
  }

  public function setTankVolume($tankVolume) {
    $this->tankVolume = $tankVolume;
  }

  public function getTankVolume() {
    return $this->tankVolume;
  }

  public function setConsumption($consumption) {
    $this->consumption = $consumption;
  }

  public function getConsumption() {
    return $this->consumption;
  }

  
  public function getRange() {
    return $this->getTankVolume() / $this->getConsumption() * 100;
  }




}