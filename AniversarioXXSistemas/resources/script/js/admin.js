     
$(document).ready(function() {
    var page = $('#paginaActual').attr('value');
    refresh_content(page);

    $('.opciones-admin').click(function() {      
        var opcion = $(this).attr('id');         
        $('#paginaActual').attr('value',opcion);
        refresh_content(opcion);       
    });  
}); 

function refresh_content(page){	
    $.ajax({
        type : 'POST',
        url : BASE_URL + 'index.php/administrador/refresh_content',
        data : "PAGE=" + page,
        success : function(result) {            
            $("#content-body").html(result);			
        }
    }); 		
} 

