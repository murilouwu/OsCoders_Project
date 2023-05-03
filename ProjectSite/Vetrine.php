<?php
    include('assets/php/funs.php');
    if(!isset($_SESSION['esp'])){
        move('index.php');
    }
    HeaderEcho($_SESSION['esp'],'assets/css/vetrin.css','assets/img/logo.png');
?>

<?php
    footEcho();
?>