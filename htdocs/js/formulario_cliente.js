let all_ckechbox =
	document.querySelectorAll(
		'.contenedor_formulario_cliente [type="checkbox"]');

for (var i = 0; i < all_ckechbox.length; i++) {
	all_ckechbox[i].checked = false;
}


let btn_check_inicial =
	document.querySelector(
		".contenedor_formulario_cliente .btn_check_inicial");

let txt_inicial =
	document.querySelector('.contenedor_formulario_cliente [name="inicial"]');


console.log(btn_check_inicial);

btn_check_inicial.addEventListener("change", function(argument) {
	if (btn_check_inicial.checked == false) {
		txt_inicial.style.display = "block";
	} else if (btn_check_inicial.checked == true) {
		txt_inicial.style.display = "none";
		txt_inicial.value = "";
	}
});



let btn_check_apodo =
	document.querySelector(
		".contenedor_formulario_cliente .btn_check_apodo");

let txt_apodo =
	document.querySelector('.contenedor_formulario_cliente [name="apodo"]');


console.log(btn_check_apodo);

btn_check_apodo.addEventListener("change", function(argument) {
	if (btn_check_apodo.checked == false) {
		txt_apodo.style.display = "block";
	} else if (btn_check_apodo.checked == true) {
		txt_apodo.style.display = "none";
		txt_apodo.value = "";
	}
});


let btn_check_correo =
	document.querySelector(
		".contenedor_formulario_cliente .btn_check_correo");

let txt_correo =
	document.querySelector('.contenedor_formulario_cliente [name="email"]');


console.log(btn_check_correo);

btn_check_correo.addEventListener("change", function(argument) {
	if (btn_check_correo.checked == false) {
		txt_correo.style.display = "block";
	} else if (btn_check_correo.checked == true) {
		txt_correo.style.display = "none";
		txt_correo.value = "";
	}
});


let btn_check_ocupacion =
	document.querySelector(
		".contenedor_formulario_cliente .btn_check_ocupacion");

let txt_ocupacion =
	document.querySelector('.contenedor_formulario_cliente [name="ocupacion"]');


console.log(btn_check_ocupacion);

btn_check_ocupacion.addEventListener("change", function(argument) {
	if (btn_check_ocupacion.checked == false) {
		txt_ocupacion.style.display = "block";
	} else if (btn_check_ocupacion.checked == true) {
		txt_ocupacion.style.display = "none";
		txt_ocupacion.value = "";
	}
});