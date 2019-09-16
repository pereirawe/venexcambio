<?php
    $rates = json_decode(file_get_contents('../json/rates.json'));
    krsort($rates);
    foreach ($rates as $rate) {
        print_r($rate);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculador de Cambios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./main/.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>



<body>
    <div class="container">
        <h1>Calculador de Cambios</h1>
        <form action="">
            <table>
                <tr>
                    <th>Tasa interna</th>
                    <td>
                        <input type="number" id="tasa_interna" name="tasa_interna" placeholder="Tasa Interna" value="0.174">
                    </td>
                </tr>
                <tr>
                    <th>Tasa externa</th>
                    <td>
                        <input type="number" id="tasa_externa" name="tasa_externa" placeholder="Tasa Externa" value="0.180">
                    </td>
                </tr>
                <tr>
                    <th>Pesos</th>
                    <td>
                        <input type="number" id="pesos" name="pesos" placeholder="Tasa Pesos" value="50000">
                    </td>
                </tr>
                <tr>
                    <th>Diferencia</th>
                    <td><span id="diferencia_t"></span></td>
                </tr>
                <tr>
                    <th>Cambio Interno</th>
                    <td>Bs. <span id="c_interno"></span></td>
                </tr>
                <tr>
                    <th>Cambio Externo</th>
                    <td>Bs. <span id="c_externo"></span></td>
                </tr>
                <tr>
                    <th>Cambio Operador</th>
                    <td>$ <span id="c_operador"></span></td>
                </tr>
                <tr>
                    <th>Ganancia</th>
                    <td>$ <span id="ganancia"></span></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <th>Cliente</th>
                    <td>
                        <input type="text" id="cliente" name="cliente" placeholder="Nombre y Apellido">
                    </td>
                </tr>
                <tr>
                    <th>Banco</th>
                    <td>
                        <select id="banco" name="banco">
                                <option value="Banco Banesco">Banco Banesco</option>
                                <option value="Banco Venezuela">Banco Venezuela</option>
                                <option value="Banco Mercantil">Banco Mercantil</option>
                                <option value="Banco del Tesoro">Banco del Tesoro</option>
                                <option value="Banco Activo">Banco Activo</option>
                                <option value="100% Banco">100% Banco</option>
                                <option value="Banco Occidental de Descuento">Banco Occidental de Descuento</option>
                              </select>
                    </td>
                </tr>
                <tr>
                    <th>Tipo de Cuenta</th>
                    <td>
                        <select id="t_cuenta" name="t_cuenta">
                                <option value="Cuenta Corriente">Cuenta Corriente</option>
                                <option value="Cuenta Ahorros">Cuenta Ahorros</option>
                              </select>
                    </td>
                </tr>

                <tr>
                    <th>Numero de cuenta</th>
                    <td>
                        <input type="text" id="n_cuenta" name="n_cuenta" placeholder="20 digitos">
                    </td>
                </tr>
                <tr>
                    <th>Titular</th>
                    <td>
                        <input type="text" id="titular" name="titular" placeholder="Nombre y Apellido">
                    </td>
                </tr>
                <tr>
                    <th>Cedula de Identidad</th>
                    <td>
                        <input type="text" id="c_identidad" name="c_identidad" placeholder="">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Guardar</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <script>
        function calc() {
            var diferencia_t = $('#tasa_externa').val() - $('#tasa_interna').val();
            $('#diferencia_t').html(diferencia_t.toFixed(7));

            var c_interno = $('#pesos').val() / $('#tasa_interna').val();
            $('#c_interno').html(c_interno.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

            var c_externo = $('#pesos').val() / $('#tasa_externa').val();
            $('#c_externo').html(c_externo.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

            var c_operador = c_externo * $('#tasa_interna').val();
            $('#c_operador').html(c_operador.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

            var ganancia = $('#pesos').val() - c_operador;
            $('#ganancia').html(ganancia.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
        }

        calc();
        $('table').on('load change paste keyup', function() {
            calc();
        });
    </script>
</body>

</html>