<?php

include("head.php");
session_start();
           if ($_SESSION['nivel'] == 1) {
                include("template.php");
            }
            if ($_SESSION['nivel'] == 2) {
                include("template2.php");
            }
            
            ?>

<div class="col-md-1"></div>
<div>
<form method="post" >
    <h2>MODIFICAR CARGO</h2>
    <div class="col-md-12"><br><br>
    <input type="hidden" name="cid" id="cid" value="<?=$r[0];?>">
    <label >CARGO</label>
    <input type="text" class="form-control" name="cargo" id="cargo"  value="<?=$r[1];?>">
    
    <input type="submit" class="form-control" name="Modificar" id="Modificar" value="Modificar" 
    class="btn btn-primary">
    <a href="../Controller/provedorLista.php" class="btn btn-danger">Cancel</a>
    
</form><br><br>

    </div>

</div>
    <?php 
include("footer.php");
?>