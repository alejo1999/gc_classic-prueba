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
                    <div class="col s12 m2 l5 left ">




                        <div class="card horizontal col s12 ">
                            <div class="card-image col s12 ">
                                <img class ' ' src="../web/img/perfil/yo.jpg">

                                <div class="file-field input-field">
                                    <div class=" blue darken-1">

                                        <!--  <input type="file"> 
                                   </div>
                                   <div class="file-path-wrapper">
                                       <input class="file-path validate" type="text"> -->
                                    </div>
                                </div>
                            </div>



                            <div class="card-stacked col s12 m4">
                                <div class="card-content col s12 ">
                                    <div class="row">
                                        <div class="input-field col  s12 m11    ">
                                            <i class="material-icons prefix">account_box</i>
                                            <input value='' id="last_name" type="text" class="validate">
                                            <label for="last_name">Nombre</label>
                                        </div>
                                        <div class="input-field col  s12 m11    ">
                                            <i class="material-icons prefix">account_box</i>
                                            <input value='' id="last_name" type="text" class="validate">
                                            <label for="last_name">Apellido</label>
                                        </div>
                                        <div class="input-field col  s12 m11    ">
                                            <i class="material-icons prefix">phone</i>
                                            <input value='' id="last_name" type="text" class="validate">
                                            <label for="last_name">Telefono</label>
                                        </div>
                                        <div class="input-field col s12 m8 ">
                                            <i class="material-icons prefix">credit_card</i>
                                            <label for="last_name">Documento</label>
                                            <input value='' type="text" class="validate">
                                        </div>

                                        <div class="input-field col s12 m3 ">
                                            <i class="material-icons prefix">view_module</i>
                                            <label for="last_name">Existencias</label>
                                            <input value='' type="number" class="validate">

                                        </div>

                                        <div class="input-field col s12 m7 ">

                                            <i class="material-icons prefix">money_off</i>
                                            <select>
                                                <option value="" disabled selected>Escoja uno</option>
                                                <option value="2">vendedor</option>
                                                <option value="3">30%</option>
                                                <option value="4">40%</option>
                                                
                                            </select>
                                            <label>tipo usuario</label>

                                        </div>

                                        <div class="input-field col s12 m4 center">
                                            <a class='iconela' href='#'>
                                                <i class='material-icons black-text iconela'>visibility</i>
                                            </a>

                                        </div>


                                        <div>
                                            <div class="input-field col s12 m12 ">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <textarea id="icon_prefix2" class="materialize-textarea" data-length="100"></textarea>
                                                <label for="icon_prefix2">Descripcion</label>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="modal-footer col s12 m4 l1 right">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                        <i class=" material-icons">delete</i>
                    </a>
                    <a href="#!" onclick='listo_Agregar()' class="modal-action modal-close waves-effect waves-green btn-flat">
                        <i class=" material-icons">check_circle</i>
                    </a>
                </div>
            </div>
            <!-- fin de ventana modal para agregar nuevos productos-->


                        <h3>Usuarios</h3>

                        <table class=' highlight responsive-table'>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Documento</th>
                                    <th>Tipo Usuario</th>
                                    <th>Correo</th>
                                    <th>Contraseña</th>

                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td> Alvin</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space'onclick='borrar_producto()'  class='waves-effect waves-light  'href='#'><i class="material-icons black-text ">delete</i></a>
                                    </td>
                                    
                                    

                                </tr>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td> Alvin</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger' href='#modal1'><i class="material-icons black-text ">create</i></a>

                                        <a id='space' onclick='borrar_producto()' class='waves-effect waves-light  'href='#'><i class="material-icons black-text ">delete</i></a>
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