
//Modal para crear categorias

$("#registro").click(function(){
	var nombre = $("#name_cat").val();
	var description = $("#description").val();

	var route = "/category/";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{
			name_cat: nombre, 
			description: description
		},
		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			
			$("#msj").html(msj.responseJSON.categorie);
			$("#msj-error").fadeIn();
		}
		
	});
	});
