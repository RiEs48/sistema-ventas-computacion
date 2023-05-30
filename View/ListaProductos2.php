
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

       
         <!--    <div class="form-group">
                <tr>
                    <td><?php echo $reg[0]; ?></td>
                    <td><?php echo $reg['empresa']; ?></td>
                    <td><?php echo $reg['nombreproducto']; ?></td>
                    <td><?php echo $reg['descripcion']; ?></td>
                    <td><?php echo $reg['costocompra']; ?></td>
                    <td><?php echo $reg['costoventa']; ?></td>
                    <td><?php echo $reg['stock']; ?></td>
                    <td><?php echo $reg['fecha']; ?></td>
                    <td><img src="../Controller/imgproductos/<?php echo $reg['imagen']; ?>" width="35px" height="35px">
                    </td>
                   
                    
                    
             
                    
            </div>


            <td><a href='../Controller/productoModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-edit"></i></a></td>
            <td><a href='../Controller/eliminaProducto.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

            </tr> -->
      





<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos </h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php

while ($reg = mysqli_fetch_array($r1)) {
?>

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
              <img src="../Controller/imgproductos/<?php echo $reg['imagen']; ?>" width="700px" height="500px"> >
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="../Controller/imgproductos/<?php echo $reg['imagen']; ?>" width="35px" height="35px"></div>
               
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $reg['nombreproducto']; ?></h3>
              <p></p>

              <hr>
              <h4>PROVEEDOR</h4>
              <div class="bg-red py-2 px-3 mt-4">
                <h2 class="mb-0">
                <?php echo $reg['empresa']; ?>
                </h2>
              
              </div>
         

              <h4 class="mt-3">Datos <small> para El Mercado</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                  <span class="text-xl"> <?php echo $reg['costocompra']; ?></span>
                  <br>
                  Costo Compra 
                 
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                  <span class="text-xl"><?php echo $reg['costoventa']; ?></span>
                  <br>
                  Costo Venta
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                  <span class="text-xl"><?php echo $reg['stock']; ?></span>
                  <br>
                  Stock
                </label>
              
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                 Fecha 
                </h2>
                <h4 class="mt-0">
                  <small><?php echo $reg['fecha']; ?></small>
                </h4>
              </div>

              <div class="mt-4">
               <!--  <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div> -->
                <div class="btn btn-primary btn-lg btn-flat">                 
                  <a class="text-white" href='../Controller/productoModifica.php?cid=<?php echo $reg[0]; ?>'> <i class="fas far fa-edit fa-lg mr-4">Modificar</i></a>
                  
                </div>
                <div class="btn btn-danger btn-lg btn-flat">                 
                  <a class="text-white" href='../Controller/eliminaProducto.php?cid=<?php echo $reg[0]; ?>'> <i class="fas far fa-edit fa-lg mr-4">Eliminar</i></a>
                  
                </div>

              
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripcion Producto</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> <?php echo $reg['descripcion']; ?> </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <?php
        }
        ?>
    <!-- /.content -->
  
<?php
include("footer.php");
?>