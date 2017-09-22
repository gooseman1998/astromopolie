<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/favicon.ico">

    <title>Astromonopolie</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
  <?php include('inc/header.php') ?>
   
    <div class="container-fluid">
      <div class="row">
          <?php include('inc/sidebar.html'); ?>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <nav class="nav justify-content-center nav-pills nav-fill flex-column flex-sm-row py-4">
              <li class="nav-item">
                 <a class="nav-link active" href="#bestaand" data-toggle="tab"> Bestaande nieuws items </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#maken" data-toggle="tab"> Nieuws items maken </a>
              </li>                     
            </nav>
            <div class="tab-content">
              <div class="tab-pane active" id="bestaand"> 
                <h2>Bestaande nieuws items</h2>
                  <div class="table-responsive">
                   <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Titel</th>
                        <th>Bericht</th>
                        <th>Opnerking</th>
                        <th>XP</th>
                        <th>Tijd</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sel = "
                      SELECT * 
                      FROM nieuws
                      ";

                      $query = mysqli_query($conn, $sel);

                      while ($rows =mysqli_fetch_assoc($query)) {
                          $titel = $rows['titel'];
                          $bericht = $rows['bericht'];
                          $opmerking = $rows['opmerking'];
                          $xp = $rows['xp'];
                          $tijd = $rows['publishDate'];
                          $strlen = strlen($titel);
                          $id = null;
                          for ($i=0; $i < $strlen ; $i++) { 
                            $char = substr( $titel, $i, 1 );
                              if (is_numeric($char)) {
                                $id .= $char;
                              }
                          }                  
                         
                          echo '
                            <tr>
                              <td><a href="nieuwsDetail.php?id='.$id.'">'.substr($titel, 0,25).'</a></td>
                              <td><a href="nieuwsDetail.php?id='.$id.'">'.substr($bericht, 0,25).'</a></td>
                              <td><a href="nieuwsDetail.php?id='.$id.'">'.substr($opmerking, 0,25).'</a></td>
                              <td><a href="nieuwsDetail.php?id='.$id.'">'.substr($xp, 0,25).'</a></td>
                              <td><a href="nieuwsDetail.php?id='.$id.'">'.substr($tijd, 0,25).'</a></td>
                            </tr>';
                      } ?>
                    </tbody>
                   </table>
                 </div>
              </div>
              <div class="tab-pane " id="maken"> 
                  <h2>Nieuws item maken</h2>
                     <form action="" method="post">

                       <div class="form-group">
                          <label for="exampleSelect1">Vraag titel </label>
                            <?php 
                              $sel ="SELECT * FROM nieuws";
                              $query = mysqli_query($conn, $sel);
                              $bab = mysqli_num_rows($query);
                              for ($i = 0; $i < $bab +1; $i++){
                                  $titel = "Nieuws bericht ".$i;
                                  $query = mysqli_query($conn, "SELECT 1 FROM nieuws WHERE titel = '$titel'");
                                if ($query && mysqli_num_rows($query) > 0){
                                  //do absulutely nothing
                                }
                                else{
                                  echo'<input class="form-control" name="titel" type="text" value="'.$titel.'" readonly>';
                                }
                              }
                            ?>                           
                        </div>

                        <div class="form-group">
                          <label for="exampleTextarea1">Link naar nieuwsbericht</label>
                          <textarea class="form-control" id="exampleTextarea1" rows="3" name="bericht" placeholder="Enter Link naar nieuwsbericht"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="exampleTextarea2">Opmerking</label>
                          <textarea class="form-control" id="exampleTextarea2" rows="3" name="opmerking" placeholder="Enter Opmerking"></textarea>
                        </div>

                         <div class="form-group">
                          <label for="exampleInputEmail3">Te verdienen punten</label>
                          <input style="width: 200px; !important" type="number" name="punten" class="form-control" id="exampleInputEmail3" placeholder="Punten">
                        </div>

                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                      </form>

                      <?php
                        if(isset($_POST['send'])){
                          
                          $titel = $_POST['titel'];
                          $bericht = $_POST['bericht'];
                          $opmerking = $_POST['opmerking'];
                          $xp = $_POST['xp'];
                          $tijd = date('h:i:s', time());
                          
                          $sel = "INSERT INTO nieuws (titel, bericht, opmerking, xp, publishDate) VALUES ('$titel', '$bericht', '$opmerking', '$xp', '$tijd')";

                          mysqli_query($conn, $sel);
                        }
                      ?>
                </div>

            </div>
        </main>
      </div>
    </div>
                

                

               
           


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script>
          $(".small2").each(function () {
          text = $(this).text();
            if (text.length > 20) {
               $(this).html(text.substr(0, 186) + '<span class="elipsis">' + text.substr(186) + '</span><a class="elipsis" href="#">...</a>');
            }
          });
          $(".small2 > a.elipsis").click(function (e) {
              e.preventDefault(); //prevent '#' from being added to the url
              $(this).prev('span.elipsis').fadeToggle(500);
          });
        
          </script>
  </body>
</html>

