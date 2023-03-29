<?php include_once('includes/functions.php');  ?>
<?php session_start(); 
 include_once('partials/_flash.php');?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="./index.php#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                <a style="color:yellowgreen; font-weight: bold;" class="nav-link" href="./matiereRecyclee.php">
                    <button id="btn-login" class="btn btn-success">
                        Matières recyclables
                    </button>
                </a>

                <a style="color:yellowgreen; font-weight: bold;" class="nav-link" href="./index.php#about">
                    <button id="btn-login" class="btn btn-success">
                        J’agis
                    </button>
                </a>

                <?php if (!isLogged()) { ?>
                <a style="color:yellowgreen; font-weight: bold;" class="nav-link" href="preregister.php">
                    <button id="btn-login" class="btn btn-success">
                        Inscription
                    </button>
                </a>
                <a style="color:yellowgreen; font-weight: bold;" class="nav-link" href="login.php">
                    <button id="btn-login" class="btn btn-success">
                        Connexion
                    </button>
                </a>

                <?php } else { 
                    $chemin = "consumer/files/".$_SESSION['photo'];
                    ?>
                <a class="navbar-brand" href="#page-top"><img src="assets/img/cloche.png" alt="..." /></a>

                <a class="navbar-brand" href="persoPpage.php" title="<?php echo "".$_SESSION['email'] ; ?>">
                    <img src="<?php echo $chemin; ?>" alt="..." style="border-radius: 50%;" />
                </a>

                <a class="navbar-brand" href="deconnexion.php">
                    <img src="assets/img/logout.png" alt="..." />
                </a>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>