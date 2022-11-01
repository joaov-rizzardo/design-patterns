<?php

    namespace AbstractFactory\UserInterface;

    require __DIR__ . "/../Products/Button/Button.php";
    require __DIR__ . "/../Products/Checkbox/Checkbox.php";
    require __DIR__ . "/../Factory/WinFactory.php";
    require __DIR__ . "/../Factory/MacFactory.php";

    use AbstractFactory\Products\Button\Button;
    use AbstractFactory\Products\Checkbox\Checkbox;
    use AbstractFactory\Factory\WinFactory;
    use AbstractFactory\Factory\MacFactory;

    class UserInterface {
        
        public Button $button;
        public Checkbox $checkbox;

        public function __construct(String $OS){
            switch($OS){
                case 'Windows':
                    $factory = new WinFactory();
                break;

                case 'Mac':
                    $factory = new MacFactory();
                break;
            }

            $this->button = $factory->createButton();
            $this->checkbox = $factory->createCheckbox();
        }
    }
?>