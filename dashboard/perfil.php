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
        
        <div class="container">

            <h3>Modificar Perfil</h3>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Apellido</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telefono</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="incorrecto" data-success="correcto">Correo</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">date_range</i>
                            <input type="text" class="datepicker">
                            <label for="email">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">fingerprint</i>
                            <input id="first_name" type="tel" class="validate">
                            <label for="first_name">Documento</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirmar Contraseña</label>
                        </div>
                        <div class="col s12 m6 l6 offset-l2 ">
                            <form action="#">
                                <label>Genero</label>
                                <p>
                                    <input name="group1" type="radio" id="test1" />
                                    <label for="test1">Masculino</label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="test2" />
                                    <label for="test2">Femenino</label>
                                </p>
                            </form>
                        </div>
                        <div class="col s12 m6 l6 offset-l9 ">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
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