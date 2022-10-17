<?php



class AuthHelper {


    public function __construct() {
    }


    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->email;
        $_SESSION['isLogged'] = true;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    //redirige al usuario no logeado para evitar que haga cambios.
    public function checkLoggedIn() {
       session_start();
        if (!isset($_SESSION['ID_USER'])) {
            $logged = false;
            header('Location: ' . LOGIN);
            die();
        }
        else {
            $logged = true;
        }
        
        $logged;
    }

    //Cambia lo que ve el user y el admin, y hace timeout.
    public function isLogged() { 
        session_start();
        if(!isset($_SESSION['isLogged'])) {
            $_SESSION['isLogged'] = false;
        }
        
        // $_SESSION['LAST_ACTIVITY'] = time();        $_SESSION['LAST_ACTIVITY'] = time();

        return $_SESSION['isLogged'];
    }
    

 }    