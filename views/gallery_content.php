
    <!-- gallery part here -->
    <section class="gallery_part section_padding">
        <div class="container">
            <div class="row">
              <?php $images = viewGallery(); ?>
              <?php foreach ($images as $image): ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/gallery_1.png" class="single_gallery_part">
                        <img src="<?= $image->bigImage ?>" alt="<?= $image->id ?>">
                    </a>
                </div>
                    <?php endforeach; ?>
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn_2">Load More images</a>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery part end -->
