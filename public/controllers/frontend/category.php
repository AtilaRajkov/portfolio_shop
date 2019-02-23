<?php
// modeli
include_once '../../../models/connection.php';
include_once '../../../models/productModel.php';
include_once '../../../models/categoryModel.php';
include_once '../../../models/stickerModel.php';
include_once '../../../models/userModel.php';

// validacija get-a
// XSS
$status = FALSE;
$systemMessage = "";
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
    // go to database and check product
    $categoryId = $_GET['id'];
    $openedRow = getOneCategory($connection, $categoryId);
    if($openedRow){
        $status = TRUE;
        
    } else {
        header('HTTP/1.1 404 Not Found');
        $systemMessage = "Category was not found!!!";
    }
}else {
    $systemMessage = "Not valid ID in request!!!";
}

// dobiti sve produkte za kategoriju
if($status){
    $currentPage = 1;
    
    
    
    $numberOfRowsPerPage = 4;
    
    $totalNumberOfProducts = getCategoriesForNavigation($connection, $categoryId);
    $totalNumberOfProducts = $totalNumberOfProducts[0]['total'];
    
    $numberOfPages = ceil($totalNumberOfProducts / $numberOfRowsPerPage);
    
    if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $numberOfPages){
        $currentPage = $_GET['page'];
    }
    
    $productsFromCategory = getAllProductsForPagination($connection, array(), $currentPage, $numberOfRowsPerPage, $categoryId);
    
}

// view-ovi
include_once '../../../views/headView.php';
include_once '../../../views/headerView.php';
include_once '../../../views/navigationView.php';
include_once '../../../views/frontend/categoryView.php';
include_once '../../../views/footerView.php';