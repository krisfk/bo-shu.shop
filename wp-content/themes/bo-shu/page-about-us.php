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

        <h2 class="mt-5">
            <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>" alt="">
            關於布薯 <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>"
                alt="">
        </h2>

        <div class="text-center mt-3">「布薯」成立於2018年，由2個香港女生建立的香港本地手作品牌， <br>
            目標令個性化的袋款成為新的主流，改變大眾對倒模式設計袋款的依賴，<br>
            製作出一個只屬於“你”的袋！<br>
            亦可於盛行速食時裝的年代提供一個替代選擇。<br>
            「布薯」所有產品均為限量製作，採用優質布料並將其化身成獨特的手袋。<br><br>

            我們除了提供世界各地的精選布料，更有自家設計的布款圖案，<br>
            所有布藝產品都是香港手工製作和專業訂做。<br><br>

            香港手工製作 ． 獨特 ． 個性化手袋品牌</div>


        <h2 class="mt-5">
            <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>" alt="">
            品牌里程碑 <img class="potato" src="<?php echo get_template_directory_uri() .'/assets/images/potato.png';?>"
                alt="">
        </h2>

        <div class="text-center mt-3">「布薯」成立於2018年，由2個香港女生建立的香港本地手作品牌， <br>
            目標令個性化的袋款成為新的主流，改變大眾對倒模式設計袋款的依賴，<br>
            製作出一個只屬於“你”的袋！<br>
            亦可於盛行速食時裝的年代提供一個替代選擇。<br>
            「布薯」所有產品均為限量製作，採用優質布料並將其化身成獨特的手袋。<br><br>

            我們除了提供世界各地的精選布料，更有自家設計的布款圖案，<br>
            所有布藝產品都是香港手工製作和專業訂做。<br><br>

            香港手工製作 ． 獨特 ． 個性化手袋品牌</div>









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