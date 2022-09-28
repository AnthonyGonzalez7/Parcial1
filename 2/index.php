<?php

require_once("controller\pelis_controllers.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2 / Parcial 1</title>
</head>
<body background="img\fondo3.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img\logo.png" class="img-fluid" width="175" height="80" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienessomos.php">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactanos.php">Conctáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <br>
    <div class="row" style="margin: 50px;" background="white;">
        <center>
        <div class="card" style="width: auto;">
            <center> <h1>Películas</h1> </center>
            <br><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, facilis illo magnam eius recusandae corporis provident minima perspiciatis. Quo a ipsum deserunt sint animi corporis adipisci, sed mollitia repellendus dolorum.</p>
            <br><br>
        </div>    
        </center>
    </div>
    

    <div class="container-sm">
    <br>

        <div class="row">
       
      
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm" >
                <thead >
                <?php foreach(pelis_controllers::MostrarPelis() as $pelis){?>
                   <tr > 
                        <th  ROWSPAN="2" ><center><a href="mostrar.php?pelinombre=<?php echo $pelis->getPeli_nombre()."&pelicontexto=".$pelis->getPeli_contexto()."&pelicalificacion=". $pelis->getPeli_calificacion()."&peliportadalink=". $pelis->getPeli_portada_link()."&pelitrailerlink=".$pelis->getPeli_trailer_link()."&peliresumen=".$pelis->getPeli_resumen() ?>"><img src="<?php echo $pelis->getPeli_portada_link()?>" width="175" height="250" alt=""> </a></center></th>
                        <th scope="row" ><?php echo $pelis->getPeli_nombre()?></th>
                        <th scope="row" ><center><?php echo $pelis->getPeli_calificacion()?></center></th>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="text-align: justify; margin: 50px;" ><?php echo $pelis->getPeli_contexto()?></p></td>
                    </tr>
                    <br>
                    <?php } ?>
                </thead>
                
            </table>
        </div>

    </div>
<br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>