function init(){

}

$(document).ready(function() {

});
$(document).on("click", "#acceder", function () {
    var usuario = $('#usuario').val();
    var clave = $('#clave').val();

    if(usuario == '' || clave == ''){
        Swal.fire({
		  icon: 'error',
		  title: 'Error!',
		  text: 'Campos vacios',
		})
    }else{
    	$.post("Controlador/loginC.php?sesion=verdadero",{usuario:usuario,clave:clave},function(data){
    		if(data==1){
    			window.open('http://localhost/aula-virtual/Vistas/modulos/panel.php','_self');
    		}else{
                window.open('http://localhost/aula-virtual/Vistas/modulos/panel.php','_self');
    		}
    	});
    }
});