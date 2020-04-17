<?php

echo $this->header;

?>

<div id="main">
    <div id="index">
        <div class="row justify-content-center" id="gamerow">

            <div id="preStartContainer" class="col-md-6 col-sm-12">
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
        </div>

        <div id="gameInfo">
        </div>
        <div class="row justify-content-center" id="gewonnenDiv">
        </div>
        <div class="row justify-content-center" id="zumScoreBoard">
        </div>
    </div>
</div>

<?php

echo $this->footer;

?>
