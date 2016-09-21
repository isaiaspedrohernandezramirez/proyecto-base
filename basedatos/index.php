<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script language="JavaScript" type="text/javascript" src="funciones.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
<title>Documento sin título</title>


</head>



<div id="encabezado">
	
<center><h2> Base de Datos </h2> </center>
	
</div>

<div id="contenido">
 
  <center>
  	<form >
    <h2>Nombre Base Datos</h2> 
    <input type="text" id="nombrebase" name="nombrebase" onblur="creabase();">

    
  </form>
  </center>
  <br>

<form name="agregar">
<input type="text" name="txtagregar" id="agregarnum" > 
 <input type="submit" value="Agregar" onclick="agregarno();" id="agregar">


  </form>




  <br><br>
  
  <table>
  	<tr><td><th>No</th></td><td><th>Nombre Tabla</th></td><td><th>Tipo Datos</th></td><tr>
 <tr><td><th>1</th></td>
 	<td><th><input type="text" id="nombretable" name="nombretable"></th></td>
 	<td><th>   <select id="tipodato" name="tipo">
      <option value="nombre">Nombre</option>
      <option value="telefono">Telefono</option>
       </select>
  </th></td>
 	

 	</tr>


 	</tr>
  </table>
  <div id="resultado"></div>


  </div>

  <div id="generacion"> 
  <center><h2>Tipos de Exportacion </h2> </center> 
  <br>
 <input type="radio" />CSV<br>
  <input type="radio" />EXCEL
 <br>
 <input type="submit" value="Generar" id="generate">
  
 </div>

</body>
</html>