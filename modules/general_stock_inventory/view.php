

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title center"></i> STOCK GENERAL DE PRODUCTOS
    <a class="btn btn-primary btn-social pull-right" href="modules/general_stock_inventory/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir
    </a>
  </h1>
</section>

<section class="content">
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Stock de Camas
  </h1>
</section>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo de cama</th>
                <th class="center">Detalle</th>
                <th class="center">Precio de compra</th>
                <th class="center">Precio de venta</th>
                <th class="center">Stock</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo_cama,tamaño,precio_compra,precio_venta,stock FROM camas ORDER BY tamaño ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo_cama]</td>
                      <td width='180'>$data[tamaño]</td>
                      <td width='100' align='right'>$. $precio_compra</td>
                      <td width='100' align='right'>$. $precio_venta</td>
                      <td width='80' align='right'>$data[stock]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->

<section class="content">
  <section class="content-header">
    <h1>
      <i class="fa fa-file-text-o icon-title"></i> Stock de Sofas
    </h1>
  </section>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo de sofa</th>
                <th class="center">Detalle</th>
                <th class="center">Precio de compra</th>
                <th class="center">Precio de venta</th>
                <th class="center">Stock</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo_sofa,tamaño,precio_compra,precio_venta,stock FROM sofas ORDER BY tamaño ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo_sofa]</td>
                      <td width='180'>$data[tamaño]</td>
                      <td width='100' align='right'>$. $precio_compra</td>
                      <td width='100' align='right'>$. $precio_venta</td>
                      <td width='80' align='right'>$data[stock]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->

<section class="content">
  <section class="content-header">
    <h1>
      <i class="fa fa-file-text-o icon-title"></i> Stock de Almacenamiento
    </h1>
  </section>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo de almacenamiento</th>
                <th class="center">Detalle</th>
                <th class="center">Precio de compra</th>
                <th class="center">Precio de venta</th>
                <th class="center">Stock</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo_almacenamiento,tamaño,precio_compra,precio_venta,stock FROM almacenamiento ORDER BY tamaño ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo_almacenamiento]</td>
                      <td width='180'>$data[tamaño]</td>
                      <td width='100' align='right'>$. $precio_compra</td>
                      <td width='100' align='right'>$. $precio_venta</td>
                      <td width='80' align='right'>$data[stock]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->

<section class="content">
  <section class="content-header">
    <h1>
      <i class="fa fa-file-text-o icon-title"></i> Stock de Mesas
    </h1>
  </section>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo de mesa</th>
                <th class="center">Detalle</th>
                <th class="center">Precio de compra</th>
                <th class="center">Precio de venta</th>
                <th class="center">Stock</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo_mesa,tamaño,precio_compra,precio_venta,stock FROM mesas ORDER BY tamaño ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo_mesa]</td>
                      <td width='180'>$data[tamaño]</td>
                      <td width='100' align='right'>$. $precio_compra</td>
                      <td width='100' align='right'>$. $precio_venta</td>
                      <td width='80' align='right'>$data[stock]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content