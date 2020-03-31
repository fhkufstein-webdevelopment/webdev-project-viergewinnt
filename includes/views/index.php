<?php

echo $this->header;

?>
<div id="main">
    <div class="row">
        <div id="gamecontainer">
            <script type="text/javascript" src="js/game.js"></script>
            <script type="text/javascript">
                window.onload = start();
            </script>
        </div>
    </div>
</div>

<?php

echo $this->footer;

?>