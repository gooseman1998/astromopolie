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
<div class="container">

 <?php


$server = "localhost";
$username = "root";
$password = "";
$db = "u527547848_spel";

$conn = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sel ="SELECT * FROM vragen";
  $query = mysqli_query($conn, $sel);

  $bab = mysqli_num_rows($query);

  echo $bab;
echo '<select>';

  for ($i = 0; $i < $bab +1; $i++){
      $titel = "vraag ".$i;
      $query = mysqli_query($conn, "SELECT 1 FROM vragen WHERE titel = '$titel'");
    if ($query && mysqli_num_rows($query) > 0){
      //do absulutely nothing
    }
    else{
      echo'<option>'.$titel.'</option>';
      
    }
  }
  echo '</select>';
include 'inc/footer.php'; ?> 
<!-- 
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
   <!--  <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
    </body>
    </html>