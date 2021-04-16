<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">


    <div class="container">


        <ul class="about-us-submenu mt-5">

            <li>
                <a href="#">關於布薯</a>
            </li>
            <li>
                <a href="#">品牌里程碑</a>
            </li>
        </ul>


        <img class="w-100  mt-5" src="https://bo-shu.shop/wp-content/uploads/2021/04/about-us-img-1.jpg" alt="">

        <h2>
            <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>" alt="">
            關於布薯 <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>"
                alt="">
        </h2>









    </div>


</main><!-- #site-content -->



<script type="text/javascript">
$(function() {
    $('.latest-products-div').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });


})
</script>
<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();