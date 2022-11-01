<?php

    namespace AbstractFactory\Products\Button;

    require_once __DIR__ . "/Button.php";

    use AbstractFactory\Products\Button\Button;

    class WinButton implements Button {
        public function click(): string {
            return 'WinButton has clicked';
        }
    }

?>