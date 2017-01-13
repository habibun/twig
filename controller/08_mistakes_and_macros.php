<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/13/17
 * Time: 10:30 PM
 */

class Product {
    private $name;
    private $image;

    public function __construct($name, $image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}

echo $twig->render('index.html.twig', array(
//    'featuredProduct' => null,
    'products' => array(
        new Product('Serious Businessman', 'formal.png'),
        new Product('Penguin Dress', 'dress.png'),
        new Product('Sportstar Penguin', 'sports.png'),
    ),
    'featuredProducts' => array(
        new Product('Angel Costume', 'angel-costume.png'),
        new Product('Penguin Accessories', 'swatter.png'),
        new Product('Super Cool Penguin', 'super-cool.png'),
    ),
));