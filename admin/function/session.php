<?php

    session_start();
    require 'dbh.inc.php';
    
    define('TITLE',"Inbox | KLiK");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }  

?> 
