<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $admin_id=$_POST["admin_id"];
    $heart_rate=$_POST["heart_rate"];
    $spo2=$_POST["spo2"];
    $location=$_POST["location"];
    $id_dispositivo=$_POST["id_dispositivo"];
    $nombre_dispositivo=$_POST["nombre_dispositivo"];
    $query="INSERT INTO sensor_data (admin_id,heart_rate,spo2,location,id_dispositivo,nombre_dispositivo) 
        VALUES ('".$admin_id."','".$heart_rate."','".$spo2."','".$location."','".$id_dispositivo."','".$nombre_dispositivo."')";
    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "Se registro correctamente";
    }else{
        echo "Error";
    }
}
