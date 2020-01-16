<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Game.css">
    <title>Game-Eco School</title>
    <script src="Game.js">
    </script>
</head>

<body style="width: 1260px; margin: auto">
    <div id="div" style="width:1260">
        <div id="div3">
            <input value="Reset" type="submit" onClick="reset()">
            <span id="score" style="float: right; padding-top: 5px; padding-bottom: 5px; padding-right: 40px; border-radius: 0px 20px 20px 0px">0</span>
            <span style="float: right; padding-top: 5px; padding-bottom: 5px; padding-left: 40px; padding-right: 5px; border-radius: 20px 0px 0px 20px">score:</span>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- *****************************IMAGES OF TRASH CANS********************************* -->
        <div id="div2">
            <div><img id="blueTrash" ondrop="drop1(event)" ondragover="allowDrop(event)" src="Images/blue1.png" width="170" height="300">
                <span style="margin-left: 8px; background-color: #2d98d4">Glass</span>
            </div>
            <div><img id="redTrash" ondrop="drop2(event)" ondragover="allowDrop(event)" src="Images/red1.png" width="170" height="300"><span style="margin-left: 0px; background-color: #e7221b">Plastic</span></div>
            <div><img id="yellowTrash" ondrop="drop3(event)" ondragover="allowDrop(event)" src="Images/yellow1.png" width="170" height="300"><span style="margin-left: 62px; background-color: #fbc900">Paper</span></div>
        </div>
        <!-- *****************************TRASH IMAGES****************************************** -->
        <div class="div1">
            <img id="d1" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d2" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d3" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d4" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d5" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d6" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d7" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d8" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d9" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d10" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">

        </div>
    </div>
</body>

</html>
