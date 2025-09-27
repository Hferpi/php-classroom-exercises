<?php
if (isset($_REQUEST['signo'])) {

    echo "Desde el servidor tu signo es: " . $_REQUEST['signo'];
} else {
    echo "No se seleccionó ningún signo.";
}

?>