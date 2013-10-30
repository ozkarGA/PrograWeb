<table border="1" >
    <tr>
        <th>Delegacion</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Proyecto</th>
    </tr>
    <?php
        $proyectos = simplexml_load_file('prac3.xml');
        
        
        foreach($proyectos as $proyecto):
            
                ?>
                    <tr>
                        <td><?php echo $proyecto->nombre_tec; ?></td>
                        <td><?php echo $proyecto->nmb_categoria; ?></td>
                        <td><?php echo $proyecto->nmb_tipo_proyecto; ?></td>
                        <td><?php echo $proyecto->nmb_proyecto; ?></td>

                    </tr>
                <?php
            
            $tem = trim($proyecto->nmb_proyecto);    
    
        endforeach;
    ?>  
</table>    
