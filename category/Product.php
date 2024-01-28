<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/PetTool.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/ProductShop.php';



class Product
{
    public $nameProduct;
    public $category;
    public $price;
    public $imageUrl;
    public $description;
    // protected $available;

    /**
     * fun construct Product
     *
     * @param string $_name
     * @param Category $_category
     * @param integer $_price
     * @param boolean $_available
     */
    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description)
    {
        $this->nameProduct = $_nameProduct;
        $this->category = $_category;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
        $this->description = $_description;
        // $this->available = $_available;
    }
    // Function SET e GET nameProduct

    public function getNameProduct()
    {
        return ucfirst(strtolower($this->nameProduct));
    }
    // Function SET e GET price
    public function setPrice($_price)
    {
        $this->price = (float)$_price;
    }
    public function getPrice()
    {
        return number_format($this->price, 2);
    }
    // Function SET e GET imageURL
    public function setImageUrl($_imageUrl)
    {
        $this->imageUrl = $_imageUrl;
    }

    public function getCategory()
    {
        return $this->category;
    }
    // Function e GET description

    public function getDescription()
    {
        return $this->description;
    }
    // Function SET e GET available

}
?>