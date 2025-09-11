<?php

    /*osztaly
    - osztaly: sablonm/tervrajz 
    - objektum: az osztaly peldanya 
    - konstruktor: inicializalasra/letrehozasra szolgalo fgv 
    - destruktor: felszabaditasra/torlesre szolgalo fgv
    - tulajdonsag (public, private, protected): adattag/valtozo
    - oroklodes: egy osztaly atveszi egy masik osztaly tulajdonsagait es fgv-jeit
    - trait: olyan fgv-eket tartalmaz, amiket mas osztalyok is hasznalhatnak
    */

    //keszits car osztalyt, marka tipus szin tulajdonsaggal. konstruktor is legyen

    class Car {
    public $brand;
    public $type;
    public $color;

        public function __construct(string $brand, string $type, string $color) {
            $this->brand = $brand;
            $this->type = $type;
            $this->color = $color;
        }

        public function info() {
            echo "Márka: {$this->brand}, Típus: {$this->type}, Szín: {$this->color}<br>";
        }
    }

    $car = new Car("Toyota", "Corolla", "Red");
    $car -> info();

    //hozz letre a mathhelper osztalyt amiben legyen egy statikus valtozo
    // pi es egy statikus metodus square neven

    class MathHelper {
        public static $pi = 3.14;

        public static function square($number) {
            return $number * $number;
        }
    }
    echo MathHelper::$pi . "<br>";
    echo MathHelper::square(5) . "<br>";


    //keszits egy eletriccar osztalyt ami orokli a car osztalyt es van egy batteryCapacity kapacitas tulajdonsaga

    class ElectricCar extends Car {
        public $batteryCapacity;

        public function __construct($brand, $type, $color, $batteryCapacity) {
            parent::__construct($brand, $type, $color);
            $this->batteryCapacity = $batteryCapacity;
        }

        public function info() {
            parent::info();
            echo "Akkumulátor kapacitás: {$this->batteryCapacity} kWh<br>";
        }
    }

    $eCar = new ElectricCar("Tesla", "Model 3", "kék", 10000);
    $eCar->info();

    //trait: ujrahasznosithato fgv tarolo
    // hozz letre egy traitet ami tartalmau egy metodust ami kiirja hogy "szia [nev]!"

    trait GreetTrait {
        public function greet($name) {
            echo "Szia, $name!<br>";
        }
    }   

    class Person {
        use GreetTrait; // trait importalasa
    }
    class Admin {
        use GreetTrait; // trait importalasa
    }

    $user = new Person();
    $user->greet("Tibi");

    $admin = new Admin();
    $admin->greet("Pisti");

?>
