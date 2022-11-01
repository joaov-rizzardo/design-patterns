<?php
    namespace AbstractFactory\Factory;

    require_once __DIR__ . "/GUIFactory.php";
    require_once __DIR__ . "/../Products/Button/MacButton.php";
    require_once __DIR__ . "/../Products/Checkbox/MacCheckbox.php";

    use AbstractFactory\Factory\GUIFactory;
    use AbstractFactory\Products\Button\MacButton;
    use AbstractFactory\Products\Checkbox\MacCheckbox;

    class MacFactory implements GUIFactory{
        public function createButton(): MacButton{
            return new MacButton();
        }

        public function createCheckbox(): MacCheckbox{
            return new MacCheckbox();
        }
    }

?>