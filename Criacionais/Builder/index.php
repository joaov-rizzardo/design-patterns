<?php

    require_once __DIR__ . "/Directors/Director.php";
    require_once __DIR__ . "/Builders/CarBuilder.php";
    require_once __DIR__ . "/Builders/ManualBuilder.php";

    use Builder\Builders\CarBuilder;
    use Builder\Builders\ManualBuilder;
    use Builder\Directors\Director;

    $director = new Director();

    $builder = new CarBuilder();
    
    $director->constructSportsCar($builder);

    $car = $builder->getProduct();

    print_r($car);

    $manualBuilder = new ManualBuilder();

    $director->constructSUVCar($manualBuilder);

    $manual = $manualBuilder->getProduct();

    print_r($manual);

    
?>