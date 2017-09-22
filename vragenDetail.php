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
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
         
            <?php 
   
            $id = $_GET['id'];

            echo '<h1>Vraag '.$id.'</h1>';
            $sel = "SELECT * FROM vragen WHERE titel LIKE '%$id%'";
            $query = mysqli_query($conn, $sel);
            
         
            while ($rows = mysqli_fetch_assoc($query)) {
                $titel = $rows['titel'];
                $vraag = $rows['vraag'];
                $antwA = $rows['a'];
                $antwB = $rows['b'];
                $antwC = $rows['c'];
                $antwD = $rows['d'];
                $antw = $rows['antwoord'];
                $punten = $rows['punten'];
                $tijd = $rows['expireDate'];

                echo ' 
                    <tr>

                        <td><b>Vraag:</b></td><td> '.$vraag.'</td>
                    </tr>
                    <tr>
                        <td><b>Antwoord A:</b></td><td> '.$antwA.'</td>
                    </tr>
                    <tr>
                        <td><b>Antwoord B:</b></td><td> '.$antwB.'</td>
                    </tr>
                    <tr>
                        <td><b>Antwoord C:</b> </td><td>'.$antwC.'</td>
                    </tr>
                    <tr>
                        <td><b>Antwoord D:</b></td><td> '.$antwD.'</td>
                    </tr>
                    <tr>
                        <td><b>Juiste antwoord:</b></td><td> '.$antw.'</td>
                    </tr>
                    <tr>
                        <td><b>Te verdienen punten:</b></td><td> '.$punten.'</td>
                    </tr>
                    <tr>
                        <td><b>Tijdsduur:</b></td><td> '.$tijd.'</td>
                    </tr>
                ';                
            } ?>
              </tbody>
            </table>
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
