<?php

    namespace Builder\Directors;

    require_once __DIR__ . "/../Builders/Builder.php";

    use Builder\Builders\Builder;

    class Director {

        public function constructSportsCar(Builder $builder): void{
            $builder->reset();
            $builder->setSeats(2);
            $builder->setEngine('SportEngine');
            $builder->setTripComputer(true);
            $builder->setGPS(true);
        }

        public function constructSUVCar(Builder $builder): void{
            $builder->reset();
            $builder->setSeats(1);
            $builder->setEngine('CasualEngine');
            $builder->setTripComputer(false);
            $builder->setGPS(true);
        }
    }
?>