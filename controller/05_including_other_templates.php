<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/13/17
 * Time: 1:03 AM
 */

echo $twig->render('index.html.twig', array(
    'pageData' => array(
        'title'     => 'Suit Up!',
        'summary'   => "You're hip, you're cool, you're a penguin! Now, start dressing like one! Find the latest suits, bow-ties, swim shorts and other outfits here!",
        'hasSale'   => true,
    ),
));