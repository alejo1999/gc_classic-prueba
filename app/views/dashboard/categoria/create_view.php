<h4> Categoria Nueva</h4>
        <div class="row">
            <form method='post' enctype='multipart/form-data' class='col s12 m4 offset-m4 l6 offset-l3'>
                <div class="row">
                    <div class="input-field col s12  ">
                        <input id="nombre" type="text" name='nombre' class="validate" value='<?php print($categoria->getNombre()) ?>' required/>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12  ">
                        <textarea id="descripcion" name='descripcion' data-length="200" class="materialize-textarea" value='<?php print($categoria->getDescripcion()) ?>' required></textarea>
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>
            
    

                <div class=" col s12 m4 l2 right">
                    <a href="index.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
                    <button type='submit'  name='crear' data-tooltip='Crear' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
                </div>
            </form>
        </div>

        
                       