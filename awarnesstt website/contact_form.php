<?php
// Include files
require_once "./blogsys/db_params.php";
include_once './blogsys/class_blog_system.php';

$mngr=new blog_sys($mysqli);

if(isset($_POST['submit'])){
    $to = "nisan113377@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $message = $name . " " . $phone . " הודעה נשלחה מאת:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo '<script language="javascript">if(confirm("הטופס נשלח בהצלחה! נחזור אליכם בהקדם האפשרי")) {window.location.href = "https://awarnesstt.com"}</script>';
    }

?>
