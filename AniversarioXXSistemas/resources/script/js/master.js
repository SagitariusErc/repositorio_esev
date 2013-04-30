     
$(document).ready(function() {
    var page = $('#paginaActual').attr('value');
  // refresh_content(page);
   
}); 

$('.opciones-main').click(function() {      
    var opcion = $(this).attr('id');         
    $('#paginaActual').attr('value',opcion);
    refresh_content(opcion);       
});  

function refresh_content(page){	
    $.ajax({
        type : 'POST',
        url : BASE_URL + 'index.php/home/refresh_content',
        data : "PAGE=" + page,
        success : function(result) {       
        	$('#page-main-ini').removeClass('main-mostrar');
        	$('#page-main-ini').addClass('main-ocultar');
            $("#content-body").html(result);			
        }
    }); 		
} 

