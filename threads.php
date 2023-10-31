<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Forum website</title>
  </head>
  <body>
   <?php include 'partials/_header.php';?>
   <?php include '_dbconnect.php';?>
   <?php
   $id = $_GET['catid'];
   $sql = "SELECT * FROM `categories` WHERE category_id='$id'";
    $result = mysqli_query($conn,$sql);
    while($row =mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_discription'];
    }
   
   ?>

   <!-- category  container starts here -->
<div class="container my-3">
<div class="jumbotron">
  <h1 class="display-4">Welcome to <?php echo $catname;?> Forum!</h1>
  <p class="lead">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation via the off-side rule.</p>
  <hr class="my-4">
  <p>This is peer to peer forum for sharing knowledge with ech other.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

</div>

<div class="container">
    <h1>Browse Questions</h1>
<div class="media">
  <img src="img/userdefault.png" class="mr-3" alt="...">
  <div class="media-body my-3">
    <h5 class="mt-0">unable to install python because of same error</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>

<div class="media">
  <img src="img/userdefault.png" class="mr-3" alt="...">
  <div class="media-body my-3">
    <h5 class="mt-0">unable to install python because of same error</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>

<div class="media">
  <img src="img/userdefault.png" class="mr-3" alt="...">
  <div class="media-body my-3">
    <h5 class="mt-0">unable to install python because of same error</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>

<div class="media">
  <img src="img/userdefault.png" class="mr-3" alt="...">
  <div class="media-body my-3">
    <h5 class="mt-0">unable to install python because of same error</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
</div>
  
   <?php include 'partials/footer.php';?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>