<script type='text/javascript' src='../web/js/jquery.min.js'></script>
        <script type='text/javascript' src='../web/js/materialize.min.js'></script>
        <script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
        <script type='text/javascript' src='../web/js/main.js'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function borrar_producto(){

                swal({
                        title: "Estas Seguro?",
                        text: "Borrar este producto significa que ya no estara disponible para su venta!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            swal("se ha eliminado satisfactoriamente!", {
                            icon: "success",
                            });
                        } else {
                            swal("Tranquilo no se ha perdido nada!");
                        }
                    });
            }

        
            function listo_modificar(){

                swal({
                        title: "Excelente!",
                        text: "Se Modifico satisfactoriamente!",
                        icon: "success",
                        button: "aceptar",
                    });
            }
            function listo_contraseña(){

                swal({
                        title: "Excelente!",
                        text: "Se ha enviado un codigo a tu correo",
                        icon: "success",
                        button: "aceptar",
                    });
            }
            function listo_Agregar(){

                swal({
                        title: "Excelente!",
                        text: "Se Agrego satisfactoriamente!",
                        icon: "success",
                        button: "aceptar",
                    });
                }
        </script>