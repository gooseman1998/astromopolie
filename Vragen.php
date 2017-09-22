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
                 <a class="nav-link active" href="#bestaand" data-toggle="tab"> Bestaande vragen </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#maken" data-toggle="tab"> Vragen maken </a>
              </li>                     
            </nav>
            <div class="tab-content">
              <div class="tab-pane active" id="bestaand"> 
                <h2>Bestaande vragen</h2>
                  <div class="table-responsive">
                   <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Titel</th>
                        <th>Vraag</th>
                        <th>AntwA</th>
                        <th>AntwB</th>
                        <th>AntwC</th>
                        <th>AntwD</th>
                        <th>Antwoord</th>
                        <th>XP</th>
                        <th>Tijd</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sel = "
                      SELECT * 
                      FROM vragen
                      ";

                      $query = mysqli_query($conn, $sel);

                      while ($rows =mysqli_fetch_assoc($query)) {
                          $titel = $rows['titel'];
                          $vraag = $rows['vraag'];
                          $antwA = $rows['a'];
                          $antwB = $rows['b'];
                          $antwC = $rows['c'];
                          $antwD = $rows['d'];
                          $antw = $rows['antwoord'];
                          $punten = $rows['punten'];
                          $tijd = $rows['expireDate'];
                          $strlen = strlen($titel);
                          $id = null;
                          for ($i=0; $i < $strlen +1; $i++) { 
                            $char = substr( $titel, $i, 1 );
                              if (is_numeric($char)) {
                                $id .= $char;
                              }
                          }                          
                          /*$id = substr($titel, -3);*/
                          echo '
                            <tr>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($titel, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($vraag, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($antwA, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($antwB, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($antwC, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($antwD, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($antw, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($punten, 0,25).'</a></td>
                              <td><a href="vragenDetail.php?id='.$id.'">'.substr($tijd, 0,25).'</a></td>
                            </tr>';
                      } ?>
                    </tbody>
                   </table>
                 </div>
              </div>
              <div class="tab-pane " id="maken"> 
                  <h2>Vragen maken</h2>
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="exampleSelect1">Vraag titel </label>
                            <?php 
                              $sel ="SELECT * FROM vragen";
                              $query = mysqli_query($conn, $sel);
                              $bab = mysqli_num_rows($query);
                              for ($i = 0; $i < $bab +1; $i++){
                                  $titel = "vraag ".$i;
                                  $query = mysqli_query($conn, "SELECT 1 FROM vragen WHERE titel = '$titel'");
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
                          <label for="exampleInputEmail1">Vraag</label>
                          <input type="text" class="form-control" name="vraag" id="exampleInputEmail1" placeholder="Enter vraag">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail2">Antwoord A</label>
                          <input type="text" class="form-control" name="antwA" id="exampleInputEmail2" placeholder="Enter Antwoord A">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail3">Antwoord B</label>
                          <input type="text" class="form-control" name="antwB" id="exampleInputEmail3" placeholder="Enter Antwoord B">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail4">Antwoord C</label>
                          <input type="text" class="form-control" name="antwC" id="exampleInputEmail4" placeholder="Enter Antwoord C">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail5">Antwoord D</label>
                          <input type="text" class="form-control" name="antwD" id="exampleInputEmail5" placeholder="Enter Antwoord D">
                          </div>

                 
                     
                        <div class="form-group">
                          <label for="exampleSelect1">Juiste antwoord</label>
                          <select class="form-control" name="antw" id="exampleSelect1">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail7">Te verdienen punten</label>
                          <input style="width: 200px; !important" type="number" name="punten" class="form-control" id="exampleInputEmail7" placeholder="Punten">
                          
                        </div>
                      
                        <div class="form-group" >
                        <label for="exampleInputEmail9">Tijd</label>
                        <input type="text" class="form-control" id="exampleInputEmail9" name="tijd" value="00:00:00">
                          
                        </div>
                        

                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                      </form>
                      <?php 
                        if (isset($_POST['send'])) {
                            $titel = $_POST['titel'];
                            $vraag = $_POST['vraag'];
                            $antwA = $_POST['antwA'];
                            $antwB = $_POST['antwB'];
                            $antwC = $_POST['antwC'];
                            $antwD = $_POST['antwD'];
                            $antw = $_POST['antw'];
                            $punten = $_POST['punten'];
                            $tijd = $_POST['tijd'];
                           

                          $sel = "INSERT INTO vragen (titel, vraag, a, b, c, d, antwoord, punten, expireDate) VALUES ('$titel', '$vraag', '$antwA', '$antwB', '$antwC', '$antwD', '$antw', '$punten', '$tijd')";
                          mysqli_query($conn, $sel);
                          



                       /*   echo '<br>';
                          var_dump($sel);echo '<br>';
                          $query = mysqli_query($conn, $sel);echo '<br>';
                          var_dump($query);echo '<br>';
                                if (!$query) {
                                  echo mysqli_error($query);
                                }
                                else {
                                  echo "<tr> Geslaagd </tr>";
                                }*/
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
