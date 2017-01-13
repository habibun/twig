<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/13/17
 * Time: 12:54 PM
 */

echo $twig->render('index.html.twig', array(
    'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),
));