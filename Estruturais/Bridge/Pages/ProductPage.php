<?php
    namespace Bridge\Pages;

    require_once __DIR__ . "/Page.php";
    require_once __DIR__ . "/../Renders/Renderer.php";
    require_once __DIR__ . "/../Products/Product.php";

    use Bridge\Pages\Page;
    use Bridge\Renders\Renderer;
    use Bridge\Products\Product;

    class ProductPage extends Page {
        protected Product $product;

        public function __construct(Renderer $renderer, Product $product)
        {
            parent::__construct($renderer);
            $this->product = $product;
        }

        public function view(): string
        {
            return $this->renderer->renderParts([
                $this->renderer->renderHeader(),
                $this->renderer->renderTitle($this->product->getTitle()),
                $this->renderer->renderTextBlock($this->product->getDescription()),
                $this->renderer->renderImage($this->product->getImage()),
                $this->renderer->renderLink("/cart/add/" . $this->product->getId(), "Add to cart"),
                $this->renderer->renderFooter()
            ]);
        }
    }
?>