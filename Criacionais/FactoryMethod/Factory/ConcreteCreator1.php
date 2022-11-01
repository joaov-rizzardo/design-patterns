<?php
    namespace FactoryMethod\Factory;

    require_once __DIR__ . '\Creator.php';
    require_once __DIR__ . '\..\Product\ConcreteProduct1.php';
    require_once __DIR__ . '\..\Product\Product.php';

    use FactoryMethod\Factory\Creator;
    use FactoryMethod\Product\ConcreteProduct1;
    use FactoryMethod\Product\Product;

    class ConcreteCreator1 extends Creator{
        
        public function factoryMethod(): Product{
            return new ConcreteProduct1();
        }
    }
    


?>