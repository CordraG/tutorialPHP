<?php
// Conectando, seleccionando la base de datos
$mysqlHost = "localhost";
$mySqlUser = "root";
$mySqlPass = "";
$baseDeDatos = "tutorialphp";


$link = mysql_connect($mysqlHost, $mySqlUser, $mySqlPass)
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conectado Exitosamente';
mysql_select_db($baseDeDatos) or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM saludos';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>