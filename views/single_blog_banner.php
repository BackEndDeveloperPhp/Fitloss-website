<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb_iner text-center">
                     <div class="breadcrumb_iner_item">
                         <?php if (isset($_GET['id'])): ?>
                       <?php $blogPost = postId($_GET['id']); ?>
                       <?php foreach ($blogPost as $post): ?>
                         <h2><?= $post->heading; ?></h2>
                       <?php endforeach; ?>
                     <?php endif; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- breadcrumb start-->
