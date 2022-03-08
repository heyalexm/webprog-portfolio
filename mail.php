<?php
 $conn = mysqli_connect("localhost","root","","portfolio");

 if(!$conn)
 {
     die(mysql_error($conn));
 }

 $sql = "SELECT * FROM comments";
 $query1 = mysqli_query($conn, $sql);

    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // Submit the form
            $name = $_POST['name'];
            $nickname = $_POST['nickname'];
            $date = $_POST['date'];
            $emailFrom = $_POST['email'];
            $hobbies = $_POST['hobbies'];
            $comment = $_POST['comment'];

            $subject = $name . "'s Personal Information";
            $receiver = "heyalexm.student@gmail.com";
            $msg = "";

            $msg .= "Today is ". date("Y-m-d") . "\r\n\r\n";
            $msg .= "Name : " . $name . "\r\n";
            $msg .= "Nickname : " . $nickname . "\r\n";
            $msg .= "Birth Date : " . $date . "\r\n";
            $msg .= "Email : " . $emailFrom . "\r\n";
            $msg .= "Hobbies : " . $hobbies . "\r\n";
            $msg .= "Comment : " . $comment . "\r\n";

            mail($receiver, $subject, $msg);
            $message_sent = true;

            $sql = "SELECT * FROM comments";
            $query = mysqli_query($conn, $sql);
              
            $name = $_POST['name'];
            $nickname = $_POST['nickname'];
            $date = $_POST['date'];
            $emailFrom = $_POST['email'];
            $hobbies = $_POST['hobbies'];
            $comment = $_POST['comment'];
    
            $query = "INSERT INTO `comments` (fullname, nickname, birthdate, emailfrom, hobbies, comments)
            VALUES ('$name','$nickname','$date','$emailFrom','$hobbies','$comment')";
            $queryrun = mysqli_query($conn, $query);
            
            header("Location: index.php?info=mailadded");
        }
    }   
  
?>
    