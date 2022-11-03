<?php
    namespace Prototype\Classes;
    
    require_once __DIR__ . "/Shape.php";

    use Prototype\Classes\Shape;

    class Rectangle extends Shape {

        private int $width;

        private int $height;

        public function __construct(Object $source){

            $this->x = $source->x;
            
            $this->y = $source->y;

            $this->color = $source->color;

            $this->width = $source->width;

            $this->height = $source->height;
        }

        public function __clone() {
            $this->x = $this->x;
            $this->y = $this->y;
            $this->color = $this->color;
            $this->width = $this->width;
            $this->height = $this->height;
        }
    }
?>