<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
// include funtions
include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Titeltje');

// Display template: output html
$templateParser->display('head.tpl');

// Display template: output html
$templateParser->display('header.tpl');

// Get newsarticles from database
include('model/select_newsarticles.php');

// Show newsarticles 'old style' => refactor to template system.
include('views/newsarticles.php');

$templateParser->assign('footer', 'Made By God');
//de footer
$templateParser->display('footer.tpl');
?>



