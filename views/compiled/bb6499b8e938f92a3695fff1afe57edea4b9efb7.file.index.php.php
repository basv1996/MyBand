<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 12:20:06
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:367757f76532e4fef0-74427788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6499b8e938f92a3695fff1afe57edea4b9efb7' => 
    array (
      0 => 'index.php',
      1 => 1476267604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367757f76532e4fef0-74427788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f76533004050_22959324',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f76533004050_22959324')) {function content_57f76533004050_22959324($_smarty_tpl) {?><meta charset="utf-8">
<<?php ?>?php

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

// Display template: output html
$templateParser->assign('result',$result);
$templateParser->display('newsarticles.tpl');

//$page=isset($_GET['page'])?$_GET['page']:'home';
//$templateParser->assign('page',$page);
//$templateParser->display('active.tpl');


//switch ($page) {
//        case "home";
//        $templateParser->display('active.tpl');
            $templateParser->display('index.php');
 //       break;
 //       case "Band";
//        $templateParser->display('active.tpl');
  //          $templateParser->display('Band.tpl');
    //    break;
      //  case "Tour";
        //$templateParser->display('active.tpl');
          //  $templateParser->display('Tour.tpl');
//        break;
  //      case "Shop";
    //    $templateParser->display('active.tpl');
      //      $templateParser->display('Shop.tpl');
        //break;
//        case "Search";
  //      $templateParser->display('active.tpl');
//            $templateParser->display('Serach.tpl');
//        break;
//}



$templateParser->assign('footer', 'Made By Bas Vugts <br>
In cooperation With MediaCollege Amsterdam <br>
School-Project 2016-2017');
//de footer
$templateParser->display('footer.tpl');
?<?php ?>>



<?php }} ?>
