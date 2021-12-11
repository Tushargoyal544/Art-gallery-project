<?php
require('connection.php');
require('function.php');
$smg='';
if(isset($_POST['submit'])){
    echo $email=get_safe_value($con,$_POST['email']);
    echo $password=get_safe_value($con,$_POST['password']);
    $sql="select * from users where email='$email' and password='$password'";
    $res =mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $_SESSION['LOGIN']='yes';
        $_SESSION['LOGIN']=$email;
        header('location:logoutt.html');
        die();
    }
    else{
        $smg="enter a valid details";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title></title>
</head>

<body>





  <!--navegation bar-->




  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="about.html">about</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="mx-3">
        <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">login</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">signup</button>

      </div>
    </div>

  </nav>
  <!--modals for  login-->
  <!-- Button trigger modal -->

  <!--php code-->
 

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" Required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" Required>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            
             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
           
          </form>
          <?php echo $smg ?>
        </div>

      </div>
    </div>
  </div>
  <!--modals for  signup-->
  <!-- Button trigger modal -->
 <!--php code-->

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">signup</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="sign.php" method="POST">
            <div class="form-group">
              <label for="full name">Name</label>
              <input type="text" name="username" class="form-control" id="name" aria-describedby="emailHelp" required>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password"name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>




  <!-- carouse -->
  <!--div class="container-fluid"-->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1400x400/?art,panting" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?art,gallery" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?art,image" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- albums -->

  <div class="container my-4">
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="madhu\mad.jpg">
          <h2>Madhubani</h2>
          <p>Madhubani painting (Mithila painting) was traditionally created by the women of various communities in the
            Mithila region of the Indian subcontinent. ... The paintings were traditionally done on freshly plastered
            mud walls and floors of huts, but now they are also done on cloth, handmade paper and canvas..</p>
          <p><a class="btn btn-secondary" href="display.php" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="oil\Oil-painting.jpg">
          <h2>Oil-Painting</h2>
          <p>The oil painting is the most widely known and common form of painting that has been in existence.
            Practiced by the majority of the artists.
            It’s a process of painting with pigments that get mixed with a layer of drying oil, such as linseed oil,
            which was widely used in modern European era.

          </p>

          <p><a class="btn btn-secondary" href="oildis.php" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="pancil\PENCIL-SKETCH.jpg">
          <h2>Pencil Sketching</h2>
          <p>Pencil Sketching is the art of creating highly defined artwork using an instrument consisting of graphite
            enclosed in a cylindrical wooden chamber of different grades.

            The graphite was mined in the 16th century, the artists used pieces of natural graphite, inserted in a
            porte-crayon wasn’t known before the 17th century.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <!--secand row-->
      <dib class="container my-4">
        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="ink\Ink-PAinting.jpg">
              <h2>Ink painting</h2>
              <p>Ink paintings are made with a liquid that consists of pigments or dyes and is used to color a surface
                to create illustrations and artworks.

                Ink is used for drawing with a pen, brush, or quill.

                Ink paintings feel like magic when they’re made.

                In books, it suggests that Shan Shui style painting existed during China’s Liu Song dynasty of the fifth
                century.

                .</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="fresco\fresco.jpg">
              <h2>Fresco-Painting</h2>
              <p>Fresco comes from an Italian word which is obtained from a Latin word.

                Fresco style is for those who want paintings on their walls and ceilings.

                The techniques of fresco consist of mixing the paints with water and applied on a thin layer of wet
                plaster.

                It requires a medium to get attached to the wall properly.
              </p>

              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="college/COLLAGE.jpg">
              <h2> Collage Painting</h2>
              <p>This is an assembled creative artwork having the visual effect.

                Collage work can be done with pieces of colored or handmade papers, ribbons, applying paints, magazines,
                etcetera.Collage is basically an accumulation of various artworks into a singular entity, which is the knack of
                visual appeal it portrays.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

         <!--footer-->
         <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">© 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>

</body>

</html>