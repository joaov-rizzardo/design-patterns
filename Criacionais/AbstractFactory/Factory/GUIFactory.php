<?php
    namespace AbstractFactory\Factory;

    require_once __DIR__ . '/../Products/Button/Button.php';

    use AbstractFactory\Products\Button\Button;
    use AbstractFactory\Products\Checkbox\Checkbox;
    
    interface GUIFactory {
        public function createButton(): Button;
        public function createCheckbox(): Checkbox;
    }
?>