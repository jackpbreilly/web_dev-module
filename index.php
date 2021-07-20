<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Website to showcase work done for CMP306</h1>
    <p>Includes; a mountain blog, electric imp IOT, RSS Feeds and REST CRUD</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
            for ($i = 1; $i <= 12;) {
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="W' . $i . '">Week ' . $i . '</a>';
                echo '</li>';
                $i++;
            }
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="fullCom.php">Full Commentary</a>';
            echo '</li>';
            ?>
        </ul>
    </div>
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Name: Jack Reilly <br> Student Number: 1704736</p>
</div>

</body>
</html>
