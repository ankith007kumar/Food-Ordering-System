<?php
session_start();
    echo "<script type='text/javascript'>alert('LOGOUT SUCCESSFUL');window.location.href='index.php';</script>";
    session_destroy();
?>