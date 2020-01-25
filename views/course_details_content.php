    <?php if (isset($_GET['id'])): ?>
      <?php $courses = catchCourseId($_GET['id']); ?>

    <!-- cource details part here -->
    <section class="cource_details section_padding">
        <div class="container">
            <div class="row">
                  <?php foreach ($courses as $course): ?>
                <div class="col-lg-8 col-md-7">
                    <div class="cource_details_content">
                        <div class="single_cource_details">
                            <h4>Overviews</h4>
                            <p><?= $course->overviews; ?></p>
                        </div>
                        <div class="single_cource_details">
                            <h4>Benifits</h4>
                            <p><?= $course->benifits; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-lg-4 col-md-5">
                    <div class="cource_details_sidebar">
                        <div class="single_cource_details_sidebar">
                            <p>Trainer’s Name</p>
                            <span>George Mathews</span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p>Course Fee</p>
                            <span>$230</span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p>Available Seats</p>
                            <span>15</span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p>Schedule</p>
                            <span>Schedule</span>
                        </div>
                        <a href="#" class="btn_1">Enroll the Course</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php endif; ?>
    <!-- cource details part end -->
