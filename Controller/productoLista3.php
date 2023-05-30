<?php 

include ('../Model/conexion.php');
//include("../Model/productoClase.php");
//$emp=new Producto("","","","","","","","","");
//$r1=$emp->listaProducto();




//$consulta ="SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
//order by e.nombre asc";
$con= new Conexion();
//$resultado=mysqli_query($con,$consulta);



		$sql = "SELECT * FROM producto"; //CURSOS ES PRODUCTO
		$sql_cate = "SELECT * FROM productocat";// CATEGORIAS ES PRODUCTOCAT


		if (isset($_GET['categoria'])) {
			$sql = "SELECT * FROM producto WHERE categoria = '".$_GET['categoria']."'";

			if ($_GET['categoria'] == 'todos') {
				$sql = "SELECT * FROM producto";
			}
		}

			$query_cate = mysqli_query($con, $sql_cate);
			$query = mysqli_query($con, $sql);

		if (isset($_GET['opc'])) {
			if ($_GET['opc'] == 'cada') {
				header('location:cadastrar.php');
			}
		}
		include("../View/ListaProductos3.php");
	 ?>