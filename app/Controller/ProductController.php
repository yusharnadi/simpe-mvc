<?php

namespace Yusharnadi\SimpleMvc\Controller;

class ProductController
{
    public function index(string $productId, string $categoryId): void
    {
        echo "Product ID : $productId, Categories ID : $categoryId";
    }
}
