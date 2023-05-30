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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">





                <form class="row g-3" method="POST" >
             
                    <h1>ACTUALIZAR EMPLEADO</h1>
                    <div class="form-group">
                    <input type="hidden" name="cid" id="cid" value="<?=$r[0];?>">  
                    </div>
                     
                                    
          
                    <div class="col-md-6">
                        <label class="form-label">Cargo</label>
                        <select name="cargo" id="cargo" class=" form-control">
                            <?php

                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value=" <?php echo $reg['id_cargo']; ?>"<?php if(utf8_encode($r[1])== $reg['id_cargo'])echo "selected" ?>> 
                                <?php
                                      echo $reg['cargo'];  ?>
                                      </option>";
                            <?php
                            }



                            ?>
                        </select>
                    </div>
                   
                    <div class="col-md-6">
                        <label class="form-label">Cedula :</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value='<?=($r[2]);?>'>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Nombre Empleado</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value='<?=($r[3]);?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ap. Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno"value='<?=($r[4]);?>' >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ap. Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" value='<?=($r[5]);?>'>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="1234 Main St" name="direccion" value='<?=($r[6]);?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" value='<?=($r[7]);?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="fechana" name="fechana" value='<?=($r[8]);?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" id="nombre">Genero</label>&nbsp;&nbsp;
                        <input type="radio" id="genero" name="genero" value="F" <?php if(utf8_encode($r[9])=="F") echo "checked"; ?> >Femenino &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="genero" name="genero" value="M" <?php if(utf8_encode($r[9])=="M") echo "checked"; ?> >Masculino<br><br>

                    </div>
                    <div class="col-md-6">
                        <?php 
                        $inte = array();
                        $inte = explode(" ",utf8_encode($r[10]));?>

                        <label class="form-label">Intereses</label>
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Estudia"<?php if(in_array("Estudia",$inte)) echo "checked"; ?> >Estudia 
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Trabaja" <?php if(in_array("Trabaja",$inte)) echo "checked"; ?> >Trabaja 
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Deporte" <?php if(in_array("Deporte",$inte)) echo "checked"; ?>  >Deporte
                    </div>
                  <div class="form-group">
                        <br>
                         <input  type="submit"  name="act" id="act" class="btn btn-success">Actualizar 
                        <a href="../Controller/empleadoLista.php" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>




            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php

include("footer.php");

?>