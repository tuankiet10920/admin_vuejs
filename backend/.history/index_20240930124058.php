<?php 
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    $action = isset($_GET['action']) ? $_GET['action'] : '';
    switch ($page) {
        case 'value':
            # code...
            break;
        
        default: // home
            include_once 'controllers/HomeController.php';
            $homeController = new HomeController($action);
            $homeController->index();
            break;
    }
?>