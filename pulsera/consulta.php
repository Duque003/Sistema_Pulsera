<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'conexion.php';
    
    // Recibir los datos mediante GET
    $id_dispositivo = $_GET["id_dispositivo"];
    
    // Consulta SQL para obtener los datos
    $query = "SELECT admin_id, nombre_dispositivo, tipo_dispositivo 
              FROM dispositivo 
              WHERE id_dispositivo = '".$id_dispositivo."'";  // Filtramos por admin_id
    
    // Ejecutar la consulta
    $resultado = $mysql->query($query);
    
    // Verificar si hay resultados
    if ($resultado->num_rows > 0) {
        // Crear un array para almacenar los resultados
        $data = array();
        
        // Iterar sobre cada fila de resultados
        while ($row = $resultado->fetch_assoc()) {
            $data[] = $row;
        }
        
        // Convertir los resultados a formato JSON
        echo json_encode($data);
    } else {
        // Si no se encuentran resultados
        echo json_encode(["error" => "No se encontraron datos para este admin_id"]);
    }
}

