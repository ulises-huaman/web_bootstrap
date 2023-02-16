<?php include("templates/header.php"); ?>

 <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contáctanos</h2>
          <p>Contacta con nosotros e infórmate de nuestros servicios </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localización:</h4>
                <p>Cundinamarca Colombia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>administracionesyregistrosesbocun@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>3173016608</p>
              </div>           

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7950.188323838305!2d-74.10276976768763!3d4.923908371910255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4079ab082882ad%3A0x5a73836e20822fc9!2sESBOCUN%20(Escuela%20de%20bomberos%20de%20Cundinamarca)!5e0!3m2!1ses!2ses!4v1648230803334!5m2!1ses!2ses" width="" height="450" style="border:0; width:100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Tu nombre</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Tu correo</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu e-mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Descripción o título de tu mensaje</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Título de tu mensaje" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje a sido enviado !Gracias¡</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
<?php include("templates/footer.php"); ?>