

<?php
                    //ip, nombre usuario, contrasena usuario, base de datos
    $conexion = new mysqli('localhost', 'cus77900_user_belen', 'OMAR123cito321.', 'cus77900_pyme');


// 
    switch($_POST['metodo']){
    case "agregaProducto":

    $nombre_producto = $_POST["nombre_producto"];
    $valor_producto = $_POST["valor_producto"];
    // es reseña pero lo puse asi para que no hubiera ningun error
    $resena_producto= $_POST["resena_producto"];
    $imagen = $_POST["imagen"];
    $id_categoria= $_POST["id_categoria"];
    
    if ($conexion -> connect_errno) {
  	   echo "Lo sentimos, este sitio web esta experimentando problemas.";
	   echo " Error: Fallo al conectarse a MySQL";
	   echo " Codigo de Error: " . $conexion->connect_errno . "\n";
	   echo "Detalle del Error: " . $conexion->connect_error . "\n";					   exit;
	 }
		//consulta si el producto esta ya registrado para que no se repita
	$consulta_sql = "SELECT * FROM productos de WHERE nombre_producto ='" . $nombre_producto . "' OR imagen = '" . $imagen . "'";

        if (!$resultado_consulta = $conexion->query($consulta_sql)) {
	   echo "Lo sentimos, este sitio web esta experimentando problemas.";
	   echo "Error: La ejecucion de la consulta fallo debido a: \n";
	   echo "Query: " . $consulta_sql . "\n";
	   echo "Errno: " . $conexion->errno . "\n";
	   echo "Error: " . $conexion->error . "\n";
	   exit;
	 }else{
	   if ($resultado_consulta -> num_rows > 0) {
	     echo("<script>alert('Este Producto ya existe! ')</script>");
	     echo("<script>location.href='https://usuario38.talleresmelipilla.cl/evaluacion_3/vistas_usuario/empresa/pyme.php'</script>");
	     
	     //-----------------------------------------------------------------
    
	   }else{
	       	$consulta = "INSERT INTO `productos` (`id_producto`, `nombre_producto`, `valor_producto`, `resena_producto`, `imagen`,`id_categoria`) VALUES (NULL, '" . $nombre_producto . "', '" . $valor_producto . "', '" . $resena_producto . "', '" . $imagen . "', '" . $id_categoria . "')";

	       
	            $sentencia = mysqli_stmt_init($conexion);
                if(!mysqli_stmt_prepare($sentencia, $consulta))
                {
                     echo("<script>alert('fallo en la conexion ')</script>");
                     echo("<script>location.href='https://usuario38.talleresmelipilla.cl/evaluacion_3'</script>");
                }
                else
                
                    mysqli_stmt_execute($sentencia);
    
	   }
	   }
	   $resultado_consulta -> free();
	 $conexion -> close();
    break;
	 }
	
?>

   
?>
