
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

      



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos Precios y Caracteristicas </h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">

	<div style="background-color: rgba(0,0,0,0.7);" class="navbar">
		<br>
		<div class="row">
			<div class="col-md-6">
		<form method="get">
			<select class="form form-control" name="categoria">
				<option value="todos">Todos</option>
				<?php
					while ($dados = mysqli_fetch_assoc($query_cate)) {
					echo "<option value='".$dados['codigo_prod']."'>".$dados['nombre_pro']."</option>";
					}
				?>
			</select>
			</div>

			<div class="col-md-5">
			<input class="btn btn-info" type="submit" name="" value="Filtrar">
			
			</div>
			<br><br><br>
		</form>
		</div>
	</div>
<br><br><br>
	<div class="container-fluid">
	<div class="row">
	<?php 
			while ($dados = mysqli_fetch_assoc($query)) {
	?>			
				
				<div class='col-md-3'>
				<img src="../Controller/imgproductos/<?php echo $dados['imagen']; ?>" width="300px" height="300px">
			
				
				<br>
				<b>Nombre Producto: <?php echo $dados['nombreproducto'];?></b>
				<br>Descripcion: 
				<?php echo $dados['descripcion'];?>
				<br>Costo Compra: 
				<?php echo $dados['costocompra'];?>
				<br><br><br><br>
				</div>
				
			<?php	
			}
		?>
	</div>
	</div>
</div>
			</section>
	
		</div>
	</div>


    </section>
   
        		
    <!-- /.content -->
  
<?php
include("footer.php");
?>