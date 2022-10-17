<?php

class AirlinesView {

    
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

    //mostrar lista de aerolineas
    function showAllAirlines($airlines, $logged) {

        $this->smarty->assign('airlines', $airlines);
        $this->smarty->assign('logged', $logged);
       $this->smarty->display('templates/showAllAirlines.tpl');
    }

    //elegir una aerolinea y ver los viajes en base a la eleccion
    function searchByAirline($airlines, $logged) { 

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('airlines', $airlines);
       $this->smarty->display('templates/form_search.tpl');
    }

    //lista de viajes filtrados por aerolinea
    function showTripsByAirline($trips, $logged)  {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('trips', $trips);
        $this->smarty->display('templates/showFiltredTrips.tpl');
    }

    function getTripsByAirlines($tripByAirline, $logged) {
        $this-> smarty->assign('logged', $logged);
        $this-> smarty->assign('tripByAirline', $tripByAirline);
        $this-> smarty->display('templates/showFiltredTrips.tpl');
    }

     //formulario para actualizar la aerolinea
     function formUpdateAirline($id, $trips, $airlines, $logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('trips', $trips);
        $this->smarty->assign('airlines', $airlines);
        $this->smarty->display('templates/updateAirline.tpl');
    }

    //mensaje de error si el formulario esta vacio
    function showErrorEmptyForm($logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', 'Complete todos los datos');
        $this->smarty->display('templates/emptyError.tpl');
    }

    function showDeleteError($logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', 'No es posible borrar esta aerolinea, ya que tiene un viaje asociado a ella');
        $this->smarty->display('templates/deleteError.tpl');
    }

 } 