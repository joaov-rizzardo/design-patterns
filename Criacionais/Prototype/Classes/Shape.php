<?php
    namespace Prototype\Classes;

    abstract class Shape {

        private int $x;

        private int $y;

        private string $color;

        public abstract function __clone();
    }
?>