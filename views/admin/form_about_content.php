<div class="container">
<div class="col-12 mt-5 mb-5">
  <div class="col-12">
    <h2 class="contact-title">About content</h2>
  </div>
  <div class="col-lg-12">
    <form class="form-contact contact_form" action="admin/insert_about.php" method="post" id="contactForm" novalidate="novalidate" enctype='multipart/form-data'>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <input class="form-control" name="heading" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'heading" placeholder = 'Enter your heading'>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <textarea class="form-control" name="content" id="name" type="textarea" rows="5" id="comment"onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your text" placeholder = 'Enter your text'></textarea>
          </div>
        </div>
        <div class="col-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>

        <p class="help-block text-danger">
        <?php if (isset($_SESSION['errorMessage'])): ?>
          <?= $_SESSION['errorMessage']; ?>
          <?php unset($_SESSION['errorMessage']); ?>
        <?php endif; ?>
        </p>
        </div>
      </div>
      <div class="form-group mt-3">
        <button type="submit" name="btnAbout" class="button button-contactForm btn_1">Insert</button>
      </div>
    </form>
</div>
</div>

</div>
</div></div>
