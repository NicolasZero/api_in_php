<?php
  $ruta = '../../img/ibuki.jpg';
  if (is_file($ruta)) {
    $datos = base64_encode(file_get_contents($ruta));
    $src = 'data:image/jpeg;base64,' . $datos;
  } else {
    die("Error: Imagen no encontrada");
  }
?>

<img src="<?php echo $src; ?>" style="border: 5px solid red; width: 200px;">