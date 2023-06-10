<?php      require_once __DIR__ . '/../config/function.php'; 
            require_once __DIR__ . '/../inc/header.inc.php';

            if (isset($_GET['a']) && $_GET['a']=='dis'){

                unset($_SESSION['user']);
                $_SESSION['messages']['info'][]='A bientôt !!';
                header('location:./');
                exit();


            }
            ?>





<?php      require_once __DIR__ . "/../inc/footer.inc.php";           ?>