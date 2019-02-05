<?php 
	$conexion=mysqli_connect('localhost','root','','programas');
    $daytoday = date("w");
    $sql="SELECT * FROM programas where semestre = '1' and diadetransmision = '1' order by horarioinicio asc";
    $sql2="SELECT * FROM programas where semestre = '1' order by diadetransmision, horarioinicio ASC";
    $result=mysqli_query($conexion,$sql);
    $result2=mysqli_query($conexion,$sql2);
 ?>

<!doctype html>
<html lang="es">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Titulo y FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
    <link rel="manifest" href="Favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Favicon/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title> Radio Unicaribe</title>
      
  </head>
    <!-- NAVBAR -->
    <body>
        
        <div class="container">
          <div class="row">
            <div class="col">

                
            <audio autoplay class="audio" controls="controls">
                <source type="audio/mpeg" src="http://67.159.10.149:9030/;stream/1&lang=auto&codec=mp3">
            </audio>
                
            </div>
            <div class="col">

                <div class="table-responsive-md">
                    <table class="table table-striped table-dark table-hover">

                    <tr>
                        <td><strong>
                            <?php 
                            
                                if ($daytoday < 5 and $daytoday > 0) {
                                    if ($daytoday == 1){
                                    echo "¡hoy es Lunes!";
                                    }
                                    if ($daytoday == 2){
                                    echo "¡hoy es Martes!";
                                    }
                                    if ($daytoday == 3){
                                    echo "¡hoy es Miércoles!";
                                    }
                                    if ($daytoday == 4){
                                    echo "¡hoy es Jueves!";
                                    }
                                    if ($daytoday == 5){
                                    echo "¡hoy es Viernes!";
                                    }

                                }
                                else 
                                    echo "Esto te espera el día lunes ;)";
                            ?>
                            </strong>No te pierdas nuestros programas.
                        </td>
                        <td>Horario</td>
                    </tr>

                        <?php 
                            while($mostrar=mysqli_fetch_array($result)){ 
                            echo "<tr>";
                            echo "<td>".$mostrar['nombreprog']."
                               
                                </td>";
                            echo "<td>".$mostrar['horarioinicio']." - ".$mostrar['horafin']."</td>";
                            echo "</tr>";
                            }
                        ?>
                        <td colspan=2 align="center">
                        
                            <p>
                              <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Parrilla Completa
                              </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                              <div class="card text-white bg-dark mb-3">
                                          <?php
                                            while($mostrar2=mysqli_fetch_array($result2)){
                                                  if ($mostrar2['diadetransmision'] ==1) {
                                                      $diatrans="Lunes";
                                                  }
                                                  if ($mostrar2['diadetransmision'] ==2) {
                                                      $diatrans="Martes";
                                                  }
                                                  if ($mostrar2['diadetransmision'] ==3) {
                                                      $diatrans="Miércoles";
                                                  }
                                                  if ($mostrar2['diadetransmision'] ==4) {
                                                      $diatrans="Jueves";
                                                  }
                                                  if ($mostrar2['diadetransmision'] ==5) {
                                                      $diatrans="Viernes";
                                                  }
                                                  echo "<li class='list-group-item list-group-item-dark'><strong>".$mostrar2['nombreprog']."</strong> | ".$mostrar2['horarioinicio']." - ".$mostrar2['horafin']." | ".$diatrans."</li>";  
                                                }
                                          ?>

                                  
                              </div>
                            </div>
                        
                        </td>
                            
                    </table>
                </div>
                
            </div>
          </div>
          <div class="row">
            <div class="col">
              1 of 3
            </div>
            <div class="col">
              2 of 3
            </div>
            <div class="col">
              3 of 3
            </div>
          </div>
        </div>
        
        
        
        
        
        
        <br>
        
     
      
      
      
      
      
      
      
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
