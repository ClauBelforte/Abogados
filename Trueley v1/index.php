﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logo3.png">

    <title>Trueley</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
		  </ul>
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifiaciones</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Limpiar</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Ejemplo de notificacion corta 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Ejemplo de notifiacion largaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Ejemplo de notificacion corta 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> Ejemplo de notifiacion largaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Ejemplo de notifiacion largaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Ejemplo de notificacion corta
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Ejemplo de notifiacion largaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">Ver todas</a>
			  </li>
			</ul>
		  </li>	
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">	
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				<img src="../images/avatar/avatar-50.png" alt="">
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Perfil</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> Caja</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Configuración</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Salir</a>
			  </li>
			</ul>
          </li>	
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
						<div class="d-flex align-items-center justify-content-center" style="
						padding: 0 40px 0 40px;
					">
						  <img src="../images/logo.png" alt="" >
						 <!-- <h3><b>True</b>ley</h3> -->
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Escritorio</span>
          </a>
        </li>  
		
		<li class="treeview">
			<a href="#">
			  <i data-feather="file-text"></i>
			  <span>Expedientes</span>
			  <span class="pull-right-container">
				<i class="fa fa-angle-right pull-right"></i>
			  </span>
			</a>
			<ul class="treeview-menu">
			  <li><a href="expedientes-pen-correct.html"><i class="ti-more"></i>Expedientes Pendientes</a></li>
			  <li><a href="expedientes-despacho-correct.html"><i class="ti-more"></i>Expedientes a Despacho</a></li>
			</ul>
		  </li>
		  
        <li>
			<a href="profile.html">
            <i data-feather="users"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		
        <li>
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Caja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

        </li> 		  
		 
      
		
		<li class="treeview">
          <a href="#">
            <i data-feather="alert-triangle"></i>
			<span>Authentication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="login.html"><i class="ti-more"></i>Login</a></li>
			<li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
			
          </ul>
        </li> 		  		  
        
      </ul>
    </section>
	

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Expedientes a despacho</h4>
						</div>
						<div class="box-body py-0" style="position: relative;">
							<div class="row">
								<div class="col-lg-6 col-12">
									
								</div>
								
							</div>
							<div id="charts_widget_43_chart"></div>	
							
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Expedientes por mes</h4>
						</div>
						<div class="box-body">
						  <div id="bar-chart" style="height: 300px;"></div>
						</div>
						<!-- /.box-body-->
					  </div>
				</div>
				<div class="col-xl-6 col-12">
					
					<div class="row">						
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">18.8k</h2>
										<p class="text-mute mb-0 font-size-20">Nuevos Clientes</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">35.8k</h2>
										<p class="text-mute mb-0 font-size-20">Expedientes Totales</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
						<div class=" col-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title align-items-start flex-column">Clientes Importantes
									</h4>
								</div>
							<div class="media align-items-center bg-white mb-20">
							  <img class="avatar" src="../images/avatar/avatar-1.png" alt="...">
							  <div class="media-body">
								<p><span class="text-dark">Cliente:</span> Johone Doe</p>
								<p><span class="text-dark">Estado:</span> A Despacho</p>
								<p><span class="text-dark">Expediente:</span> N° 154645</p>
								<p><span class="text-dark">Prioridad:</span> Alta Prioridad</p>
								<p><span class="text-dark">Fecha de despacho:</span> 20/10/2020</p>
							  </div>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Editar"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-remove"></i></button>
							  </div>
							</div>				
							<div class="media align-items-center bg-white mb-20">
							  <img class="avatar" src="../images/avatar/avatar-2.png" alt="...">
							  <div class="media-body">
								<p><span class="text-dark">Cliente:</span> Johone Doe</p>
								<p><span class="text-dark">Estado:</span> A Despacho</p>
								<p><span class="text-dark">Expediente:</span> N° 154645</p>
								<p><span class="text-dark">Prioridad:</span> Alta Prioridad</p>
								<p><span class="text-dark">Fecha de despacho:</span> 20/10/2020</p>
							  </div>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Editar"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-remove"></i></button>
							  </div>			
						</div>
							<div class="media align-items-center bg-white mb-20">
							  <img class="avatar" src="../images/avatar/avatar-3.png" alt="...">
							  <div class="media-body">
								<p><span class="text-dark">Cliente:</span> Johone Doe</p>
								<p><span class="text-dark">Estado:</span> A Despacho</p>
								<p><span class="text-dark">Expediente:</span> N° 154645</p>
								<p><span class="text-dark">Prioridad:</span> Alta Prioridad</p>
								<p><span class="text-dark">Fecha de despacho:</span> 20/10/2020</p>
							  </div>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Editar"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-remove"></i></button>
							  </div>
							</div>				
						</div>
					</div>
					</div>
				</div>
			
				
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">Ultimos expedientes a despacho<small class="subtitle">Más de 50 expedientes esta semana</small>
							</h4>
						</div>
					
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 100px"><span class="text-dark">Cliente</span></th>
											<th style="min-width: 100px"><span class="text-dark">Expediente</span></th>
											<th style="min-width: 250px"><span class="text-dark">Caratula</span></th>
											<th style="min-width: 130px"><span class="text-dark">Salió con</span></th>
											<th style="min-width: 100px"><span class="text-dark">Juzgado</span></th>
											<th style="min-width: 100px"><span class="text-dark">Localidad</span></th>
											<th style="min-width: 110px"><span class="text-dark">Fecha</span></th>
											<th style="min-width: 50px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/avatar-15.png)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Matias Estigarribia</a>
													</div>
												</div>
											</td>
											<td>
												<span class="text-dark">
													N° 55455545
												</span>
											</td>
											<td>
												<span class="text-dark">
													SAMSA C/ ANDINO ERNESTO OMAR Y/O CONTRA EL TENEDOR Y/U OCUPANTE Y/O QUIEN RESULTE FINALMENTE RESPONSABLE EJECUTIVO
												</span>
											</td>
											<td>
												<span class="text-dark">
													Providencia
												</span>
											</td>
											<td>
												<span class="text-dark">
													Juzgado de familia n°2
												</span>
											</td>
											<td>
												<span class="text-dark">
													Posadas
												</span>
											</td>
											<td>
												<span class="text-dark">21-01-2020</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="ti-more-alt"></span></a>
												<div class="dropdown-menu" style="will-change: transform;">
													<a class="dropdown-item" href="#">Editar</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Eliminar</a>
												  </div>
										</td></tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/avatar-15.png)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Matias Estigarribia</a>
													</div>
												</div>
											</td>
											<td>
												<span class="text-dark">
													N° 55455545
												</span>
											</td>
											<td>
												<span class="text-dark">
													SAMSA C/ ANDINO ERNESTO OMAR Y/O CONTRA EL TENEDOR Y/U OCUPANTE Y/O QUIEN RESULTE FINALMENTE RESPONSABLE EJECUTIVO
												</span>
											</td>
											<td>
												<span class="text-dark">
													Providencia
												</span>
											</td>
											<td>
												<span class="text-dark">
													Juzgado de familia n°2
												</span>
											</td>
											<td>
												<span class="text-dark">
													Posadas
												</span>
											</td>
											<td>
												<span class="text-dark">21-01-2020</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="ti-more-alt"></span></a>
												<div class="dropdown-menu" style="will-change: transform;">
													<a class="dropdown-item" href="#">Editar</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Eliminar</a>
												  </div>
										</td></tr>
										
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/avatar-15.png)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Matias Estigarribia</a>
													</div>
												</div>
											</td>
											<td>
												<span class="text-dark">
													N° 55455545
												</span>
											</td>
											<td>
												<span class="text-dark">
													SAMSA C/ ANDINO ERNESTO OMAR Y/O CONTRA EL TENEDOR Y/U OCUPANTE Y/O QUIEN RESULTE FINALMENTE RESPONSABLE EJECUTIVO
												</span>
											</td>
											<td>
												<span class="text-dark">
													Providencia
												</span>
											</td>
											<td>
												<span class="text-dark">
													Juzgado de familia n°2
												</span>
											</td>
											<td>
												<span class="text-dark">
													Posadas
												</span>
											</td>
											<td>
												<span class="text-dark">21-01-2020</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="ti-more-alt"></span></a>
												<div class="dropdown-menu" style="will-change: transform;">
													<a class="dropdown-item" href="#">Editar</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Eliminar</a>
												  </div>
										</td></tr>
									</tbody>
									
								</table>
								<div class="col-12 ">
								<ul class="pagination pagination-sm mb-0 justify-content-center">
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
								  </ul>
								  </div>
								  
								 
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	<center> &copy; 2020 <a href="#">Trueley</a> | Todos los derechos reservados | Desarrollado por <a href="https://gluulab.com">Gluulab</a> </center>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>	
	<script src="../assets/vendor_components/Flot/jquery.flot.js"></script>
	<script src="../assets/vendor_components/Flot/jquery.flot.resize.js"></script>
	<script src="../assets/vendor_components/Flot/jquery.flot.pie.js"></script>
	<script src="../assets/vendor_components/Flot/jquery.flot.categories.js"></script>
	<script src="js/pages/widget-flot-charts.js"></script>
	<script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- Sunny Admin App -->
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
	
	
</body>
</html>
