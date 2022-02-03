<?php
session_start();

$name = trim(strip_tags($_POST['user_name']));
$firstName = trim(strip_tags($_POST['first_name']));
$message = trim(strip_tags($_POST['message']));
$userMail = trim(strip_tags($_POST['user_mail']));

if (isset($_POST['submit']) && isset($_POST['user_name']) && isset($_POST['first_name']) && isset($_POST['message'])) {
    if (isset($_POST['user_mail'])) {
        $to = 'dehainaut.angelique@orange.fr';
        $subject = "Vous avez un message";
        $headers = array(
            'Reply-to' => $userMail,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        if (filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
            if (strlen($message <= 250)) {
                if (mail($to, $subject, $message, $headers, $userMail)) {
                    $_SESSION['user_mail'] = "mail-success";
                } else {
                    $_SESSION['user_mail'] = "mail-error";
                }
            }
        }
    }
}

header('Location: formulaire.php');