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

  <body style="background-color: #C4B45B   ">

    <div class="container">
      <div class="header clearfix">
      
        <h3 class="text-muted" style="font-family: cursive; color: blue;">WeatherApp</h3>
      </div>

      <div class="jumbotron">
        <h1 >Search your city</h1>
        
        <form method="get" action="get.php">
        <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" name="city" autocomplete="off" required="" placeholder="Write your city name" >
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Country</label>
        <input type="text" class="form-control" autocomplete="off" required="" name="country" placeholder="Write your country name" >
        </div>
        <button type="submit" class="btn btn-primary">view</button>
        </form>

      </div>

      <footer class="footer">
        <p style="color: white;">&copy; created by Pabel Rana.</p>
      </footer>

    </div> 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>

</html>
