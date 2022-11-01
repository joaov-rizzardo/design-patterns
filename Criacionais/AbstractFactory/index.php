<?php

    require_once __DIR__ . "/UserInterface/UserInterface.php";

    use AbstractFactory\UserInterface\UserInterface;

    $OS = "Mac";

    $interface = new UserInterface($OS);

    echo $interface->button->click();
    echo "\n";
    echo $interface->checkbox->check();
?>