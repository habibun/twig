<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/12/17
 * Time: 12:25 AM
 */

echo $twig->render('index.html.twig', array(
    'pageTitle' => 'Welcome to Penguins R Us!',
    'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),
));