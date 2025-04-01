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

        // select * from tasks
        // $query = $pdo->query("SELECT * FROM alojamientos"); //obtiene la consulta
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

    
}
