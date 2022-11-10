<?php
    namespace Bridge\Pages;

    require_once __DIR__ . "/../Renders/Renderer.php";

    use Bridge\Renders\Renderer;

    abstract class Page{

        protected $renderer;

        public function __construct(Renderer $renderer)
        {
            $this->renderer = $renderer;
        }

        public function changeRenderer(Renderer $renderer): void
        {
            $this->renderer = $renderer;
        }

        abstract public function view(): string;
    }
?>