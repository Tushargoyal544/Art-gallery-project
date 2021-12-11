<?php
if(isset($_POST['submit'])){
    $file=$_FILES['file'];

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['temp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');
    if(in_array( $fileActualExt, $allowed))
    {
        if($fileError===0){
            if($fileSize<500000)
            {
                $fileNameNew=uniqid('',true).".". $fileActualExt;
                $fileDestination='uploads/'.$fileNameNew;
                move_uoload_file($fileTmpName,$fileDestination);
                header("location:index.php?upload successfuly")
            }else{
                echo "your file is to big";
            }

        }else{
            echo "there was error to uploading a file";
        }
    }else{
        echo "you can not upload the file this type";
    }
}
?>