<?php
$db_host="localhost";
$db_user="u107548975_dlcroci";
$db_password="pepito";
$db_name="u107548975_prospectos";
$db_table_name="tabla1";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$subs_email = utf8_decode($_POST['email']);
$subs_consulta = utf8_decode($_POST['consulta']);
 
$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fail.html');
 
} else {
 
 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Email`,  `Consulta`) VALUES ("' . $subs_name . '", "' . $subs_email . '", "' . $subs_consulta . '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
header('Location: confirma.html');
}
 
mysql_close($db_connection);
 
?>