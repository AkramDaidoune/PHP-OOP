<?php

class Figuur {
    protected $kleur;

    public function __construct($kleur) {
        $this->kleur = $kleur;
    }

    public function getKleur() {
        return $this->kleur;
    }

    public function setKleur($kleur) {
        $geldige_kleuren = ['rood', 'groen', 'blauw', 'geel', 'oranje', 'paars'];
        if (in_array($kleur, $geldige_kleuren)) {
            $this->kleur = $kleur;
        } else {
            echo "Ongeldige kleur!";
        }
    }
}

class Rechthoek extends Figuur {
    private $width;
    private $height;
    private $x;
    private $y;
    private $rx;
    private $ry;

    public function __construct($kleur, $width, $height, $x, $y, $rx, $ry) {
        parent::__construct($kleur);
        $this->width = $width;
        $this->height = $height;
        $this->x = $x;
        $this->y = $y;
        $this->rx = $rx;
        $this->ry = $ry;
    }

    public function teken() {
        return "<svg width='{$this->width}' height='{$this->height}' xmlns='http://www.w3.org/2000/svg'>
                    <rect width='{$this->width}' height='{$this->height}' x='{$this->x}' y='{$this->y}' rx='{$this->rx}' ry='{$this->ry}' fill='{$this->getKleur()}' />
                </svg>";
    }
}

class Cirkel extends Figuur {
    private $r;
    private $cx;
    private $cy;
    private $stroke;
    private $stroke_width;

    public function __construct($kleur, $r, $cx, $cy, $stroke, $stroke_width) {
        parent::__construct($kleur);
        $this->r = $r;
        $this->cx = $cx;
        $this->cy = $cy;
        $this->stroke = $stroke;
        $this->stroke_width = $stroke_width;
    }

    public function teken() {
        return "<svg height='100' width='100' xmlns='http://www.w3.org/2000/svg'>
                    <circle r='{$this->r}' cx='{$this->cx}' cy='{$this->cy}' stroke='{$this->stroke}' stroke-width='{$this->stroke_width}' fill='{$this->getKleur()}' />
                </svg>";
    }
}

class Driehoek extends Figuur {
    private $points;
    private $stroke;
    private $stroke_width;

    public function __construct($kleur, $points, $stroke, $stroke_width) {
        parent::__construct($kleur);
        $this->points = $points;
        $this->stroke = $stroke;
        $this->stroke_width = $stroke_width;
    }

    public function teken() {
        return "<svg height='220' width='150' xmlns='http://www.w3.org/2000/svg'>
                    <polygon points='{$this->points}' style='fill:{$this->getKleur()};stroke:{$this->stroke};stroke-width:{$this->stroke_width}' />
                </svg>";
    }
}

// Figuren groeperen per type
$vierkanten = [
    new Rechthoek("blue", 100, 100, 50, 50, 0, 0),
    new Rechthoek("blue", 100, 100, 50, 50, 0, 0),  
    new Rechthoek("blue", 100, 100, 50, 50, 0, 0)
];

$cirkels = [
    new Cirkel("red", 45, 50, 50, "green", 3),
    new Cirkel("red", 45, 50, 50, "green", 3),
    new Cirkel("red", 45, 50, 50, "green", 3)
];

$rechthoeken = [
    new Rechthoek("yellow", 150, 50, 50, 0, 0, 0),
    new Rechthoek("yellow", 150, 50, 50, 0, 0, 0),
    new Rechthoek("yellow", 150, 50, 50, 0, 0, 0)
];

$driehoeken = [
    new Driehoek("lime", "50,10 100,190 0,190", "purple", 3),
    new Driehoek("lime", "50,10 100,190 0,190", "purple", 3),
    new Driehoek("lime", "50,10 100,190 0,190", "purple", 3)
];

// Functie om figuren naast elkaar te plaatsen
function printFiguurRow($figuren) {
    foreach ($figuren as $figuur) {
        echo $figuur->teken();
    }
}

// Figuren naast elkaar weergeven
printFiguurRow($vierkanten);
echo "<br>";
printFiguurRow($cirkels);
echo "<br>";
printFiguurRow($rechthoeken);
echo "<br>";
printFiguurRow($driehoeken);

?>