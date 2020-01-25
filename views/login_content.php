<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
  <div class="container">




    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-12">
        <p class="help-block text-danger">
          <?php if (isset($_SESSION['errorLogin'])): ?>
            <?= $_SESSION['errorLogin']; ?>
            <?php unset($_SESSION['errorLogin']); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="login.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email username'" placeholder = 'Enter username'>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control" name="password" id="name" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder = 'Enter your password'>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" name="btnLogin" class="button button-contactForm btn_1">Login</button>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Buttonwood, California.</h3>
            <p>Rosemead, CA 91770</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3>00 (440) 9865 562</h3>
            <p>Mon to Fri 9am to 6pm</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3>support@colorlib.com</h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->
