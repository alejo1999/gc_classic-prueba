
    <form method="post">
        <div class="row">
            <div class="col s4 m3 l2 center">
                <p>
                <?php
                    if($tipousuario->get_pProductos()==1){
                        print('<input type="checkbox" id="permiso1" name="productos" checked />
                        <label for="permiso1">Productos</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso1" name="productos"  />
                        <label for="permiso1">Productos</label>');
                        }
                ?>
                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>
                <?php
                    if($tipousuario->get_pCategorias()==1){
                        print('<input type="checkbox" id="permiso2" name="categorias" checked/>
                        <label for="permiso2">Categorias</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso2" name="categorias"/>
                        <label for="permiso2">Categorias</label>');
                        }
                ?>

                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>

                    <?php
                    if($tipousuario->get_pProveedores()==1){
                        print('<input type="checkbox" id="permiso3"name="proveedores" checked/>
                        <label for="permiso3">Proveedores</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso3"name="proveedores" />
                        <label for="permiso3">Proveedores</label>');
                        }
                    ?>
                
                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>
                    <?php
                    if($tipousuario->get_pVentas() ==1){
                        print('<input type="checkbox" id="permiso4" name="ventas" checked/>
                        <label for="permiso4">Ventas</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso4" name="ventas"/>
                        <label for="permiso4">Ventas</label>');
                        }
                    ?>

                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>
                <?php
                    if($tipousuario->get_pClientes() == 1){
                        print('<input type="checkbox" id="permiso5" name="clientes" checked/>
                        <label for="permiso5">Clientes</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso5" name="clientes"/>
                        <label for="permiso5">Clientes</label>');
                        }
                    ?>
                    
                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>

                        <?php
                    if($tipousuario->get_pAdministradores() ==1){
                        print('<input type="checkbox" id="permiso6" name="administradores" checked/>
                        <label for="permiso6">Administradores</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso6" name="administradores"/>
                        <label for="permiso6">Administradores</label>');
                        }
                    ?>

                    
                </p>
            </div>
            <div class="col s4 m3 l2">
                <p>
                <?php
                    if($tipousuario->get_pEstadistica() ==1){
                        print('<input type="checkbox" id="permiso7" name="estadistica" checked/>
                
                        <label for="permiso7">Estadistica</label>');
                        
                    }else{
                        print('<input type="checkbox" id="permiso7" name="estadistica"/>
                
                        <label for="permiso7">Estadistica</label>');
                        }
                    ?>

                    
                </p>
            </div>
        </div>

    <div class=" col s12 m4 l2 center">
                    <a href="index.php" data-tooltip="Cancelar" class="waves-effect waves-light btn  # ef5350 red aligera-2">Cancelar</a>
                    <button type="submit"  name="ponerpermisos" data-tooltip="Asignar permisos" class=" waves-effect waves-light btn green aligera-2 tooltipped">Aceptar</button>
                </div>
        
    
    </form>
