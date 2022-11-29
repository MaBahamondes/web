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
    <nav class="navbar navbar-expand-md navbar-light sticky-top 
            bg-white navbar-main">

        <div class="container">

            <a class="navbar-brand" href=""><img src="iconos/logo.jpg" alt=60px width=60px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">para preparar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="#">despacho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="#">reseè´–as</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="./index.html#secsuscribete">finalizada</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="./index.html#secayuda">Ayuda</a>
                    </li>
                </ul>



                <form class="d-flex">

                    <li class="nav-item" style="list-style: none; display: flex; align-items: center;">
                        <a href="singup.html" target="blank"><button type="button"
                                class="btn btn-outline-success">Perfil</button></a>
                    </li>
                    <li class="nav-item" style="list-style: none; display: flex; align-items: center;">
                        <a href="./historial/INDEX.html" target="#"><button type="button" class="btn btn-outline-success">Mis ventas</button></a>
                      </li>
                    <a class="nav-link" href="pagina.html" target="blank"><img src="iconos/carrito.png" alt=60px
                            width=60px></a>

                </form>

            </div>
        </div>
    </nav>
            <!--navbar-->


    <div class="container">

        <div class="row mt-5">

            <div style="width: 100%;
        text-align: center;">
                <h2 class="col-12 display-4 text-capitalize mb-3">
                    Agregar Nuevos Productos a la venta
                    
                    <!--CRUD-->
        <container>
                <h3 >Nuevo Producto</h3>
                                    
                </div>
                               
                <form  action="agregarVenta.php"method="POST" >
                    
                    <div>
                         <input type="hidden" name="metodo" value="agregaProducto" />
                        <label for="nombre de producto">Nombre del producto *</label>
                        <input type="text"  id="nombre_producto" name="nombre_producto"  required>
                    
                    
                        <label for="valor">valor del producto</label><br>
                        <input type="number" name="valor_producto" id="valor_producto" placeholder="pesos" required>
                    
                        <br>
                        <label for="rese√±a" class="form-label">informacion del producto *</label>
                        <input type="text" name="resena" id="resena" required>
                    
                         <label for="imagen">Imagen *</label>
                         <input type="file" type="file" id="imagen" name="imagen" required >
                         
                         <label for="imagen">Elija una categoria*</label>
                         <select name="id_categoria" required>
                          <option value="1">ropa y accesorios</option>
                          <option value="2" selected>papeleria</option>
                          <option value="3">joyeria</option>
                          <option value="4">para el hogar</option>
                         </select>
                            </div>
                        <br>
                        <div class="mb-3">
                        <input type="submit" value="Guardar" id="register" class="btn btn-success" name="registrar">
                        
                        </form>    
                        
                        <!--coneccion para llamar los datos-->
                        <?php
                            $conexion=mysqli_connect('localhost', 'cus77900_user_belen', 'OMAR123cito321.', 'cus77900_pyme');
                            
                        ?>
                        
                        <!-------------------------------------------------------------->
                    
            </container href="..css/tablas.css">
            <div>
                <table style="border-collapse: collapse;
                margin: 25px 0;font-family: sans-serif;
                min-width: 450px; 
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
                    <thead> 
                    <tr style="  border-bottom: 1px solid #dddddd; background-color: #980081; color: #ffffff; text-align: middle;">
                        <td style=" padding: 12px 15px;">id_producto</td>
                        <td style=" padding: 12px 15px;">nombre del producto</td>
                        <td style=" padding: 12px 15px;">informacion del producto</td>
                        <td style=" padding: 12px 15px;">imagen</td>
                        <td style=" padding: 12px 15px;">categoria del producto</td>
                    </tr  style="border-bottom: 1px solid #dddddd;">
                    <!--llamara los datos que staran ya en mysql-->
                        <?php
                        $sql="SELECT * from productos";
                        $result=mysqli_query($conexion,$sql);
                        
                        while($mostrar=mysqli_fetch_array($result)){
                        
                        ?>
                        <!---->
                        <td><?php echo $mostrar['id_producto']?></td>
                        <td><?php echo $mostrar['nombre_producto']?></td>
                        <td><?php echo $mostrar['resena_producto']?></td>
                        <td><?php echo $mostrar['imagen']?></td>
                        <td><?php echo $mostrar['id_categoria']?></td>
                        <td><a href='modificar.php?id_producto=".$mostrar['id_producto']."'><button type="button" class="btn btn-sucess">modificar Producto</button></a></td>
                        
                        
                    </thead>
                     <?php
                        }
                     ?>
                </table>
                
            </div>
            
            <a href="eliminarProducto.php"><button type="button" class="btn btn-sucess">Eliminar Producto</button></a>
            <a href='modificarProducto.php?id_producto=".$mostrar['id_producto']."'><button type="button" class="btn btn-sucess">modificar Producto</button></a>
            

</body>

</html>