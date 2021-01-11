<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");


$tgl1     = $_GET['tgl_awal'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

if (isset($_GET['tgl_awal'])) {
    $no    = 1;

    $query0 = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.fecha,a.codigo_cama,a.numero,b.codigo_cama,b.tamaño
                                    FROM transaccion_camas as a INNER JOIN camas as b ON a.codigo_cama=b.codigo_cama
                                    WHERE a.fecha BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.codigo_transaccion ASC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query0);

    $query1 = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.fecha,a.codigo_sofa,a.numero,b.codigo_sofa,b.tamaño
                                    FROM transaccion_sofas as a INNER JOIN sofas as b ON a.codigo_sofa=b.codigo_sofa
                                    WHERE a.fecha BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.codigo_transaccion ASC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query1);

    $query2 = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.fecha,a.codigo_almacenamiento,a.numero,b.codigo_almacenamiento,b.tamaño
                                    FROM transaccion_almacenamiento as a INNER JOIN almacenamiento as b ON a.codigo_almacenamiento=b.codigo_almacenamiento
                                    WHERE a.fecha BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.codigo_transaccion ASC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query2);

    $query3 = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.fecha,a.codigo_mesa,a.numero,b.codigo_mesa,b.tamaño
                                    FROM transaccion_mesas as a INNER JOIN mesas as b ON a.codigo_mesa=b.codigo_mesa
                                    WHERE a.fecha BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.codigo_transaccion ASC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query3);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>REPORTE GENERAL DE MOVIMIENTOS</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
           DATOS DE REGISTROS DE MOVIMIENTOS
        </div>
    <?php  
    if ($tgl_awal==$tgl_akhir) { ?>
        <div id="title-tanggal">
            Fecha <?php echo tgl_eng_to_ind($tgl1); ?>
        </div>
    <?php
    } else { ?>
        <div id="title-tanggal">
            Desde <?php echo tgl_eng_to_ind($tgl1); ?> Hasta <?php echo tgl_eng_to_ind($tgl2); ?>
        </div>
    <?php
    }
    ?>
        <hr><br>
        <div id="isi">
        <h3>Transacciones de camas</h3>
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>TRANSACCION No </small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>TAMANO</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
						<th height="20" align="center" valign="middle"><small>CANT. </small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='80' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='80' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query0)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];

            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='120' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
                        <td width='80' height='13' align='center' valign='middle'>$fecha</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_cama]</td>
                        <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[tamaño]</td>
						<td style='padding-left:5px;' width='50' height='13' valign='middle'>$data[tipo_transaccion]</td>
                        <td style='padding-right:10px;' width='50' height='13' align='center' valign='middle'>$data[numero]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>

        </div>


        <hr><br>
        <div id="isi">
        <h3>Transacciones de sofas</h3>
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>TRANSACCION No </small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>TAMANO</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
						<th height="20" align="center" valign="middle"><small>CANT. </small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='50' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='50' height='13' align='right' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query1)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];

            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='120' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
                        <td width='80' height='13' align='center' valign='middle'>$fecha</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_sofa]</td>
                        <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[tamaño]</td>
						<td style='padding-left:5px;' width='50' height='13' valign='middle'>$data[tipo_transaccion]</td>
                        <td style='padding-right:10px;' width='50' height='13' align='center' valign='middle'>$data[numero]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>
        </div>

        <hr><br>
        <div id="isi">
        <h3>Transacciones de almacenamiento</h3>
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>TRANSACCION No </small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>TAMANO</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
						<th height="20" align="center" valign="middle"><small>CANT. </small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='50' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='50' height='13' align='right' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query2)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];

            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='120' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
                        <td width='80' height='13' align='center' valign='middle'>$fecha</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_almacenamiento]</td>
                        <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[tamaño]</td>
						<td style='padding-left:5px;' width='50' height='13' valign='middle'>$data[tipo_transaccion]</td>
                        <td style='padding-right:10px;' width='50' height='13' align='center' valign='middle'>$data[numero]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>
        </div>

        <hr><br>
        <div id="isi">
        <h3>Transacciones de mesas</h3>
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>TRANSACCION No </small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>TAMANO</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
						<th height="20" align="center" valign="middle"><small>CANT. </small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='50' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='50' height='13' align='right' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query3)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];

            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='120' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
                        <td width='80' height='13' align='center' valign='middle'>$fecha</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo_mesa]</td>
                        <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[tamaño]</td>
						<td style='padding-left:5px;' width='50' height='13' valign='middle'>$data[tipo_transaccion]</td>
                        <td style='padding-right:10px;' width='50' height='13' align='center' valign='middle'>$data[numero]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>

        </div>
    </body>
</html>
<?php
$filename="datos de registro de medicamentos.pdf"; 
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