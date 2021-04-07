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

        <div class="slick-banner-div mt-4"></div>


        <div class="row g-0">

            <div class="col-8">
                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/banner-temp-img.jpg" alt="">
            </div>

            <div class="col-4 pink-blue ju">

                <div class="d-flex">
                    <div class="align-self-center">fdsfs</div>
                </div>
            </div>
        </div>

    </div>


</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();