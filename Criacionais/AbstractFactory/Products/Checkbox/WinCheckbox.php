<?php
    namespace AbstractFactory\Products\Checkbox;

    require_once __DIR__ . "/Checkbox.php";

    use AbstractFactory\Products\Checkbox\Checkbox;

    class WinCheckbox implements Checkbox {
        public function check(): string{
            return 'WinCheckbox has checked';
        }
    }
?>