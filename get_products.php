<?php
include 'product.php';

class get_products 
{
    public $products = [];

    public function initialize()
    { 
        $this->products = $this->createProductObj_and_pushToArray($this->readProducts());
        return $this->products;
    }

    private function readProducts()
    {
        $products_file = fopen("products.txt", "r") or die ("Unable to open file!");
        $products_text = fread($products_file, filesize("products.txt"));
        fclose($products_file);

        return $products_text;
    }

    private function createProductObj_and_pushToArray($products_text)
    {
        $products_data = array_map('trim', explode(",", $products_text)); 
        $products = [];
        
        for ( $i = 3; $i < count($products_data); $i+=4 )
        {
            $product = new Product($products_data[$i-3], $products_data[$i-2], $products_data[$i-1], $products_data[$i]);
            array_push($products, $product);
        }

        return $products;
    }
}
?>
