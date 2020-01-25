
    <!-- our feature part start-->
    <section class="our_feature section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <h2>Why You Should Choose Us</h2>
                        <p>As you pour the first glass of your favorite Chianti or Chardonnay and settle into an intimate Friday evening.</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php $choose_us = listChooseUs(); ?>
              <?php foreach ($choose_us as $choose): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature">
                        <img src="<?= $choose->bigImage; ?>" alt="<?= $choose->heading; ?>">
                        <h4><?= $choose->heading; ?></h4>
                        <p><?= $choose->content; ?></p>
                    </div>
                </div>
                                      <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- our feature part end-->
