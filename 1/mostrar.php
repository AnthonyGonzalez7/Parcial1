<?php
$marca=$_GET["marca"];
$modelo=$_GET["modelo"];
$precio=$_GET["precio"];
$dias=$_GET["dias"];
$precio_a_pagar=$_GET["precio_a_pagar"];
$foto1=$_GET["foto1"];
$foto2=$_GET["foto2"];
$foto3=$_GET["foto3"];
$foto4=$_GET["foto4"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Vehículo</title>
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

        <div class="row">
           
            <div class="card border-light mb-3" style="margin: 50px;">

                <div class="card-body text-secundary">
                    <center><h2 class="card-title"><?php  echo $marca." ".$modelo ?></h2></center>
                    <p class="card-text" style="text-align: justify; margin: 50px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus doloribus saepe non voluptates earum animi explicabo aspernatur? Commodi, cupiditate dignissimos. Eos vel et sed, ea eius ab hic soluta dignissimos!</p>
                    <p class="card-text" style="text-align: justify; margin: 50px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus doloribus saepe non voluptates earum animi explicabo aspernatur? Commodi, cupiditate dignissimos. Eos vel et sed, ea eius ab hic soluta dignissimos!</p>
                </div>
                <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr> 
                            <th scope="col"><center>Marca</center></th>
                            <th scope="col"><center>Modelo</center></th>
                            <th scope="col"><center>Precio</center></th>
                            <th scope="col"><center>Dias de alquiler</center></th>
                            <th scope="col"><center>Precio a pagar</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><center> <?php echo $marca ?> </center></th>
                            <td><center> <?php echo $modelo ?> </center></td>
                            <td><center> <?php echo $precio ?> </center></td>
                            <td><center> <?php echo $dias ?> </center></td>
                            <td><center> <?php echo $precio_a_pagar ?> </center></td>
                        </tr>
                    </tbody>
                </table>
                <center>
                <div class="card-border-light" style="margin: 50px; width:1200px; height:800px;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin: 50px; width:800; height:400;">
                        <div class="carousel-inner">
                            <div class="carousel-item active" >
                                <img src="<?php echo $foto1 ?>" style=" width:1000px; height:600px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $foto2 ?>" style=" width:1000px; height:600px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $foto3 ?>" style=" width:1000px; height:600px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $foto4 ?>" style=" width:1000px; height:600px;"  alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                </center>
                <br>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>