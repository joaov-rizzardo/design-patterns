<?php
    namespace Singleton\Classes;

    require_once __DIR__ . "/Singleton.php";

    class Config extends Singleton{
        private array $hashMap = [];

        public function getValue(string $key): string{
            return $this->hashMap[$key];
        }

        public function setValue(string $key, string $value): void{
            $this->hashMap[$key] = $value;
        }
    }
?>