<?php

echo $this->header;

?>

    <div class="redlaugh"></div>
    <div class="yellowtongue"></div>
    <div class="happysad"></div>
    <div class="yellowscared"></div>
    <div class="redsmile"></div>
<div id="main">
    <div id="login">
    <div class="login-form">
        <form method="post" action="login" class="form-horizontal col-sm-12">
            <?php if($this->errorPasswd == true): ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Benutzername und/oder Passwort sind falsch</h4>
                    <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                </div>
            <?php endif; ?>

            <h2 class="text-center">Login</h2>
            <div class="form-group has-error">
                <input type="text" class="form-control" name="username" placeholder="Benutzername" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Passwort" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-warning btn-md">Anmelden</button>
                <input type="hidden" name="action" value="login">
            </div>
            <p class="text-center small">Sie haben noch keinen Account? <a href="login#registrierung" class="registerOverlay">Hier</a> <br>können Sie sich registrieren.<br></p>
        </form>
    </div>

    <div class="modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="registerModalLabel">Registrierung</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p class="col-sm-12">
                            Geben Sie folgende Daten ein, um sich für das Spiel registrieren zu können:
                        </p>

                        <form method="post" action="login" class="col-sm-12">

                            <div class="form-group">
                                <label for="name">Benutzername:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen eingeben">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Bitte Passwort eingeben (mind. 8 Zeichen)">
                            </div>
                            <div class="form-group">
                                <label for="pwd2">Passwort (wiederholen):</label>
                                <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Bitte das Passwort wiederholen">
                            </div>

                            <input type="hidden" name="action" value="register">

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning">Registrieren</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Abbrechen</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php

echo $this->footer;

?>