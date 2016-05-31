<?php

$pas=explode('/',$_SERVER["PHP_SELF"]);

$pasC=count($pas);

$pasA=$pas[$pasC-1];

?>

<nav>
    <div class="logo"><img src="./img/logo.png">
    </div>
        <div class="container-fluid">
	       <div class="row">
		      <div class="col-md-12">
			     <ul class="nav nav-pills">
				    <li class="active">
					   <a href="#">INICIO</a>
				    </li>
				    <li class="active">
					   <a href="#">CÓMO NOS INDENTIFICAMOS</a>
				    </li>
				    <li class="active">
					   <a href="#">POR QUÈ ELEGIRNOS</a>
				    </li>
                    <li class="active">
					   <a href="#">SERVICIOS</a>
				    </li>
                   <li class="active">
					   <a href="#">GALERÍA DE IMÁGENES</a>
				    </li>
                    <li class="active">
					   <a href="#">CONTACTO</a>
				    </li>
                        <ul>
                            <li><a target="blank" href="index.html"><img src="./img/inglaterra.png"></a></li>
                            <li><a target="blank" href="index.html"><img src="./img/espa%C3%B1a.png"></a></li>
                            <li><a target="blank" href="index.html"><img src="./img/francia.png"></a></li>
                            <li><a target="blank" href="index.html"><img src="./img/italia.png"></a></li>
                            <li><a target="blank" href="index.html"><img src="./img/portugal.png"></a></li>
                        </ul>
			     </ul>
		      </div>
	       </div>
        </div>
</nav>