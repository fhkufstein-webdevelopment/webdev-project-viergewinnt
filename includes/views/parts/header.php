<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo $this->title; ?> - 4 Gewinnt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game.css">
    <link rel="stylesheet" href="css/login-logout.css">
    <link rel="stylesheet" href="css/animations.css">
    <?php if ($this->current == "login"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
    <?php endif; ?>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header-footer.css" rel="stylesheet">
    <style type="text/css">
        .modal-backdrop {
            opacity: 0.3 !important;
        }
    </style>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

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

    <?php if (LOGGED_IN == true): ?>

        <nav class="navbar navbar-expand-md navbar-light sticky-top mb-2 box-shadow">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">

                <ul class="nav mr-auto" id="navul">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="index">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="rules">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="scoreboard">Scoreboard </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
            <span class="navbar-text mr-sm-2">Angemeldet als <strong
                        class="username"><?php echo $this->username; ?></strong></span>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="logout" role="button">Logout</a>
                </form>
            </div>
        </nav>

        <div>
            <div class="jumbotron-fluid align-items-center" id="logo">
                <div class="container text-center bg-transparent">
                    <div class="row">
                        <div class="col-12">
                            <img src="img/kugeln.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php else: ?>
        <div class="jumbotron-fluid align-items-center" id="logo">
            <div class="container text-center bg-transparent">
                <div class="row">
                    <div class="col-12">
                        <img src="img/kugeln.png" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
</header>
</body>
</html>