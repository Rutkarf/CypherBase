<?php    require_once __DIR__ . '/../config/function.php';  
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cypher'Base</title>
    
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <div class="NavbarLienGauche">
                    <li><a href="index.php"><img src="assets/upload/LogocypherBase.png" alt="Logo"></a></li>
                </div>
                <div class="NavbarLienMillieux">
                 <li><a href="../front/UpgradeAccount.php">Upgrade Account</a></li>
                 <li><a href="../front/RaveMoney.php">$Rave Money$</a></li>
                    <li><a href="../front/Forum.php">Forum</a></li>
                    <li><a href="../front/Escrow.php">Escrow</a></li>
                    <li><a href="../front/Marketplace.php">MarketPlace</a></li>
                    <li><a href="../front/Mercenary.php">Mercenary</a></li>
                </div>
                <div class="NavbarLienDroite">
                    <?php if (admin()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_PATH.'/back/userList.php'; ?>">Gestion utilisateur</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASE_PATH.'back/'; ?>">Accès Back-office</a>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if (connect()): ?>
                        <a href="<?= BASE_PATH.'?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
                    <?php else: ?>
                        <a href=<?= BASE_PATH.'/security/login.php'; ?> class="btn btn-primary">Connexion</a>
                        <a href="<?= BASE_PATH.'/security/register.php'; ?>" class="btn btn-success">Inscription</a>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?php if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])): ?>
            <?php foreach ($_SESSION['messages'] as $type=>$messages): ?>
                <?php foreach ($messages as $key=>$message): ?>
                    <div class="alert alert-<?= $type; ?> text-center w-50 mx-auto">
                        <p><?= $message; ?></p>
                    </div>
                    <?php unset($_SESSION['messages'][$type][$key]); ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
