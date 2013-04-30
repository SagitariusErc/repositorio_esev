<?php
header('Content-Type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Language" content="es" />

<title>Aniversario XIX - Ingenieria de Sistemas : UNJFSC</title>

<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/css/estructure.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/css/body.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/bootstrap/css/bootstrap.css"
	media="screen" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/bootstrap/css/bootstrap.min.css"
	media="screen" />


<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/jsCarousel/jsCarousel-2.0.0.css"
	media="screen" />


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/script/validation/validationEngine.jquery.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/script/validation/template.css" />

<script type="text/javascript">

var BASE_URL = "<?php echo base_url(); ?>";

//document.oncontextmenu = function(){return false};

</script>


<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/script/jquery/jquery-1.8.2.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/bootstrap/js/bootstrap-dropdown.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/bootstrap/js/bootstrap-modal.js"></script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/script/jquery/jquery.bpopup-0.7.0.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/script/js/util-forms.js"></script>

<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/style/flexslider/flexslider.css" />
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/flexslider/jquery.flexslider.js"></script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/style/jsCarousel/jsCarousel-2.0.0.js"></script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/script/validation/jquery.validationEngine-es.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/script/validation/jquery.validationEngine.js"></script>

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
   			$('#talleres').flexslider({
   			 animation: "slide",
   			controlsContainer: ".flex-container"
   	   			});

   			$('#banners').flexslider({
      			 animation: "slide" ,    			
      				 controlNav: false,      				
      				controlsContainer: ".flex-container"
      	   			});      			
  		});

  		 $(document).ready(function() {
  			 
             $('#carouselv').jsCarousel({
 					autoscroll: true,
 					masked: false, 
 					itemstodisplay: 5,
 				 	orientation: 'v'
 	 		 });
           
         });  

 $(document).ready(function() {
  			 
             $('#institutesp').jsCarousel({
 					autoscroll: true,
 					masked: false, 
 					itemstodisplay: 5,
 				 	orientation: 'v'
 	 		 });
           
         });   

 
	
</script>

</head>
<body style="background-color: #035981">


	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="navbar navbar-inverse" style="margin-top: 0px; min-width: 1116px">
		<div class="navbar-inner" style="border-radius: 0px">
			<div class="container">
				<a class="brand"
					href="http://www.facebook.com/AniversarioIngenieriaDeSistemasUnjfsc"
					target="blank_"><i class="icon-th-large icon-white"></i> Ing - Sistemas: </a>
				<ul class="nav">
					<li><a style="width: 40px"></a>
					</li>

					<li class="active"><a
						href="http://aniversariosistemas2012-unjfsc.freeiz.com/"><i class="icon-home"></i> Home</a>
					</li>
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" style="cursor: pointer"><i class="icon-home"></i> Actividades <b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a id="actividadFeriaTecnologica" class="opciones-main"
								style="cursor: pointer"><i class="icon-home"></i>Feria Tecnológica</a>
							</li>
							<li><a id="actividadConcursoProgramacion" class="opciones-main"
								style="cursor: pointer"><i class="icon-home"></i>Concurso de Programación</a>
							</li>							
						</ul>
					</li>
					 <li class="divider-vertical"></li>
					<li><a id="verPonencias" class="opciones-main"
						style="cursor: pointer"><i class="icon-user icon-white"></i> Ponencias</a></li>
						 <li class="divider-vertical"></li>
					<li><a id="verTalleres" class="opciones-main"
						style="cursor: pointer"><i class=" icon-fire icon-white"></i> Talleres</a></li>
						 <li class="divider-vertical"></li>
					<li><a id="actividadConcursoProgramacion" class="opciones-main"
						style="cursor: pointer"><i class="icon-leaf icon-white"></i> Concuso Prog.</a></li>
						 <li class="divider-vertical"></li>
					<li><a id="actividadFeriaTecnologica" class="opciones-main"
						style="cursor: pointer"><i class=" icon-folder-open icon-white"></i> Feria de Proyectos</a></li>
						 <li class="divider-vertical"></li>
					<li><a id="inscripcionPonentes" class="opciones-main"
						style="cursor: pointer"><i class="icon-edit icon-white"></i> Inscripcion</a></li>
				</ul>
				<div class="nav pull-right">
					<li class="dropdown"><a class="dropdown-toggle"
						style="cursor: pointer" data-toggle="dropdown"> <i
							class="icon-user"></i> Administrador <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li>
								<div style="width: 300px">
									<div class="modal-header">
										<h3>Iniciar Sesión</h3>
									</div>
									<div class="modal-body">
										<div class="row-fluid form-vertical" id="form-login"
											style="padding-left: 15px">
											<label for="usuario">Usuario:</label> <input type="text"
												name="usuario" tabindex="1" placeholder="Usuario" /> <label
												for="clave">Clave:</label> <input type="text" name="clave"
												tabindex="2" placeholder="Clave">
										
										</div>
									</div>

									<div class="modal-footer">
										<button class="btn btn-success">
											<i class="icon-off icon-white"></i> Login
										</button>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</div>

			</div>
		</div>
	</div>

	<div id="container" class="page-main">


	<?php echo $estructura; ?>

	</div>

</body>
</html>
