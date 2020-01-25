<!-- breadcrumb start-->
<?php if (isset($_GET['id'])): ?>
  <?php $courses = catchCourseId($_GET['id']); ?>
<section class="breadcrumb breadcrumb_bg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                   <?php foreach ($courses as $course): ?>
                 <div class="breadcrumb_iner text-center">
                     <div class="breadcrumb_iner_item">
                         <h2><?= $course->heading; ?></h2>
                     </div>
                 </div>
                  <?php endforeach; ?>
             </div>
         </div>
     </div>
 </section>
 <?php endif; ?>
 <!-- breadcrumb start-->
