
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            $codigo_sofa  = mysqli_real_escape_string($mysqli, trim($_POST['codigo_sofa']));
            $tamaño  = mysqli_real_escape_string($mysqli, trim($_POST['tamaño']));
            $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            $pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

            $created_user = $_SESSION['id_user'];

  
            $query = mysqli_query($mysqli, "INSERT INTO sofas(codigo_sofa,tamaño,precio_compra,precio_venta,created_user,updated_user) 
                                            VALUES('$codigo_sofa','$tamaño','$pcompra','$pventa','$created_user','$created_user')")
                                            or die('error '.mysqli_error($mysqli));    

        
            if ($query) {
         
                header("location: ../../main.php?module=sofas&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo_sofa'])) {
        
                $codigo_sofa = mysqli_real_escape_string($mysqli, trim($_POST['codigo_sofa']));
                $tamaño  = mysqli_real_escape_string($mysqli, trim($_POST['tamaño']));
                $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
                $pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

                $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE sofas SET  tamaño       = '$tamaño',
                                                                    precio_compra      = '$pcompra',
                                                                    precio_venta      = '$pventa',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo_sofa       = '$codigo_sofa'")
                                                or die('error: '.mysqli_error($mysqli));

    
                if ($query) {
                  
                    header("location: ../../main.php?module=sofas&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $codigo_sofa = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM sofas WHERE codigo_sofa='$codigo_sofa'")
                                            or die('error '.mysqli_error($mysqli));


            if ($query) {
     
                header("location: ../../main.php?module=sofas&alert=3");
            }
        }
    }       
}       
?>