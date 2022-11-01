<?php

    namespace AbstractFactory\Products\Button;

    require_once __DIR__ . "/Button.php";

    use AbstractFactory\Products\Button\Button;

    class MacButton implements Button {
        public function click(): string {
            return 'MacButton has clicked';
        }
    }

?>