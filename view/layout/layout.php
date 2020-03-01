<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/styles.css">
    <title>cvtheque</title>
</head>
<body>

<header>
    <nav class="navbar">
        <div class="container">
            <a class="logo" href="<?= $view->path('home'); ?>"><img src="../public/assets/img/logo.png" alt=""></a>
            <form class="form">
                <div class="search">
                    <input type="text" class="searchJob" placeholder="Search jobs">
                    <div class="btn">
                        <button class="btn2" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar2">
                <li class="contact">
                    <a class="job-contact" href="contact.php">
                        <i class="fas fa-pencil-alt"></i>
                        <span class="contact-me">Contact</span></a>
                </li>

                <li class="nav-job">
                    <a class="job-link" href="jobs.php">
                        <i class="fas fa-briefcase"></i>
                        <span class="jobs">Jobs</span></a>

                    <select class="divers-jobs" onchange="MM_jumpMenu('parent',this,0)">
                        <option value="jobs0.php">Jobs0</option>
                        <option value="jobs1.php">Jobs1</option>
                        <option value="jobs2.php">Jobs2</option>
                        <option value="jobs3.php">Jobs3</option>
                        <option value="jobs4.php">Jobs4</option>
                        <option value="jobs5.php">Jobs5</option>
                        <option value="jobs6.php">Jobs6</option>
                    </select>
                </li>

                <li class="inscription">
                        <a class="inscription-link" href="<?= $view->path('register'); ?>">Inscription</a>
                        <i class="fas fa-user-friends"></i>
                </li>

                <li class="connexion">
                        <a class="connexion-link" href="<?= $view->path('login'); ?>">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="clear"></div>
</header>

<div class="container">
    <?= $content; ?>
</div>

<footer>
    <div class="foot">
        <p>&copy; 2020 - cvtheque &reg;</p>
        <a href="index.php">Accueil</a>
        <a href="contact.php">Contact</a>
        <a href="cgu.php">CGU</a>
        <a href="mentions-legales.php">Mentions légales</a>
    </div>
</footer>

<script src="../public/assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/5d1ae1daad.js" crossorigin="anonymous"></script>
</body>
</html>
