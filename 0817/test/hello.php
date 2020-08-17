<?php
session_start();

if(isset($_SESSION['s_user'])){
    echo ($_SESSION['s_user']);
}
  
?>