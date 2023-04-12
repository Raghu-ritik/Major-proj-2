<style>
{literal}
    div.container{
        background-image: url('{$g_base_url}/templates/assets/myimages/contactBG.jpg');
        background-size: cover;
    }
    hr{
        background: white;
    }
    .contact-form{
        background: rgba(0,0,0, .6);
        color: white;
        margin-top: 100px;
        padding: 20px;
        box-shadow: 0px 0px 10px 3px grey;
    }
    .form-cotrol{
        width: 80%;
        padding: 0.4rem;
        opacity: 50%;
        margin-top: 5px;
        border-radius: 5px;
    }
{/literal}
</style>
<div class="container contact-form">
<h1>Contact Form</h1>
<hr>

<div class="row">

<div class="col-md-6">
<address>Gandhinagar, Bhopal</address>
<p>Email:- cafeteen@gmail.com</p>
<p>Phone:- 6264721665</p>
</div>

<div class="col-md-6">

<form>
<div class="row">
<div class="col-md-2"><label for="name">Name     </label></div>
<div class="col-md-10"><input type="text" id="name" class="form-cotrol"></div>

<div class="col-md-2"><label for="email">Email     </label></div>
<div class="col-md-10"><input type="text" name="" id="email" class="form-cotrol"></div>

<div class="col-md-2"><label>Message</label></div>
<div class="col-md-10"><textarea class="form-cotrol" cols="25" rows="5"></textarea></div>
</div>

<div class="form-group">
<button class="btn btn-primary btn-block">Send</button>
</div>
</form>
</div>

</div>

</div>

<link href="{$g_base_url}\templates/assets/css/contactus.css" rel="stylesheet">


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
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
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

