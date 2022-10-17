<?php

class AirlinesModel {

    private $db;

    //abrimos conexion con la base de datos db_series
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tickets;charset=utf8', 'root', '');
    }

     //obtener todas las aerolineas
     public function getAllAirlines() {
   
        $query = $this->db->prepare("SELECT * FROM airlines");
        $query->execute();

        $airlines = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $airlines;
    }

    
    //obtener todas los viajes junto a las aerolineas a los que esten vinculados
    public function getAllTripsWithAirlines($id) {

        $query = $this->db->prepare("SELECT a.* , b.airline FROM trips a INNER JOIN airlines b ON a.airline = b.id WHERE b.id = ?");
        $query->execute([$id]);
        $tripAndAirline = $query->fetchAll(PDO::FETCH_OBJ); 

        return $tripAndAirline;
    }

    //traer solo los viajes que esten vinculados a cierta aerolinea
    public function getTripsByAirlines($choice) {

        $query = $this->db->prepare("SELECT trips.*, airlines.airline as airlines FROM trips JOIN airlines ON trips.airline = airlines.airline WHERE airlines.airline = ?");
        $query->execute(array($choice));
        $tripAndAirline = $query->fetchAll(PDO::FETCH_OBJ); 

        return $tripAndAirline;
    } 

    //añadir nueva aerolinea
    public function addNewAirline($country, $airline) {
  
        $query = $this->db->prepare("INSERT INTO airlines (country, airline) VALUES (?, ?)");
        $query->execute([$country, $airline]);
    } 
    
    //borrar una aerolinea segun su id
    public function deleteAirline($id) {   

        $confirm = true;

        $query = $this->db->prepare("DELETE FROM airlines WHERE id = ?");
        try {
            $query->execute([$id]);
        }
        catch(PDOException $e) {
            $confirm = false;
        }
        
        return $confirm;
    }

     //actualizar una aerolinea segun su id
     public function updateAirline($id, $country, $airline) {

        $query = $this->db->prepare('UPDATE airlines SET country = ?, airline = ? WHERE id = ?');

        $query->execute([$country, $airline, $id]);
    }



}   