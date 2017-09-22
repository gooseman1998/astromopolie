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

            echo '<h1>Nieuws bericht '.$id.'</h1>';
            $sel = "SELECT * FROM nieuws WHERE titel LIKE '%$id%'";
            $query = mysqli_query($conn, $sel);
            
         
            while ($rows = mysqli_fetch_assoc($query)) {
               $titel = $rows['titel'];
               $bericht = $rows['bericht'];
               $opmerking = $rows['opmerking'];
               $xp = $rows['xp'];
               $tijd = $rows['publishDate'];

                echo ' 
                    <tr>
                        <td><b>titel:</b></td><td> '.$titel.'</td>
                    </tr>
                    <tr>
                        <td><b>Bericht:</b></td><td> '.$bericht.'</td>
                    </tr>
                    <tr>
                        <td><b>Opmerking:</b></td><td> '.$opmerking.'</td>
                    </tr>
                    <tr>
                        <td><b>XP:</b> </td><td>'.$xp.'</td>
                    </tr>
                    <tr>
                        <td><b>Tijd:</b></td><td> '.$tijd.'</td>
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
