<?php
    $conn = mysqli_connect("localhost","root","","portfolio");

    if(!$conn)
    {
        die(mysql_error($conn));
    }

    $sql = "SELECT * FROM info";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $info = $_REQUEST["info"];
        $image = $_FILES["file"];

    //Image file name
    $imagefilename =  $image['name'];
    //Image file error
    $imagefileerror = $image['error'];
    //Image file temp
    $imagefiletemp = $image['tmp_name'];

    //file separate
    $filename_separate = explode('.',$imagefilename);
    // $file_extension = strtolower($filename_separate[1]);
    $file_extension = strtolower(end($filename_separate));

    $extension = array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image = 'images/' .$imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "INSERT INTO `info`(title, info, image) values ('$title', '$info', '$upload_image')";
        $result = mysqli_query($conn,$sql);
        }
        header("Location: portfolio.php?info=added");
        exit();
    }

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];  
        $title = $_POST["title"];
        $info = $_POST["info"];
        $new_image = $_FILES['file'];
        $old_image = $_POST['file_old'];

        //Image file name
        $newimagefilename =  $new_image['name'];
        //Image file error
        $newimagefileerror = $new_image['error'];
        //Image file temp
        $newimagefiletemp = $new_image['tmp_name'];
        $newupload_image = 'images/' .$new_image;

        if($new_image != ''){
            $filename = $_FILES['file']['name'];
            $update_filename = $_FILES['file']['name'];
            
                $newupload_image = 'images/' .$filename;
                $query = "UPDATE `info` SET title = '$title', info = '$info', image = '$newupload_image' WHERE id = $id";
                $queryrun = mysqli_query($conn, $query);
    
                if($queryrun){
                
                    if($update_filename != ''){
                        move_uploaded_file($newimagefiletemp, $newupload_image);
                        unlink('images/'.$old_image);
                    }
                    $_SESSION['status'] = "Image Updated Successfully";
                    
                    header("Location: portfolio.php?info=updated");
                }
                else{
                    $_SESSION['status'] = "Image Not Updated!";
                    header("Location: portfolio.php?info=updated");
                }
            
            }
    }

    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM info WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['delete']))
    {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM info WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        header("Location: portfolio.php?info=deleted");
        exit();
    }

?>