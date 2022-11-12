<?php
$identificador=$_POST['id'];//definimos la variable
$ch=curl_init();//se llama a la libreria curl que permite gestionar las peticiones http requeridas para el consumo de las apis, esto indica que vamo hacer una perticion a la libreria 
curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador/");//se envia la configuracion a la peticion, nos pide el parametro que se acab de iniciar ch, posteriormente pide la url de la api, como nos pide un id o un name se sustituye por la variable que emos definido que es identificador
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);//esto nos permite mostrar el resultado, nos retorna una transferencia, pide ademas un valor booleano que tiene que ser true, esta linea transfiere lo que se esta consumiendo desde la peticion  
$respuesta=curl_exec($ch);//en esta variable se almacena la ejecucion de la sesion generada por el curl_init
curl_close($ch);//finaliza la peticion

$valores=json_decode($respuesta, TRUE);//como el valor que nos manda es en formato json, por ello tenos que  codificarlo en una variable esto se hace con la funcion json_decode, que nos decodifica un string de un json
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Caso Practico 5</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style>
    h3{
        color: white;
    }
</style>
<body id="page-top" style="background-image:url(img/pok.jpg); background-size:100% 100%; background-repeat:no-repeat; background-position:center;">
    <div id="wrapper" style="height:50vh; margin:5%; display:flex; justify-content: center; align-items:center;">
        <div class="d-flex flex-column">
            <div id="content">
                 <h3 class="font-weight-bold"><?php echo "el nombre del pokemon es: ".$valores['name'];?></h3>
                 <h4 class="font-weight-bold"><?php echo "el nombre del pokemon es: ".$valores['is_hidden'];?></h4>
                 <h4 class="font-weight-bold"><?php echo "el nombre del pokemon es: ".$valores['base_experience'];?></h4>
            </div>
        </div>
    </div>
</body>
</html>