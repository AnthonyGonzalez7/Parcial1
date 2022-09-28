<?php

$pelinombre=$_GET["pelinombre"];
$pelicontexto=$_GET["pelicontexto"];
$pelicalificaion=$_GET["pelicalificacion"];
$peliportadalink=$_GET["peliportadalink"];
$pelitrailerlink=$_GET["pelitrailerlink"];
$peliresumen=$_GET["peliresumen"];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pelicula </title>
</head>
<body>

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
        <br><br>
        <center><h1><?php  echo $pelinombre ?></h1></center>


        <div class="container-fluid">
        <br>
        <div class="card text-center" style="margin: 50px;">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Principal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Resumen</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Trailer</button>
            </li>
            </ul> 
        </div>

             <div class="tab-content" id="myTabContent" style="margin: 50px;">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <br>
                <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto"  style="width=500; height=200;">
                    <thead>
                        <tr > 
                            <th scope="row" colspan="2"><?php echo $pelinombre?></th>
                        </tr>
                        <tr > 
                            <th  ROWSPAN="2" ><center><img src="<?php echo $peliportadalink?>" width="175" height="250" alt=""> </center></th>

                        </tr>
                        <tr>
                            <td colspan="2" ROWSPAN="2"><p style="text-align: justify; margin: 50px;" ><?php echo $pelicontexto?></p></td>
                        </tr>

                        <tr>
                             <th scope="row" ><center><?php echo $pelicalificaion?></center></th>
                        </tr>
                       
                           
                        <br>     
                    </thead>
                    
                </table>
                <br><br>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <br>
                <p style="text-align: justify; margin: 50px;"   ><?php echo $peliresumen ?>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu leo nec neque mattis bibendum. Proin tristique nibh a lacus convallis porta. Phasellus venenatis massa sit amet vehicula dignissim. Suspendisse et porttitor massa. In ac sem ullamcorper, rhoncus justo ut, fringilla lacus. Integer aliquet risus elit, ac facilisis dolor facilisis non. Integer eget ipsum tincidunt, suscipit leo ut, eleifend tellus.
                <br>
                Proin eu varius sem. Nam malesuada arcu neque, quis posuere massa pharetra ut. Aliquam commodo efficitur tortor, id faucibus lectus euismod egestas. Fusce vestibulum lectus ut felis dignissim iaculis. Morbi interdum odio ac velit dictum venenatis. Nulla vestibulum pretium purus, ut bibendum ex tempus in. Sed vel iaculis nunc, non vestibulum lorem. Donec eu ligula eu mauris commodo ornare. Mauris tincidunt dignissim mollis. Curabitur feugiat, quam sit amet tincidunt dictum, nibh ligula ullamcorper tellus, id laoreet sem dolor a tortor. Nullam tristique in tortor quis rutrum. Maecenas cursus, tellus eget tempor malesuada, dolor est ornare libero, a aliquet eros purus eget nulla. Nunc et tortor ac est laoreet aliquet. Nulla facilisi. Nulla vehicula odio scelerisque, finibus risus ac, mollis nunc. Nam nisl est, facilisis vitae dictum non, faucibus in elit.
                <br>    
                Nulla ac justo gravida, malesuada lorem vel, molestie mauris. Ut iaculis gravida lobortis. Suspendisse congue, risus vel rutrum imperdiet, ipsum odio tincidunt libero, nec dapibus urna est at quam. Donec commodo, augue sit amet semper vulputate, massa nisl vulputate turpis, et accumsan nibh nibh quis dolor. Donec fringilla leo risus, sed posuere massa eleifend eu. Duis sit amet diam eu tortor vestibulum blandit ut ut lectus. Fusce faucibus lacus ac risus tristique, id aliquet ligula iaculis. Aenean hendrerit molestie tortor, quis pulvinar leo elementum at. Integer luctus justo purus, sed commodo arcu porttitor nec. Fusce quis lobortis mi. Duis pharetra orci vel nibh venenatis bibendum. Quisque sed sodales metus, nec varius orci. Donec non elit diam.
                <br>
                Etiam ac luctus nulla, rutrum iaculis nisl. Proin a fringilla nibh. Integer malesuada iaculis risus, tincidunt ultrices arcu lobortis at. Sed dictum blandit purus, fringilla interdum ex mollis et. Vivamus euismod, justo in dignissim varius, risus mauris ultricies est, vitae tincidunt enim lacus at nibh. Aenean tempus efficitur nisi, id blandit odio convallis ac. Aliquam ac tristique diam. Etiam vehicula aliquet arcu, vel aliquet ipsum.
                <br>
                Proin vel leo a ligula fringilla varius nec at diam. Phasellus magna dui, pretium vitae commodo sed, suscipit id velit. Etiam metus purus, fermentum sit amet urna vel, aliquam pretium ante. Mauris a commodo eros, nec volutpat erat. Phasellus et elit blandit, ultricies risus ut, commodo tellus. Etiam ipsum leo, commodo et mattis sit amet, finibus a leo. Ut ante dui, pellentesque sit amet blandit at, egestas a diam. Morbi ac dui aliquam, porta tellus dapibus, tristique quam. Nullam id massa non diam sagittis commodo sit amet vel arcu.
                <br>    
                </p>
            </div>

            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <br><br>
              <center><iframe width="800" height="400" src="<?php  echo $pelitrailerlink ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>  
            <br><br>
            </div>


        </div>   
        <br><br>
        


        </div>
        <br><br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>