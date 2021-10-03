<?php require_once 'views/partials/header.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/css/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/contact_styles.css">
 <!-- Contact -->
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <!-- Contact Form -->
          <div class="contact_form">
            <div class="contact_title">Contacta con Nosotros</div>

            <div class="contact_form_container">
              <form action="post">
                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                <button id="contact_send_btn" type="button" class="btn btn-divina" style="height: 50px" value="Submit">send message</button>
              </form>
            </div>
          </div>

        </div>

        <div class="col-lg-4">
          <div class="about">
            <div class="about_title">Join Courses</div>
            <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

            <div class="contact_info">
              <ul>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  Guayaquil- Ecuador
                </li>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <i class="fab fa-github"></i>
                  </div>
                  https://github.com/Erick2418
                </li>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <i class="far fa-envelope"></i>
                  </div>Shalom@gmail.com
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>    
    </div>  

  </div>  


	
                    
<?php require_once 'views/partials/footer.php';?>

