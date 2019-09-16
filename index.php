<?php
	$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado');
	$day = $dias[date("N")];
	$date = "#".date("dMY");
	$tasa = 0.00;
	$nombre_fichero = './tasas/venexcambio-'.date("dMY").'.jpg';
	if (file_exists($nombre_fichero)) {
		$seo_img = "https://venexradio.com/venexcambio/tasas/venexcambio-".date("dMY").".jpg";
	} else {
	    $seo_img = "https://venexradio.com/venexcambio/tasas/venexcambio.jpg";
	}
 ?>
<!--By William Pereira @pereirawe-->
<!DOCTYPE html>
 <!--[if lt IE 7]>      	<html class="no-js html-loading wf-active ie old-browser lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="es-ES"> <![endif]-->
<!--[if IE 7]>         	<html class="no-js html-loading wf-active ie old-browser ie7 lt-ie10 lt-ie9 lt-ie8" lang="es-ES"> <![endif]-->
<!--[if IE 8]>         	<html class="no-js html-loading wf-active ie old-browser ie8 lt-ie10 lt-ie9" lang="es-ES"> <![endif]-->
<!--[if IE 9]>			<html class="no-js html-loading wf-active ie modern-browser ie9 lt-ie10" lang="es-ES"> <![endif]-->
<!--[if gt IE 9]>		<html class="no-js html-loading wf-active modern-browser" lang="es-ES"> <!--<![endif]-->
<html lang="es-CO" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>venexcambio</title>
	<meta name='description' content='Somos casa de cambio de pesos a bolivares. Con la mejor tasa del mercado y la responsabilidad y honestidad que solo venexcambio le puede brindar.' />
	<meta property='og:url' content='http://venexradio.com/venexcambio/' />
	<meta property='og:locale' content='es_ES' />
	<meta property='og:type' content='website' />
	<meta property='og:title' content='venexcambio' />
	<meta property='og:description' content='Somos casa de cambio de pesos a bolivares. Con la mejor tasa del mercado y la responsabilidad y honestidad que solo venexcambio le puede brindar.' />
	<meta property='og:site_name' content='venexcambio' />
	<meta property='og:image' content='<?php echo $seo_img; ?>'/>
	<meta name='twitter:card' content='summary_large_image'/>
	<meta name='twitter:description' content='Somos casa de cambio de pesos a bolivares. Con la mejor tasa del mercado y la responsabilidad y honestidad que solo venexcambio le puede brindar.'/>
	<meta name='twitter:domain' content='venexcambio'/>
	<meta name='twitter:image' content='<?php echo $seo_img; ?>'/>
	<meta name="description" content="Somos casa de cambio de pesos a bolivares. Con la mejor tasa del mercado y la responsabilidad y honestidad que solo venexcambio le puede brindar.">
	<meta name="keywords" content="pesos, bolivares, dolares, euros, casa de cambio, remesas, trnasferencias, consignaciones, dinero, bogota, cucuta, caracas, maracaibo, san cristobal, medellin, colombia, venezuela,">
	<meta name="robots" content="index, follow">

	<link rel="shortcut icon" href="./favicon.png" />
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css" type="text/css" />

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113875916-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113875916-1');
	</script>

	 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		google.charts.load('current', {packages: ['corechart', 'line']});
		google.charts.setOnLoadCallback(drawBackgroundColor);

		function drawBackgroundColor() {
		      var data = new google.visualization.DataTable();
		      data.addColumn('date', 'X');
		      data.addColumn('number', 'Tasa');

		      data.addRows([
		        [new Date(2014, 1, 26), 0.0135],  
		        [new Date(2014, 1, 27), 0.0135],
		        [new Date(2014, 2, 1), 0.0135],
		        [new Date(2014, 2, 2), 0.0135],
		        [new Date(2014, 2, 3), 0.0133],
		        [new Date(2014, 2, 5), 0.0135],
		        [new Date(2014, 2, 7), 0.0132],
		        [new Date(2014, 2, 9), 0.0131],
		        [new Date(2014, 2, 12), 0.0128],
		        [new Date(2014, 2, 13), 0.0127],
		        [new Date(2014, 2, 14), 0.0127],
		        [new Date(2014, 2, 15), 0.0127],
		        [new Date(2014, 2, 16), 0.0120],
		        [new Date(2014, 2, 17), 0.0118],
		        [new Date(2014, 2, 18), 0.0118],
		        [new Date(2014, 2, 19), 0.0118],
		        [new Date(2014, 2, 20), 0.0117],
		        [new Date(2014, 2, 21), 0.0117],
		        [new Date(2014, 2, 22), 0.0112],
		        [new Date(2014, 2, 26), 0.0102],
		        [new Date(2014, 2, 27), 0.0105],
		        [new Date(2014, 3, 2), 0.01],
		        [new Date(2014, 3, 3), 0.0099],





		        [new Date(2014, 4, 12), 0.0052],
		        [new Date(2014, 4, 13), 0.0052],
		        [new Date(2014, 4, 14), 0.005]
		      ]);

		      var options = {
		        hAxis: {
		          title: ''
		        },
		        vAxis: {
		          title: 'Tasa'
		        },
		        backgroundColor: '#f2f2f2'
		      };

		      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
		      chart.draw(data, options);
		    }
    </script>

</head>
<body>
	<header>
		<div class="container">
			<img src="./img/logo.png" alt="" height="110px">
		</div>
	</header>
		<div class="body_box">	
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span id="day"><?php echo $day; ?></span>
						<span id="date"><?php echo $date; ?></span>
						<span id="tasa"><?php echo $tasa; ?></span>
						<span id="currency">BSF - COP</span>
					</div>

					<div class="col-md-6">
						<span id="day">Calculadora</span>
						<form action="#">
							<div class="input-group"> 
						        <span class="input-group-addon">COP</span>
						        <input type="number" id="monto" name="monto" value="100000" min="50000" step="10" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"  />
							</div>
							<hr>
							<div class="input-group"> 
							    <span class="input-group-addon">VEF</span>
							    <input type="number" id="cambio" min="0" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" step="0.01" />
							</div>
						</form>
					<br>
						<span id="day">Contactanos</span>
						<a id="whatsapp" href="https://api.whatsapp.com/send?phone=+573112468613&text=Quiero hacer un envío de dinero a Venezuela." target="_blank"><i class="fab fa-whatsapp"></i> +57 311-2468613<br>
						William Pereira</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
				<br><center><h2>Comportamiento de la tasa</h2></center>
			  <div id="chart_div"></div>
		</div>
		<div class="container" id="bancos">	
			<div class="row">	
				<div class="col-md-6">
					<img src="./img/logo-multipagas.jpg" alt="" height="90px"><br><br>
					<span>Bancolombia Ahorro</span><br>
					<span>William Pereira</span><br>
					<span>Pasaporte: 5138220936</span><br>
					<span>Cuenta Ahorro: 33589255149</span><br>
				</div>
				<div class="col-md-6">
					<h4>Enviamos a todos los bancos</h4><br><br>
					<div class="row">
						<div class="col-md-3">
							<img src="./img/logo-banesco.png" alt="" width="100%">
						</div>
						<div class="col-md-3">
							<img src="./img/logo-mercantil.png" alt="" width="100%">
						</div>
						<div class="col-md-3">
							<img src="./img/logo-banco-de-venezuela.jpg" alt="" width="100%">
						</div>
						<div class="col-md-3">
							<img src="./img/logo-bod.jpg" alt="" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="normas">
					<h2>Normas</h2>
						<ul>
							<li>Contactenos para consultar la disponibilidad.</li>
							<li>No haga consignaciones sin haber consultado la disponibilidad.</li>
							<li>Al hacer la consignación envie inmediatamente el comprobante o captura por Whatsapp.</li>
							<li>El tiempo de respuesta y confirmación de la transferencia al banco depende de los plazos estipulados por ellos.</li>
							<li>Recuerde que la estabilidad de las plataformas bancarias en Venezuela puede causar el retrazo.</li>
						</ul>
					</div>
		</div>
	

	<script type="text/javascript">
		var r_cambio = $("#monto").val() / <?php echo $tasa; ?>;
		$("#cambio").val(r_cambio);

		var str = document.getElementById("cambio");
		var currency = parseFloat(str.value).toFixed(2);
		
		$("#cambio").val(currency);

		$("#monto").on('change paste keyup', function() {
			var r_cambio = $("#monto").val() / <?php echo $tasa; ?>;
		$("#cambio").val(r_cambio);
		
		var str = document.getElementById("cambio");
		var currency = parseFloat(str.value).toFixed(2);
		
		$("#cambio").val(currency);
		});

		
	</script>
</body>
</html>