<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
  <div class="container">


    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-12">
        <p class="help-block text-danger">
          <?php if (isset($_SESSION['errorRegister'])): ?>
            <?= $_SESSION['errorRegister']; ?>
            <?php unset($_SESSION['errorRegister']); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="register.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="firstName" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your first name'" placeholder = 'Enter your first name'>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="lastName" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your last name'" placeholder = 'Enter your last name'>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="password" id="name" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder = 'Enter your password'>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="rePassword" id="name" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your repassword'" placeholder = 'Enter your repassword'>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="username" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email username'" placeholder = 'Enter email username'>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Date of Birth</label>
                <input class="form-control" name="dateOfBirth" id="name" type="date" onfocus="this.placeholder = 'Date of Birth'" onblur="this.placeholder = 'Date of Birth'" placeholder = 'Date of Birth'>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" name="btnRegister" class="button button-contactForm btn_1">Register</button>
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
