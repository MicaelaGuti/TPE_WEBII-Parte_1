<?php

class TripsModel {

    private $db;

    //abrimos conexion con la base de datos db_series
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tickets;charset=utf8', 'root', '');
    }

    //devuelve lista de viajes completa
    public function getAllTrips() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT a.* , b.airline FROM trips a INNER JOIN airlines b ON a.airline = b.id");
        $query->execute();

        // 3. obtengo los resultados
        $trips = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $trips;
    }
    

    //obtener informacion de in viaje en particular (segun su id)
    public function getTripsById($id) {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)

        $query = $this->db->prepare("SELECT a.* , b.airline FROM trips a INNER JOIN airlines b ON a.airline = b.id WHERE b.id = ?");
        $query->execute(array($id));

        // 3. obtengo los resultados
        $trips = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $trips;
    }

    //añadir un viaje nuevo 
    public function addNewTrip($date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price) {

        // $pathImg = null;

        // if($imagen) 
        //     $pathImg = $this->uploadImageSerie($imagen);
        
       
        $query = $this->db->prepare('INSERT INTO trips( `date`, passengers, airline, placeOfDeparture, placeOfDestination, price) VALUES(?,?,?,?,?,?)');
        
        $query->execute([$date , $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price]);
    }

    // private function uploadImageSerie($imagen) {
    //     $target = "img/series" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
    //     move_uploaded_file($imagen['tmp_name'], $target);
    //     return $target;
    // }
 
    //borrar un viaje (por su id)
    public function deleteTrip($id) {
   
            $query = $this->db->prepare("DELETE FROM trips WHERE id = ?");
            $query->execute([$id]);
    }

    //actualizar un viaje (por su id)
    public function updateTrip($id, $date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price) {

        // $pathImg = null;

        // if($imagen) 
        // $pathImg = $this->uploadImageSerie($imagen);

        $query = $this->db->prepare('UPDATE trips SET date = ?, passengers = ?, airline = ?, placeOfDeparture = ?, placeOfDestination = ?, price = ? WHERE id = ?');

        $query->execute([$date, $passengers, $airline, $placeOfDeparture, $placeOfDestination, $price, $id]);
    }

} 


    