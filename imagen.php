<?php
// obtener_imagen.php
$file = '../../img/ibuki.jpg';

if (file_exists($file)) {
    header('Content-Type: image/jpeg'); // O image/png, image/gif
    readfile($file);
}else{
    header('Content-Type: image/png');
    readfile('./assets/ibuki.png');
}
?>