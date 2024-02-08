<?php
// Auteur: Akram Daidoune

class Huis {
    // attributes
    private $floors;
    private $rooms;
    private $width;
    private $height;
    private $depth;
    private $volume;

    // constructor
    public function __construct($floors, $rooms, $width, $height, $depth) {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->volume = $width * $height * $depth * $floors;
    }

    
    public function calculatePrice() {
        
        $pricePerM3 = 1500;

        
        $price = $this->volume * $pricePerM3;
        return $price;
    }

    
    public function printDetails() {
        echo "Dit huis heeft {$this->floors} verdieping(en), {$this->rooms} kamer(s), en heeft een volume van {$this->volume} m³.<br>";
        echo "De prijs van het huis is " . number_format($this->calculatePrice(), 2, ',', '.') . " euro.<br><br>";
        
    }
}


$Huis1 = new Huis(2, 4, 10, 3, 8);
$Huis2 = new Huis(3, 6, 12, 4, 10   );
$Huis3 = new Huis(1, 3, 8, 3, 6);

$Huis1->printDetails();
$Huis2->printDetails();
$Huis3->printDetails();

?>
