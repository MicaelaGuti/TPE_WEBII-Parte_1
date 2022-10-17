<?php

class TripsView {

    
    private $smarty;

    public function __construct() {
        
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    //Ver home
    function showHome($logged) { 
        
        //colocar en el header login o logout segun si se esta logeado o no.
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/home.tpl');   
    }

    //mostrar lista de viajes con la aerolinea 
    function showAllTrips($trips, $logged, $airlines) {

        $this->smarty->assign('trips', $trips);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('airlines', $airlines); 
        $this->smarty->display('templates/showAllTrips.tpl');
    }

    //ver un viaje  en concreto
    function viewTrip($trips, $logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('trips', $trips);
        $this->smarty->display('templates/showTripInfo.tpl');
    }

    //formulario para actualizar viaje
    function formUpdateTrip($id, $trips, $airlines, $logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('trips', $trips);
        $this->smarty->assign('airlines', $airlines);
       $this->smarty->display('templates/updateTrip.tpl');
    }

    

    //mensaje de error si el formulario esta vacio
    function showErrorEmptyForm($logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', 'Complete todos los datos');
        $this->smarty->display('templates/emptyError.tpl');
    }

}