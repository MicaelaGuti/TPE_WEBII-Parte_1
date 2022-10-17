<?php
require_once './app/models/airlines.model.php';
require_once './app/models/trips.model.php';
require_once './app/views/airlines.view.php';
require_once './app/views/trips.view.php';
require_once './helpers/auth.helper.php';



class AirlinesController {
    private $model;
    private $tripsModel;
    private $view;
    private $authHelper;


    public function __construct() {
        $this->authHelper = new AuthHelper();
        $this->model = new AirlinesModel();
        $this->tripsModel = new TripsModel();
        $this->view = new AirlinesView();
    }

    //redirecciones
    public function showHomeLocation() {
    header("Location: ". BASE_URL."home");
    }

    public function showTripsLocation() {
        header("Location: ". BASE_URL."trips");
    }

    public function showAirlinesLocation() {
        header("Location: ". BASE_URL."airlines");
    }

     //funciones ver, filtrar, añadir, eliminar, actualizar

     //ver pagina principal
      public function showHome() {

     //si esta logeado se ve logout, si no lo está se ve login en el header
        $logged = $this->authHelper->isLogged();

        $this->view->showHome($logged);
    }

    //ver todas las aerolineas
    public function showAllAirlines() {
        $airlines = $this->model->getAllAirlines();

     //si esta logeado se ve logout, si no lo está se ve login en el header
        $logged = $this->authHelper->isLogged();

        $this->view->showAllAirlines($airlines, $logged);
    }

    //select para ver los viajes filtrados por aerolinea
    public function searchByAirline() {
        //si esta logeado se ve logout, si no lo está se ve login en el header
        $logged = $this->authHelper->isLogged();

        $airlines = $this->model->getAllAirlines();

        $this->view->searchByAirline($airlines, $logged);
    }

    //ver viajes con la aerolinea elegida con el select
    public function tripsFiltred($id) {

        // if(isset($_POST['choice']) && !empty($_POST['choice'])) {
        //     $airline = $_POST['choice'];

            //si esta logeado se ve logout, si no lo está se ve login en el header
            $logged = $this->authHelper->isLogged();

            $list = $this->model->getAllTripsWithAirlines($id);

            $this->view->getTripsByAirlines($list, $logged);
        
    }   

    //añadir nueva aerolinea
    public function addNewAirline() {

        $logged = $this->authHelper->checkLoggedIn();

        if(isset($_POST['country']) && !empty($_POST['country'])&&isset($_POST['airline'])) {
            $country = $_POST['country'];
            $airline = $_POST['airline'];

            $this->model->addNewAirline($country, $airline);

            $this->showAirlinesLocation();
        }
        else {
            $this->view->showErrorEmptyForm($logged);
        }
    }

    //borrar una aerolinea (no debe estar vinculada con ningun viaje)
    public function deleteAirline($id) {

        $logged = $this->authHelper->checkLoggedIn();

        $confirm = $this->model->deleteAirline($id);

         if($confirm == true) {
          $this->showAirlinesLocation(); 
         }
         else {
            $this->view->showDeleteError($logged);
         }
        
         
         
    }

    //ir al formulario para actualizar una aerolinea

    public function updateAirline($id) {

        $logged = $this->authHelper->checkLoggedIn();

        $trips = $this->tripsModel->getAllTrips();

        $airlines = $this->model->getAllAirlines();
        
        $this->view->formUpdateAirline($id, $trips, $airlines, $logged);
    }

    //realizamos el update sql en la base de datos
    public function confirmUpdateAirline() {
        
        if(isset($_POST['id']) && !empty($_POST['id'])&&isset($_POST['country']) && !empty($_POST['country'])&&isset($_POST['airline']) && !empty($_POST['airline'])) {

            $id = $_POST['id'];
            $country = $_POST['country'];
            $airline = $_POST['airline'];   
           

            $this->model->updateAirline($id, $country, $airline);
 
            $this->showAirlinesLocation();
        }
        else {

        $logged = $this->authHelper->isLogged();
        $this->view->showErrorEmptyForm($logged);
        
        }
    }




}    