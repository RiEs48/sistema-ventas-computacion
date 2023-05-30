<?php
session_start();
if($_SESSION['ingreso']!="si"){
    header("location:template.php?error=2");
}
?>