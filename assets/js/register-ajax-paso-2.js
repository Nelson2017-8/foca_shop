$(document).ready(function() {
	$(".send").validate({
		rules: {
			// formulario 2
			phone: { required: true, minlength: 3 },
			address_1 : { required: true},
			city : { required: true},
			stacte : { required: true},
			zip : { required: true}
		},
		messages: {
			phone: { required: "Campo Requerido", minlength: "El nombre no es válido" },
			address_1 : { required: "Campo Requerido"},
			city : { required: "Campo Requerido"},
			stacte : { required: "Campo Requerido"},
			zip : { required: "Campo Requerido"}
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