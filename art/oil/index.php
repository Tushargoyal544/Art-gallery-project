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
  <div class="mx-3">
                <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">add image</button>

      </div>

      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">ADD IMAGE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



      <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="userfile[]" value="" multiple="">
    <input type="text" name="imgname" placeholder="imgname" required>
    <input type="text" name="discreption" placeholder="discreption" required>
    <input type="number" name="price" placeholder="price" required>
    <input type="submit" name="submit" value="upload">
    </form>
   
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$imgname=$_POST['imgname'];
$discreption=$_POST['discreption'];
$price=$_POST['price'];
$mysqli=new mysqli('localhost','root','','mydb') or die($mysqli->connect_error);
$table='oil';
$phpFileUploadErrors=array(
    0=>'jhewgbeygfryfurbg',
);
if(isset($_FILES['userfile'])){
    $file_array=reArrayFiles($_FILES['userfile']);
    for($i=0;$i<count($file_array);$i++){
        if($file_array[$i]['error']){
            ?><div class="alert alert-danger">
            <?php echo $file_array[$i]['name'].'-'.$phpFileUploadErrors[$file_array[$i]['error']];
            ?></div> <?php
        }
        else{
            $extensison=array('jpg','jpeg','png');
            $file_ext=explode('.',$file_array[$i]['name']);
            $name=$file_ext[0];
            $name=preg_replace("!-!"," ",$name);
            $name=ucwords($name);
            $file_ext=end($file_ext);
            if(!in_array($file_ext,$extensison)){
                ?><div class="alert alert-danger">
                    <?php echo "{$file_array[$i]['name']}-invalid file extension!";
                ?></div><?php
            }
            else{
                $img_dir='web/'.$file_array[$i]['name'];
                move_uploaded_file($file_array[$i]['tmp_name'],$img_dir);
                
                $sql="INSERT IGNORE INTO $table(name,img_dir,imgname,discreption,price)VALUES('$name','$img_dir','$imgname','$discreption','$price')";
                $mysqli->query($sql)or die($mysqli->error);
                header('location:display.php');
                ?> <div class="alert alert-success">
                    <?php echo $file_array[$i]['name'].'-'.$phpFileUploadErrors[$file_array[$i]['error']];
                ?></div><?php
            }
    
        }
    }
}
function reArrayFiles(&$file_post){
    $file_ary=array();
    $file_count=count($file_post['name']);
    $file_keys=array_keys($file_post);
    for($i=0;$i<$file_count;$i++){
        foreach($file_keys as $key){
            $file_ary[$i][$key]=$file_post[$key][$i];
        }
    }
    return $file_ary;
}
function pre_r($arry){
    echo'<pre>';
    print_r($array);
    echo'<pre>';
}