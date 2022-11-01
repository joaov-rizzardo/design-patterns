<?php
    namespace AbstractFactory\Factory;

    require_once __DIR__ . "/GUIFactory.php";
    require_once __DIR__ . "/../Products/Button/WinButton.php";
    require_once __DIR__ . "/../Products/Checkbox/WinCheckbox.php";

    use AbstractFactory\Factory\GUIFactory;
    use AbstractFactory\Products\Button\WinButton;
    use AbstractFactory\Products\Checkbox\WinCheckbox;

    class WinFactory implements GUIFactory{
        public function createButton(): WinButton{
            return new WinButton();
        }

        public function createCheckbox(): WinCheckbox{
            return new WinCheckbox();
        }
    }

?>