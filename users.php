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
              </tr>
            </thead>
            <tbody>
                
              <?php
              $sel = " SELECT * FROM users ORDER BY userID";
              $query = mysqli_query($conn, $sel);

              while ($rows = mysqli_fetch_assoc($query)) {
                  $studentnummer = $rows['userID'];
                  $voornaam = $rows['voornaam'];
                  $achternaam = $rows['achternaam'];          

                  echo '
                    <tr>
                      <td>'.$studentnummer.'</td>
                      <td>'.$voornaam.'</td>
                      <td>'.$achternaam.'</td>
                    </tr>';
              }
              ?>

            </tbody>
        </main>
      </div>
    </div>
 
          
        

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
