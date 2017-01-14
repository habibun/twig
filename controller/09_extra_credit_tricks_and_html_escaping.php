<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/17
 * Time: 10:38 PM
 */

echo $twig->render('index.html.twig', array(
    'pageData' => array(
        'summary'   => "You're <strong>hip</strong>, you're cool ...",
    ),
));