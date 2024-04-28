<?php
    require_once('../config.php');
    require_once BLA.'inc/header.php';

    if(isset($_SESSION['admin_name'])){
        session_destroy();
        header('location:'.BURLA.'login.php');
    }else{
        header('location:'.BURLA);
    }
?>

<?php
    echo 'logout php';
?>




<?php
    require_once BLA.'inc/footer.php';
?>