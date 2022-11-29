<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arbustos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://usuario38.talleresmelipilla.cl/evaluacion_3/css/style.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/pyme.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Grape+Nuts&family=IBM+Plex+Sans+Arabic:wght@100&family=Rubik+Microbe&family=Rubik+Wet+Paint&display=swap');
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>

<body class="bg-ligth">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    
    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-white navbar-main">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="iconos/logo.jpg" alt=60px width=60px>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pyme.php">Mis productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.html">Para preparar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="#">Despacho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="#">Rese&ntilde;as</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="./index.html#secsuscribete">Finalizada</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="./index.html#secayuda">Ayuda</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <li class="nav-item" style="list-style: none; display: flex; align-items: center;">
                        <a href="singup.html" target="blank">
                            <button type="button" class="btn btn-perfil">
                                Perfil
                            </button>
                        </a>
                    </li>

                    <li class="nav-item" style="list-style: none; display: flex; align-items: center;">
                        <a href="./historial/INDEX.html" target="#">
                            <button type="button" class="btn btn-perfil">
                                Mis ventas
                            </button>
                        </a>
                    </li>

                    <a class="nav-link" href="pagina.html" target="blank">
                        <img src="iconos/carrito.png" alt=60px width=60px>
                    </a>
                </form>

            </div>
        </div>
    </nav>
    
    <div class="container body">
        <div class="row mt-5">
            <h2 class="col-12 display-4 mb-4 text-center">
                Agregar nuevos productos a la venta
            </h2> 

            <container>             
                <form  action="agregarVenta.php"method="POST" >
                    <div class="row mb-4">
                        <div class="col-12 text-info">
                            <p style="margin: 0px; font-weight:500;">
                                Para registrar el producto nuevo, debe ingresar todos los datos.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 mb-4">
                            <input type="hidden" name="metodo" value="agregaProducto" />

                            <label for="nombre de producto">
                                Nombre del producto
                            </label>
                            <input type="text"  id="nombre_producto" name="nombre_producto"  required>

                        </div>

                        <div class="col-12 col-md-4 mb-4">
                            <label for="valor">
                                Valor del producto
                            </label>
                            <input type="number" name="valor_producto" id="valor_producto" placeholder="pesos" required>
                        </div>
                        
                        <div class="col-12 col-md-4 mb-4">
                            <label for="reseña" class="form-label">
                                Informaci&oacute;n del producto
                            </label>
                            <input type="text" name="resena" id="resena" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-8 mb-4">
                            <label for="imagen">Imagen</label>
                            <input type="file" type="file" id="imagen" name="imagen" required >
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <label for="imagen">Categor&iacute;a del producto</label>
                            <select name="id_categoria" required>
                                <option value="0"> -- Elegir categor&iacute;a -- </option>
                                <option value="1">Ropa y accesorios</option>
                                <option value="2">Papeleria</option>
                                <option value="3">joyeria</option>
                                <option value="4">para el hogar</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-5">
                        <div class="col-md-3"></div>
                        <div class="col-12 col-md-6 mt-5">
                            <input type="submit" value="GUARDAR" id="register" class="btn btn-registrarProducto" name="registrar">
                        </div>
                    </div>                        
                </form>    
                <!--coneccion para llamar los datos-->
                <?php
                    $conexion=mysqli_connect('localhost', 'cus77900_user_belen', 'OMAR123cito321.', 'cus77900_pyme');
                ?> 
                <!-------------------------------------------------------------->
            </container href="..css/tablas.css">
            <hr style="border: 1px solid #86469C;">
            <div class="mt-3 table-responsive">
                <h2 class="col-12 display-4 mb-4 text-center">
                    Productos registrados
                </h2>
                <table style="border-collapse: collapse; font-family: sans-serif; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);" class="table mb-5">
                    <thead> 
                        <tr style="background-color: #ED66B2; color: #ffffff; text-align: middle;">
                            <td> C&oacute;digo </td>
                            <td> Nombre </td>
                            <td> Informaci&oacute;n </td>
                            <td> Imagen </td>
                            <td> Categor&iacute;a </td>
                            <td> Opciones </td>
                        </tr  style="border-bottom: 1px solid #dddddd;">
                        <!--llamara los datos que staran ya en mysql-->
                        <?php
                            /*$sql="SELECT * from productos";
                            $result=mysqli_query($conexion,$sql);
                            
                            while($mostrar=mysqli_fetch_array($result)){ */
                        
                        ?>
                        
                        <td><?php echo $mostrar['id_producto']?></td>
                        <td><?php echo $mostrar['nombre_producto']?></td>
                        <td><?php echo $mostrar['resena_producto']?></td>
                        <td><?php echo $mostrar['imagen']?></td>
                        <td><?php echo $mostrar['id_categoria']?></td> 
                        <td style="display:flex; flex-direction:column;">
                            <a href='modificar.php?id_producto=".$mostrar['id_producto']."'>
                                <button type="button" class="btn btn-modificar">
                                    Modificar 
                                </button>
                            </a> <br/>
                            <a href="eliminarProducto.php">
                                <button type="button" class="btn btn-eliminar">
                                    Eliminar
                                </button>
                            </a>
                        </td>
                    </thead> 
                </table>
            </div>
            
            <!--<a href='modificarProducto.php?id_producto=".$mostrar['id_producto']."'><button type="button" class="btn btn-sucess">modificar Producto</button></a>-->
        </div>
    </div>
</body>

</html>