<!DOCTYPE html>
<html lang='es'>

<head >
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
            <div class="row">
                <div class='col s12 m12 l12 '>

                        <div class="col s12 m4 l4 ">
                            <h4>Productos</h4>
                        </div>
                        
                        <div class="col s12 m6 l6 ">
                            
                                <form>
                                    <div class="input-field">
                                        <i class="material-icons prefix">search</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">buscar</label>
                                    </div>
                                </form>
                            
                        </div>
                        <div class='col s12 m2 l2   '>
                        
                            <!-- boton de agregar nuevos productos-->
                                    
                                    <a class=" espaciado btn-floating btn-large modal-trigger waves-effect waves-light light-blue lighten-1 right " href="#modal1">
                                    <i class="large material-icons">add</i>
                                    </a>
                                    
                                
                        </div>
                
                </div>
            </div>   
                
            

                <!-- ventana modal para agregar nuevos productos-->
                <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4> Producto Nuevo</h4>
                        <div class="col s12 m4 l6  ">




                            <div class="card horizontal col s12 ">
                                    <div class="card-image col s12 m2 l2">
                                        <img class ' ' src="../web/img/productos/playstation.jpg">

                                        <div class="file-field input-field">
                                            <div class=" blue darken-1">

                                                <!--  <input type="file"> 
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"> -->
                                            </div>
                                        </div>
                                    </div>



                                <div class="card-stacked col s12 m4 l4">
                                    <div class="card-content col s12 m4 l6">
                                        <div class="row">
                                            <div class="input-field col  s12 m11    ">
                                                <i class="material-icons prefix">account_box</i>
                                                <input value='' id="last_name" type="text" class="validate">
                                                <label for="last_name">Nombre</label>
                                            </div>
                                            <div class="input-field col s12 m11 ">
                                                <i class="material-icons prefix">view_module</i>
                                                <select>
                                                    <option value="" disabled selected>Escoja una</option>
                                                    <option value="1">Musica</option>
                                                    <option value="2">Compras en linea </option>
                                                    <option value="3">Peliculas</option>
                                                    <option value="4">Aplicaciones</option>
                                                </select>
                                                <label>Categoria</label>
                                            </div>
                                            <div class="input-field col s12 m8 ">
                                                <i class="material-icons prefix">monetization_on</i>
                                                <label for="last_name">Precio</label>
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
                                                    <option value="2">20%</option>
                                                    <option value="3">30%</option>
                                                    <option value="4">40%</option>
                                                    <option value="5">50%</option>
                                                    <option value="6">60%</option>
                                                    <option value="7">70%</option>
                                                    <option value="8">80%</option>
                                                    <option value="9">90%</option>
                                                </select>
                                                <label>Descuento</label>

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

                <!-- ventana modal para Modificar productos-->
                <div id="modal2" class="modal modal-fixed-footer ">
                    <div class="modal-content container">
                        <h4> Modificar producto</h4>


                        <div class="card horizontal col s12 ">
                            <div class="card-image col s12 ">
                                <img class ' ' src="../web/img/productos/playstation.jpg">

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
                                            <input value='Play Store' id="last_name" type="text" class="validate">
                                            <label for="last_name">Nombre</label>
                                        </div>
                                        <div class="input-field col s12 m11 ">
                                            <i class="material-icons prefix">view_module</i>
                                            <select>
                                                <option value="" disabled selected>Aplicaciones</option>
                                                <option value="1">Musica</option>
                                                <option value="2">Compras en linea </option>
                                                <option value="3">Peliculas</option>
                                                <option value="4">Aplicaciones</option>
                                            </select>
                                            <label>Categoria</label>
                                        </div>
                                        <div class="input-field col s12 m8 ">
                                            <i class="material-icons prefix">monetization_on</i>
                                            <label for="last_name">Precio</label>
                                            <input value='$15.00' type="text" class="validate">
                                        </div>

                                        <div class="input-field col s12 m3 ">
                                            <i class="material-icons prefix">view_module</i>
                                            <label for="last_name">Existencias</label>
                                            <input value='25' type="number" class="validate" data-length="10">

                                        </div>

                                        <div class="input-field col s12 m7 ">

                                            <i class="material-icons prefix">money_off</i>
                                            <select>
                                                <option value="" disabled selected>Escoja uno</option>
                                                <option value="2">20%</option>
                                                <option value="3">30%</option>
                                                <option value="4">40%</option>
                                                <option value="5">50%</option>
                                                <option value="6">60%</option>
                                                <option value="7">70%</option>
                                                <option value="8">80%</option>
                                                <option value="9">90%</option>
                                            </select>
                                            <label>Descuento</label>

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

                    <div class="modal-footer col s12 m4 l1 right">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                            <i class=" material-icons">delete</i>
                        </a>
                        <a href="#!" onclick='listo_modificar()'class="modal-action modal-close waves-effect waves-green btn-flat">
                            <i class=" material-icons">check_circle</i>
                        </a>
                    </div>
                </div>
                <!-- fin de ventana modal para Modificar productos-->

            <!--  ventana modal para Eliminar productos-->
            <div id="modal3" class="modal ">
                <div class="modal-content">
                    <h4>Desea Eliminar este producto</h4>
                    <p></p>
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
            <!-- fin de ventana modal para Eliminar productos-->

            <!-- TABLA DE LOS PRODUCTOS-->
            <table class="centered bordered highlight responsive-table">
                <thead>
                    <tr>

                        <th data-field="id" class='right'>Imagen</th>
                        <th data-field="name">Nombre</th>
                        <th data-field="price">Precio</th>
                        <th data-field="id">Cantidad</th>
                        <th data-field="name">Categoria</th>
                        <th data-field="price">Descuento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='right'>
                            <img class='materialboxed ' width="50" src='../web/img/perfil/playstore3.jpg'>
                        </td>
                        <td>Play Store </td>
                        <td>$15.00</td>
                        <td>25</td>
                        <td>Aplicaciones</td>
                        <td>10%</td>
                        <td>
                            <a class='waves-effect waves-dark modal-trigger' href='#modal2'>
                                <i class="material-icons black-text ">create</i>
                            </a>

                            <a id='space' onclick='borrar_producto()' class='waves-effect waves-light ' href="#">
                                <i class="material-icons red-text ">delete</i>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <td class='right'>
                            <img class='materialboxed' width="50" src='../web/img/perfil/netflix.png'>
                        </td>
                        <td>Netflix</td>
                        <td>$50.00</td>
                        <td>10</td>
                        <td>Peliculas</td>
                        <td>5%</td>
                        <td>
                            <a class='waves-effect waves-light modal-trigger' href='#modal2'>
                                <i class="material-icons black-text ">create</i>
                            </a>

                            <a id='space' onclick='borrar_producto()' class='waves-effect waves-light  ' href="#">
                                <i class="material-icons red-text ">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class='right'>
                            <img class='materialboxed' width="50" src='../web/img/productos/playstation.jpg'>
                        </td>
                        <td>Play Station</td>
                        <td>$50.00</td>
                        <td>5</td>
                        <td>Juegos</td>
                        <td>0%</td>
                        <td>
                            <a class='waves-effect waves-light modal-trigger' href='#modal2'>
                                <i class="material-icons black-text ">create</i>
                            </a>

                            <a id='space' onclick='borrar_producto()' class='waves-effect waves-light    ' href="#">
                                <i class="material-icons red-text ">delete</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- FIN DE TABLA DE LOS PRODUCTOS-->
        </div>

        </div>
    </main>

    <footer class='page-footer  cyan lighten-1'>

    </footer>




    <?php
            include('../app/views/scripts.php')
        ?>
</body>

</html>