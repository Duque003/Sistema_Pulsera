<?php
$mysql=new mysqli("localhost","root","","pulsera_database");
if($mysql->connect_error){
    die("Error de conexión");
} else{
    echo "Conexion exitosa"
}
