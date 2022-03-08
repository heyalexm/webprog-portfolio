<!--=============== PHP section ===============-->
<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $date = $_POST['date'];
    $emailFrom = $_POST['email'];
    $hobbies = $_POST['hobbies'];
    $comment = $_POST['comment'];

  $mailto = "martinalexis2827@gmail.com";
  $subject = $name . "'s Comment on your website";

  $message = $hobbies . "<br><br>" . "Comment: " . $comment;

  // // Always set content-type when sending HTML email
  // $headers = "MIME-Version: 1.0" . "\r\n";
  // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers = "From: " . $emailFrom;

  $mail = mail($mailto,$subject,$message,$headers);

//   if($mail){
//     echo "<script>alert('Mail successfully sent.')</script>";
//   } else{
//     echo "<script>alert('Mail has failed to send.')</script>";
//   }
  } 
?>
