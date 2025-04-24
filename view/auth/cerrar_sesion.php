<?php

    session_start();
    session_unset();
    session_destroy();
    echo BASE_URL;
    header("Location: " . BASE_URL . "Home");
    exit;
    
?>