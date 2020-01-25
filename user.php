<?php session_start();
if (isset($_SESSION['user'])  ) {

require_once "config/connector_db.php";
require_once "views/head.php";
require_once "views/user/header.php";
require_once "models/blog/post.php";
require_once "models/about/about.php";
require_once "models/choose/choose.php";
require_once "models/gallery/gallery.php";
require_once "models/course/course.php";
require_once "models/customer/customer.php";


if (isset($_GET['page'])) {

switch ($_GET['page']) {
  case 'home':
    require_once "views/banner.php";
    require_once "views/popular_course.php";
    require_once "views/shedule_part.php";
    require_once "views/choose_us.php";
    require_once "views/about_home_part.php";
    require_once "views/customer.php";
    require_once "views/member.php";
    break;

    case 'about':
    require_once "views/about_banner.php";
    require_once "views/about_part.php";
    require_once "views/choose_us.php";
    require_once "views/customer.php";
    require_once "views/member.php";
    break;



    case 'post':
    require_once "views/user/user_banner.php";
    require_once "views/user/post.php";
    break;


    case 'courses':
    require_once "views/courses_banner.php";
    require_once "views/our_popular_courses.php";
    require_once "views/choose_us.php";
    break;

    case 'blog':
    require_once "views/blog_banner.php";
    require_once "views/blog.php";
    require_once "views/sidebar.php";
    break;

    case 'single_blog':
    require_once "views/single_blog_banner.php";
    require_once "views/single_post_content_and_sidebar.php";

    break;

    case 'gallery':
    require_once "views/gallery_banner.php";
    require_once "views/gallery_content.php";
    break;

    case 'course_details':
    require_once "views/course_details_banner.php";
    require_once "views/course_details_content.php";
    break;

    case 'course_shedule':
    require_once "views/course_schedule_banner.php";
    require_once "views/course_schedule_content.php";
    require_once "views/member.php";
    break;

    case 'register':
    require_once "views/register_banner.php";
    require_once "views/register_content.php";
    break;

    case 'login':
    require_once "views/login_banner.php";
    require_once "views/login_content.php";
    break;

    case 'admin':
    require_once "views/admin_banner.php";
    require_once "models/user/list_of_users.php";
    require_once "admin/user.php";
    break;



  default:
    require_once "views/error/error_banner.php";
    require_once "views/error/404.php";
    break;
}


}else  {
  header('Location: index.php?page=home');
}

}else {
  header('Location: index.php?page=home');
}
require_once "views/footer.php";
 ?>
