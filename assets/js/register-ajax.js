$(document).ready(function() {
	$(".send").validate({
		rules: {
			// formulario 1
			first_name: { required: true, minlength: 3 },
			last_name : { required: true, minlength: 3 },
			email: { required: true, email: true },
			password: { required: true, minlength: 6 },
			sexo: { required: true }
		},
		messages: {
			first_name: {required: "Campo Requerido", minlength: "El nombre no es válido"},
			last_name: {required: "Campo Requerido", minlength: "El apellido no es válido"},
			email: {required: "Campo Requerido", email: "El correo no es válido"},
			password: {required: "Campo Requerido", minlength: "La contraseña es muy corta"},
			sexo: {required: "Campo Requerido"}
		},
		submitHandler: function() {
			var data = form.serialize();
			var url = form.attr('action');
			send (data, url);
		},
	});
	$(".send").submit(function(e) {
		e.preventDefault();
	});
	function send (data, url) {
		$.post(url, {data}, function(data, textStatus, xhr) {
			console.log("data: " + data);
		});
	}

	$("a[href='#']").click(function(e) {
		e.preventDefault();
	});
});