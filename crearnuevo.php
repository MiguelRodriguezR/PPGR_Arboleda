<?php

$conexion = mysql_connect("mysql.hostinger.es","u228886804_zata","pODiiefEW0");

if(!$conexion){
die ("No he podido conectar por la siguiente razon: ".mysql_error());
}

mysql_select_db("contactos",$conexion);

if(mysql_query("INSERT INTO contactos ('nombre', 'email', 'mensaje') VALUES ('martha', 'sdasdasdasd', 'asdasfafsdasdas')",$conexion)){
	echo "se ah instertado tabla";
}
else{
	echo "no se ah listado";
}

mysql_close($conexion);

?>