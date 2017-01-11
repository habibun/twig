<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/12/17
 * Time: 12:01 AM
 */

require_once './vendor/autoload.php';

//load templates
$loader = new Twig_Loader_Filesystem('views');

//set cache directory
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
));


// 1. Twig: The Basics
require_once './controller/01_twig_the_basics.php';