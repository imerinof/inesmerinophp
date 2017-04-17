<?php

$espectaculo = $_GET['p'];

//Paso 1 Obtener el objeto JSON
ini_set("allow_url_fopen", 1);
$json = file_get_contents('http://api.tvmaze.com/lookup/shows?tvrage='.$espectaculo);


//echo $json;
$obj = json_decode($json);

echo'<br/>Nombre: <input type="text" value="'.$obj->name. '">';
echo'<br/>Lenguaje: <input type="text" value="'.$obj->language.'">';
echo'<br/>Fecha: <input type="text" value="'.$obj->premiered.'">';
echo'<br/>Resumen: </<textarea name="summary" rows="5" cols="40" >'.$obj->summary.'</textarea>';
echo'<br/>Imagen:<br/> <img src="'.$obj->image->medium.'">';


?>