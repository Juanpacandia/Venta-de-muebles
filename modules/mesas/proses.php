
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            $codigo_mesa  = mysqli_real_escape_string($mysqli, trim($_POST['codigo_mesa']));
            $tamaño  = mysqli_real_escape_string($mysqli, trim($_POST['tamaño']));
            $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            $pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

            $created_user = $_SESSION['id_user'];

  
            $query = mysqli_query($mysqli, "INSERT INTO mesas(codigo_mesa,tamaño,precio_compra,precio_venta,created_user,updated_user) 
                                            VALUES('$codigo_mesa','$tamaño','$pcompra','$pventa','$created_user','$created_user')")
                                            or die('error '.mysqli_error($mysqli));    

        
            if ($query) {
         
                header("location: ../../main.php?module=mesas&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo_mesa'])) {
        
                $codigo_mesa  = mysqli_real_escape_string($mysqli, trim($_POST['codigo_mesa']));
                $tamaño  = mysqli_real_escape_string($mysqli, trim($_POST['tamaño']));
                $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
                $pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

                $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE mesas SET  tamaño       = '$tamaño',
                                                                    precio_compra      = '$pcompra',
                                                                    precio_venta      = '$pventa',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo_mesa       = '$codigo_mesa'")
                                                or die('error: '.mysqli_error($mysqli));

    
                if ($query) {
                  
                    header("location: ../../main.php?module=mesas&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $codigo_mesa = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM mesas WHERE codigo_mesa='$codigo_mesa'")
                                            or die('error '.mysqli_error($mysqli));


            if ($query) {
     
                header("location: ../../main.php?module=mesas&alert=3");
            }
        }
    }       
}       
?>