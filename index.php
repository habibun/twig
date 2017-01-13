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
    'cache' => false,
    'debug' => true,
    'auto_reload' => true,
));

/**
 * 1. Twig: The Basics
 */
//require_once './controller/01_twig_the_basics.php';

/**
 * 2. Functions, Filters and Debugging with dump
 */
//require_once './controller/02_functions_filters_and_debugging_with_dump.php';

/**
 * 3. Using Objects and Array Keys
 */
//require_once './controller/03_using_objects_and_array_keys.php';

/**
 * 4. Using a Layout: Template Inheritance
 */
//require_once './controller/04_using_a_layout_template_inheritance.php';

/**
 * 5. Including other Templates
 */
//require_once './controller/05_including_other_templates.php';

/**
 * 6. If Statements with “Tests”
 */
require_once './controller/06_if_statements_with_tests.php';