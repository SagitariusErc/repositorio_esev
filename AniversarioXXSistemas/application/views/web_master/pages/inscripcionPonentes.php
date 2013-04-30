<script type="text/javascript">

jQuery(document).ready(function(){
	   jQuery("#form-inscriptions").validationEngine('attach',{    	 
	    		  autoHidePrompt:true,
	    		  autoHideDelay:2000,
	    		  onValidationComplete:function (form, status){	
	    				 if (status == true) {	

	    					 if($('input:hidden[id="iDduplicate"]').val() == '0'){		    				 	        				
	       					  alert("Se registro correctamente la Persona");										  
	    					  form.validationEngine('detach');
	    					  form.submit(); 			 
	    					 }
	    					 else
	    						 alert("Uds ya se registro anteriormente..!");
		    					  
	        			}  else
	        				alert('Error, Existen Campos Invalidos');	   
	    		       }			
	    			 
	        });		
	});



$(document).ready(function() {
	$("#categoryP").change(function(event) {
		
		var value= $(this).val();
		if(value == 'ES'){
			
		
			$('#university').removeClass('hide');
			$('#codeUni').removeClass('hide');
			$('#university').addClass('show');	
			$('#codeUni').addClass('show');
			if($("#universityS").val() == '8')
			{
				$('#otherU').removeClass('hide');	
				$('#otherU').addClass('show');	
			}
		}	
		else if(value == 'DO')
		{			
			
			$('#codeUni').removeClass('show');
			$('#codeUni').addClass('hide');
			$('#university').removeClass('hide');
			$('#university').addClass('show');	

			if($("#universityS").val() == '8')
			{
				$('#otherU').removeClass('hide');	
				$('#otherU').addClass('show');	
			}
		}
		else if(value == 'OT')
		{		
			$('#otherU').removeClass('show');	
			$('#otherU').addClass('hide');		
			$('#university').removeClass('show');
			$('#university').addClass('hide');
			$('#codeUni').removeClass('show');
			$('#codeUni').addClass('hide');
			
		}
		else
		{
			$('#OUniv').removeClass('show');	
			$('#OUniv').addClass('hide');	
			$('#university').removeClass('show');
			$('#university').addClass('hide');
			$('#codeUni').removeClass('show');
			$('#codeUni').addClass('hide');
			
		}		

	});
});


$(document).ready(function() {
	$("#universityS").change(function(event) {

		var value= $(this).val();

		if(value == '7')
		{
			$('#otherU').removeClass('hide');	
			$('#otherU').addClass('show');	
		}
		else
		{
			$('#otherU').removeClass('show');	
			$('#otherU').addClass('hide');	
		}
	});
	
});

function identifyType(cod){	


	var regex = /^([0-9]{8}|[0-9]{10})+$/;

		
	if(cod.match(regex)){
    	$.ajax({
        	type : 'POST',
        	url : BASE_URL + 'index.php/participant/findCode',
        	data : "code=" + cod,
        	success : function(result) {      
            	if(result != null && result == 1)      {
            		$('input:hidden[id="idEsc"]').val(1);
	            	$("#typeParticipant").html('Ing. Sistemas');
            	}
            	else
            	{
                	$('input:hidden[id="idEsc"]').val(3);
            		 $("#typeParticipant").html('General');
                }			
    	    }
    	}); 		
	}
} 

function validateDuplicate() {

	var code = $('input:text[id="dni"]').val();

	var regex = /^([0-9]{8}|[0-9]{10})+$/;

	
	if(code.match(regex)){
	$.ajax({
    	type : 'POST',
    	url : BASE_URL + 'index.php/participant/duplicate',
    	data : "code=" + code,
    	success : function(result) {      
        	if(result != null && result == 1)      {
        		$('input:hidden[id="iDduplicate"]').val(1);
        	}
        	else
        	{            	
        		$('input:hidden[id="iDduplicate"]').val(0);
            }			
	    }
	}); 		
	}
}

</script>

<div class="Aform-style">

	<form style="margin-left: 15px" id="form-inscriptions" method="POST"
		action="<?php echo base_url().'index.php/participant/index';?>">
		<legend>
			<span class="title-left">Inscripcion:</span>
		</legend>
		<div
			style="background-color: lightGrey; padding: 10px; margin-right: 19px; font-size: 14px; border-radius: 10px;">
			<p align="justify">Realize aqui una previa inscripcion para que pueda
				ingresar a las <strong> ponencias</strong>. Estos datos serviran para que pueda marcar
				su asistencia al momento del ingreso. El pago se realizara al
				momento del ingreso de acuerdo a su categoria</p>
		</div>
		<div style="padding: 8px; color: red; margin-top: 10px;">No olvide que
			el marcado de Asistencia sera mediante su codigoUniversitario o DNI
			atravez de un lector de codigo de barras</div>

		<br /> <span class="title-form" style="margin-left: 139px">Formulario
			de Inscripcion</span>
		<hr / style="margin-bottom: 24px">


		<input type="hidden" name="iDduplicate" id="iDduplicate" value=""> <input
			type="hidden" name="idEsc" id="idEsc" value="3">
		<div id="controls">

			<table>
				<col width="150px">
				<col width="380px">
				<tr>
					<td><img name="user"
						class="img-rounded img-polaroid detalles_pop_up"
						style="cursor: pointer; margin-top: -17px; margin-left: 15px"
						src="<?php echo base_url() . 'resources/images/user.png';
                                ?>"
						width="140" height="124"> <span
						style="color: red; font-weight: bold; margin-left: 26px">Tipo:</span>
						<div id="typeParticipant" style="display: inline-block">General</div>
					</td>
					<td>
						<div class="row-form">
							<div class="label-form">Cod Univ / DNI:</div>
							<input id="dni" name="dni" type="text"
								onblur="identifyType(this.value);validateDuplicate();"
								class="input-medium search-query validate[required,custom[DNI]]"
								placeholder="Ingrese su codigo..."><span class="important">*</span>
						</div>
						<div class="row-form">
							<div class="label-form">Nombre completo:</div>
							<input id="name" name="name" type="text"
								class="input-medium search-query validate[required,custom[onlyLetterSp],maxSize[30]]"><span
								class="important">*</span>
						</div>
						<div class="row-form">
							<div class="label-form">Apellido Paterno:</div>
							<input id="apepat" name="apepat" type="text"
								class="input-medium search-query validate[required,custom[onlyLetterSp],maxSize[30]]"><span
								class="important">*</span>
						</div>
						<div class="row-form">
							<div class="label-form">Apellido Materno:</div>
							<input id="apemat" name="apemat" type="text"
								class="input-medium search-query">
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="row-form">
							<div class="label-form">Sexo:</div>
							<label class="radio" style="display: inline-block"> <input
								type="radio" name="optionsRadios" value="M">Masculino </label>
							&nbsp;&nbsp;&nbsp;&nbsp; <label class="radio"
								style="display: inline-block"> <input type="radio"
								name="optionsRadios" id="" value="F" checked>Femenino</label><span
								class="important">*</span>
						</div>
						<div class="row-form">
							<div class="label-form">e-mail:</div>
							<input id="email" name="email" type="text"
								class="input-large search-query validate[required,custom[email]]"
								placeholder="Ingrese su e-mail..." style="width: 300px"><span
								class="important">*</span>
						</div>
						<div class="row-form">
							<div class="label-form">Cateogria:</div>
							<select style="width: 190px" id="categoryP" name="categoryP"
								class="validate[required]">
								<option value="">Seleccionar...</option>
								<?php foreach($category as $c){
									if($c->idCat!=0){ ?>
								<option value="<?php echo $c->codigo;  ?>">
								<?php echo $c->codigo.' - '.$c->nombre; ?>
								</option>
								<?php } }?>
							</select><span class="important">*</span>
						</div>
						<div class="row-form" id="university">
							<div class="label-form">Universidad:</div>
							<select style="width: 328px" id="universityS" name="universityS"
								class="validate[required]">
								<option value="">Seleccionar...</option>
								<?php foreach($university as $u){
									if($u->idUni!=0){ ?>
								<option value="<?php echo $u->idUni;  ?>">
								<?php echo $u->cod.' - '.$u->universidad; ?>
								</option>
								<?php } }?>
							</select><span class="important">*</span>
						</div>
						<div class="row-form hide" id="otherU">
							<div class="label-form">Otro:</div>
							<input type="text" class="input-large search-query" id="OUniv"
								name="OUniv"
								placeholder="ingrese el nombre de la universidad..."><span
								class="important">*</span>
						</div></td>
				</tr>
			</table>
		</div>


		<div style="margin-top: 35px;">
			<div class="msg-red">
				<span style="color: red; font-weight: bold; font-size: 20px">*</span>
				<span style="color: red; font-size: 13px"> campos obligatorios </span>
			</div>
			<div class="btn-group"
				style="display: inline-block; margin-left: 175px">
				<button class="btn btn-primary" type="submit">
					<i class="icon-user icon-white"></i> Registrar
				</button>
			</div>
		</div>

	</form>
</div>



