<?php
require_once './app/controllers/trips.controller.php';
require_once './app/controllers/airlines.controller.php';
require_once './app/controllers/login.controller.php';

require_once('./libs/smarty/Smarty.class.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');



$action = 'home'; // acción por defecto


if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}


// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);



// tabla de ruteo

switch ($params[0]) {
    case 'login':
        $loginController = new LoginController();
        $loginController->showLogin();
        break;
    case 'verify':
        $loginController = new LoginController();
        $loginController->verifyLogin();
        break;
    case 'logout':
        $loginController = new LoginController();
        $loginController->logout();   
        break;  
    case 'home':
        $tripController = new TripsController();
        $tripController->showHome();
        break;
    case 'trips':
        $tripController = new TripsController();
        $tripController->showAllTrips();
        break;
    case 'airlines':
        $airlinesController = new AirlinesController();
        $airlinesController->showAllAirlines();
        break;   
    case 'search':
        $airlinesController = new AirlinesController();
        $airlinesController->searchByAirline();
        break;       
    case 'filter':
        $airlinesController = new AirlinesController();
        $airlinesController->tripsFiltred($params[1]);
        break;
    case 'viewTrip':
        $tripController = new TripsController();
        $tripController->viewTrip($params[1]);
        break;     
    case 'addTrip':
        $tripController = new TripsController();
        $tripController->addNewTrip();
        break;
    case 'addAirline':
        $airlinesController = new AirlinesController();
        $airlinesController->addNewAirline();
        break;      
    case 'updateTrip':
        $tripController = new TripsController();
        $id = $params[1];
        $tripController->updateTrip($id);   
        break;
    case 'confirmUpdTrip':
       $tripController = new TripsController();
       $tripController->confirmUpdateTrip();  
        break;
    case 'updateAirline':
        $airlinesController = new AirlinesController();
        $id = $params[1];
        $airlinesController->updateAirline($id);   
        break;
    case 'confirmUpdAirline':
        $airlinesController = new AirlinesController();
        $airlinesController->confirmUpdateAirline();  
        break;
    case 'deleteTrip':
        $tripController = new TripsController();
        $id = $params[1];
        $tripController->deleteTrip($id);
        break;
    case 'deleteAirline':
        $airlinesController = new AirlinesController();
        $id = $params[1];
        $airlinesController->deleteAirline($id);
        break;  
    default:
        echo('404 Page not found');
        break;
}
