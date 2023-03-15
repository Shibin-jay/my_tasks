<?php
interface MRP {
    public function getPrice();
    public function getTax();
}
// inheriting the interface
abstract class Product implements MRP {
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $tax;
    public function __construct($id, $name, $description, $price,$tax) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tax = $tax;
    }
    abstract public function addToCart($quantity);
    public function getPrice() {
        return $this->price;
    }
    public function getTax(){
        return $this-> tax;
    }

}

class Book extends Product {
    protected $author;
    protected $pages;

    public function __construct($id, $name, $description, $price,$tax,$author, $pages) {
        parent::__construct($id, $name, $description, $price, $tax);
        $this->author = $author;
        $this->pages = $pages;
    }

    public function addToCart($quantity) {
        echo ("\n $quantity book is added to the cart\n");
    }
    public function checkOut(){
        echo("\nyour bill is $this->price\n");
    }
}
class Clothing extends Product {
    protected $size;
    protected $color;

    public function __construct($id, $name, $description, $price,$tax, $size, $color) {
        parent::__construct($id, $name, $description, $price,$tax);
        $this->size = $size;
        $this->color = $color;
    }

    public function checkSize() {
        echo("\nthe size is $this->size\n");
    }
    public function addToCart($quantity) {
        $totalPrice = $this->price* $quantity;
        echo ("\nAdded $quantity $this->name ($this->color, size $this->size) to the cart for a total price of " . number_format($totalPrice, 2) . "\n");
    }

    // Other clothing-specific methods, such as getters and setters for size and color, could go here
}
// $book= new Book(501,"aadu jeevitham","a life of a migrant",999,12.5,"Benyamin",212);
// $book->addToCart(2);
// $book->checkOut();

$cloth = new Clothing(522, "Diesel", "Denim Trousers", 999, 16, 36, "blue");
$cloth->checkSize();
$cloth->addToCart(2);
?>