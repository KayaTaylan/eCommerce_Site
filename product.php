<?php

class Product {
    private $id;
    private $name;
    private $price;
    private $imageUrl;

    public function __construct($id, $name, $price, $imageUrl) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    // Setters (if needed)
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
    }
}

?>