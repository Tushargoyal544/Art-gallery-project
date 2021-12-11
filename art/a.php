<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>madhubani panting</title>
  </head>
  <body>
    
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="image[]" multiple="mydb"/>
    <input type="submit" name="submit"/>
    </form>

    <?php
    mysql_connect("loaclhost","root","");
    mysql_select_db("mydb");
     if(isset($_POST['submit'])){
        $filename=$_FILES['madhuimg']['name'];
        $tempname=$_FILES['madhuimg']['temp_name'];
        $filetype=$_FILES['madhuimg']['type'];
        for($i=0;$i<=count($tempname)-1;$i++){
            $name=addslashes($filename[$i]);
            $temp=addslashes(file_get_contents($tempname[$i]));
            mysql_query("INSERT INTO madhuimg(name,image)values('$name','$temp')");
        }
    }
    
    // display
    $res=mysql_query("SELECT * from madhuimg");
    while($row=mysql_fetch_array($res))
    {
        echo'<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="300" geight="300">';
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>