
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                      <?php if (!isset($_GET['category'])): ?>


                                <article class="blog_item">
                                  <?php $blog=listPost(); ?>
                                  <?php foreach ($blog as $post): ?>
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?= $post->bigImage; ?>" alt="<?= $post->heading; ?>">
                                        <a href="index.php?page=single_blog&id=<?= $post->id;  ?>" class="blog_item_date">

                                            <p><?=  obradiDatum($post->date); ?></p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="index.php?page=single_blog&id=<?= $post->id;  ?>">
                                            <h2><?= $post->heading; ?></h2>
                                        </a>
                                        <p><?= substr($post->content,0,500)."..."; ?></p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                        </ul>
                                    </div>
                                      <?php endforeach; ?>
                                </article>

                      <?php else: ?>

                              <article class="blog_item">
                                <?php $blog=dohvatiPostoveZaKategoriju($_GET['category']); ?>
                                <?php foreach ($blog as $post): ?>
                                  <div class="blog_item_img">
                                      <img class="card-img rounded-0" src="<?= $post->bigImage; ?>" alt="<?= $post->heading; ?>">
                                      <a href="index.php?page=single_blog&id=<?= $post->idPost;  ?>" class="blog_item_date">

                                          <p><?=  obradiDatum($post->date); ?></p>
                                      </a>
                                  </div>

                                  <div class="blog_details">
                                      <a class="d-inline-block" href="index.php?page=single_blog&id=<?= $post->idPost;  ?>">
                                          <h2><?= $post->heading; ?></h2>
                                      </a>
                                      <p><?= substr($post->content,0,500)."..."; ?></p>
                                      <ul class="blog-info-link">
                                          <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                          <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                      </ul>
                                  </div>
                                    <?php endforeach; ?>
                              </article>

                            <?php endif; ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
