<?php
class Product {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }
}
?>