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

    public static function getAccomodationByUser(){
        return accommodationModel::findAccomodationByUser();
    }
    
    public static function sendAccomodationByUser(accommodationModel $accommodation)
    {
        try{
            $result = $accommodation->saveAccomodationByUser();
            if($result){
                //redireccionar vistas
                header('Location: ../views/UserView.php');
                exit();
            }else{
                echo "Error al guardar la tarea";
            }
            
        }catch(Error $error){
            return "Error al guardar la tarea: " . $error;
        }
    }

    //eliminar alojamiento por usuario
    public static function deleteAccomodationByUser(accommodationModel $accommodation)
    {
        try {
            $result = $accommodation->deleteAccomodationByUser();
            if ($result) {
                header('Location: ../views/AccomodationByUser.php');
                exit();
            } else {
                echo "Error al eliminar la tarea";
            }
        } catch (Error $error) {
            return "Error al eliminar la tarea: " . $error;
        }
    }

}

// Manejo de la solicitud POST para guardar un alojamiento por usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'saveAccommodationByUser') {
    $id_lodge = $_POST['id_lodge'];

    // Crear una nueva instancia de accommodationModel
    $accommodation = new accommodationModel($id_lodge, null, null, null, null, null, null, null, null);
    
    // Llamar al método create
    ManagerController::sendAccomodationByUser($accommodation);
}

//eliminar alojamiento de usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'deleteAccommodationByUser') {
    $id_lodge = $_POST['id_lodge'];
    $accommodation = new accommodationModel($id_lodge, null, null, null, null, null, null, null, null);
    ManagerController::deleteAccomodationByUser($accommodation);
}


