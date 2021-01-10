<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

/* Modulos de camas */

	elseif ($_GET['module'] == 'camas') {
		include "modules/camas/view.php";
	}

	elseif ($_GET['module'] == 'form_camas') {
		include "modules/camas/form.php";
	}
	

	elseif ($_GET['module'] == 'camas_transaction') {
		include "modules/camas_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_camas_transaction') {
		include "modules/camas_transaction/form.php";
	}

	elseif ($_GET['module'] == 'camas_stock_inventory') {
		include "modules/camas_stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'camas_stock_report') {
		include "modules/camas_stock_report/view.php";
	}
	
/* Modulos de sofas */

	elseif ($_GET['module'] == 'sofas') {
		include "modules/sofas/view.php";
	}

	elseif ($_GET['module'] == 'form_sofas') {
		include "modules/sofas/form.php";
	}
	
	elseif ($_GET['module'] == 'sofas_transaction') {
		include "modules/sofas_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_sofas_transaction') {
		include "modules/sofas_transaction/form.php";
	}

	elseif ($_GET['module'] == 'sofas_stock_inventory') {
		include "modules/sofas_stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'sofas_stock_report') {
		include "modules/sofas_stock_report/view.php";
	}

/* Modulos de almacenamiento */

	
	elseif ($_GET['module'] == 'almacenamiento') {
		include "modules/almacenamiento/view.php";
	}

	elseif ($_GET['module'] == 'form_almacenamiento') {
		include "modules/almacenamiento/form.php";
	}

	elseif ($_GET['module'] == 'almacenamiento_transaction') {
		include "modules/almacenamiento_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_almacenamiento_transaction') {
		include "modules/almacenamiento_transaction/form.php";
	}	

	elseif ($_GET['module'] == 'almacenamiento_stock_inventory') {
		include "modules/almacenamiento_stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'almacenamiento_stock_report') {
		include "modules/almacenamiento_stock_report/view.php";
	}

/* Modulos de mesas */

	elseif ($_GET['module'] == 'mesas') {
		include "modules/mesas/view.php";
	}

	elseif ($_GET['module'] == 'form_mesas') {
		include "modules/mesas/form.php";
	}

	elseif ($_GET['module'] == 'mesas_transaction') {
		include "modules/mesas_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_mesas_transaction') {
		include "modules/mesas_transaction/form.php";
	}

	elseif ($_GET['module'] == 'mesas_stock_inventory') {
		include "modules/mesas_stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'mesas_stock_report') {
		include "modules/mesas_stock_report/view.php";
	}

/* Modulo de reportes generales */

	elseif ($_GET['module'] == 'general_stock_inventory') {
		include "modules/general_stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'general_stock_report') {
		include "modules/general_stock_report/view.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}


	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}


	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>