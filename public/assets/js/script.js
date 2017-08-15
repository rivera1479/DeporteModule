$(document).ready(function(){
	Carga();
 });


function Carga(){
	var tablaDatos = $("#datos");
	var route = "/categorys";

	$("#datos").empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.name_cat+"</td><td>"+value.description+"</td><td><button class='btn btn-primary' value="+value.id+" OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");

		});

	});

}

function Mostrar(btn){
	console.log(btn.value);
	var route = "/category/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#name_cat").val(res.name_cat);
		$("#description").val(res.description);
		$("#id").val(res.id);

	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato1 = $("#name_cat").val();
	var dato2 = $("#description").val();
	var route = "/category/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			name_cat: dato1,
			description: dato2
		},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});

function Eliminar(btn){
	var route = "/category/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}

	});
}

$(document).ready(function() {
    $('.datepicker').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 57) return false;
    });
});

$(document).ready(function(){
        var change = false;
        $('.nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).parent().addClass("active");
                change = true;
            }
        });
        if(!change){
            $('.nav li:first').addClass("active");
        }
    });