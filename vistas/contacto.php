<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	<article class="contenedorpag">
			<header>
			<img src="../img/ambiensup.png" alt="AMBIENSUP ANALISTAS PROFESIONALES" class="img-fondo">

			<div class="col-md-8 pull-right menu">
				<ul class="nav nav-tabs">
          <p class="icon-cerrar"><i class="fa fa-times" aria-hidden="true"></i></p>
					<li role="presentation"><a href="../index.php">Inicio</a></li>
					<li role="presentation"><a href="nosotros.php">Quienes Somos</a></li>
					<li role="presentation"><a href="servicios.php">Servicios</a></li>
					<li role="presentation" class="active"><a href="contacto.php">Contacto</a></li>
				</ul>
			</div>
      <p class="icon-menu"><i class="fa fa-bars" aria-hidden="true"></i></p>
		</header>

    <a class="go-top" href="#">Subir</a>

		<ul class="breadcrumb text-right submenu">
		  <li><a href="../index.php">Inicio</a> <span class="divider"></span></li>
		  <li class="active">Contacto</li>
		</ul>


		<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Formulario de Contacto</h2>
              <p>Porfavor dejanos tus comentarios a traves de este formulario y nosotros no comunicaremos lo mas pronto posible.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form action="envia.php" method="post" class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre (s)</label>
                      <input type="text" class="form-control" name="nombre" id="exampleInputName2" placeholder="Escribe tu nombre" required/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" name="correo" id="exampleInputEmail2" placeholder="ejemplo@ejemplo.com" required/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputtel">Teléfono</label>
                      <input type="text" class="form-control" name="telefono" id="exampleInputtel" placeholder="Escribe tu Teléfono" required/>
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" name="comentario" placeholder="Escribenos tu mensaje" required/></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Enviar Mensaje</button>
                  </form>

                  <hr>
                    
                </div>
              </div>
            </div>
        </div>
      </section>






		<?php include 'pie.php' ?>
	</article>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>