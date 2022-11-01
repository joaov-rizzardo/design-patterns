<?php
    namespace Builder\Builders;

    require_once __DIR__ . "/Builder.php";
    require_once __DIR__ . "/../Products/Car.php";

    use Builder\Builders\Builder;
    use Builder\Products\Car;

    class CarBuilder implements Builder {

        private Car $car;

        public function __construct(){
            $this->reset();
        }

        public function reset(): void{
            $this->car = new Car();
        }

        public function setSeats(int $seats): void{
            $this->car->seats = $seats;
        }

        public function setEngine(string $engine): void{
            $this->car->engine = $engine;
        }

        public function setTripComputer(bool $tripComputer): void{
            $this->car->tripComputer = $tripComputer;
        }

        public function setGPS(bool $gps): void{
            $this->car->gps = $gps;
        }

        public function getProduct(): Car{
            $product = $this->car;
            $this->reset();
            return $product;
        }

    }
?>