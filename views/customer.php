
    <!-- our feature part start-->
    <section class="client_review padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle text-center">
                        <h2>What Customer’s Say About Us</h2>
                        <p>As you pour the first glass of your favorite Chianti or Chardonnay and settle into an <br> intimate Friday evening.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_iner owl-carousel">
                      <?php $customers = viewCustomer(); ?>
                        <?php foreach ($customers as $customer): ?>

                        <div class="client_review_single">
                            <img src="<?= $customer->bigImage ?>" alt="<?= $customer->username?>">
                            <h4><?= $customer->username ?></h4>
                            <span><?= $customer->skill ?></span>
                            <p><?= $customer->content ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our feature part end-->
