<?php

echo $this->header;

?>
<div id="main">
    <div class="row">
        lol

        <?php if ($this->scores): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Game_ID</th>
                    <th>User_ID</th>
                    <th>Anzahl_Zuege</th>
                    <th>Dauer</th>
                    <th>Gewonnen</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->scores as $score): ?>
                    <tr>
                        <td><?php echo $score->Game_ID; ?></td>
                        <td><?php echo $score->User_ID; ?></td>
                        <td><?php echo $score->Anzahl_Zuege; ?></td>
                        <td><?php echo $score->Dauer; ?></td>
                        <td><?php echo $score->Gewonnen; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>&nbsp;</p>
            <div class="alert alert-info">Noch keine Spiele vorhanden - Sie können ein neues Spiel beginnen.</div>
        <?php endif; ?>


    </div>
</div>
<?php

echo $this->footer;

?>