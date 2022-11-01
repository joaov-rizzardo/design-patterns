<?php
    namespace Builder\Builders;

    require_once __DIR__ . "/Builder.php";
    require_once __DIR__ . "/../Products/Manual.php";

    use Builder\Builders\Builder;
    use Builder\Products\Manual;

    class ManualBuilder implements Builder {

        private Manual $manual;

        public function __construct(){
            $this->reset();
        }

        public function reset(): void{
            $this->manual = new Manual();
        }

        public function setSeats(int $seats): void{
            $this->manual->seats = $seats;
        }

        public function setEngine(string $engine): void{
            $this->manual->engine = $engine;
        }

        public function setTripComputer(bool $tripComputer): void{
            $this->manual->tripComputer = $tripComputer;
        }

        public function setGPS(bool $gps): void{
            $this->manual->gps = $gps;
        }

        public function getProduct(): Manual{
            $product = $this->manual;
            $this->reset();
            return $product;
        }

    }
?>