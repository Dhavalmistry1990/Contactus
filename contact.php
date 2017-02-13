<?php
error_reporting(0);
$userEmail = $_REQUEST["useremail"];
$userName = $_REQUEST["username"];
$subject = $_REQUEST["subject"];
$content = $_REQUEST["content"];

if( !empty($userEmail) && !empty($userName) && !empty($subject) && !empty($content)) {
     mail($userEmail, $subject ,$content);
     $message = true;   
} else {
    $message = false;
}
echo $message;
?>