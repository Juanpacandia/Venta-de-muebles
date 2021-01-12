<?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Almacenamiento
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=almacenamiento"> Almacenamiento </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/almacenamiento/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_almacenamiento,6) as codigo_almacenamiento FROM almacenamiento
                                                ORDER BY codigo_almacenamiento DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo_almacenamiento    = $data_id['codigo_almacenamiento']+1;
              } else {
                  $codigo_almacenamiento = 1;
              }

              $buat_id   = str_pad($codigo_almacenamiento, 6, "0", STR_PAD_LEFT);
              $codigo_almacenamiento = "A$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo almacenamiento</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_almacenamiento" value="<?php echo $codigo_almacenamiento; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tamaño" required>
                          <option value="closets">closets</option>
                          <option value="cajoneras">cajoneras</option>
                          <option value="muebles tv">muebles tv</option>
                          <option value="bifers">bifers</option>
                          <option value="repisas">repisas</option>
                          <option value="bibliotecas">bibliotecas</option>
                          <option value="bares">bares</option>
                          <option value="zapateros">zapateros</option>
                      </select>                
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Compra</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_compra" name="pcompra" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Venta</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_venta" name="pventa" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=almacenamiento" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT codigo_almacenamiento,tamaño,precio_compra,precio_venta FROM almacenamiento WHERE codigo_almacenamiento='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Almacenamiento
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=almacenamiento"> Almacenamiento </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/almacenamiento/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo almacenamiento</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_almacenamiento" value="<?php echo $data['codigo_almacenamiento']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                     <select class="form-control" name="tamaño" required>
                          <option value="closets">closets</option>
                          <option value="cajoneras">cajoneras</option>
                          <option value="muebles tv">muebles tv</option>
                          <option value="bifers">bifers</option>
                          <option value="repisas">repisas</option>
                          <option value="bibliotecas">bibliotecas</option>
                          <option value="bares">bares</option>
                          <option value="zapateros">zapateros</option>
                      </select>   
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Compra</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_compra" name="pcompra" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo format_rupiah($data['precio_compra']); ?>" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Venta</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_venta" name="pventa" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo format_rupiah($data['precio_venta']); ?>" required>
                  </div>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=almacenamiento" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>