<?php
    namespace FactoryMethod\Product;
    
    require_once __DIR__ . "/Product.php";

    use FactoryMethod\Product\Product;

    class ConcreteProduct1 implements Product {
        public function operation(): string {
            return "{Result of the ConcreteProduct1}";
        }
    }
?>