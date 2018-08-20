
<?php

require_once("../../app/models/tipousuario.class.php");
try{
    //se toma el id seleccionado
    if(isset($_GET['id'])){
        //se manda a llamar al modelo y se inicializa
        $tipousuario = new Tipousuario;
        if($tipousuario->setId($_GET['id'])){
            if($tipousuario->select_tipousuarios_e()){
                $hola=$tipousuario->getId();
                echo("$hola");
                
                if(isset($_POST['ponerpermisos'])){

                    if(isset($_POST['productos'])){ //(isset($_POST['usuarios']))? $tipousuario->set_usuarios(1) : $tipousuario->set_usuarios(0);
                        $tipousuario->set_pProductos(1);
                    } else{
                        $tipousuario->set_pProductos(0);
                    }

                    if(isset($_POST['categorias'])){ 
                        $tipousuario->set_pCategorias(1);
                    } else{
                        $tipousuario->set_pCategorias(0);
                    }
                    
                    if(isset($_POST['proveedores'])){ 
                        $tipousuario->set_pProveedores(1);
                    } else{
                        $tipousuario->set_pProveedores(0);
                    }

                    if(isset($_POST['ventas'])){ 
                        $tipousuario->set_pVentas(1);
                    } else{
                        $tipousuario->set_pVentas(0);
                    }

                    if(isset($_POST['clientes'])){ 
                        $tipousuario->set_pClientes(1);
                    } else{
                        $tipousuario->set_pClientes(0);
                    }

                    if(isset($_POST['administradores'])){ 
                        $tipousuario->set_pAdministradores(1);
                    } else{
                        $tipousuario->set_pAdministradores(0);
                    }

                    if(isset($_POST['estadistica'])){ 
                        $tipousuario->set_pEstadistica(1);
                    } else{
                        $tipousuario->set_pEstadistica(0);
                    }

                    if($tipousuario->modificar_permiso()){
                        Page::showMessage(1, "Permisos asignados", "index.php");
                        //mensajes de error
                    }else{
                        Page::showMessage(1, "Permisos asignados", "index.php");
                    }
                }
                
            }else{
                Page::showMessage(1, "No existen permisos disponibles", null);
            }
        }
    }

}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
//referencia a la vista
require_once("../../app/views/dashboard/permisos/update_view.php");
?>