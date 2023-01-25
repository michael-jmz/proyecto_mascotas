<?php include "./header.php";?>


<body>
    
<div class="contenedorslider">
                <div >
                    <ul>
                        <li class="caja">
                            a
                        </li>
                        <li class="caja">
                            a
                        </li>
                        <li class="caja">
                           a 
                        </li>
                    </ul>
                </div>
                <div class="fondoslider1">
                    <div class="contenItems">
                    <div class="fondoslider">  
                        <div class="item" id="unos">
                            <div class="tarjeta">A</div>
                            <div class="flecha">
                                <a href="#tres">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                <a href="#dos">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="item" id="dos">
                            <div class="tarjeta">B</div>
                            <div class="flecha">
                                <a href="#unos">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                <a href="#tres">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="item" id="tres">
                            <div class="tarjeta">c</div>
                            <div class="flecha">
                                <a href="#dos">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                <a href="#unos" >
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        
                    </div>     
                    <div>
                            <a href="#unos">*</a>
                            <a href="#dos">*</a>
                            <a href="#tres">*</a>
                    </div>
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
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (4).jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (3).jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (1).jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (4).jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter (3).jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                    </div>
                    <div class="mascota">
                        <img src="../img/wallpaperbetter.jpg" alt="">
                    </div>
                </div>
            </div>
            <button role="button" class="der" id="der">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>

</div>
<script src="../scripts/main.js"></script>
</body>

<?php include "./footer.php";?>