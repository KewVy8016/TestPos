<?php
  if(!isset($_SESSION['usr_name'])){
    header("Location:../login.php");
    }
session_start();
session_destroy();