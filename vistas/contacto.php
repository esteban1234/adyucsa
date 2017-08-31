<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <header>
    <figure class="logo pull-left">
      <img src="../img/adyucsa.png" class="img-responsive" alt="Adyucsa">
    </figure>
    <p class="pull-right">Desarrollamos en forma completa e integral, <br> manteniendo estándares de calidad en los materiales utilizados.</p>
  </header>

    <nav class="">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>



<section id="ctn_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title_sec">
          <h1>Información de Contacto</h1>
          <h2>Contáctanos ahora y obtén tu primera asesoría.</h2>
        </div>  <br><br>    
      </div>     
      <div class="col-sm-6"> 
        <div id="cnt_form">
          <form id="contact-form" class="contact" name="contact-form" method="POST" action="calculo.php">
            <div class="form-group">
            <input type="text" name="Nombre" class="form-control name-field" required="required" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" name="Email" class="form-control mail-field" required="required" placeholder="Correo">
            </div>
            <div class="form-group">
              <input type="tel" name="Telefono" class="form-control mail-field" required="required" placeholder="Telefono">
            </div>
            <div class="form-group">
              <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
            </div> 
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form> 
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="cnt_info">
          <ul>
            <li><i class="fa fa-street-view"></i><p>C. 26-D No162-A, por C. 23 y C. 25, Col. Chuburna de Hidalgo, Mérida, Yucatán, C.P. 97205</p></li>
            <li><i class="fa fa-envelope"></i><p>info@adyucsa.com</p></li>
            <li><i class="fa fa-phone"></i><p>PENDIENTE</p></li>
            <li><i class="fa fa-clock-o"></i><p>Lunes a Viernes de 9 am a 6 pm.</p></li>
          </ul>
        </div>
      </div>      
    </div>
  </div>
</section>

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5655678782737!2d-89.64126288596!3d21.010044593794824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567411fe5d1ef9%3A0x651ff377a33e9cc9!2sCalle+26%E1%B4%B0+162A%2C+Chuburn%C3%A1+de+Hidalgo%2C+97205+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1504217768923" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>