<?php 

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">

        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
  ?>



		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
  <?php
  
  /* Modulo de camas y colchones! */

  if ($_GET["module"]=="camas") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Camas y colchones</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=camas"><i class="fa fa-circle"></i> Datos de Camas </a></li>
        		<li><a href="?module=camas_transaction"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
            <li><a href="?module=camas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li><a href="?module=camas_stock_report"><i class="fa fa-circle-o"></i> Registro de Camas</a></li>
          </ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="camas_transaction") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Camas y colchones</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=camas"><i class="fa fa-circle-o"></i> Datos de Camas </a></li>
            <li class="active"><a href="?module=camas_transaction"><i class="fa fa-circle"></i> Registro de Camas </a></li>
            <li><a href="?module=camas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li><a href="?module=camas_stock_report"><i class="fa fa-circle-o"></i> Registro de Camas</a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="camas_stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Camas y colchones</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=camas"><i class="fa fa-circle-o"></i> Datos de Camas </a></li>
            <li><a href="?module=camas_transaction"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
            <li class="active"><a href="?module=camas_stock_inventory"><i class="fa fa-circle"></i> Stock de Camas </a></li>
            <li><a href="?module=camas_stock_report"><i class="fa fa-circle-o"></i> Registro de Camas</a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="camas_stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Camas y colchones</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=camas"><i class="fa fa-circle-o"></i> Datos de Camas </a></li>
            <li><a href="?module=camas_transaction"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
            <li><a href="?module=camas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li class="active"><a href="?module=camas_stock_report"><i class="fa fa-circle"></i> Registro de Camas</a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Camas y colchones</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=camas"><i class="fa fa-circle-o"></i> Datos de Camas </a></li>
        		<li><a href="?module=camas_transaction"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
            	<li><a href="?module=camas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            	<li><a href="?module=camas_stock_report"><i class="fa fa-circle-o"></i> Registro de Camas</a></li>
          </ul>
    	</li>
    <?php
  }

  /* Modulo de sofas */
  
  if ($_GET["module"]=="sofas") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Sofas</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=sofas"><i class="fa fa-circle"></i> Datos de Sofas </a></li>
        		<li><a href="?module=sofas_transaction"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
            <li><a href="?module=sofas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Sofas </a></li>
            <li><a href="?module=sofas_stock_report"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
          </ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="sofas_transaction") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Sofas</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=sofas"><i class="fa fa-circle-o"></i> Datos de Sofas </a></li>
            <li class="active"><a href="?module=sofas_transaction"><i class="fa fa-circle"></i> Registro de Sofas </a></li>
            <li><a href="?module=sofas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Sofas </a></li>
            <li><a href="?module=sofas_stock_report"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="sofas_stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Sofas</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=sofas"><i class="fa fa-circle-o"></i> Datos de Sofas </a></li>
            <li><a href="?module=sofas_transaction"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
            <li class="active"><a href="?module=sofas_stock_inventory"><i class="fa fa-circle"></i> Stock de Sofas </a></li>
            <li><a href="?module=sofas_stock_report"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="sofas_stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Sofas</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=sofas"><i class="fa fa-circle-o"></i> Datos de Sofas </a></li>
            <li><a href="?module=sofas_transaction"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
            <li><a href="?module=sofas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Sofas </a></li>
            <li class="active"><a href="?module=sofas_stock_report"><i class="fa fa-circle"></i> Registro de Sofas </a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Sofas</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=sofas"><i class="fa fa-circle-o"></i> Datos de Sofas </a></li>
        		<li><a href="?module=sofas_transaction"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
            <li><a href="?module=sofas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Sofas </a></li>
            <li><a href="?module=sofas_stock_report"><i class="fa fa-circle-o"></i> Registro de Sofas </a></li>
          </ul>
    	</li>
    <?php
  }
  
  /* Modulo de almacenamiento */

  if ($_GET["module"]=="almacenamiento") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=almacenamiento"><i class="fa fa-circle"></i> Datos de Almacenamiento </a></li>
        		<li><a href="?module=almacenamiento_transaction"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_report"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
          </ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="almacenamiento_transaction") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=almacenamiento"><i class="fa fa-circle-o"></i> Datos de almacenamiento </a></li>
            <li class="active"><a href="?module=almacenamiento_transaction"><i class="fa fa-circle"></i> Registro de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_report"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="almacenamiento_stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=almacenamiento"><i class="fa fa-circle-o"></i> Datos de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_transaction"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
            <li class="active"><a href="?module=almacenamiento_stock_inventory"><i class="fa fa-circle"></i> Stock de Almacenamiento </a></li>
            <li><a href="?module=stock_report_almacenamiento"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
      		</ul>
    	</li>
    <?php
  }
  
  elseif ($_GET["module"]=="almacenamiento_stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=almacenamiento"><i class="fa fa-circle-o"></i> Datos de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_transaction"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Almacenamiento </a></li>
            <li class="active"><a href="?module=almacenamiento_stock_report"><i class="fa fa-circle"></i> Registro de Almacenamiento </a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=almacenamiento"><i class="fa fa-circle-o"></i> Datos de Almacenamiento </a></li>
        		<li><a href="?module=almacenamiento_transaction"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Almacenamiento </a></li>
            <li><a href="?module=almacenamiento_stock_report"><i class="fa fa-circle-o"></i> Registro de Almacenamiento </a></li>
          </ul>
    	</li>
    <?php
  }

  /* Modulo de mesas */

  if ($_GET["module"]=="mesas") { ?>
	<li class="active treeview">
		  <a href="javascript:void(0);">
			<i class="fa fa-folder-o"></i> <span>Mesas</span> <i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li class="active"><a href="?module=mesas"><i class="fa fa-circle"></i> Datos de Mesas </a></li>
			<li><a href="?module=mesas_transaction"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
		<li><a href="?module=mesas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Mesas </a></li>
		<li><a href="?module=mesas_stock_report"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
	  </ul>
	</li>
<?php
}

elseif ($_GET["module"]=="mesas_transaction") { ?>
	<li class="active treeview">
		  <a href="javascript:void(0);">
			<i class="fa fa-folder-o"></i> <span>Mesas</span> <i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="?module=mesas"><i class="fa fa-circle-o"></i> Datos de Mesas </a></li>
		<li class="active"><a href="?module=mesas_transaction"><i class="fa fa-circle"></i> Registro de Mesas </a></li>
		<li><a href="?module=mesas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Mesas </a></li>
		<li><a href="?module=mesas_stock_report"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
		  </ul>
	</li>
<?php
}

elseif ($_GET["module"]=="mesas_stock_inventory") { ?>
	<li class="active treeview">
		  <a href="javascript:void(0);">
			<i class="fa fa-folder-o"></i> <span>Almacenamiento</span> <i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="?module=mesas"><i class="fa fa-circle-o"></i> Datos de Mesas </a></li>
		<li><a href="?module=mesas_transaction"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
		<li class="active"><a href="?module=mesas_stock_inventory"><i class="fa fa-circle"></i> Stock de Mesas </a></li>
		<li><a href="?module=mesas_stock_report"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
		  </ul>
	</li>
<?php
}

elseif ($_GET["module"]=="mesas_stock_report") { ?>
	<li class="active treeview">
		  <a href="javascript:void(0);">
			<i class="fa fa-folder-o"></i> <span>Mesas</span> <i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="?module=mesas"><i class="fa fa-circle-o"></i> Datos de Mesas </a></li>
		<li><a href="?module=mesas_transaction"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
		<li><a href="?module=mesas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Mesas </a></li>
		<li class="active"><a href="?module=mesas_stock_report"><i class="fa fa-circle"></i> Registro de Mesas </a></li>
		  </ul>
	</li>
<?php
}

else { ?>
	<li class="treeview">
		  <a href="javascript:void(0);">
			<i class="fa fa-folder-o"></i> <span>Mesas</span> <i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="?module=mesas"><i class="fa fa-circle-o"></i> Datos de Mesas </a></li>
			<li><a href="?module=mesas_transaction"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
			<li><a href="?module=mesas_stock_inventory"><i class="fa fa-circle-o"></i> Stock de Mesas </a></li>
			<li><a href="?module=mesas_stock_report"><i class="fa fa-circle-o"></i> Registro de Mesas </a></li>
	  	  </ul>
	</li>
<?php
}

  
  /* Modulo de reportes */

	if ($_GET["module"]=="stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
                <li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Camas </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
                    <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas</a></li>
                  </ul>
                </li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
        		<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
        		<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
      		</ul>
    	</li>
    <?php
	}


	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}
































elseif ($_SESSION['permisos_acceso']=='Gerente') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { ?>
		<li class="active">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}


  if ($_GET["module"]=="stock_inventory") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas</a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["module"]=="stock_report") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i>  Stock de Camas </a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}
if ($_SESSION['permisos_acceso']=='Almacen') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="camas" || $_GET["module"]=="form_camas") { ?>
    <li class="active">
      <a href="?module=camas"><i class="fa fa-folder-o"></i> Datos de Camas </a>
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=camas"><i class="fa fa-folder-o"></i> Datos de Camas </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="camas_transaction" || $_GET["module"]=="form_camas_transaction") { ?>
    <li class="active">
      <a href="?module=camas_transaction"><i class="fa fa-clone"></i> Registro de Camas </a>
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=camas_transaction"><i class="fa fa-clone"></i> Registro de Camas </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="stock_inventory") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["module"]=="stock_report") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Camas </a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Camas </a></li>
          </ul>
      </li>
    <?php
  }

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}
?>