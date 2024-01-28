<?php
require_once __DIR__ . '/Product.php';
class Category
{
    protected $type;
    protected $pedigree;
    protected $age;

    public function __construct(string $_type, string $_pedigree = null, string $_age)
    {
        $this->type = $_type;
        $this->pedigree = $_pedigree;
        $this->age = $_age;
    }

    public function setType($_type)
    {
        $this->type = ucfirst(strtolower($_type));
    }
    public function getType()
    {
        return $this->type;
    }
}

$categorieDog = [
    $categoryDog_1 = new Category('Cani', 'Pastore Tedesco', 'Adulto'),
    $categoryDog_2 = new Category('Cani', 'Bulldog', 'Cucciolo')
];

$categorieCat = [
    $categoryCat_1 = new Category('Gatti', 'Maine Coon', 'Adulto'),
    $categoryCat_2 = new Category('Gatti', 'Ragdoll', 'Cucciolo'),
];
?>