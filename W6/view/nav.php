<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Scottish Mountain News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Mountains
                </a>

                <!-- Add mountains later--->
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <?php if (!isset($_SESSION["user"])) { ?>
            <form class="form-inline my-2 my-lg-0" action="?login" method="POST">
                <input class="form-control mr-sm-2" type="text" name="username" placeholder="Username"
                       aria-label="username">
                <input class="form-control mr-sm-2" type="password" name="password" placeholder="Password"
                       aria-label="password">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
            <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                    data-target="#exampleModal">Register
            </button>
        <?php } else {
            ?>

            <a href="?logout">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </a>

        <?php } ?>


    </div>
</nav>