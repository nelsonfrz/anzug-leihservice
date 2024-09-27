<?php
namespace controllers;

class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function createProduct($name, $description, $price, $image_url)
    {
        if ($this->model->createProduct($name, $description, $price, $image_url)) {
            return "Product created successfully!";
        }

        return "Error creating product.";
    }

    public function getProduct($id)
    {
        return $this->model->find($this->model->table, $id);
    }

    public function getAllProducts()
    {
        return $this->model->findAll($this->model->table);
    }
}

?>
