<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php?page=home"> <img src="img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-center"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=courses">Courses</a>
                            </li>
                            <li class="nav-item">
                                  <a class="nav-link" href="index.php?page=blog">blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=gallery">gallery</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                  <?php if (!isset($_SESSION['id'])): ?>
                                    <a class="dropdown-item" href="index.php?page=register">Register</a>
                                    <a class="dropdown-item" href="index.php?page=login">Login</a>
                                    <?php else: ?>
                                    <a class="dropdown-item" href="admin/logout.php">Logout</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn_1 d-none d-lg-inline-block">+440 1234 654 953</a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
