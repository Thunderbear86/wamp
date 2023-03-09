<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Zero Flight Game Test</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../OneDrive/Documents/WWW privat/mmdgrid.css">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
<div class="container">
    <form>
        <div class="board">
            <div id="scorebar">Your scores:&nbsp;&nbsp;&nbsp;</div>
            <input id="bonus_01" name="radio1" class="bonus" type="radio">
            <input id="bonus_02" name="radio2" class="bonus" type="radio">
            <input id="bonus_03" name="radio3" class="bonus" type="radio">
            <input id="bonus_04" name="radio4" class="bonus" type="radio">
            <input id="bonus_05" name="radio5" class="bonus" type="radio">
            <input id="bonus_06" name="radio6" class="bonus" type="radio">
            <input id="bonus_07" name="radio7" class="bonus" type="radio">
            <input id="bonus_08" name="radio8" class="bonus" type="radio">
            <input id="bonus_09" name="radio9" class="bonus" type="radio">
            <input id="bonus_10" name="radio10" class="bonus" type="radio">
            <p class="enemy" id="enemy_01"></p>
            <p class="enemy" id="enemy_02"></p>
            <p class="enemy" id="enemy_03"></p>
            <p class="enemy enemy_t1" id="enemy_04"></p>
            <p class="enemy" id="enemy_05"></p>
            <p class="enemy" id="enemy_06"></p>
            <p class="enemy enemy_t3" id="enemy_07"></p>
            <p class="enemy" id="enemy_08"></p>
            <p class="enemy" id="enemy_09"></p>
            <p class="enemy" id="enemy_10"></p>
            <p class="enemy enemy_t1" id="enemy_11"></p>
            <p class="enemy" id="enemy_12"></p>
            <p class="enemy" id="enemy_13"></p>
            <p class="enemy enemy_t2" id="enemy_14"></p>
            <p class="enemy" id="enemy_15"></p>
            <p class="enemy" id="enemy_16"></p>
            <p class="enemy enemy_t3" id="enemy_17"></p>
            <p class="enemy" id="enemy_18"></p>
            <p class="enemy" id="enemy_19"></p>
            <p class="enemy enemy_t3" id="enemy_20"></p>
            <p class="enemy" id="enemy_21"></p>
            <p class="enemy" id="enemy_22"></p>
            <p class="enemy enemy_t1" id="enemy_23"></p>
            <p class="enemy" id="enemy_24"></p>
            <p class="enemy enemy_t2" id="enemy_25"></p>
            <p class="enemy" id="enemy_26"></p>
            <p class="enemy" id="enemy_27"></p>
            <p class="enemy enemy_t3" id="enemy_28"></p>
            <p class="enemy" id="enemy_29"></p>
            <p class="enemy" id="enemy_30"></p>
            <p class="enemy" id="enemy_31"></p>
            <p class="enemy" id="enemy_32"></p>
            <p class="enemy" id="enemy_33"></p>
            <p class="enemy" id="enemy_34"></p>
            <p class="enemy" id="enemy_35"></p>
            <p class="enemy" id="enemy_36"></p>
            <p class="enemy" id="enemy_37"></p>
            <p class="enemy" id="enemy_38"></p>
            <p class="enemy enemy_t3" id="enemy_39"></p>
            <p class="enemy" id="enemy_40"></p>
            <p class="enemy" id="enemy_41"></p>
            <p class="enemy" id="enemy_42"></p>
            <p class="enemy" id="enemy_43"></p>
            <p class="enemy enemy_t2" id="enemy_44"></p>
            <p class="enemy" id="enemy_45"></p>
            <p class="enemy" id="enemy_46"></p>
            <p class="enemy enemy_t1" id="enemy_47"></p>
            <p class="enemy" id="enemy_48"></p>
            <p class="enemy" id="enemy_49"></p>
            <p class="enemy" id="enemy_50"></p>
            <p id="finish">Congratulations! You just played a game that is written in JS and contains a total of 0 lines of code.</p>
            <p id="status"><strong>Help:</strong> <span class="inactive">move cursor to the field.</span><span class="active">Ships fly around the halls, click on bonuses!</span></p>
        </div>
</div>
<center>
    <embed src="https://www.zapsplat.com/wp-content/uploads/2015/music-game/music_zapsplat_easy_cheesy.mp3" loop="true" autostart="true" width="20" height="10"></embed>
    <br>
    <audio controls autoplay loop autostart>
        <source src="https://www.zapsplat.com/wp-content/uploads/2015/music-game/music_zapsplat_easy_cheesy.mp3" type="audio/mp3">
    </audio>
</center>
</form>

</div>


<p>Flyvespil!</p>

<?php
echo "Stadig Flyvespil!"
?>

</body>
</html>
