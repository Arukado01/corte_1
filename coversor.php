<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trabajo 1 - Conversor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-1">Conversor</h1>
			<p>Conversor electiva de profundizacion II</p>
		</div>
	</section>
	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				<h1>el resultado es:
				<?php 
					error_reporting(E_ALL);
					ini_set('display_errors',1);

					$valor=$_POST['valor'];
					$mactual=$_POST['mactual'];
					$mconvertido=$_POST['mconvertido'];
					$valor1=0;


					switch ($mactual) {
					case "Hm":

					   switch ($mconvertido) {
						case "Hm":

						  echo $valor, $mconvertido;
							break;

						case "Dm":

					$valor1=$valor*100;
					 $valor=$valor1/10;
						  echo $valor, $mconvertido;
							break;
						case "m":

					$valor1=$valor*100;
					 $valor=$valor1/1;
						  echo $valor, $mconvertido;
							break;

					   case "dm":

					$valor1=$valor*100;
					 $valor=$valor1*10;
						  echo $valor, $mconvertido;
							break;

						case "cm":

					$valor1=$valor*100;
					 $valor=$valor1*100;
						  echo $valor, $mconvertido;

						 
							break;
						case "mm":


					$valor1=$valor*100;
					 $valor=$valor1*1000;
						  echo $valor, $mconvertido;


							break;
					}


							
							break;

						case "Dm":

					   switch ($mconvertido) {
						case "Hm":

					$valor1=$valor*10;
					 $valor=$valor1/100;
						  echo $valor, $mconvertido;
							break;

						case "Dm":
						  echo $valor, $mconvertido;

							break;

						case "m":

					$valor1=$valor*10;
					 $valor=$valor1;
						  echo $valor, $mconvertido;
							break;

					   case "dm":

					$valor1=$valor*10;
					 $valor=$valor1*10;
						  echo $valor, $mconvertido;
							break;

						case "cm":

					$valor1=$valor*10;
					 $valor=$valor1*100;
						  echo $valor, $mconvertido;

						 
							break;
						case "mm":


					$valor1=$valor*10;
					 $valor=$valor1*1000;
						  echo $valor, $mconvertido;


							break;
					}


						   
							break;
						case "m":


					switch ($mconvertido) {
						case "Hm":

					 $valor=$valor/100;
						  echo $valor, $mconvertido;
							break;

						case "Dm":

					 $valor=$valor/10;
						  echo $valor, $mconvertido;
							break;

						case "m":

						  echo $valor, $mconvertido;
							break;

					   case "dm":


					 $valor=$valor*10;
						  echo $valor, $mconvertido;
							break;

						case "cm":


					 $valor=$valor*100;
						  echo $valor, $mconvertido;

						 
							break;
						case "mm":

					 $valor=$valor*1000;
						  echo $valor, $mconvertido;


							break;
					}
							
							break;

					case "dm":


					   switch ($mconvertido) {
						case "Hm":

					$valor1=$valor/10;
					 $valor=$valor1/100;
						  echo $valor, $mconvertido;
							break;

						case "Dm":
					  $valor1=$valor/10;
					 $valor=$valor1/10;
						  echo $valor, $mconvertido;

							break;

						case "m":

					 $valor=$valor/10;
						  echo $valor, $mconvertido;

							break;

					   case "dm":

						  echo $valor, $mconvertido;
							break;

						case "cm":

					$valor1=$valor/10;
					 $valor=$valor1*100;
						  echo $valor, $mconvertido;

						 
							break;
						case "mm":


					$valor1=$valor/10;
					 $valor=$valor1*1000;
						  echo $valor, $mconvertido;


							break;
					}

						   
							break;
						case "cm":

					switch ($mconvertido) {
						case "Hm":

					$valor1=$valor/100;
					 $valor=$valor1/100;
						  echo $valor, $mconvertido;
							break;

						case "Dm":
					  $valor1=$valor/100;
					 $valor=$valor1/10;
						  echo $valor, $mconvertido;

							break;

						case "m":


					 $valor=$valor/100;
						  echo $valor, $mconvertido;

							break;

					   case "dm":

					  $valor1=$valor/100;
					 $valor=$valor1*10;
						  echo $valor, $mconvertido;

						case "cm":

						  echo $valor, $mconvertido;

						 
							break;
						case "mm":


					$valor1=$valor/100;
					 $valor=$valor1*1000;
						  echo $valor, $mconvertido;


							break;
					}

						   
							break;
						case "mm":


					switch ($mconvertido) {
						case "Hm":

					$valor1=$valor/1000;
					 $valor=$valor1/100;
						  echo $valor, $mconvertido;
							break;

						case "Dm":
					  $valor1=$valor/1000;
					 $valor=$valor1/10;
						  echo $valor, $mconvertido;

							break;

						case "m":


					 $valor=$valor/1000;
						  echo $valor, $mconvertido;

							break;

					   case "dm":

					  $valor1=$valor/1000;
					 $valor=$valor1*10;
						  echo $valor, $mconvertido;

						case "cm":

						$valor1=$valor/1000;
					 $valor=$valor1*100;
						  echo $valor, $mconvertido;

						 
							break;
						case "mm":


					$valor1=$valor/100;
					$valor=$valor1*1000;
						  echo $valor, $mconvertido;


							break;
					}
							
							break;
					}
				?></h1>
				
			<a class="btn btn-primary" href="index.html">Volveral inicio</a>
			</section>
			<aside class="col-md-3">
				<h4>Conversor web</h4>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Instrucciones: </h4>
					<p class="list-group-item-text">Digitar el valor inicial, especifique a que unidad de medida pertenece ese valor, seleccione a que unidad de medida desea convertir y por ultimo presione clic en el boton convertir para realizar la operacion</p>
				</a>
			</aside>
		</div>
	</section>
	<br>
		<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p><strong>Grupo:</strong> Carlos Cortina -<strong> Bryan Manga</strong></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>