function chamada1 () {
	document.getElementById("imagem").src="lousa.png";
	document.getElementById("link").href="http://127.0.0.1:8080/leandro/Projeto2A/Bhaskara.php";
}
function chamada2 () {
	document.getElementById("imagem").src="pita.png";
	document.getElementById("link").href="Hipotenusa.html";
}
function chamada3 () {
	document.getElementById("imagem").src="imcc.png";
	document.getElementById("link").href="imc.html";
}
function chamada4 () {
	document.getElementById("imagem").src="pagBhaskara.png";
	document.getElementById("link").href="http://127.0.0.1:8080/leandro/Projeto2A/Bhaskara.php";
}
function mostrar () {
	var tipo = document.getElementById('senha');
	if (tipo.type=="password") {
		tipo.type ="text";
		document.getElementById('mostrarEsconder').value="Esconder";
	}else {
		tipo.type = "password";
		document.getElementById('mostrarEsconder').value="Mostrar";
	}
}
function mostrar2 () {
	var tipo2 = document.getElementById('senha2');
	if (tipo2.type=="password") {
		tipo2.type ="text";
		document.getElementById('mostrarEsconder2').value="Esconder";
	}else {
		tipo2.type = "password";
		document.getElementById('mostrarEsconder2').value="Mostrar";
	}
}
function avaliacao1(){
	document.getElementById('obrigado').innerHTML="Péssimo!";
}
function avaliacao2(){
	document.getElementById('obrigado').innerHTML="Ruim!";
}
function avaliacao3(){
	document.getElementById('obrigado').innerHTML="Normal!";
}
function avaliacao4(){
	document.getElementById('obrigado').innerHTML="Bom!";
}
function avaliacao5(){
	document.getElementById('obrigado').innerHTML="Ótimo!";
}


