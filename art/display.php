<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title></title>
  </head>
  <body class="container">
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="projrct.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">add to cart <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 4h14v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm7-2.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
</svg>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">ADDIMAGE <span class="sr-only">(current)</span></a>
      </li>
     
      
       
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>








    <div class="row">
    <?php
    $mysqli=new mysqli('localhost','root','','mydb') or die($mysqli->connect_error);
    $table='madhubani';
    $result=$mysqli->query("SELECT * FROM $table ORDER BY id1 ASC") or die($mysqli->error);
    $num= mysqli_num_rows( $result);
    if($num>0){
    
      
      while($data=$result->fetch_assoc()){
        ?>
       <div class="col-md-4">
         <div class="card mb-4 shadow-sm">
      <form>
     
     
      
           <div class="card-body">
      <img  src="<?php echo $data['img_dir']; ?>"   width="300" height="300" class="img-fluide mb-2">
      
      <p class="card-text "><h2> <?php echo $data['imgname']; ?></h2>
      <p class="card-text "><h2> <?php echo "RS-",$data['price']; ?></h2>
      
      </div>
    	
      <div class="d-flex justify-content-between align-items-center">
      <a class="btn btn-lg btn-block btn-outline-primary" href="view.php" role="button">add to cart ??</a>
      <button type="button" class="btn btn-lg btn-block btn-outline-primary">ADD TO CART</button>
      
      </div>
      </div>
       </div>
      </form>
      <!-- <p class='card-text'><h2>{$data['imgname']}</h2></br><h2><form><button type='button' class='btn btn-primary'>cart</button><h2>
      </div>";   
      ?> -->
      <?php
     
      }
    }
    
    
    
    
    ?>
   
  </div>
   

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>