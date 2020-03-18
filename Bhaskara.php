<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Bhaskara</title>
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "BhaskaLogo.ico"/>
	<style type="text/css">
		
		*{
	margin: 0px;
	padding: 0px;
}

@font-face{
	font-family: Megrim;
	src: url('Megrim.ttf');
}

body{
	background-color: #088A68;
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

section{
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

p{
	margin: 1vw;
}

img{
	max-width: 100%;
	max-height: 100%;
}

input{
	border-style: solid;
	height: 4vh;
	font-size: small;
	background-color: #B5B5B5;
	width: 15vw;
	width: auto;
	height: auto;
	text-align: justify-all;
	padding: 0.5vh;
}

	</style>
</head>
<body>

	<?php

		@$a = isset($_GET['a']) ? $_GET['a'] : "";
		@$b = isset($_GET['b']) ? $_GET['b'] : "";
		@$c = isset($_GET['c']) ? $_GET['c'] : "";
		@$delta;
		@$x1 = "";
		@$x2 = "";

		if ($a != "" && $b != "" && $c != "") {
			$delta = ($b*$b)-(4*$a*$c);
			$x1 = (-$b + (sqrt($delta)))/(2*$a);
			$x2 = (-$b - (sqrt($delta)))/(2*$a);
		}
			

	?>

	<form action="Bhaskara.php">

		<center>
				<img src="mat.png">
			</center>

		 	<nav>
		 		
		 		<center>
		 			
		 			<table>
		 				
		 				<tr>
		 					
		 					<td><img class="icon1" src="casa.png">
							<a class="casa" id="efeitoA" href="home.html"><b>Home</b></a>

							<td><img class="icon2" src="calculadora.png">
							<a class="calc" id="efeitoA" href="Calculadora.html"><b>Calculadora</b></a>

							<td><img class="icon3" src="imc.png">
							<a class="imc" id="efeitoA" href="imc.html"><b>Imc</b></a>

		 				</tr>

		 			</table>

		 		</center>

		 	</nav>

		<section>
			
		
			<h3>

				<p>A fórmula de Bhaskara é um método resolutivo para equações do segundo grau cujo nome homenageia o grande matemático indiano que a demonstrou. Essa fórmula nada mais é do que um método para encontrar as raízes reais de uma equação do segundo grau fazendo uso apenas de seus coeficientes. Vale lembrar que coeficiente é o número que multiplica uma incógnita em uma equação.</p>

				<p>Em sua forma original, a fórmula de Bhaskara é dada pela seguinte expressão:</p>

				<center>
					<img src="imagens/bhaskara.jpg">
				</center>

				<p>Para utilizar essa fórmula, é necessário lembrar que toda equação do segundo grau deve ser escrita da seguinte maneira:</p>

				<center>
					<img src="imagens/equacao.jpg">
				</center>

				<p>Os coeficientes dessa equação são os números que ocupam o lugar de “a”, de “b” e de “c”. Portanto, o coeficiente “a” é o número que multiplica x2; o coeficiente “b” é o número que multiplica x; e o coeficiente “c” é o número que não multiplica incógnita.</p>

				<p>Tendo isso em mente agora digite valores para A, B e C para descobrir o valor de X' e X":</p>

			</h3>

			<center>


				<br><br>

				Valor de A<input type="text" name="a" required>
				Valor de B<input type="text" name="b" required>
				Valor de C<input type="text" name="c" required>

				<br><br><br>

				X'<input type="text" name="x1" value="<?php echo $x1;?>" readonly>
				X"<input type="text" name="x2" value="<?php echo $x2;?>" readonly>

				<input type="submit" name="bnt">

				<br><br>

			</center>

		</section>

	</form>

</body>
</html>