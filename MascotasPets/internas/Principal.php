<?php include "./header.php";
 require_once ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
 require_once ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    $miConexion= new class_mysqli();
    $miConexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $sentencia= "SELECT COUNT(*) as count FROM mascotas ";
    $rescatadas=$miConexion->consulta($sentencia);
    $mascotas = mysqli_fetch_assoc($rescatadas);
// consulta mascotas disponibles 
    $sentencia= "SELECT COUNT(*) as count FROM mascotas  WHERE mascotas.estado_mascota=1";
    $disponibles=$miConexion->consulta($sentencia);
    $mascotas_disponibles = mysqli_fetch_assoc($disponibles);

 ?>




<body class="principal">

        <div class="contenedorslider">
                <div >
                    <ul>
                        <li class="caja">
                            <h4>Mascotas rescatadas</h4>
                            <h5><?php echo $mascotas['count'];?></h5>
                        </li>
                        <li class="caja">
                            <h4>mascotas adoptadas</h4>
                            <h5>5</h5>
                        </li>
                        <li class="caja">
                           <h4>Mascotas Disponibles</h4>
                           <h5><?php echo $mascotas_disponibles['count'];?></h5>
                        </li>
                    </ul>
                </div>
                <div class="fondoslider1">
                    <div class="contenedor-principal1">
                        <button role="button" id="izqSlider" class="izqSlider">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <div class="contenedor-carusel1">
                            <div class="carusel1">
                                <div class="mascotaslider">
                                    <img src="../img/wallpaperbetter (1).jpg" alt="">
                                </div>
                                <div class="mascotaslider">
                                    <img src="../img/wallpaperbetter (4).jpg" alt="">
                                </div>
                                <div class="mascotaslider">
                                    <img src="../img/wallpaperbetter (3).jpg" alt="">
                                </div>
 
                                <div class="mascotaslider">
                                    <img src="../img/wallpaperbetter (4).jpg" alt="">
                                </div>
                                
                            </div>
                         </div>
                    <button role="button" class="derSlider" id="derSlider">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                 </div>

            </div>           
               
        </div>
<div class="mascotas-adopcion">
    <div class="contenedor-titulo-controles">
        <h3>mascotas en adopcion</h3>
        <div class="indicadores">
            <button></button>
            <button></button>
        </div>
        </div>
        <div class="contenedor-principal">
            <button role="button" id="izq" class="izq">
                <i class="fa-solid fa-angle-left"></i>
            </button>
            <div class="contenedor-carusel">
                <div class="carusel">
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (1).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (4).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (3).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (1).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (4).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (3).jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                        <a href="mascotas.php"><button  class="boton">mas informacion</button>
                        </a>
                    </div>
                </div>
            </div>
            <button role="button" class="der" id="der">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>

</div>
<script src="../scripts/main.js"></script>
<script src="../scripts/slider.js"></script>
</body>

<?php include "./footer.php";?>
