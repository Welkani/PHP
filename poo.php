
<?php 
class Voiture {
    private $_marque;
    private $_modele;
    private $_km;
    public $couleur;

    public function setMarque($marque) {
       $this->_marque = $marque; 
    }
    public function setModele($modele) {
        $this->_modele = $modele; 
    }
    public function setKm($km) {
        $this->_km = $km; 
    }
    public function getMarque() {
        return $this->_marque; 
    }
    public function getModele() {
        return $this->_modele; 
    }
    public function getKm() {
        return $this->_km; 
    }
    public function getInfo() {
        
        return $this->getMarque() . "<br> " . $this->getModele() . " <br>" . $this->getKm()."<br>\n";
    }
}

$voiture1 = new Voiture();
$voiture1->setMarque("Audi"); 
$voiture1->setModele("A5"); 
$voiture1->setKm("100 000 kms");

$voiture2 = new Voiture();
$voiture2->setMarque("BMW"); 
$voiture2->setModele("X5"); 
$voiture2->setKm("80 000 kms"); 

$voiture3 = new Voiture();
$voiture3->setMarque("Mercedes-Benz"); 
$voiture3->setModele("C-Class"); 
$voiture3->setKm("120 000 kms"); 

$voiture4 = new Voiture();
$voiture4->setMarque("Toyota"); 
$voiture4->setModele("Camry"); 
$voiture4->setKm("95 000 kms"); 

$voiture5 = new Voiture();
$voiture5->setMarque("Honda"); 
$voiture5->setModele("Accord"); 
$voiture5->setKm("110 000 kms"); 

$voiture6 = new Voiture();
$voiture6->setMarque("Ford"); 
$voiture6->setModele("Mustang"); 
$voiture6->setKm("70 000 kms"); 

$voiture7 = new Voiture();
$voiture7->setMarque("Chevrolet"); 
$voiture7->setModele("Camaro"); 
$voiture7->setKm("75 000 kms"); 

$voiture8 = new Voiture();
$voiture8->setMarque("Nissan"); 
$voiture8->setModele("Altima"); 
$voiture8->setKm("85 000 kms"); 

$voiture9 = new Voiture();
$voiture9->setMarque("Volkswagen"); 
$voiture9->setModele("Golf"); 
$voiture9->setKm("90 000 kms"); 

$voiture10 = new Voiture();
$voiture10->setMarque("Hyundai"); 
$voiture10->setModele("Elantra"); 
$voiture10->setKm("65 000 kms"); 

$voiture11 = new Voiture();
$voiture11->setMarque("Subaru"); 
$voiture11->setModele("Impreza"); 
$voiture11->setKm("75 000 kms"); 

$voiture12 = new Voiture();
$voiture12->setMarque("Mazda"); 
$voiture12->setModele("CX-5"); 
$voiture12->setKm("85 000 kms"); 

$voiture13 = new Voiture();
$voiture13->setMarque("Acura"); 
$voiture13->setModele("TLX"); 
$voiture13->setKm("95 000 kms"); 

$voiture14 = new Voiture();
$voiture14->setMarque("Lexus"); 
$voiture14->setModele("RX"); 
$voiture14->setKm("100 000 kms"); 

$voiture15 = new Voiture();
$voiture15->setMarque("Infiniti"); 
$voiture15->setModele("Q50"); 
$voiture15->setKm("105 000 kms"); 

$voiture16 = new Voiture();
$voiture16->setMarque("Kia"); 
$voiture16->setModele("Sorento"); 
$voiture16->setKm("110 000 kms"); 

$voiture17 = new Voiture();
$voiture17->setMarque("Tesla"); 
$voiture17->setModele("Model S"); 
$voiture17->setKm("20 000 kms"); 

$voiture18 = new Voiture();
$voiture18->setMarque("Jeep"); 
$voiture18->setModele("Grand Cherokee"); 
$voiture18->setKm("90 000 kms"); 

$voiture19 = new Voiture();
$voiture19->setMarque("Porsche"); 
$voiture19->setModele("911"); 
$voiture19->setKm("60 000 kms"); 

$voiture20 = new Voiture();
$voiture20->setMarque("Volvo"); 
$voiture20->setModele("XC90"); 
$voiture20->setKm("80 000 kms"); 

echo $voiture1->getInfo() . "<br>"; 
echo $voiture2->getInfo() . "<br>"; 
echo $voiture3->getInfo() . "<br>"; 
echo $voiture4->getInfo() . "<br>"; 
echo $voiture5->getInfo() . "<br>"; 
echo $voiture6->getInfo() . "<br>"; 
echo $voiture7->getInfo() . "<br>"; 
echo $voiture8->getInfo() . "<br>"; 
echo $voiture9->getInfo() . "<br>"; 
echo $voiture10->getInfo() . "<br>"; 
echo $voiture11->getInfo() . "<br>"; 
echo $voiture12->getInfo() . "<br>"; 
echo $voiture13->getInfo() . "<br>"; 
echo $voiture14->getInfo() . "<br>"; 
echo $voiture15->getInfo() . "<br>"; 
echo $voiture16->getInfo() . "<br>"; 
echo $voiture17->getInfo() . "<br>"; 
echo $voiture18->getInfo() . "<br>"; 
echo $voiture19->getInfo() . "<br>"; 
echo $voiture20->getInfo() . "<br>"; 
?>
