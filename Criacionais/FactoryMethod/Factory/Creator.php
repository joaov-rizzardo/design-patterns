<?php
    namespace FactoryMethod\Factory;

    abstract class Creator {
        abstract public function factoryMethod();

        public function someOperation(){
            $product = $this->factoryMethod();

            $result = "Creator: The same creator's code has just worked with {$product->operation()}";

            return $result;
        }
    }

?>