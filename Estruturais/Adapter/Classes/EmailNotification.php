<?php
    namespace Adapter\Classes;

    require_once __DIR__ . "/../Interfaces/Notification.php";

    use Adapter\Interfaces\Notification;

    class EmailNotification implements Notification{

        private string $adminEmail;

        public function __construct(string $adminEmail){
            $this->adminEmail = $adminEmail;
        }

        public function send(string $title, string $message): void{
            //mail($this->adminEmail, $title, $message);
            echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
        }
    }
?>