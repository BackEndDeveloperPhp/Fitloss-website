
<div class="col-12 mt-5 mb-5">
  <div class="col-12">
    <h2 class="contact-title">Post</h2>
  </div>
  <div class="col-lg-12">
    <form class="form-contact contact_form" action="admin/insert_post.php" method="post" id="contactFormPost" novalidate="novalidate" enctype='multipart/form-data'>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="">Heading</label>
            <input class="form-control" name="heading"  type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'heading" placeholder = 'Enter your heading' id="headingPost">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="">Content</label>
            <textarea class="form-control" name="content"  type="textarea" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your text" placeholder = 'Enter your text' id="contentPost"></textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="">Quotes</label>
            <textarea  class="form-control" name="quotes"  type="text"   rows="3"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'quotes" placeholder = 'Enter your quotes' id="quotesPost"></textarea>
          </div>
        </div>
        <div class="col-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01" id="imagePost">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <input type="hidden" name="idPost" value="" id="idPost">
        <p class="help-block text-danger">
        <?php if (isset($_SESSION['errorMessage'])): ?>
          <?= $_SESSION['errorMessage']; ?>
          <?php unset($_SESSION['errorMessage']); ?>
        <?php elseif (isset($_SESSION['successEditPost'])):  ?>
          <?= $_SESSION['successEditPost']; ?>
          <?php unset($_SESSION['successEditPost']); ?>
        <?php endif; ?>
        </p>
        </div>
      </div>
      <div class="form-group mt-3">
        <button type="submit" name="btnPost" class="button button-contactForm btn_1" id="btnPost">Insert</button>
      </div>
    </form>
</div>
</div>
</div></div>
