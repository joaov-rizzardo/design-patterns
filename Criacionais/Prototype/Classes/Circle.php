<?php
    namespace Prototype\Classes;

    require_once __DIR__ . "/Shape.php";

    use Prototype\Classes\Shape;

    class Circle extends Shape {

        private int $radius;

        public function __construct(Object $source){
            
            $this->x = $source->x;

            $this->y = $source->y;

            $this->color = $source->color;
            
            $this->radius = $source->radius;
        }

        public function __clone(){
            $this->x = $this->x;
            $this->y = $this->y;
            $this->color = $this->color;
            $this->radius = $this->radius;
        }
    }
?>