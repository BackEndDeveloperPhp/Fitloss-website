<!-- <?php var_dump($_SESSION); ?> -->
    <!-- popular cource part here-->
    <section class="popular_cource section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <h2>Our Popular Courses</h2>
                        <?php if (isset($_SESSION['ERROR_MESSAGE'])): ?>
                          <h1><?= $_SESSION['ERROR_MESSAGE']; ?></h1>
                          <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                        <?php endif; ?>
                        <p>As you pour the first glass of your favorite Chianti or Chardonnay and settle into an intimate Friday evening.</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php $courses = viewCourse(); ?>
              <?php foreach ($courses as $course): ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_popular_cource">
                        <img src="<?= $course->bigImage; ?>" alt="<?= $course->heading; ?>">
                        <h3><?= $course->heading; ?><span><?= $course->price; ?></span></h3>
                        <p><?= $course->content; ?></p>
                        <a href="index.php?page=" class="btn_2">Apply Course</a>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- popular cource part end-->
