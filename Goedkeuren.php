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
          <h1>Goedkeuren</h1>
         <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                
                <th>Studentnummer</th>
                <th>Voornaam</th>
                  <th>Achternaam</th>
              <!--     <th>punten</th> -->
                  <!-- <th>geld</th> -->
                  <th>Evenement</th>
                  <th>Punten</th>
                    <th>Goedkeuren</th>
                  <th>Afkeuren</th>
                </tr>
              </thead>
              <tbody>
                
              <?php
              $sel = "SELECT score.studentnummer, users.voornaam, users.achternaam, score.evenement, score.punten 
              FROM score,users 
              WHERE goedGekeurd = 0
              AND evenement LIKE '%monopoly%'
              AND score.studentnummer = users.userID
            
              ORDER BY studentnummer ASC
              ";

              $query = mysqli_query($conn, $sel);

              while ($rows = mysqli_fetch_assoc($query)) {
                  $studentnummer = $rows['studentnummer'];
                  $voornaam = $rows['voornaam'];
                  $achternaam = $rows['achternaam'];
                  $evenement = $rows['evenement'];
                  $punten = $rows['punten'];

                  echo '
                  <tr>
                    <td>'.$studentnummer.'</td>
                    <td>'.$voornaam.'</td>
                    <td>'.$achternaam.'</td>
                    <td>'.$evenement.'</td>
                    <td>'.$punten.'</td>
                    <td><a href="?goedkeuren&id='.$studentnummer.'&evenement='.$evenement.'"><img src="img/greenDice.png" width="50px" height="40px"></a></td>
                    <td><a href="?afkeuren"><img src="img/redDice.png" width="50px" height="40px"></a></td>
                  </tr>';
              }
              ?>

              </tbody>
          <?php 

          if (isset($_GET['goedkeuren']) && $_GET['id'] && $_GET['evenement']) {
            $id = $_GET['id'];
            $evenement = $_GET['evenement'];

            $sel = "
            UPDATE score
            SET goedGekeurd = 1
            WHERE studentnummer = '$id'
            AND evenement = '$evenement'
            ";
            /*$sel = "UPDATE score set goedGekeurd = 0 WHERE goedGekeurd = 1";*/
            mysqli_query($conn, $sel);
           echo 'Score van gebruiker: '.$id.' is goedgekeurd';

           
          }

          ?>
          </main>
      </div>
    </div>
          <!-- <a href="?goedkeuren&cleardb" class="btn" name="cleardb" id="cleardb">Clear database</a> -->
         <!--  <?php
            if (isset($_GET['cleardb'])){
              $sel = "
              UPDATE score
              SET goedGekeurd = 0
              WHERE goedGekeurd = 1";
              mysqli_query($conn, $sel);
            }
          ?> -->
          
        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
