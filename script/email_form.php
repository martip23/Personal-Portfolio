<?php
if (isset($_POST['email'])) {
    
    $email_to = "patrick...martinez77@gmail.com";
    $email_subject = "Email from portfolio";\

    $first_name = $_POST['firstname']; // required
    $last_name = $_POST['lastname']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone']; // not required
    $comments = $_POST['message']; // required
    
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: "$telephone."\n";
    $email_message .= "Comments: ".$comments."\n";
    
    $headers = "From: ".$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n".
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to), $email_subject, $email_message, $headers);
?>

Thank you for reaching out! I will be in touch with you very soon.

<?php
}
?>