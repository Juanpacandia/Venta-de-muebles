
<?php
session_start();


require_once "../../config/database.php";

if(isset($_POST['dataidobat'])) {
	$codigo_cama = $_POST['dataidobat'];

 
  $query = mysqli_query($mysqli, "SELECT codigo_cama,tamaño,stock FROM camas WHERE codigo_cama='$codigo_cama'")
                                  or die('error '.mysqli_error($mysqli));


  $data = mysqli_fetch_assoc($query);

  $stock   = $data['stock'];

	if($stock != '') {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stock</label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stok' name='stock' value='$stock' readonly>
                  </div>
                </div>
              </div>";
	} else {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stock</label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stok' name='stock' value='' readonly>
                    <span class='input-group-addon'></span>
                  </div>
                </div>
              </div>";
	}		
}
?> 