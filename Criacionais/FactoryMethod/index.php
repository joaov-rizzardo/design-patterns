<?php

    require_once __DIR__ . '\Factory\Creator.php';
    require_once __DIR__ . '\Factory\ConcreteCreator1.php';
    require_once __DIR__ . '\Factory\ConcreteCreator2.php';

    use FactoryMethod\Factory\Creator;
    use FactoryMethod\Factory\ConcreteCreator1;
    use FactoryMethod\Factory\ConcreteCreator2;

    function clientCode(Creator $creator){
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    }

    echo "App: Launched with the ConcreteCreator1.\n";
    clientCode(new ConcreteCreator1());
    echo "\n\n";

    echo "App: Launched with the ConcreteCreator2.\n";
    clientCode(new ConcreteCreator2());
?>