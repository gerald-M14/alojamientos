<?php
require_once "../interfaces/iAlojamiento.php";

class ManagerController implements iAlojamiento{
    
    public static function getAccommodation(){
        try{
            //obtenemos las tareas del metodo del modelo
            $array_accommodation = accommodationModel::all();
            return $array_accommodation;
        }catch(Error $error){
            return "Error al cargar las tareas: " . $error;
        }
    }

    
}

