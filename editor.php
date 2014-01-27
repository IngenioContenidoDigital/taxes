<div class="cuerpo">
    <div class="main">        
        <link rel="stylesheet" href="tools/tinyeditor/tinyeditor.css">
        <script src="tools/tinyeditor/tiny.editor.packed.js"></script>
        <br>
        <h4>Editor de noticias</h4>
        <br>
        <label style="font-size:14px;font-weight: bold;vertical-align: middle;">Titulo de la Noticia: </label><input type="text" id="titulo" style="width: 655  px;"/>
        <br>
        <br>
        <textarea id="tinyeditor" style="width: 800px; height: 350px"></textarea>
        <div class="control-noticias">
            <div id="agregar"><img src="images/30.png" /></div>
        </div>
        <script>
            var editor = new TINY.editor.edit('editor', {
                id: 'tinyeditor',
                width: 800,
                height: 350,
                cssclass: 'tinyeditor',
                controlclass: 'tinyeditor-control',
                rowclass: 'tinyeditor-header',
                dividerclass: 'tinyeditor-divider',
                controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
                        'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
                        'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
                        'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
                footer: true,
                fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
                xhtml: true,
                cssfile: 'custom.css',
                bodyid: 'editor',
                footerclass: 'tinyeditor-footer',
                toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
                resize: {cssclass: 'resize'}
            });

            $('#agregar').click(function(){
                
                var titulo = $('#titulo').val()
                var texto = $('textarea').val()
                
                $.ajax({
                    type: 'POST',
                    url: 'ajaxnoticia.php',
                    data: {
                        'titulo':titulo,
                        'noticia':texto
                    },
                    success: function(response){
                        alert('la noticia se ha registrado de forma exitosa');
                        window.location="index.php?controller=nueva";
                    }
                })
            })
            
            
            
        </script>
    </div>
</div>
