<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/style/css/style.css"/>

<div class="Aform-style" style="width: 580px;" >
    <form style="margin-left: 5px; margin-right: 5px">
        <legend>
            <span class="title-left">Actividad:</span> <span
                class="title-form">Concurso de Programación </span>
        </legend>

        <div class="box">
            <div class="box-header" data-original-title="">
                <h2><i class="icon-user"></i><span class="break"></span>Equipos<span class="break"></span>Nivel 1</h2>              
            </div>
            <div class="box-content">
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;" colspan="1" rowspan="1" > # </th>
                                <th style="width: 200px" colspan="1" rowspan="1"> Equipo </th>                                
                                <th style="width: 500px;" colspan="1" rowspan="1" >Integrantes</th>                                
                            </tr>
                        </thead>   

                        <tbody role="alert">
                            <?php
                            $i = 1;
                            foreach ($equipoNivel1 as $row) {
                                ?>
                                <tr class="odd">                            
                                    <td class=" sorting_1"> <?php echo $i; ?> </td>
                                    <td class="center">
                                        <div style="margin-left: 15px">
                                            <span class="aqua-avatar">
                                            <img class="img-rounded img-polaroid" style="cursor: pointer" src="<?php
                            $foto = empty($row['urlFoto']) ? 'equipo.png' : $row['urlFoto'];
                            echo base_url() . 'resources/images/' . $foto;
                                ?>" width="124" height="124" />
                                        </span><br>
                                        <span><?php echo $row['nombre'] ?></span>                                            
                                        </div>
                                        
                                    </td>                                    
                                    <td class="center">                                        
                                        <?php                                            
                                         $x=0;
                                        foreach ($detalles_nivel1[$i - 1] as $item) { ?>
                                            <p><?php echo ($x+1).'.- '.$item['participante'] ?></p> 
                                        <?php 
                                        $x++;
                                        } ?>
                                         
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
        
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="icon-user"></i><span class="break"></span>Equipos<span class="break"></span>Nivel 2</h2>              
            </div>
            <div class="box-content">
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;" colspan="1" rowspan="1" > # </th>
                                <th style="width: 200px" colspan="1" rowspan="1"> Equipo </th>                                
                                <th style="width: 500px;" colspan="1" rowspan="1" >Integrantes</th>                                
                            </tr>
                        </thead>   

                        <tbody role="alert">
                            <?php   
                            $i=1;
                            foreach ($equipoNivel2 as $row) {
                                ?>
                                <tr class="odd">                            
                                    <td class=" sorting_1"> <?php echo $i; ?> </td>
                                    <td class="center">
                                        <div style="margin-left: 15px">
                                            <span class="aqua-avatar">
                                            <img class="img-rounded img-polaroid" style="cursor: pointer" src="<?php
                            $foto = empty($row['urlFoto']) ? 'equipo.png' : $row['urlFoto'];
                            echo base_url() . 'resources/images/' . $foto;
                                ?>" width="124" height="124" />
                                        </span><br>
                                        <span><?php echo $row['nombre'] ?></span>                                            
                                        </div>
                                        
                                    </td>                                    
                                    <td class="center">                                        
                                        <?php                                            
                                         $x=0;
                                        foreach ($detalles_nivel2[$i - 1] as $item) { ?>
                                            <p><?php echo ($x+1).'.- '.$item['participante'] ?></p> 
                                        <?php 
                                        $x++;
                                        } ?>
                                         
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


