<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/12/17
 * Time: 11:48 PM
 */

class Product {
    private $name;
    private $image;

    public function __construct($name, $image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    function __toString()
    {
        return $this->name;
    }

}
echo $twig->render('index.html.twig', array(
    'pageTitle' => 'Welcome to Penguins R Us!',
    /*'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),*/

//     change the products variable
    'products' => array(
        new Product('Serious Businessman', 'formal.png'),
        new Product('Penguin Dress', 'dress.png'),
        new Product('Sportstar Penguin', 'sports.png'),
        new Product('Angel Costume', 'angel-costume.png'),
        new Product('Penguin Accessories', 'swatter.png'),
        new Product('Super Cool Penguin', 'super-cool.png'),
    ),

    'saleEndsAt' => new \DateTime('+1 month'),
    'pageData' => array(
        'title'     => 'Suit Up!',
        'summary'   => "You're hip, you're cool, you're a penguin! Now, start dressing like one! Find the latest suits, bow-ties, swim shorts and other outfits here!",
        'hasSale'   => true,
    ),
));