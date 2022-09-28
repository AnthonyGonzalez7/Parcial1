<?php

require_once("controller/alquila_controllers.php");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1 / Problema 1</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img\logo_arrendadora3000.png" class="img-fluid" width="175" height="80" alt=""> </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sucursales.php">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="requisitos.php">Requisitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactanos.php">Contáctanos</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>



    <div class="container-sm">
    <br><br><br>
        <div class="row">
           

            
            <div class="card d-block mx-auto" style="width:auto";>
                <div class="card-body">
                <h1>Modelos Disponibles</h1>
                    <a >
                            <table class="table table-light table-striped table-hover table-borderless table-sm table-responsive-sm">
                                

                                <thead>
                                    <tr>
                                        <th scope="col"><center>ID</center></th>
                                        <th scope="col"><center>Marca</center></th>
                                        <th scope="col"><center>Modelo</center></th>
                                        <th scope="col"><center>Precio</center></th>
                                        <th scope="col"><center>Días de alquiler</center></th>
                                        <th scope="col"><center>Precio a pagar</center></th>
                                        <th scope="col"><center>Foto</center></th>
                                        <th scope="col"><center>Ver</center></th>
                                    </tr>
                                </thead>
                                    

                                <tbody>
                                    <?php
                                        $i=0;
                                        foreach(alquila_controllers::Mostrar() as $autos){
                                            
                                        ?>
                                    <tr> 
                                            <th scope="row"><center> <?php echo $autos->getId() ?> </center></th>
                                            <td><center><?php echo $autos->getMarca() ?></center></td>
                                            <td><center><?php echo $autos->getModelo() ?></center></td>
                                            <td><center><?php echo $autos->getPrecio() ?></center></td>
                                            <td><center><?php echo $autos->getDias_de_alquiler() ?></center></td>
                                            <td><center><?php echo $autos->getPrecio_a_pagar() ?></center></td>
                                            <td><center><img src="<?php echo $autos->getFoto() ?>" class="img-fluid"  style="border-radius:10px"; width="150" height="100" alt="..."></center></td>
                                           
                                            <td><center><div class="d-grid gap-2 d-md-block">
                                                <a href="<?php echo $autos->getLinkbtn() ."?marca=". $autos->getMarca() . "&modelo=". $autos->getModelo() ."&precio=". $autos->getPrecio()."&dias=".$autos->getDias_de_alquiler()."&precio_a_pagar=". $autos->getPrecio_a_pagar()."&foto1=". $autos->getFoto1()."&foto2=".$autos->getFoto2()."&foto3=".$autos->getFoto3()."&foto4=".$autos->getFoto4() ?>"><button class="btn btn-primary" type="submit">Ver</button></a>
                                            </div></center></td>
                                    </tr>
                                    <?php       
                                            }?>    
                                </tbody>


                            </table>
                    </a>
                </div>
            </div>
           


        </div>
    </div>
    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>