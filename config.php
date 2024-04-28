<?php
    session_start();
    define("BURL","http://localhost/medical_server/");
    define("BURLA","http://localhost/medical_server/admin/");
    define("ASSETS","http://localhost/medical_server/assets/");
    define("BL",__DIR__.'/');// __DIR__ It comes with a project path
    define("BLA",__DIR__.'/admin/');
    // connect to database
    require_once(BL.'functions/db.php');
?>