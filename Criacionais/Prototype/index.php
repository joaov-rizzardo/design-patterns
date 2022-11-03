<?php
    require_once __DIR__ . "/Application/Application.php";

    use Prototype\Application\Application;

    $application = new Application();

    $shapes = $application->getShapes();

    print_r($shapes);

?>