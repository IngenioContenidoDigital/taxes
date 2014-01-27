<div class="cuerpo">
    <div class="main">
        <div class="form-calendario">                  
            <br>
            <h4>Creación de Calendario Tributario</h4>
            <br>
            <p>Por favor elija el nombre y archivo correspondiente para el calendario que desea publicar. Únicamente los archivos de imágen son válidos.</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="titulo"><b>Titulo del Archivo:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <input type="text" id="titulo" name="titulo" style="width: 260px;"/>
                </div>
                <div>
                    <label for="file"><b>Nombre del Archivo:</b></label>
                    <input type="file" name="file" id="file"><br>
                </div>
                <br>
                <input style="width: 400px;" type="submit" name="submit" value="Cargar el Archivo Seleccionado">
            </form>
        </div>
    </div>
</div>