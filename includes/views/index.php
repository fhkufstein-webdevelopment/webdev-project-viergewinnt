<?php

echo $this->header;


?>

<div id="main">
    <div id="index">
        <div class="row justify-content-center" id="gamerow" style="margin: 0 0 2rem 0">

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
        <div class="row justify-content-center" id="zumScoreBoard" style="margin-top: 2rem">
        </div>
    </div>
</div>

<div class="modal" id="gameWonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Glückwunsch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Herzlichen Glückwunsch, Sie haben gewonnen!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="gameLostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Schade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Nächstes Mal gewinnen Sie sicher :)
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>