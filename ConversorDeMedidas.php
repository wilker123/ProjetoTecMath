<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Conversor de Medidas</title>
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "UM.ico"/>
	<style type="text/css">
		
		*{
	margin: 0px;
	padding: 0px;
}

@font-face{
	font-family: Megrim;
	src: url('Megrim.ttf');
}

html{
	scroll-behavior: smooth;
}

body{
	margin: 0px;
	padding: 10px 0;
	background-color: #088A68;
	overflow-x: hidden;
	width: auto;
	height: auto;
	text-align: justify-all;
}

nav {
	border:solid black;
	width: 100%;
	background-color: #FFBF00;
	overflow: hidden;
	font-family: Megrim;
	margin-bottom: 10vh;
	padding-top: 2vh;
}

nav img{
	max-width: 100%;
	max-height: 100%;
	width: 17vh;
	vertical-align: middle;
	padding: 1vh;
}

.icon1 {
	width: 100px;
	margin-top: -23px;
}

.casa {
	margin-top: -3vh;
}

.icon2 {
	width: 100px;
	margin-top: -20px;
	margin-left: 17vw;
}

.calc{
	margin-top: -3vh;
}

.icon3 {
	width: 100px;
	margin-top: -20px;
	margin-left: 27vw;
}

.imc {
		margin-top: -3vh;

}

nav a{
	text-decoration: none;
	font-size: 50px;
	color: #000;
	vertical-align: middle;
	font-family: Megrim;
	margin-bottom: 5vh;
	position: absolute;
}

#efeitoA:hover {
	transition: 2s;
	font-size: 65px;
	color: #585858;
}

header {
	width: 80%;
	height: auto;
	text-align: justify-all;
}

.lousa {
	background-image: url(lousa2.png);
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
	width: 100%;
	height: 100%;
}

.links{
	width: 15vw;
	border: solid;
	background-color: #987316;
	text-decoration: none;
	color: #fff;
	border-radius: 10vw;
	padding: 3vh;
	margin-top: 20vh;
	font-size: medium;
	display: flex;
	margin: 5vw;
	height: auto;
	text-align: justify-all;
}

.GrRa{
	background-color: #fff;
	width: 80%;
	height: 60vh;
	margin-right: 9.25vw;
	margin-left: 9.25vw;
	margin-top: 2vh;
	border-style: solid;
	border-radius: 1vw;
	border-width: 0.5vw;
	width: auto;
	height: auto;
	text-align: justify-all;
}
p{
	margin: 2vw;
}

.input{
	border-style: solid;
	height: 4vh;
	font-size: small;
	background-color: #B5B5B5;
	width: 15vw;
	width: auto;
	height: auto;
	text-align: justify-all;
}

.conversorGR{
	margin: 2vw;
}
.bnt{
	background-color: #9C9C9C;
	border-style: double;
	border-color: #4F4F4F;
	border-width: 0.5vw;
	border-radius: 2vw;
	padding: 1.5vh;
	width: 10vw;
}

.temperatura{
	background-color: #fff;
	width: 80%;
	height: 70vh;
	margin-right: 9.25vw;
	margin-left: 9.25vw;
	margin-top: 2vh;
	border-style: solid;
	border-radius: 1vw;
	border-width: 0.5vw;
	width: auto;
	height: auto;
	text-align: justify-all;
}

.temperatura img{
	max-width: 100%;
	max-height: 100%;
}

.conversorT{
	margin: 2vw;
}

.comprimento{
	background-color: #fff;
	width: 80%;
	height: 70vh;
	margin-right: 9.25vw;
	margin-left: 9.25vw;
	margin-top: 2vh;
	border-style: solid;
	border-radius: 1vw;
	border-width: 0.5vw;
	width: auto;
	height: auto;
	text-align: justify-all;
}

.conversorC{
	margin: 2vw;
}

.tempo{
	background-color: #fff;
	width: 80%;
	height: 70vh;
	margin-right: 9.25vw;
	margin-left: 9.25vw;
	margin-top: 2vh;
	border-style: solid;
	border-radius: 1vw;
	border-width: 0.5vw;
	width: auto;
	height: auto;
	text-align: justify-all;
}

.conversorTempo{
	margin: 2vw;
}

	</style>

</head>
<body>

	<form method="form" action="conversorDeMedidas.php">

			<?php 

				@$graus = "";
				@$rad = "";
				@$celcius = "";
				@$fahrenheit = "";
				@$kelvin = "";
				@$comprimentoInicial = $_GET['comprimentoInicial'];
				@$comprimentoFinal = "";
				@$medidaInicial = $_GET['medidaInicial'];
				@$medidaFinal = $_GET['medidaFinal'];
				@$segundos = "";
				@$minutos = "";
				@$horas = "";

				if (empty($_GET['rad'])) {
					if (isset($_GET['graus'])) {
						$graus = $_GET['graus'];
						$rad = $graus*3.14159265359/180;
					}
				}
				

				if (empty($_GET['graus'])) {
					if (isset($_GET['rad'])){
						$rad = $_GET['rad'];
						$graus = $rad*180/3.14159265359;
					}
				}

				if (empty($_GET['celcius'])) {
					if (empty($_GET['fahrenheit'])) {
						if (isset($_GET['kelvin'])) {
							$kelvin = $_GET['kelvin'];
							$celcius = $kelvin - 273;
							$fahrenheit = ((($kelvin - 273)/5)*9)+32;
						}
					}
				}
				if (empty($_GET['celcius'])) {
					if (empty($_GET['kelvin'])) {
						if (isset($_GET['fahrenheit'])) {
							$fahrenheit = $_GET['fahrenheit'];
							$celcius = (($fahrenheit - 32)/9*5);
							$kelvin = ((($fahrenheit - 32)/9)*5)+273;
						}
					}
				}
				if (empty($_GET['fahrenheit'])) {
					if (empty($_GET['kelvin'])) {
						if (isset($_GET['celcius'])) {
							$celcius = $_GET['celcius'];
							$fahrenheit = (($celcius/5)*9)+32;
							$kelvin = $celcius + 273;
						}
					}
				}

				if (empty($_GET['segundos'])) {
					if (empty($_GET['minutos'])) {
						if (isset($_GET['horas'])) {
							$horas = $_GET['horas'];
							$segundos = $horas * 3600;
							$minutos = $horas * 60;
						}
					}
				}
				if (empty($_GET['segundos'])) {
					if (empty($_GET['horas'])) {
						if (isset($_GET['minutos'])) {
							$minutos = $_GET['minutos'];
							$segundos = $minutos * 60;
							$horas = $minutos/60;
						}
					}
				}
				if (empty($_GET['minutos'])) {
					if (empty($_GET['horas'])) {
						if (isset($_GET['segundos'])) {
							$segundos = $_GET['segundos'];
							$minutos = $segundos / 60;
							$horas = $segundos / 3600;
						}
					}
				}

				if ($medidaInicial == 1) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial*10;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial*100;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial*1000;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial*10000;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial*100000;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*1000000;
					}
				}else if ($medidaInicial == 2) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial*10;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial*100;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial*1000;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial*10000;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*100000;
					}
				}else if ($medidaInicial == 3) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/100;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial*10;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial*100;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial*1000;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*10000;
					}
				}else if ($medidaInicial == 4) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/1000;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial/100;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial*10;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial*100;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*1000;
					}
				}else if ($medidaInicial == 5) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/10000;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial/1000;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial/100;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial*10;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*100;
					}
				}else if ($medidaInicial == 6) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/100000;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial/10000;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial/1000;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial/100;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial*10;
					}
				}else if ($medidaInicial == 7) {
					if ($medidaFinal == 1) {
						$comprimentoFinal = $comprimentoInicial/1000000;
					}else if($medidaFinal == 2){
						$comprimentoFinal = $comprimentoInicial/100000;
					}else if($medidaFinal == 3){
						$comprimentoFinal = $comprimentoInicial/10000;
					}else if($medidaFinal == 4){
						$comprimentoFinal = $comprimentoInicial/1000;
					}else if($medidaFinal == 5){
						$comprimentoFinal = $comprimentoInicial/100;
					}else if($medidaFinal == 6){
						$comprimentoFinal = $comprimentoInicial/10;
					}else if($medidaFinal == 7){
						$comprimentoFinal = $comprimentoInicial;
					}
				}
				
		 	?>

		 	<center>
				<img src="mat.png">
			</center>

		 	<nav>
		 		
		 		<center>
		 			
		 			<table>
		 				
		 				<tr>
		 					
		 					<td><img class="icon1" src="casa.png">
							<td><a class="casa" id="efeitoA" href="home.html"><b>Home</b></a>

							<td><img class="icon2" src="calculadora.png">
							<td><a class="calc" id="efeitoA" href="Calculadora.html"><b>Calculadora</b></a>

							<td><img class="icon3" src="imc.png">
							<td><a class="imc" id="efeitoA" href="imc.html"><b>Imc</b></a>

		 				</tr>

		 			</table>

		 		</center>

		 	</nav>

		 	<center>
		 		<header>
		 			<div class="lousa">

		 				<br><br><br><br>

		 				<center><h1>Conversor de Medidas</h1></center>

		 				<table>
		 				
		 					<tr>
		 					
		 						<td>

		 						<a href="#GrRa" id="GR" class="links">Graus - Radianos</a>

		 						<a href="#temperatura" id="Tempe" class="links">Temperaturas</a>

		 						<td>
		 				 			
		 						<a href="#comprimento" id="Compri" class="links">Comprimento</a>

		 						<a href="#tempo" id="Tempo" class="links">Tempo</a>
		
		 					</tr>
		 				
		 				</table>
		
					</div>
		 		</header>
		 	</center>

		 	<section class="sections">
		 		
		 		<div class="GrRa" id="GrRa">

		 			<br>
		 			<center><h2>Graus e Radianos</h2></center>

		 			<br>

		 			<h3>
		 				<p>As medidas Graus e Radianos são usadas em circunferências, especialmente na medida de arcos trigonométricos.</p>
		 				<p>A relação feita para essa conversão é que 180°(graus) equivalem a pi(3.14159265359) ou 360° equivalem a 2 vezes pi.</p>
		 			</h3>

		 			<br><br>

		 			<h3 class="conversorGR"><!-- Aqui ocorrerá a conversão de Graus para Radianos-->

		 			Medida em Graus: <input type="text" name="graus" class="input" id="graus" value="<?php echo $graus?>">

		 			Medida em Radianos: <input type="text" name="rad" class="input" id="rad" value="<?php echo $rad; ?>">

		 			<br><br>
		 				<center>
		 					<input type="submit" name="bnt" class="bnt">
		 				</center>

		 			</h3>

		 		</div>

		 		<div class="temperatura" id="temperatura">
		 			
		 			<br>
		 			<center><h2>Temperatura</h2></center>

		 			<br>

		 			<h3>
		 				<p>A temperatura está bem presente no nosso cotidiano, mas, depedente da situação ou local em que esteja sendo avaliada, ela pode ter três medidas diferentes(Celcius, Kelvin e Fahrenheit.</p>
		 				<p>A formula Mais usada para a conversão dessas medidas é:</p>

		 				<img src="imagens2/temperatura.jpg">
		 			</h3>

		 			<h3 class="conversorT"> <!-- Aqui ocorrerá a conversão de temperaturas-->
		 				
		 				Celcius: <input type="text" name="celcius" class="input" id="celcius" value="<?php echo $celcius; ?>">

		 				Fahrenheit: <input type="text" name="fahrenheit" class="input" id="fahrenheit" value="<?php echo $fahrenheit; ?>">

		 				Kelvin: <input type="text" name="kelvin" class="input" id="kelvin" value="<?php echo $kelvin; ?>">

		 				<br><br>
		 				<center>
		 					<input type="submit" name="bnt" class="bnt">
		 				</center>
		 			</h3>

		 		</div>

		 		<div class="comprimento" id="comprimento">
		 			
		 			<br>
		 			<center><h2>Comprimento</h2></center>

		 			<br>

		 			<h3>
		 				
		 				<p>O comprimento trata-se de uma grandeza usada para medir alturas, larguras e profundidades de objetos.</p>
		 				<p>Essa grandeza tem sete representações Km(quilometro), Hm(hectometro), Dam(decametro), M(metro), Dg(decimetro), Cm(centimetro) e Mm(milimetro).</p>

		 			</h3>

		 			<br><br>

		 			<h3 class="conversorC"> <!-- Aqui ocorrerá a conversão de comprimento-->

		 				<center>

		 				<input type="text" name="comprimentoInicial" class="input" id="comprimentoInicial">
		 				<select name="medidaInicial">
		 					<option value="1">Km</option>
		 					<option value="2">Hm</option>
		 					<option value="3">Dam</option>
		 					<option value="4">M</option>
		 					<option value="5">Dm</option>
		 					<option value="6">Cm</option>
		 					<option value="7">Mm</option>
		 				</select>

		 				<input type="text" name="comprimentoFinal" class="input" id="comprimentoFinal" value="<?php echo $comprimentoFinal; ?>" readonly="true">
		 				<select name="medidaFinal">
		 					<option value="1">Km</option>
		 					<option value="2">Hm</option>
		 					<option value="3">Dam</option>
		 					<option value="4">M</option>
		 					<option value="5">Dm</option>
		 					<option value="6">Cm</option>
		 					<option value="7">Mm</option>
		 				</select>

		 				</center>

		 				<br><br>

		 				<center>
		 					<input type="submit" name="bnt" class="bnt">
		 				</center>

		 			</h3>

		 		</div>

		 		<div class="tempo" id="tempo">
		 			
		 			<br>
					<center><h2>Tempo</h2></center>

					<br>
					<h3>
						<p>O tempo é uma grandeza bem comum usada no nosso dia-a-dia, literalmente, superficialmente ele tem três representações segundos, minutos e horas.</p>
						<p>Para ocorrer a conversão de um para o outro multiplica-se ou divide-se por 60, ou seja uma hora é igual a 60 minutos e um minuto é igual a 60 segundos</p>
					</h3>

					<br><br>

					<h3 class="conversorTempo">

						<center>
						
							Segundos: <input type="text" name="segundos" class="input" id="segundos" value="<?php echo $segundos; ?>">

		 					Minutos: <input type="text" name="minutos" class="input" id="minutos" value="<?php echo $minutos; ?>">

		 					Horas: <input type="text" name="horas" class="input" id="horas" value="<?php echo $horas; ?>">

		 				</center>

		 				<br><br>

		 				<center>
		 					<input type="submit" name="bnt" class="bnt">
		 				</center>

					</h3>

		 		</div>

		 	</section>
			
	 </form>

</body>
</html>