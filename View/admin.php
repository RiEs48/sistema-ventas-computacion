<?php
include("../Controller/seguridad.php");
if($_SESSION['nivel']==1){
    
    header("location:template.php");
    

}else{
    if($_SESSION['nivel']==2){
        header("location:template2.php");
    }
}
?>