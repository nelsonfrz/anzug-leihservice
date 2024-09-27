<?php
namespace models;

use lib\ModelOperationsTrait;

class ProductModel
{
    use ModelOperationsTrait;

    public $table = 'products';

    public function createProduct($name, $description, $price, $image_url)
    {
        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image_url' => $image_url
        ];

        return $this->create($this->table, $data);
    }
}

?>
