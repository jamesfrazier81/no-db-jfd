<?php
if($_POST['submit'] == "Send")
{
    $errorMessage = "";
    
    if(empty($_POST['firstname']))
    {
        $errorMessage .= "<li>Please enter your first name.</li>";
    }
    if(empty($_POST['lastname']))
    {
        $errorMessage .= "<li>Please enter your last name.</li>";
    }
    if(empty($_POST['email']))
    {
        $errorMessage .= "<li>Please enter your email address.</li>";
    }
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    if(empty($errorMessage))
    {
        $fs = fopen("submissions.csv","a");
        fwrite($fs,$lastname . ", " . $firstname . ", " . $email . ", " . $comments . "\n");
        fclose($fs);
        
        header("Location: /thanks.php");
        exit;
    }
}
?>