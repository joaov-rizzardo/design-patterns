<?php
    namespace Adapter\Interfaces;

    interface Notification {
        public function send(string $title, string $message): void;
    }
?>