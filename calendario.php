<div class="cuerpo">
    <div class="main">
        <div class="lista-seleccion">
            <b><h4>Calendario Tributario</h4></b>
            <br/>
            <ul>
                <?php
                    $db = new Conectar();
                    $db->Conecta(HOST, USER, PASS, DB);
                    $sql="SELECT calendario.IdCalendario, calendario.Nombre, calendario.Url FROM calendario ORDER BY IdCalendario DESC";
                    $db->Consulta($sql);
                    $usuario = new Usuario();
                    while($rsdb=$db->Resultado()){
                        echo '<li>';
                        echo '<div>';
                        if ($usuario->Privilegios($_SESSION['perfil'], 'EliminaCalendario')){
                                echo '<div style="display:table-cell; width:20px;" class="elimina-calendario" cual="'.$rsdb['IdCalendario'].'" ruta="'.$rsdb['Url'].'"><img src="images/delete.png" /></div>';
                        }
                        echo '<div style="display:table-cell;" url="'.$rsdb['Url'].'">'.$rsdb['Nombre'].'</div>';
                        echo '</div>';
                        echo '</li>';                        
                        $actual=$rsdb['Url'];
                    }
                    
                    $db1 = new Conectar();
                    $db1->Conecta(HOST, USER, PASS, DB);
                    $sql1="SELECT calendario.IdCalendario, calendario.Nombre, calendario.Url FROM calendario ORDER BY IdCalendario DESC LIMIT 1";
                    $db1->Consulta($sql1);
                    $rs1=$db1->Resultado();
                    
                    echo '</ul>
                   </div>
                    <div class="calendario">                  
                        <img src="'.$rs1['Url'].'" alt="calendario tributario" id="calendario-activo" width="661" height="595">
                    </div>';
                    $db->Cerrar();
                    $db1->Cerrar();
                ?>
    </div>
</div>

<script>
       $(document).ready(function(){
           $('.lista-seleccion div').click(function(){
               var url = $(this).attr('url');
               var img = $('#calendario-activo');
               img.attr('src',url);
           })
       })
       
       $('.elimina-calendario').click(function(){
          var id = $(this).attr('cual');
          var ruta = $(this).attr('ruta');
        $.ajax({
            type:"post",
            url:"controller/calendario.php",
            data: {'id':id, 'ruta': ruta},
            success: function(response){
                if (response=="eliminado"){
                    alert('El Calendario seleccionado ha sido eliminado de forma exitosa');
                }else{
                    alert('Se presentaron problemas con el proceso, por favor intente nuevamente.');
                }
                window.location="index.php?controller=calendario";
            }
        }) 
       });
       
</script>