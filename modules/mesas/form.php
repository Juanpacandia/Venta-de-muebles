<?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Mesas
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=mesas"> Mesas </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/mesas/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_mesa,6) as codigo_mesa FROM mesas
                                                ORDER BY codigo_mesa DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo_mesa    = $data_id['codigo_mesa']+1;
              } else {
                  $codigo_mesa = 1;
              }


              $buat_id   = str_pad($codigo_mesa, 6, "0", STR_PAD_LEFT);
              $codigo_mesa = "M$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo mesa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_mesa" value="<?php echo $codigo_mesa; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tamaño" required>
                          <option value="mesas comedores">mesas comedores</option>
                          <option value="mesas infantiles">mesas infantiles</option>
                          <option value="mesas exteriores">mesas exteriores</option>
                          <option value="mesas plegables">mesas plegables</option>
                          <option value="mesas de noche">mesas de noche</option>
                          <option value="mesas de centro">mesas de centro</option>
                          <option value="mesas auxiliares">mesas auxiliares</option>
                          <option value="tocadores">tocadores</option>
                          <option value="escritorios">escritorios</option>
                          <option value="escritorios infantiles">escritorios infantiles</option>
                          <option value="sets de escritorios">sets de escritorios</option>
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
                  <a href="?module=mesas" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT codigo_mesa,tamaño,precio_compra,precio_venta FROM mesas WHERE codigo_mesa='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Mesa
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=mesas"> Mesas </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/mesas/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo mesa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_mesa" value="<?php echo $data['codigo_mesa']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tamaño" required>
                          <option value="mesas comedores">mesas comedores</option>
                          <option value="mesas infantiles">mesas infantiles</option>
                          <option value="mesas exteriores">mesas exteriores</option>
                          <option value="mesas plegables">mesas plegables</option>
                          <option value="mesas de noche">mesas de noche</option>
                          <option value="mesas de centro">mesas de centro</option>
                          <option value="mesas auxiliares">mesas auxiliares</option>
                          <option value="tocadores">tocadores</option>
                          <option value="escritorios">escritorios</option>
                          <option value="escritorios infantiles">escritorios infantiles</option>
                          <option value="sets de escritorios">sets de escritorios</option>
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
                  <a href="?module=mesas" class="btn btn-default btn-reset">Cancelar</a>
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