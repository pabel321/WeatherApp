<?php



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WeatherApp</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  </head>

  <body >

    <div class="container bg-primary" >
      <div class="header clearfix" >
        <h3 class="text-muted"  style="font-color: orange;">WeatherApp</h3>
        <h4> Weather details of <?php ?> </h4>
        <table class="table table-bordered" style="color: white;">
          <tr>
            <td>Temperature: </td>
            <td><?php echo $logo; ?><?php echo $logo; ?></td>
          </tr>
          <tr>
            <td>Description: </td>
            <td><?php echo $desc; ?></td>
          </tr>
          <tr>
            <td>Clouds: </td>
            <td><?php echo $clouds; ?></td>
          </tr>
          <tr>
            <td>Humidity: </td>
            <td><?php echo $humidity; ?></td>
          </tr>
          <tr>
            <td>Wind Speed: </td>
            <td><?php echo $windspeed; ?></td>
          </tr>
          <tr>
            <td>Pressure: </td>
            <td><?php echo $pressure; ?></td>
          </tr>
          <tr>
            <td>Visibility: </td>
            <td><?php echo $visibility; ?></td>
          </tr>
          <tr>
            <td>Sunrise: </td>
            <td><?php echo $sunrise; ?></td>
          </tr>
          <tr>
            <td>Sunset: </td>
            <td><?php echo $sunset; ?></td>
          </tr>
        </table>
      </div>

      <footer class="footer">
        <p style="color: white;">&copy; created by Pabel Rana.</p>
      </footer>

    </div> 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>

</html>
