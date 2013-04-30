<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/style/css/style.css"/>

<div class="Aform-style"  style="width: 580px;">
    <form style="margin-left: 5px; margin-right: 5px">
        <legend>
            <span class="title-left">Actividad:</span> <span
                class="title-form">Concurso de Base de Datos </span>
        </legend>

        <div class="box">
            <div class="box-header" data-original-title="">
                <h2><i class="icon-user"></i><span class="break"></span>Participantes</h2>                    
            </div>
            <div class="box-content">
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;" colspan="1" rowspan="1" > # </th>
                                <th style="width: 200px" colspan="1" rowspan="1"> Participante </th>
                                <th style="width: 500px;" colspan="1" rowspan="1" >Detalles </th>                                                              
                            </tr>
                        </thead>   

                        <tbody role="alert">
                            <?php
                            $i = 1;
                            foreach ($participantes as $row) {
                                ?>
                                <tr class="odd">                            
                                    <td class=" sorting_1"> <?php echo $i; ?> </td>
                                    <td class="center">
                                        <div style="margin-left: 15px">
                                            <span class="aqua-avatar">
                                            <img class="img-rounded img-polaroid" style="cursor: pointer" src="<?php
                            $foto = ($row['sexo']=='F') ? 'mujer.png' : 'varon.png';
                            echo base_url() . 'resources/images/' . $foto;
                                ?>" width="124" height="124" />
                                        </span><br>
                                        <span><?php echo $row['participante'] ?></span>                                            
                                        </div>
                                        
                                    </td>                                    
                                    <td class="center">                                                                
                        <span style="color: #006dcc">Escuela:</span>
                                <p><?php echo $row['escuela']?></p>
                                <span style="color: #006dcc">Ciclo:</span><br>
                                <?php echo $row['ciclo'] ?> <br>                                                             
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


