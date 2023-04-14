 
<link href="{$g_base_url}\templates/assets/css/contactus.css" rel="stylesheet">


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Contact</h2>
      <p>Need Help? <span>Contact Us</span></p>
    </div>

    <div class="mb-3">
      <iframe  style="border:0; width: 100%; height: 350px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117258.46403048672!2d77.21902838342625!3d23.303891560704596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c67b195af078d%3A0xefa6a6f9c6db88d1!2sSISTec!5e0!3m2!1sen!2sin!4v1681354738834!5m2!1sen!2sin"  frameborder="0" allowfullscreen loading="lazy"></iframe>
    </div><!-- End Google Maps -->
    <div class="row gy-4">
      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-map flex-shrink-0"></i>
          <div>
            <h3>Our Address</h3>
            <p>Gandhinagar, Bhopal</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>cafeteen@gmail.com<</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+91 62647 21665</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-share flex-shrink-0"></i>
          <div>
            <h3>Opening Hours</h3>
            <div><strong>Mon-Sat:</strong> 08AM - 07PM;
              <strong>Sunday:</strong> Closed
            </div>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>

    <form action="contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
      <div class="row">
        <div class="col-xl-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-xl-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit" style="background:red;">Send Message</button></div>
    </form><!--End Contact Form -->

  </div>
</section><!-- End Contact Section -->

