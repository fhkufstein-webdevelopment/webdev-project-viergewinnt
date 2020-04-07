<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo $this->title; ?> 4 Gewinnt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game.css">
    <?php if ($this->current == "login"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
    <?php endif; ?>

    <link href="css/main.css" rel="stylesheet">


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <?php if ($this->current == "index"): ?>
        <script type="text/javascript" src="js/core.js"></script>
    <?php elseif ($this->current == "register"): ?>
        <script type="text/javascript" src="js/register.js"></script>
    <?php elseif ($this->current == "login"): ?>
        <script type="text/javascript" src="js/toastr.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    <?php endif; ?>


</head>
<body>
<header>
    <div class="inner">
        <div class="logo">
            <div class="name">4 Gewinnt</div>
        </div>


		<?php if(LOGGED_IN == true): ?>
			<nav class="navbar navbar-default">

			<!-- text -->
            <nav class="navbar navbar-light bg-light">
              <span class="navbar-brand mb-0 h1">Spielregeln</span>
                </nav>
                <nav class="navbar navbar-light bg-light">
                     <span class="navbar-brand mb-0 h1">Scoreboard</span>
                </nav>
                <nav class="navbar navbar-light bg-light">
                      <span class="navbar-brand mb-0 h1">Logout</span>
                </nav>


				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a href="/" class="navbar-brand active">4 Gewinnt</a> -->
					</div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout">(Abmelden)</a></li>
                        </ul>

                        <p class="navbar-text navbar-right">Angemeldet als <strong
                                    class="username"><?php echo $this->username; ?></strong></p>

                    </div>
                </div>
            </nav>
        <?php else: ?>
            <nav class="mainnav">
                <ul class="nav nav-pills">
                    <li<?php if ($this->current == "login"): ?>class
                    ="active"<?php endif; ?>><a href="login">Login</a></li>
                </ul>
            </nav>
        <?php endif; ?>

    </div>
</header>