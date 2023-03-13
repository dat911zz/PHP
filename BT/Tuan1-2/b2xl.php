<?php 
    session_start();
    $_SESSION['name'] = $_POST['name'];
    echo "Lêu lêu bà già: ".$_SESSION['name']
?>