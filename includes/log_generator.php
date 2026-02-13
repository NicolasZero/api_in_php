<?php 
// $msg_log = "El usuario con ID 45 ha iniciado sesión.";

require_once __dir__. '/../config/log.php';

function log_generator($log_msg,$filename = 'actividad') : void {
    // El parámetro '3' indica que queremos escribir en un archivo específico
    error_log($log_msg . PHP_EOL, 3, __DIR__.LOGPATH.$filename.".log");
    // PHP_EOL: Es una constante que añade el salto de línea correcto según el sistema operativo (Windows o Linux).
}
?>