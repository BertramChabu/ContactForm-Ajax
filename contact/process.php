<?php
    include 'config.php';

    //sanitize all pst variables

    $email = mysqli_real_escape_string($con,$_POST['em1']);
    $emailclean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
    $sub = mysqli_real_escape_string($con,$_POST['sub1']);
    $subclean = filter_var($sub, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $message = mysqli_real_escape_string($con,$_POST['com1']);
    $messageclean = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);


    mysqli_query($con, "INSERT INTO `contact`( `email`, `subject`, `message`) VALUES ('$emailclean','$subclean','$messageclean')");


?>
