
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title==''?'MiTienda':$title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/custom.css"/>
    <link rel="stylesheet" href="public/assets/libraries/toast/build/toastr.min.css">

</head>

<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$fondo = isset($fondo) ? $fondo : '';
if($fondo && isset($fondo)){?>
    <body class="bodyFondo">
<?php 
} else{?>
    <body>
<?php
}?>
    