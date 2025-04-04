<?php

require_once '../config/database.php';

#Clase que se va dedicar a solo tener metodos para consultar el json de las tareas
class accommodationModel{
    public $id_lodge;
    public $name;
    public $address;
    public $price;
    public $URLimage;
    public $lodge_type;
    public $phone;
    public $email;
    public $services;
    
    

    public function __construct($id_lodge, $name, $address, $price, $URLimage, $lodge_type, $phone, $email, $services){
        $this->id_lodge = $id_lodge;
        $this->name = $name;
        $this->address = $address;
        $this->price = $price;
        $this->URLimage = $URLimage;
        $this->lodge_type = $lodge_type;
        $this->phone = $phone;
        $this->email = $email;
        $this->services = $services;
    }
    


    //metodo para obtener todas las tareas del json
    public static function all(){

        //conexion
        $pdo = Connection::getInstance()->getConnection();

        
        
        $query = $pdo->query("SELECT l.id_lodge, l.name, l.address, l.price, l.URLimage, t.lodge_type, c.phone, c.email,  
                                GROUP_CONCAT(s.service SEPARATOR ', ') AS services  
                            FROM lodges l  
                            JOIN lodgeType t ON l.id_lodgeType = t.id_lodgeType  
                            JOIN contacts c ON l.id_contact = c.id_contact  
                            JOIN lodge_services ls ON l.id_lodge = ls.id_lodge  
                            JOIN services s ON ls.id_service = s.id_service  
                            GROUP BY l.id_lodge, l.name, l.address, l.price, l.URLimage, t.lodge_type, c.phone, c.email;
                            "); //obtiene la consulta
        $query->execute(); //ejecuta la consulta y devuelve la información
        $result = $query->fetchAll(PDO::FETCH_ASSOC); //obtiene la información de la consulta
        return $result;


    }

    public static function findAccomodationByUser(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT 
                                l.id_lodge, 
                                l.name, 
                                l.address, 
                                l.price, 
                                l.URLimage, 
                                t.lodge_type, 
                                c.phone, 
                                c.email,  
                                GROUP_CONCAT(s.service SEPARATOR ', ') AS services  
                            FROM lodges l
                            JOIN user_lodges ul ON l.id_lodge = ul.id_lodge
                            JOIN lodgeType t ON l.id_lodgeType = t.id_lodgeType  
                            JOIN contacts c ON l.id_contact = c.id_contact  
                            JOIN lodge_services ls ON l.id_lodge = ls.id_lodge  
                            JOIN services s ON ls.id_service = s.id_service  
                            WHERE ul.id_user = ?
                            GROUP BY 
                                l.id_lodge, l.name, l.address, l.price, l.URLimage, 
                                t.lodge_type, c.phone, c.email;

                                                        ");
        $query->execute([$_SESSION['code']]);
        $resultByUser = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultByUser;
    }

    //metodo para guardar los alojamientos por usuario
    public function saveAccomodationByUser () {
        session_start(); 
    
        if (!isset($_SESSION['code'])) {
            echo "Error: La sesión no está iniciada.";
            return false; // O manejar el error de otra manera
        }
    
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("INSERT INTO user_lodges (id_user, id_lodge) VALUES (?, ?)");
        $result = $query->execute([$_SESSION['code'], $this->id_lodge]);
        return $result; 
    }

    //metodo para eliminar los alojamientos por usuario
    public function deleteAccomodationByUser () {
        session_start(); 
    
        if (!isset($_SESSION['code'])) {
            echo "Error: La sesión no está iniciada.";
            return false; // O manejar el error de otra manera
        }
    
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("DELETE FROM user_lodges WHERE id_user = ? AND id_lodge = ?");
        $result = $query->execute([$_SESSION['code'], $this->id_lodge]);

        return $result; 
    }
}
