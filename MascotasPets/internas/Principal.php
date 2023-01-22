

<?php include "./header.php";?>
<body class="principal">
        <div class="container">
            <ul class="slider">
                <li id="slider1">
                    <img src="https://www.xtrafondos.com/wallpapers/resized/perro-en-el-pasto-5797.jpg?s=large" alt="">
                </li>
                <li id="slider2">
                    <img src="https://i.pinimg.com/originals/e1/13/84/e11384d64e85deeffaa3c46f24a8534b.png" alt="">
                </li>
                <li id="slider3">
                    <img src="https://www.elcomercio.com/wp-content/uploads/2021/12/perro.png" alt="">
                </li>
                
            </ul>
            <ul class="menu1">
                    <li>
                        <a href="#slider1">1</a>
                    </li>
                    <li>
                        <a href="#slider2">2</a>
                    </li>
                    <li>
                        <a href="#slider3">3</a>
                    </li>
            </ul>
            
        </div>
    <div class="contenItems">   
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
</body>
<?php include "./footer.php";?>
