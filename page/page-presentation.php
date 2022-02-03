<?php
$title = "Présentation Chogan";
require __DIR__ .'/../partials/header.php'?>
<link rel="stylesheet" href="../css/pagePresentation.css">

<body>
    <div>
        <h1 class="welcome"><img src="/img/presentation/logo%20chogan.png" alt="logo"></h1>
    </div>

    <div class="what">
        <h2>Ma présentation</h2>
        <div id="gather">
            <img id="me" src="/img/presentation/moi1.jpg" alt="ma_photo">
        </div>
        <div class="center">
            <p>Je m'appelle Angélique, j'ai 33 ans et je suis maman de 3 enfants.</p>
            <p>
                Il y a un an, j'ai décidé de rejoindre l'aventure Chogan, tout d'abord car je voulais profiter de mes
                enfants tout en travaillant.
            </p>
            <p>J'ai trouvé très intéressant le large choix de produits, qui touche tout public</p>
        </div>
    </div>

    <div class="what">
        <h2>Chogan c'est quoi?</h2>
        <div class="center">
            <p class="what">
                Chogan est une entreprise Italienne situé au Sud de l'Italie, plus précisemment à Barletta.
            </p>
            <p>
                L'histoire de la marque Chogan débute avec 2 entrepreneurs ambitieux: MichelAngelo Paradiso et Liborio
                Scelzo.
            <p>Ils décident de fonder une entreprise italienne de Parfumerie en 2013</p>
        </div>

    </div>

    <h2 class="what">Que propose Chogan:</h2>

    <div id="bottom">
        <img id="showcase" src="/img/presentation/image_vitrine.jpeg" alt="gammes">
        <div id="produce">
            <p>Chogan propose plus de 4500 références produits:</p>
        </div>
        <div>
            <ul>
                <li>Parfums inspirés de grandes marques</li>
                <li>Produits ménagers aux normes HACCP</li>
                <li>Gamme Cosmétique</li>
                <li>Gamme médicale</li>
                <li>Gamme make-up</li>
                <li>Café</li>
                <li>Gamme homme</li>
                <li>Gamme enfant</li>
                <li>Et bien d'autres...</li>
            </ul>
        </div>
    </div>

<?php
require __DIR__ . '/../partials/footer.php';