<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/style/css/style.css"/>

<script type="text/javascript">   
    pintar_dia();    
    
    $('.detalles_pop_up').click(function(){
        var id= $(this).attr('name');
        var foto = $('#'+id).find('img').attr('src');   
        var ponente = $('#'+id).find('.nombrePon').text();  
        var tema = $('#'+id).find('.tema').text();  
        var desc_tema = $('#'+id).find('.detalles').attr('title');
        var resenia = $('#'+id).find('.detalles').attr('value');
        
        var elemento = $('#element_to_pop_up');
        elemento.find('img').attr('src',foto);
        elemento.find('h4').text(ponente);
        elemento.find('legend').html(tema + ' - <span style="color: #006dcc">' + $('#'+id).attr('title') + '</span>');  
        elemento.find('.resenia').text(resenia); 
        elemento.find('.desc-tema').text(desc_tema); 
        
        $('#element_to_pop_up').bPopup()
    });
    
    function pintar_dia(){	
        $('.label').each(function() {            
            var diaSemana = $(this).text();  
           
            switch(diaSemana){
                case 'Lunes':             
                    $(this).addClass('label-success');
                    break;
                case 'Martes':
                    $(this).addClass('label-important');
                    break;
                case 'Miercoles':
                    $(this).addClass('label-warning');
                    break;
            }			
        });
    }
</script>

<style type="text/css">
    #element_to_pop_up { 
        background-color:#fff;
        border-radius:15px;
        color:#000;
        display:none; 
        padding:20px;
        min-width:400px;
        min-height: 180px;
    }    
</style>

<div id="element_to_pop_up" class="span9">
    <span class="aqua-avatar">
        <legend>          
        </legend>
        <div class="row">
            <div class="span3">
                <h4></h4>
                <img class="img-rounded img-polaroid detalles_pop_up" src="" width="180" height="180" style="padding-bottom: 20px">

                <div class="resenia">

                </div>                 
            </div>
            <div class="span5 desc-tema" style="height: 150px">

            </div>
        </div>
    </span>
</div>

<div class="Aform-style"  style="width: 580px;">
    <form style="margin-left: 5px; margin-right: 5px">
        

        <legend>
            <span class="title-left">Nuestros:</span> 
            <span class="title-form">Talleres </span>
        </legend>

        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="icon-user"></i><span class="break"></span>Talleres</h2>                    
            </div>
            <div class="box-content">
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;" colspan="1" rowspan="1" > # </th>
                                <th style="width: 200px" colspan="1" rowspan="1"> Ponente </th>
                                <th style="width: 150px;" colspan="1" rowspan="1" >Tema         </th>
                                <th style="width: 200px;" colspan="1" rowspan="1" >Detalles</th>                                
                            </tr>
                        </thead>   

                        <tbody role="alert">
                            <?php
                            $i = 1;
                            foreach ($talleres as $row) {
                                ?>
                                <tr class="odd" id="<?php echo $row['idPon']; ?>" title="Taller">
                            <input type="hidden" class="detalles" title="<?php echo $row['desc_tema']; ?>" value="<?php echo $row['resenia']; ?>" />
                            <td class=" sorting_1"> <?php echo $i; ?> </td>
                            <td class="center"><span class="aqua-avatar">

                                    <img name="<?php echo $row['idPon']; ?>" class="img-rounded img-polaroid detalles_pop_up" style="cursor: pointer" src="<?php
                            $foto = empty($row['urlFoto']) ? 'ponentes/user.png' : $row['urlFoto'];
                            echo base_url() . 'resources/images/' . $foto;
                                ?>" width="124" height="124">
                                </span>
                                <span class="nombrePon"><?php echo $row['grado'] . ' ' . $row['ponente']; ?></span>
                            </td>
                            <td class="center tema"><?php echo $row['tema']; ?></td>
                            <td class="center">
                                <span style="color: #006dcc">Fecha:</span>
                                <p><?php
                                     $dias = array(1 => 'Lunes', 2 => 'Martes', 3 => 'Miercoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sabado', 7 => 'Domingo');
                                     $fecha = strtotime($row['fecha']);
                                     $dia = $dias[date('N', $fecha)];
                                     $fecha = date('d/m/Y', $fecha);
                                     echo $fecha;
                                ?>   

                                    <span class="label"><?php echo $dia; ?></span> </p>                                  
                                <span style="color: #006dcc">Horario:</span>
                                <p><?php echo $row['hora_ini'] . ' - ' . $row['hora_fin']; ?></p>
                                <span style="color: #006dcc">Institución/Empresa:</span><br>
                                <?php echo $row['empresa']; ?> <br>
                                <a href="<?php echo $row['web']; ?>"><?php echo $row['web']; ?></a>                                    
                            </td>   
                            </tr>                            
                            <?php
                            $i++;
                        }
                        ?>

                        </tbody>
                    </table>
                </div>            
            </div>
        </div><!--/span-->
    </form>
</div>


