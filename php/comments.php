comments <?php
$Firstname  = $_POST ['name'];
$Lastname  = $_POST ['name'];
$Email = <?php echo $_POST["email"]; ?>;
$Phone = $_POST ['email'];
$Message = $_POST ['message'];
$from = 'From:nllbp.com';
$submit = 'nakeshialorde@nllprofile.com';
$subject = 'Email Inquiry';
$body = "From:$name\n E-mail: $email\n Message:\n $message";
?>

<?php
if ($_POST ['Submit']){
    if (mail($to, $subject, $body, $from)){
        echo <p>'Thank you for the your email!'</P>;
    }
    else{
        echo <p>'An error occured, please try sending your message again!'</P>;
    }
}
?>