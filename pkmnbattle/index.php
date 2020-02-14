<?php

require 'class/Pokemon.php';

$pok1 = new Pokemon('Bidoof', 200, 40, 'Je suis un peu gros', 'img/bidoof.png');
$pok2 = new Pokemon('Darkrai', 200, 100, 'Je suis tout noir', 'img/darkrai.png');
$pok3 = new Pokemon('Goupix', 200, 40, 'Tellement gentil et mignon', 'img/goupix.png');
$pok4 = new Pokemon('Noctali', 200, 60, 'Trop mimi trop cute', 'img/noctali.png');
$pok5 = new Pokemon('Pichu', 200, 60, 'Attention je grille', 'img/pichu.png');
$pok6 = new Pokemon('Tygnon', 200, 100, 'Je cogne fort !', 'img/tygnon.png')




?>

<!DOCTYPE html>
<html>

<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid logo">
        <div class="row">
            <div class="col-12">
                <img id="poke" class="reset-logo"  src="img/pokemon-logo.png">
            </div>
        </div>
    </div>


    <div class="container poke">
        <div class="row">
            <img  class="pokeball" src="./img/pokeball.png">
            
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div id="logo" class="col-12 box-choose">

                <img class="choix" src="https://fontmeme.com/permalink/200205/ddcfaa26c48d26b0fc79dd6bb5e91a2c.png"
                    alt="police-pokemon"></a>
                    <button id="play">PLAY !</button>
            </div>
        </div>
        
        <button onclick="reset();" id="reset">RESET GAME</button>
        <!-- POKEMON AVATAR -->
        <div class="container-fluid">
            <div class="row" id="choose">
            
<div class="card" id="card1">
  <img data-name="<?php echo $pok1->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok1->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok1->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok1->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok1->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok1->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok1->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok1->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok1->getDesc(); ?><br>
  <button type="button" 
          class="select-card-button"
          onclick="selectCard('card1')">Select</button>
</div>

<div class="card" id="card2">
  <img data-name="<?php echo $pok2->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok2->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok2->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok2->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok2->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok2->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok2->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok2->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok2->getDesc(); ?><br>
  <button type="button"
          class="select-card-button"
          onclick="selectCard('card2')">Select</button>
</div>
<div class="card" id="card3">
  <img data-name="<?php echo $pok3->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok3->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok3->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok3->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok3->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok3->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok3->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok3->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok3->getDesc(); ?><br>
  <button type="button"
          class="select-card-button"
          onclick="selectCard('card3')">Select</button>
</div>
<div class="card" id="card4">
<img data-name="<?php echo $pok4->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok4->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok4->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok4->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok4->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok4->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok4->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok4->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok4->getDesc(); ?><br>
  <button type="button"
          class="select-card-button"
          onclick="selectCard('card4')">Select</button>
</div>
<div class="card" id="card5">
 <img data-name="<?php echo $pok5->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok5->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok5->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok5->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok5->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok5->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok5->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok5->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok5->getDesc(); ?><br>
  <button type="button"
          class="select-card-button"
          onclick="selectCard('card5')">Select</button>
</div>
<div class="card" id="card6">
<img data-name="<?php echo $pok6->getStats(); ?>"
                        data-life="<?php echo 'Vie : ' . $pok6->getLife(); ?>"
                        data-atak="<?php echo 'Attaque : ' . $pok6->getAtak(); ?>"
                        data-desc="<?php echo 'Description : ' . $pok6->getDesc(); ?>" class="avatar"
                        src="<?php echo $pok6->getAvatar(); ?>">
                    <?php echo 'Nom : ' . $pok6->getName(); ?><br>
                    <?php echo 'Vie : ' . $pok6->getLife(); ?><br>
                    <?php echo 'Attaque : ' . $pok6->getAtak(); ?><br>
                    <?php echo 'Description :<br> ' . $pok6->getDesc(); ?><br>
  <button type="button"
          class="select-card-button"
          onclick="selectCard('card6')">Select</button>
</div>

        </div>
    </div>
    </div>
    <div class="container-fluid bot">
        <div class="row" id="test">
            <div class="life">
                <p>Player 1 :</p>
                <div id="hp1"></div>
                <p>HP</p>
            </div>

            <button onclick="attaquer()" type="button" id="boutonatk">ATTAQUER</button>
            <div class="life">
                <p>Player 2 :</p>
                <div id="hp2"></div>
                <p>HP</p>
            </div>
        </div>
    </div>
    <button id="battle">BATTLE !</button>
    <script type="text/javascript" src="js/script.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="js/script.js"></script>
</body>

</html>