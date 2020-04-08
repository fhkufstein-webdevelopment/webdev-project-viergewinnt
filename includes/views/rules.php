<?php

echo $this->header;

?>

<div class="bg-light" id="rules">
    <div class="container text-center py-5">
        <h3 class="text-center display-4">Spielregeln</h3>
        <h6>Hier siehst du die verschiedenen Kombinationsmöglichkeiten, die du brauchst um zu gewinnen.</h6>
        <div class="row mt-5 mb-1">
            <div class="col-sm-3">
                <img src="img/waagrecht.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                <h4 class="mb-3">Waagerecht</h4>
                <p class="mb-3">4 Bälle derselben Farbe in einer waagrechten Linie</p>

            </div>
            <div class="col-sm-3">
                <img src="img/senkrecht.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                <h4 class="mb-3">Senkrecht</h4>
                <p class="mb-3">4 Bälle derselben Farbe in einer senkrechten Linie</p>

            </div>
            <div class="col-sm-3">
                <img src="img/diagonal_rechts.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                <h4 class="mb-3">Diagonal rechts</h4>
                <p class="mb-3">4 Bälle derselben Farbe in einer Diagonale nach rechts</p>

            </div>
            <div class="col-sm-3">
                <img src="img/diagonal_links.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="Responsive image">
                <h4 class="mb-3">Diagonal links</h4>
                <p class="mb-3">Oder 4 Bälle derselben Farbe in einer Diagonale nach links</p>

            </div>
        </div>
    </div>
</div>



<?php

echo $this->footer;

?>

