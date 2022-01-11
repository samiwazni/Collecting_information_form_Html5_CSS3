<?php 
// This code only work when it be publish online..
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    

    $mailTo = "sami.wazni@hotmail.com";
    $headers = "Form: ".$mailFrom;
    $txt = "You have received an e-mail form ".$name.".\n\n".$message;

    mail($mailTo,  $number, $txt, $headers);
    header("Location: index.php\mailsend");
}
