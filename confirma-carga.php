<?php
$estado=$_GET['estado'];
$archivo=$_GET['archivo'];
$tipo=$_GET['tipo'];
$tamano=$_GET['tamano'];
?>
<div class="cuerpo">
    <div class="main">
        <div class="form-calendario">
            <br/>
            <h4>Carga de Calendarios TAXES CS</h4>
            <br/>
            <?php
            switch($estado){
                case 1:
                    echo '<div>No se ha podido cargar el archivo seleccionado, por favor revise los valores ingresados e intente nuevmente.</div>';
                    break;
                case 2:
                    echo '<div>El archivo solicitado ya existe. No se ha hecho cambios</div>';
                    break;
                case 3:
                    echo '<div>El resultado del proceso de carga fue exitoso</div><br/>';
                    echo '<div><label><b>Nombre:</b> </label>'.$archivo.'</div>';
                    echo '<div><label><b>Tipo:</b> </label>'.$tipo.'</div>';
                    echo '<div><label><b>Tamaño:</b> </label>'.$tamano.'kb </div>';
                    break;
                case 4:
                    echo '<div>El tipo de archivo seleccionado no es válido. Seleccione un archivo válido e intente nuevamente.</div>';
                    break;
            }
            ?>
        </div>
    </div>
</div>