<?php
    namespace FactoryMethod\Factory;

    require_once __DIR__ . '\Creator.php';
    require_once __DIR__ . '\..\Product\ConcreteProduct2.php';
    require_once __DIR__ . '\..\Product/Product.php';

    use FactoryMethod\Factory\Creator;
    use FactoryMethod\Product\ConcreteProduct2;
    use FactoryMethod\Product\Product;

    class ConcreteCreator2 extends Creator{

        public function factoryMethod(): Product{
            return new ConcreteProduct2();
        }
    }
    
?>