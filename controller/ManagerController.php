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

    public static function getAllService(){
        return accommodationModel::getAllServices();
    }

    public static function getAllType(){
        return accommodationModel::getAllTypes();
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

// Manejo de la solicitud POST para guardar un NUEVO alojamiento

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'saveNewAccommodation') {
    // Captura los datos del formulario
    $name = $_POST['name'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $URLimage = $_POST['URLimage'];
    $lodge_type = $_POST['id_lodgeType'];  // Tipo de alojamiento seleccionado
    $phone = $_POST['phone'];  // Teléfono de contacto
    $email = $_POST['email'];  // Correo de contacto
    $services = isset($_POST['services']) ? $_POST['services'] : []; // Servicios seleccionados (pueden ser varios)

    // Si tienes el id_lodge desde algún otro lugar (por ejemplo, se crea después de la inserción), puedes pasarlo como null
    $id_lodge = null; // Este valor se puede establecer como null al principio

    // Crear una nueva instancia del modelo con los parámetros requeridos
    $accommodation = new accommodationModel($id_lodge, $name, $address, $price, $URLimage, $lodge_type, $phone, $email, $services);

    // Llamar al método para guardar el alojamiento
    $accommodation->saveNewAccomodation();
}
