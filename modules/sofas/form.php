<?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Sofas
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=sofas"> Sofas </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/sofas/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_sofa,6) as codigo_sofa FROM sofas
                                                ORDER BY codigo_sofa DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo_sofa    = $data_id['codigo_sofa']+1;
              } else {
                  $codigo_sofa = 1;
              }


              $buat_id   = str_pad($codigo_sofa, 6, "0", STR_PAD_LEFT);
              $codigo_sofa = "S$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo sofa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_sofa" value="<?php echo $codigo_sofa; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tamaño" required>
                          <option value=""></option>
                          <option value="2 puestos">2 puestos</option>
                          <option value="3 puestos">3 puestos</option>
                          <option value="sofa cama">Sofa cama</option>
                          <option value="sofas en L">Sofas en L</option>
                          <option value="sofas exteriores">Sofas exteriores</option>
                          <option value="juegos de sala">Juegos de sala</option>
                          <option value="cobertores de sofa">Cobertores de sofa</option>
                          <option value="poltronas">Poltronas</option>
                          <option value="poltronas reclinacles">Poltronas reclinables</option>
                          <option value="puffs">Puffs</option>
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
                  <a href="?module=sofas" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT codigo_sofa,tamaño,precio_compra,precio_venta FROM sofas WHERE codigo_sofa='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Sofa
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=sofas"> Sofas </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/sofas/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo sofa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_sofa" value="<?php echo $data['codigo_sofa']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tamaño</label>
                <div class="col-sm-5">
                <select class="form-control" name="tamaño" required>
                          <option value=""></option>
                          <option value="2 puestos">2 puestos</option>
                          <option value="3 puestos">3 puestos</option>
                          <option value="sofa cama">Sofa cama</option>
                          <option value="sofas en L">Sofas en L</option>
                          <option value="sofas exteriores">Sofas exteriores</option>
                          <option value="juegos de sala">Juegos de sala</option>
                          <option value="cobertores de sofa">Cobertores de sofa</option>
                          <option value="poltronas">Poltronas</option>
                          <option value="poltronas reclinacles">Poltronas reclinables</option>
                          <option value="puffs">Puffs</option>
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
                  <a href="?module=sofas" class="btn btn-default btn-reset">Cancelar</a>
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