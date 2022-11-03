<?php
    namespace Prototype\Application;

    require_once __DIR__ . "/../Classes/Circle.php";
    require_once __DIR__ . "/../Classes/Rectangle.php";

    use Prototype\Classes\Circle;
    use Prototype\Classes\Rectangle;

    class Application {

        private array $shapes = Array();

        public function __construct(){

            $source = (object)[
                'x' => 10,
                'y' => 10,
                'color' => 'blue',
                'radius' => 20
            ];

            $circle = new Circle($source);

            array_push($this->shapes, $circle);

            $anotherCircle = clone $circle;

            array_push($this->shapes, $anotherCircle);

            $source = (object)[
                'x' => 10,
                'y' => 10,
                'color' => 'green',
                'width' => 200,
                'height' => 150
            ];

            $rectangle = new Rectangle($source);

            array_push($this->shapes, $rectangle);

            $anotherRectangle = clone $rectangle;

            array_push($this->shapes, $anotherRectangle);
        }

        public function getShapes(): array{
            return $this->shapes;
        }
    }


?>