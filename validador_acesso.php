<?php 
session_start();

if (!isset($_SESSION['autentificado']) || $_SESSION['autentificado'] != 'SIM') {
  header('location: index.php?login=erro2');
}

?>