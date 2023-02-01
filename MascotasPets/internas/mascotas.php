<?php 

include "./header.php";

?>


<body class="principal-mascota">
  
    <div class="mascotas-adopcion">
    <div class="contenedor-titulo-controles">
        <h3>Tu Futura mascota</h3>
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
                                    <li class="modelo-mascota">
                                            <div class=" imagen">

                                                <img src="data:image/jpeg;base64,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" alt="">
                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    < <li class="modelo-mascota">
                                            <div class=" imagen">

                                        <img src="data:image/jpeg;base64,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" alt=""></div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    <li class="modelo-mascota">
                                            <div class=" imagen">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ipVc-8gk1sTCqOLicqneLlkvRnPxTS32Yg&usqp=CAU" alt="">
                                            
                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    <li class="modelo-mascota">
                                            <div class=" imagen">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlYXBnw_5fC0I_YzLxqrhYe3QAGh8mwEC--A&usqp=CAU" alt="">
                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    <li class="modelo-mascota">
                                            <div class=" imagen">

                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLkZ-fxWSQKNa8FS0g-q9NdQv-6_Do0mN66w&usqp=CAU" alt="">
                                        
                                        </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    <li class="modelo-mascota">
                                            <div class=" imagen">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ipVc-8gk1sTCqOLicqneLlkvRnPxTS32Yg&usqp=CAU" alt="">
                                            
                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                    <li class="modelo-mascota">
                                            <div class=" imagen">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlYXBnw_5fC0I_YzLxqrhYe3QAGh8mwEC--A&usqp=CAU" alt="">
                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    
                                    <li class="modelo-mascota">
                                            <div class=" imagen">

                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLkZ-fxWSQKNa8FS0g-q9NdQv-6_Do0mN66w&usqp=CAU" alt="">
                                        
                                        </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>

                                    </li>
                                        <li class="modelo-mascota">
                                            <div class=" imagen">
                                                <img src="data:image/jpeg;base64,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" alt=""></IMG>

                                            </div>
                                            <div class="descripcion">
                                                    <h3>ZEUS</h3>
                                                    <P>Our team was inspired by the seven skills of highly effective programmers created by the TechLead. We wanted to provide our own take on the topic...</P>

                                            </div>
                                            <button> adoptar</button>

                                        </li>


                   
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









                                            
                                        
                                       
                                        
                                       
                                       
                                        
                                        
                                       
        
*/