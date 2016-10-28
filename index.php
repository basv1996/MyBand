<meta charset="utf-8">
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
//include select newsartciles


// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Titeltje');

// Display template: output html
$templateParser->display('head.tpl');

// Display template: output html
$templateParser->display('header.tpl');

$action=isset($_GET['action'])?$_GET['action']:'home';

switch ($action) {
    case 'home':
        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        include('model/select_newsarticles.php');
        $templateParser->assign('result',$result);
        //calculate total number of articles
        include('model/get_nr_articles.php');
        $templateParser->assign('total_number_articles',$total_number_articles);
        $templateParser->display('newsarticles.tpl');
break;
    case 'band':
        include('model/select_bandleden.php');
        $templateParser->assign('result2',$result2);
        $templateParser->display('band.tpl');
break;
    case 'tour':
        include('model/select_tour.php');
        $templateParser->assign('result3',$result3);
        $templateParser->display('tour.tpl');
break;
    case 'shop':
        include('model/select_shop.php');
        $templateParser->assign('result4',$result4);
        $templateParser->display('shop.tpl');

//$page=isset($_GET['page'])?$_GET['page']:'home';
//$templateParser->assign('page',$page);
//$templateParser->display('active.tpl');


//switch ($page) {
//        case "home";
//        $templateParser->display('active.tpl');
  //          $templateParser->display('index.php');
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


}

$templateParser->assign('footer', 'Made By Bas Vugts <br>In cooperation With MediaCollege Amsterdam <br>
School-Project 2016-2017');
//de footer
$templateParser->display('footer.tpl');
?>



