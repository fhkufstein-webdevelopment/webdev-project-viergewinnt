<?php

echo $this->header;

?>
    <div id="main">
    <div id="rules">
        <div class="container text-center py-5">
            <h3 class="text-center display-4">Spielregeln</h3>

            <p>Ziel bei „Vier gewinnt“ ist es, die Spielchips der eigenen Farbe so zu platzieren, dass 4 Spielchips
                diagonal, waagerecht oder <br/>
                senkrecht in einer Reihe liegen. Der Spieler, dem das zuerst gelingt, hat gewonnen. Dabei ist nicht nur auf
                den eigenen <br/>
                Erflog zu achten, sondern auch darauf, dass es dem Gegnenspieler nicht gelingt die Reihe zu vollenden.</p>

            <div class="row mt-5 mb-1">
                <div class="col-sm-3">
                    <img src="img/waagrecht.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow"
                         alt="Responsive image">
                    <h4 class="mb-3">waagerecht</h4>
                </div>

                <div class="col-sm-3">
                    <img src="img/senkrecht.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow"
                         alt="Responsive image">
                    <h4 class="mb-3">senkrecht</h4>
                </div>
                <div class="col-sm-3">
                    <img src="img/diagonal_rechts.png"
                         class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                    <h4 class="mb-3">diagonal rechts</h4>
                </div>
                <div class="col-sm-3">
                    <img src="img/diagonal_links.png"
                         class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                    <h4 class="mb-3">diagonal links</h4>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php

echo $this->footer;

?>