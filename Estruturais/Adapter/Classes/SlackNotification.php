<?php
    namespace Adapter\Classes;

    require_once __DIR__ . "/../Interfaces/Notification.php";
    require_once __DIR__ . "/SlackApi.php";

    use Adapter\Interfaces\Notification;
    use Adapter\Classes\SlackApi;

    class SlackNotification implements Notification {
        private SlackApi $slack;
        private string $chatId;

        public function __construct(SlackApi $slack, string $chatId){
            $this->slack = $slack;
            $this->chatId = $chatId;
        }

        public function send(string $title, string $message): void{
            $slackMessage = "#" . $title . "# " . strip_tags($message);
            $this->slack->logIn();
            $this->slack->sendMessage($this->chatId, $slackMessage);
        }
    }
?>