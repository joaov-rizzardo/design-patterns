<?php
    namespace Builder\Builders;

    interface Builder {

        public function reset();

        public function setSeats(int $seats);
        
        public function setEngine(string $engine);

        public function setTripComputer(bool $tripComputer);

        public function setGPS(bool $gps);
    }
?>