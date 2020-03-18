function calculoimc() {
	var peso = parseFloat(document.formImc.peso.value);
	var altura = parseFloat(document.formImc.altura.value);
	if (isNaN(peso)){
		document.getElementById('aviso').innerHTML = "Apenas números";
	}
	else if (isNaN(altura)) {
		document.getElementById('aviso2').innerHTML = "Apenas números";
	}
	else {
		var imc = peso/(altura*altura);
		document.formImc.imc.value = imc.toFixed(2);
	}
	if (imc < 17 ) {
		document.formImc.resultado.value = "Muita abaixo do peso";
		document.formImc.resultado.style.color = "#DF0101";
	}else if (imc >= 17 && imc < 18.5) {
		document.formImc.resultado.value = "Abaixo do peso";
		document.formImc.resultado.style.color = "#B40431";
	}else if (imc >= 18.5 && imc < 25) {
		document.formImc.resultado.value = "Normal";
		document.formImc.resultado.style.color = "#088A68";
	}else if (imc >= 25 && imc < 30){
		document.formImc.resultado.value = "Acima do peso";
		document.formImc.resultado.style.color = "#FE2E64";
	}else if (imc >= 30 && imc < 35){
		document.formImc.resultado.value = "Obesidade I";
		document.formImc.resultado.style.color = "#DF0101";
	}else if (imc >= 35 && imc < 40){
		document.formImc.resultado.value = "Obesidade II";
		document.formImc.resultado.style.color = "#8A0829";
	}else if (imc > 40){
		document.formImc.resultado.value = "Obesidade III (Mórbida)";
		document.formImc.resultado.style.color = "#2A0A12";
	}
}