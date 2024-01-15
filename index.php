<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="styles.css">
    
</head>


<body>

    <h1 id="titre"> Adélie BRUNEL 3A INFO</h1>
    <div id="carrousel">
    <button onclick="clickLeft()"> <- </button>
    <img id="carrouselImage" src="images/figma.png">
    <button onclick="clickRight()"> -> </button>
    </div>
    <div id="div1">
    <div id="box1">
    <h3 >Qui suis-je ?</h3>
    <p id="InfoPerso"> 
        -20 ans
        -étudiante en informatique à l'ENSIM</p>
    </div>
    <div id="box2">
    <h3>Liste de mes projets :</h3>
    <p> - projet 1
        - projet 2
        - projet 3
    </p>
    </div>
        <div id="box3">
            <h3>Liste des contacts :</h3>
            <p> - contact 1 
                - n° tel: 02 23 54 66 87
                - contact 2
                - n° tel: 02 23 54 66 87
                - contact 3 
                - n° tel: 02 23 54 66 87
                - contact 4 
                - n° tel: 02 23 54 66 87
        </p>
        </div>
    </div>
    <form action = "addMessage.php" method = "POST">
    <div id = "div2">
        <h4>Nom : </h4>
        <input id="nom" name="nom" placeholder="nom"/>
        <h4>Mail : </h4>
        <input id="mail" name="mail" placeholder="adresse mail"/>
        <h4>Message : </h4>
        <textarea  id="message" name="message" placeholder="Ecrire un message"></textarea>
        <button type="submit" id="button">Envoyer</button>
    </div>
    </form>
    <script src="script.js"></script>
    <?php include "addMessage.php";?> 
</body>

</html>