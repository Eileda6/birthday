<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invitation anniversaire Adélie</title>
    <link rel="stylesheet" href="styles.css">
    
</head>


<body>
    <h1 id="titre"> Anniversaire d'Adélie ! 🎂</h1>
</br>
    <div id="infoFete">
        <h3 id="date">📆 23 août à 20 heures </h3>
        <div id="theme1">
            <div id="theme2">
                <h3>🎉 Thème : années 2000</h3>
                <button onclick="displayExplanations()">En savoir plus</button>
            </div>
            <p id="paragraphe"> Sweater épaules raglan, pantalon ample taille basse, débardeur, col camionneur, 
                jeans flare. C'était la mode en 2000. Pour les hommes, l'inspiration globale était
                très virile avec comme à la fin des années 90 une mode inspirée des tenues 
                de chantier et des uniformes avec des toiles robustes.
            </p>
        </div>

        <div id="lieu">
            <h3>📍Lieu :<h3>
            <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-
descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">Salle des fêtes Le Mans</a>
        </div>
    </div>
    <form action = "addMessage.php" method = "POST">
    <div id = "formulaire">
        <h3 id="titreFormulaire">📝 Formulaire d'inscrition :</h3>
        <div id = "Nom">
            <h4>Nom : </h4>
            <input id="nom" name="nom" placeholder="nom"/>
        </div>
        <div id = "Nombre">
            <h4>Nombre de personne : </h4>
            <input id="nombre" name="nombre" placeholder="Nombre de personne"/>
        </div>
        <button type="submit" id="button">Envoyer</button>
    </div>
    </form>
    <script src="script.js"></script>
    <?php include "register.php";?> 
</body>

</html>