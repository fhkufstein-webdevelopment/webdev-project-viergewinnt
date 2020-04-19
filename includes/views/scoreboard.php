<?php

echo $this->header;

?>

<div id="main">

    <div id="scoreboard">
        <div class="row" style="margin: 0; width: 100%">

            <?php if ($this->scores): ?>
                <table id="scoretable" class="table table-striped col-md-6 offset-md-3 col-sm-12">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Züge</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($this->scores as $score): ?>
                        <tr id="zeile">
                            <td><?php echo $score->name; ?></td>
                            <td><?php echo $score->Anzahl_Zuege; ?></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            <?php else: ?>
                <p>&nbsp;</p>
                <div class="alert alert-info">Noch keine Spiele vorhanden - Sie können ein neues Spiel beginnen.</div>
            <?php endif; ?>
        </div>

        <div class="row" id="button1" style="margin: 1rem 0 1rem 0">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
                <a class="btn btn-danger" id="buttonNeuSpiel" href="index" role="button">neues Spiel</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

