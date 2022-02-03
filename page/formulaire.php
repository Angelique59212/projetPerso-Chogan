<?php

$title = "Page de contact";
require __DIR__ .'/../partials/header.php'?>
<link rel="stylesheet" href="../css/form.css">

<body>
    <div id="form">
        <form action="verifForm.php" method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" id="name" name="user_name" required>
            </div>
            <div>
                <label for="first-name">Prénom</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div>
                <label for="mail">Adresse mail</label>
                <input type="email" id="mail" name="user_mail" required>
            </div>
            <div>
                <label for="message"></label>
                <textarea
                        name="message" id="message" cols="30" rows="10" maxlength="250" placeholder="Votre message" required>
                </textarea>
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>

<?php
if (isset($_SESSION['user_mail'])) {
    if ($_SESSION['user_mail'] === "mail-success") {
        echo "Le mail est bien envoyé ";
    }
    else {
        echo "Erreur lors de l'envoi";
    }
}
$_SESSION['user_mail'] = null;

require __DIR__ . '/../partials/footer.php';