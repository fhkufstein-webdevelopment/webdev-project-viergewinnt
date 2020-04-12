<?php

echo $this->header;

?>
<div id="main">
    <div class="row align-items-center" id="gamerow">

        <div class="col">
            <div class="jumbotron-fluid float-left" id="toRules">
                <div class="container text-center">
                    <img src="img/question.svg" class="img-fluid rounded float-left"></br>
                    <a href="rules" class="text-danger font-weight-bold">Zu den Spielregeln</a>
                </div>
            </div>
        </div>

        <div class="col-7" id="preStartContainer">
            <script type="text/javascript" src="js/game.js"></script>
            <script type="text/javascript">
            </script>

            <div class="row justify-content-center">
                <div id="buttoncontainer" class="col-md-10 col-sm-6">
                    <button id="farbeRotButton" type="button" class="btn btn-lg btn-warning btn-block"
                            onclick="farbAuswahl('yellow')">Gelb
                    </button>
                    <button id="farbeGelbButton" type="button" class="btn btn-lg btn-danger btn-block"
                            onclick="farbAuswahl('red')">Rot
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <button id="startGameButton" class="btn btn-lg btn-danger" onclick="startButton()">Start</button>
            </div>
        </div>

        <div class="col">
            <div class="jumbotron-fluid float-right" id="toScoreboard">
                <div class="container text-center">
                    <img src="img/goal.svg" class="img-fluid mb-2 rounded float-right"></br>
                    <a href="scoreboard" class="text-danger font-weight-bold">Zu den Ergebnissen</a>
                </div>
            </div>
        </div>
    </div>

    <div id="gameInfo">
    </div>
    <div class="row justify-content-center" id="gewonnenDiv">
    </div>
    <div class="row justify-content-center" id="zumScoreBoard">
    </div>


</div>

<?php

echo $this->footer;

?>
