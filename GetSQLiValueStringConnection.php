// -------------------------------------------
// Author: XMedia Software
// Programador: Jesus Alberto Acosta Heredia
//
// Esta funcion fué creada para reemplaza la funcion GetSQLValueString ya que actualmente
// la extension mysql esta obsoleta y siendo eliminado de todos los servidores mas actuales
//
// Version: 1.0
//
//
//  Ejemplo utilizando defined
// -------------------------------
//  GetSQLiValueStringConnection(isset($_POST['bol_variable']) ? "true" : "false", "defined","1","0", $conn)
//  
//  Ejemplo
// -------------------------------
//  GetSQLiValueStringConnection($_POST['variable'], "text", "", "", $conn)
//
// -------------------------------------------

if(!function_exists("GetSQLiValueStringConnection")){
	function GetSQLiValueStringConnection($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "", $connection) 
	{
	  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	
	  $theValue = $connection->real_escape_string($theValue);
	
	  switch ($theType) {
		case "text":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;    
		case "long":
		case "int":
		  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
		  break;
		case "double":
		  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
		  break;
		case "date":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;
		case "defined":
		  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		  break;
	  }
	  return $theValue;
	}
}
