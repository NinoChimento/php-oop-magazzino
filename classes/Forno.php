<?php
  require_once __DIR__ . "/Prodotto.php";
  require_once __DIR__ ."/traits.php";
  /**
   *
   */
  class Forno extends ProdottoTech
  {
    use scontistica;
    public $temperaturaMassima;
    public $tipologiaDICOttura;
    public $classeEnergetica;
    function __construct($_marca,$_modello,$_prezzo,$_classeEnergetica)
    {
      $this->marca = $_marca;
      $this->modello = $_modello;
      $this->prezzo = $_prezzo;
      $this->classeEnergetica =$_classeEnergetica;
    }
    public function calcTemperatura($_time,$_gradi)
    {
      return $this->temperaturaMassima = $_gradi / $_time;
    }
  }
  $microonde = new Forno("roventa","mios",50,"A+");
  var_dump($microonde);
  $microonde->calcTemperatura(2,200);
  $microonde->calcPrezzoScontato(30,400);
  var_dump($microonde);
 ?>
