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


        <div class="row g-0 mt-3">

            <div class="col-8">
                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/banner-temp-img.jpg" alt="">
            </div>

            <div class="col-4 pink-blue ">

                <div class="d-table w-100 h-100">

                    <div class="d-table-cell align-middle">
                        <div class="text-center text-light main-banners-txt">
                            <h2 class="mb-3">訂製產品</h2>
                            厭倦了大眾化或倒模式袋款？ <br>
                            布薯提供個人化產品訂製服務<br>
                            由布款選擇，內外細節<br>
                            都可根據你的個人需要及喜好訂製<br>
                            製作出只屬於你的獨一無二產品
                        </div>

                        <div class="text-center  mt-4">
                            <a class="front-page-btn ml-auto mr-auto">Get inspired</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();