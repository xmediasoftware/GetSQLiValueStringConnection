# GetSQLiValueStringConnection
Funcion para Mysqli inspirada en GetSQLValueString() de Dreamweaver

-------------------------------------------
Author: XMedia Software
Programador: Jesus Alberto Acosta Heredia

Esta funcion fué creada para reemplaza la funcion GetSQLValueString ya que actualmente
la extension mysql esta obsoleta y siendo eliminado de todos los servidores mas actuales

Version: 1.0

 Ejemplo utilizando defined
-------------------------------
  GetSQLiValueStringConnection(isset($_POST['bol_variable']) ? "true" : "false", "defined","1","0", $conn)
  
 Ejemplo
-------------------------------
 GetSQLiValueStringConnection($_POST['variable'], "text", "", "", $conn)

-------------------------------------------
