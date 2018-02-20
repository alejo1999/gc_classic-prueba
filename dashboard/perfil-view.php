<!DOCTYPE html>
<html lang="es">
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
            <div class="row">

                <h3>vista de Perfil</h3>

                    
                    <div class='col s12 m8 l9'>
                        <form action="">
                        <div class="input-field col s12 l6">
                            <input disabled value='Alejandra Daniela' type="text" id="first_name" class="validate">
                            <label   for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input disabled value='Elias Palacios' type="text" id="last_name" class="validate">
                            <label  for="last_name">Apellido</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input disabled value='2230-2645'type="text" id="first_name" class="validate">
                            <label for="first_name">Telefono</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input disabled value='020764857-3' type="text" id="last_name" class="validate">
                            <label for="last_name">Documento</label>
                        </div>
                        <div class="input-field col s12">
                            <input  disabled value='Daniela_00@gmail.com' type="email" id="email" class="validate false">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                        
                        </form>
                    </div>
                    <div class='col s12 m4 l3 right '>
                        <div class="row right">
                            <div class='col s12 m12 l12 right'>
                                <img src="../web/img/perfil/yo.jpg" width="275" alt="" class="circle responsive-img"/>
                            </div>
                        </div>
                        
                    
                    </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>

    <?php
            include('../app/views/scripts.php')
        ?>
</body>
</html>