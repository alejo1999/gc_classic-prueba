<!DOCTYPE html>
<html lang='es'>
    <head>
    <?php

    include('../app/views/head.php');

    ?>

    </head>
    <body>
        <header>
        
        <?php

        include('../app/views/header.php');

        ?>
                    
                          
        </header>

        <main>
            <div class='container'>
                <div>
                    <!-- boton de agregar nuevos productos-->
                    <a class="btn-floating btn-large modal-trigger waves-effect waves-light light-blue lighten-1 right" href="#modal1"><i class="material-icons">add</i></a>
                   
                    <!-- ventana modal para agregar nuevos productos-->
                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4> Producto Nuevo</h4>
                                <div class="col s12 m2 l4 left ">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Imagen</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col  s12 m2 l4  ">
                                    <div class="row">
                                        <form class='col  s12 m3 l5  right  '>
                                            <div class="row">
                                                <div class="input-field col  s12  ">
                                                    <input id="last_name" type="text" class="validate">
                                                    <label for="last_name">Nombre</label>
                                                </div>
                                                    <div class="input-field col s12">
                                                        <select>
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Categoria</label>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            
                            </div>

                                <div class="modal-footer col s12 m4 l1 right">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class=" material-icons">delete</i></a>
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class=" material-icons">check_circle</i></a>
                                </div>
                        </div>
                    </div>

                        <h3>Categoria</h3>

                        <table class=' highlight responsive-table centered '>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Accion</th> 

                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>peliculas</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space' onclick='borrar_producto()' class='waves-effect waves-light  'href='#'>
                                            <i class="material-icons red-text ">delete</i>
                                            
                                        </a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>musica</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space'onclick='borrar_producto()' class='waves-effect waves-light  'href='#'>
                                            <i class="material-icons red-text ">delete</i>
                                            
                                        </a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>juegos</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space' onclick='borrar_producto()' class='waves-effect waves-light  'href='#'>
                                            <i class="material-icons red-text ">delete</i>
                                            
                                        </a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>compras en linea</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space' onclick='borrar_producto()' class='waves-effect waves-light  'href='#'>
                                            <i class="material-icons red-text ">delete</i>
                                            
                                        </a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>ropa</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space'onclick='borrar_producto()' class='waves-effect waves-light  'href='#'>
                                            <i class="material-icons red-text ">delete</i>
                                            
                                        </a>
                                        
                                    </td>
                                </tr>
                                
                                
                                
                            </tbody>
                        </table>
                        
                </div>

            </div>
            <div class="divider">

            </div>
            <div class="container">
                
            </div>
        </main>

        <footer class='page-footer  cyan lighten-1'>
          
        </footer>

       

        
        <?php
            include('../app/views/scripts.php')
        ?>
    </body>
</html>