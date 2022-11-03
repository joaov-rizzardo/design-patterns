<?php
    require_once __DIR__ . "/Classes/EmailNotification.php";
    require_once __DIR__ . "/Classes/SlackNotification.php";
    require_once __DIR__ . "/Classes/SlackApi.php";
    require_once __DIR__ . "/Interfaces/Notification.php";

    use Adapter\Classes\EmailNotification;
    use Adapter\Classes\SlackNotification;
    use Adapter\Classes\SlackApi;
    use Adapter\Interfaces\Notification;

    echo "Client code is designed correctly and works with email notifications:\n";
    $notification = new EmailNotification("developers@example.com");
    clientCode($notification);
    echo "\n\n";
    
    
    echo "The same client code can work with other classes via adapter:\n";
    $slackApi = new SlackApi("example.com", "XXXXXXXX");

    # SlackNotification está funcionando como um Adapter para a classe slackApi
    # Para funcionar no mesmo principio que o EmailNotification
    $notification = new SlackNotification($slackApi, "Example.com Developers");

    clientCode($notification);

function clientCode(Notification $notification): void {

    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");
}

?>
