<!-- about part here-->
<section class="about_part padding_top overflow-hidden">
    <div class="container-fluid p-lg-0">
        <div class="row align-items-center justify-content-end">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="about_text">
                  <?php $about_content = viewAboutContent(); ?>
                  <?php foreach ($about_content as $about): ?>


                    <h2><?= $about->heading; ?></h2>
                    <p><?= $about->content; ?></p>

                    <a href="#" class="btn_1">Browse Services</a>
                </div>

            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="about_img">
                    <img src="<?= $about->bigImage; ?>" alt="<?= $about->heading; ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- about part end-->
