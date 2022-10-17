<?php
require_once './app/models/trips.model.php';
require_once './app/models/airlines.model.php';
require_once './app/views/trips.view.php';
require_once './helpers/auth.helper.php';



class TripsController {
    private $model;
    private $view;
    private $authHelper;
    private $airlines;


    public function __construct() {
        $this->authHelper = new AuthHelper();

        $this->model = new TripsModel();
        $this->view = new TripsView();

        $this->airlines = new AirlinesModel();
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

        //ver todos los viajes
    public function showAllTrips() {
        
        $airlines = $this->airlines->getAllAirlines();
        
        
        //se traen todos los viajes junto a la aerolinea que estan vinculados
        $trips = $this->model->getAllTrips();
    

        //si esta logeado se ve logout, si no lo está se ve login en el header
        $logged = $this->authHelper->isLogged();

        //se pasa aerolineas/viajes para poder elegirlas en el formulario de nuevos viajes
        $this->view->showAllTrips($trips, $logged, $airlines);

        
    }

    //ver en detalle un viaje en especial
    public function viewTrip($id) {

        $logged = $this->authHelper->isLogged();


        $trips = $this->model->getTripsById($id);
   

       $this->view->viewTrip($trips, $logged);

    }

    //añadir un viaje nuevo
    public function addNewTrip() {

        $logged = $this->authHelper->checkLoggedIn();

        // if(isset($_POST['date']) && !empty($_POST['date'])&&isset($_POST['passengers']) && !empty($_POST['passengers'])&&isset($_POST['airline']) && !empty($_POST['airline'])&&isset($_POST['placeOfDeparture']) && !empty($_POST['placeOfDeparture'])&&isset($_POST['placeOfDestination']) && !empty($_POST['placeOfDestination'])&&isset($_POST['price']) && !empty($_POST['price']) ) {   
            $date = $_POST['date'];
            $passengers = $_POST['passengers'];
            $airline = $_POST['airline'];
            $placeOfDeparture = $_POST['placeOfDeparture'];
            $placeOfDestination = $_POST['placeOfDestination'];
            $price = $_POST['price'];


            $this->model->addNewTrip($date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price);       

            header("Location: ". BASE_URL . "/trips");
        

    }

    //borrar un viaje
    public function deleteTrip($id) {

        $this->authHelper->checkLoggedIn();

        $this->model->deleteTrip($id);
        
        $this->showTripsLocation();
    }

    //ir al formulario para actualizar un viaje
    public function updateTrip($id) {

        $logged = $this->authHelper->checkLoggedIn();

        $trips = $this->model->getAllTrips();
        $airlines = $this->airlines->getAllAirlines();
        
        $this->view->formUpdateTrip($id, $trips, $airlines, $logged);
    }

    //realizamos el update sql en la base de datos
    public function confirmUpdateTrip() {

        // if(isset($_POST['id']) && !empty($_POST['id'])&&isset($_POST['date']) && !empty($_POST['date'])&&isset($_POST['passengers']) && !empty($_POST['passengers'])&&isset($_POST['airline']) && !empty($_POST['airline'])&&isset($_POST['placeOfDeparture']) && !empty($_POST['placeOfDeparture'])&&isset($_POST['placeOfDestination']) && !empty($_POST['placeOfDestination'])&&isset($_POST['price']) && !empty($_POST['price'])) {

            $id = $_POST['id'];
            $date = $_POST['date'];
            $passengers = $_POST['passengers'];
            $airline = $_POST['airline'];
            $placeOfDeparture = $_POST['placeOfDeparture'];
            $placeOfDestination = $_POST['placeOfDestination'];
            $price = $_POST['price'];

            // $agregar = true;

        //    if($agregar) {
        //         if($_FILES['input_date']['type'] == "image/jpg" || $_FILES['input_date']['type'] == "image/jpeg" || $_FILES['input_date']['type'] == "image/png") {
        //             $this->model->updateTrip($id, $date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price, $_FILES['input_date']);       
        //         }
        //         else {
        //             $this->model->updateTrip($id, $date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price);       
        //         }

                
            $this->model->updateTrip($id, $date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price);    

            header("Location: ". BASE_URL . "/trips");
        //    }
        //     $this->showTripsLocation();
     
        //   } else {
        //      $logged = $this->authHelper->isLogged();
        //     $this->view->showErrorEmptyForm($logged);
        // }   
      

    }
}

