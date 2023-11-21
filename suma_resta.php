<?php
        if (isset($_GET['numero1'], $_GET['numero2'], $_GET['operacion'])) {
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operacion = $_GET['operacion'];

            switch ($operacion) {
                case "suma":
                    $resultado = $numero1 + $numero2;
                    break;
                case "resta":
                    $resultado = $numero1 - $numero2;
                    break;
                }
                    ?>