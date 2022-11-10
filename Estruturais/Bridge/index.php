<?php
    require_once __DIR__ . "/Renders/HTMLRenderer.php";
    require_once __DIR__ . "/Renders/JsonRenderer.php";
    require_once __DIR__ . "/Products/Product.php";
    require_once __DIR__ . "/Pages/SimplePage.php";
    require_once __DIR__ . "/Pages/ProductPage.php";
    require_once __DIR__ . "/Pages/Page.php";

    use Bridge\Renders\HTMLRenderer;
    use Bridge\Renders\JsonRenderer;
    use Bridge\Products\Product;
    use Bridge\Pages\SimplePage;
    use Bridge\Pages\ProductPage;
    use Bridge\Pages\Page;

    $HTMLRenderer = new HTMLRenderer();
    $JSONRenderer = new JsonRenderer();

    $page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
    echo "HTML view of a simple content page:\n";
    clientCode($page);
    echo "\n\n";

    $page->changeRenderer($JSONRenderer);
    echo "JSON view of a simple content page, rendered with the same client code:\n";
    clientCode($page);
    echo "\n\n";


    $product = new Product("123", "Star Wars, episode1",
        "A long time ago in a galaxy far, far away...",
        "/images/star-wars.jpeg", 39.95);

    $page = new ProductPage($HTMLRenderer, $product);
    echo "HTML view of a product page, same client code:\n";
    clientCode($page);
    echo "\n\n";

    $page->changeRenderer($JSONRenderer);
    echo "JSON view of a simple content page, with the same client code:\n";
    clientCode($page);

    function clientCode(Page $page)
{
    // ...

    echo $page->view();

    // ...
}
?>