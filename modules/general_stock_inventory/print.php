<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

$no = 1;

$query0 = mysqli_query($mysqli, "SELECT codigo_cama,tamaño,precio_compra,precio_venta,stock FROM camas ORDER BY tamaño ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

$query1 = mysqli_query($mysqli, "SELECT codigo_sofa,tamaño,precio_compra,precio_venta,stock FROM sofas ORDER BY tamaño ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

$query2 = mysqli_query($mysqli, "SELECT codigo_almacenamiento,tamaño,precio_compra,precio_venta,stock FROM almacenamiento ORDER BY tamaño ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

$query3 = mysqli_query($mysqli, "SELECT codigo_mesa,tamaño,precio_compra,precio_venta,stock FROM mesas ORDER BY tamaño ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);
?>

<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>INFORME GENERAL DE STOCK DEL INVENTARIO </title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
    <div id="title">
        INFORME GENERAL DE STOCK DEL INVENTARIO
    </div>
    <br><br>
    <div id="title">
           Stock de camas
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>CAMAS</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE COMPRA</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE VENTA</small></th>
                        <th height="20" align="center" valign="middle"><small>STOCK</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query0)) {
            $precio_compra = format_rupiah($data['precio_compra']);
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_cama]</td>
                        <td style='padding-left:5px;' width='180' height='13' valign='middle'>$data[tamaño]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_compra</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>     
        </div>

        <br><br>
        <div id="title">
           Stock de sofas
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>SOFAS</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE COMPRA</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE VENTA</small></th>
                        <th height="20" align="center" valign="middle"><small>STOCK</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query1)) {
            $precio_compra = format_rupiah($data['precio_compra']);
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_sofa]</td>
                        <td style='padding-left:5px;' width='180' height='13' valign='middle'>$data[tamaño]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_compra</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>
        </div>

        <br><br>
        <div id="title">
           Stock de almacenamiento
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>ALMACEAMIENTO</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE COMPRA</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE VENTA</small></th>
                        <th height="20" align="center" valign="middle"><small>STOCK</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query2)) {
            $precio_compra = format_rupiah($data['precio_compra']);
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_almacenamiento]</td>
                        <td style='padding-left:5px;' width='180' height='13' valign='middle'>$data[tamaño]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_compra</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>
        </div>

        <br><br>
        <div id="title">
           Stock de mesas
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>MESAS</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE COMPRA</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE VENTA</small></th>
                        <th height="20" align="center" valign="middle"><small>STOCK</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query3)) {
            $precio_compra = format_rupiah($data['precio_compra']);
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_mesa]</td>
                        <td style='padding-left:5px;' width='180' height='13' valign='middle'>$data[tamaño]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_compra</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>            
        </div>

        
    </body>
</html>
<?php
$filename="INFORME STOCK GENERAL.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>