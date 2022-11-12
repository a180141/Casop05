<?php
$identificador=$_POST['id'];
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/character/$identificador/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$respuesta=curl_exec($ch);
curl_close($ch);

$valores=json_decode($respuesta, TRUE);
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
    h4{
        color: white;
    }
</style>
<body id="page-top" style="background-image:url(img/R.gif); background-size:100% 100%; background-repeat:no-repeat; background-position:center;">
    <div id="wrapper" style="height:50vh; margin:5%; display:flex; justify-content: center; align-items:center;">
        <div class="d-flex flex-column">
            <div id="content">
                 <h3 class="font-weight-bold"><?php echo "el nombre de tu personaje es: ".$valores['name'];?></h3>
                 <h4 class="font-weight-bold"><?php echo "El estado del personaje: ".$valores['status'];?></h4>
                 <h4 class="font-weight-bold"><?php echo "Su especie: ".$valores['species'];?></h4>
            </div>
        </div>
    </div>
</body>
</html>