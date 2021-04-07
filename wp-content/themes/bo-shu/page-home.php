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


        <div class="row g-0 mt-5">

            <div class="col-8">
                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/banner-temp-img.jpg" alt="">
            </div>

            <div class="col-4 pink-blue ">

                <div class="d-table w-100 h-100">

                    <div class="d-table-cell align-middle">
                        <div class="text-center text-light main-banners-txt">
                            <h2 class="mb-4">訂製產品</h2>
                            厭倦了大眾化或倒模式袋款？ <br>
                            布薯提供個人化產品訂製服務<br>
                            由布款選擇，內外細節<br>
                            都可根據你的個人需要及喜好訂製<br>
                            製作出只屬於你的獨一無二產品
                        </div>

                        <div class="text-center  mt-5">
                            <a class="front-page-btn ml-auto mr-auto">Get inspired</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row g-0 mt-5">

            <div class="col-4 pink-orange">

                <div class="d-table w-100 h-100">

                    <div class="d-table-cell align-middle">
                        <div class="text-center text-light main-banners-txt">
                            <h2 class="mb-4">現貨產品</h2>
                            想馬上得到心頭好 <br>
                            布薯精選現貨產品令你不用再苦惱!<br>
                            所有現貨產品均為限量製作
                        </div>

                        <div class="text-center  mt-5">
                            <a class="front-page-btn ml-auto mr-auto">Explore</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-8">
                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/banner-temp-img.jpg" alt="">
            </div>


        </div>

        <div class="row g-0 mt-5">

            <div class="col-8">
                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/banner-temp-img.jpg" alt="">
            </div>

            <div class="col-4 pink-blue ">

                <div class="d-table w-100 h-100">

                    <div class="d-table-cell align-middle">
                        <div class="text-center text-light main-banners-txt">
                            <h2 class="mb-4">布料售賣</h2>
                            為你搜羅世界各地精選布款 <br>
                            Marimekko<br>
                            SOU SOU<br>
                            Echino<br>
                            及大量日本布款
                        </div>

                        <div class="text-center  mt-5">
                            <a class="front-page-btn ml-auto mr-auto">Explore</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5 g-0">

            <div class="col g-0">
                <div class="text-center main-banners-txt mb-3">Marimekko collection</div>

                <div class="position-relative">
                    <div class="position-absolute w-100 h-100">
                        <div class="position-absolute bottom-0 w-100 text-center">
                            <a href="#" class="front-page-btn">Learn more</a>
                        </div>
                    </div>

                    <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/photo5.jpg" alt="">
                </div>

            </div>
            <div class="col  g-0">
                <div class="text-center main-banners-txt mb-3">Home collection</div>

                <img class="w-100" src="https://bo-shu.shop/wp-content/uploads/2021/04/photo6.jpg" alt="">
            </div>
        </div>

        <h3 class="home-color-heading pink-orange text-light mt-5">Latest products</h3>
        <div class="latest-products-div">
            fdsa
        </div>

        <h3 class="home-color-heading pink-blue text-light mt-5">Lastest news</h3>
        <div class="latest-news-div">
            <ul class="mt-3">
                <li><a href="#">Multi-function pouch 使用介紹</a></li>
                <li><a href="#">木口金袋選用手冊</a></li>
                <li><a href="#">Marimekko 懶人包</a></li>
            </ul>


        </div>



    </div>


</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();