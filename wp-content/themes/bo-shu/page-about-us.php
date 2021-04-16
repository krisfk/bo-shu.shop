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

        <div class="orange-border mt-3 text-center">

            <div class="positive-relative milestone-year-wrapper">
                <div class="orange-bg milestone-year">2018年</div>

            </div>

            2位香港女生一起閒聊著各品牌新推出的袋款，卻發現市面上袋類選擇雖多， <br>
            但卻總有一些細節不能滿足自己要求，突然一個興起便提出一起創辦一個品牌，<br>
            希望可以靠自己製作出真正屬於自己的袋，造就了「布薯」的誕生，<br>
            名字顧名思義取自我們品牌最重要的元素《布》，<br>
            另一字《薯》取自其中一位創辦人的花名，又能形成”食字”為品牌添加點玩味。<br><br>

            沒有任何創業經驗，卻帶著希望與更多人分享我們產品的心，<br>
            創業初期在還沒有拿下第一單訂單已購買了超過100款布款希望讓客人有更多選擇！<br>
            2個女生每天不斷研究討論不同方案，試驗袋型，<br>
            每個袋款都經過我們無數次反覆試驗不同尺寸材料，<br>
            測試無數無數個樣本而誕生，務求為客人帶來最好品質及體驗。

            <div class="text-center mt-3">
                <img class="boshu-logo"
                    src="<?php echo get_template_directory_uri() .'/assets/images/boshu-logo.jpg';?>" alt="">
            </div>


        </div>

        <div class="blue-border mt-5 text-center">

            <div class="positive-relative milestone-year-wrapper">
                <div class="blue-bg milestone-year">2019年</div>

            </div>

            首次與其他品牌合作，與本地動物繪圖手作品牌 adcdream合作推出crossover產品。 <br>
            整個製作過程都十分順利，亦很高興可以與其他品牌交流。

            <div class="text-center mt-3">

                <img class="adc-bag" src="https://bo-shu.shop/wp-content/uploads/2021/04/adc-bag.jpg" alt="">
            </div>


        </div>


        <div class="orange-border mt-5 text-center">

            <div class="positive-relative milestone-year-wrapper">
                <div class="orange-bg milestone-year">2020年</div>

            </div>

            對全世界都是十分艱難的一年。疫情初期，全香港遇上口罩荒， <br>
            「布薯」推出口罩套贈送計劃，希望可以略盡棉力為有需要的香港人暫時解決口罩短決問題，<br>
            一星期內送出超過過百個口罩套，接著推出以近乎成本價售出口罩套，<br>
            短短2個月售出超過1500個，「布薯」2人連月來日以繼夜不停趕工，<br>
            盡力在最短時間內幫助到不同類別人士，當中包括醫院員工，機場人員，殘障人士等等。<br><br>

            2020年3月首次接受電視媒體 - Now TV訪問報道介紹我們的產品。


            <div class="text-center mt-3">

                <img class="now-tv-img" src="https://bo-shu.shop/wp-content/uploads/2021/04/now-tv-1.jpg" alt="">
                <img class="now-tv-img" src="https://bo-shu.shop/wp-content/uploads/2021/04/now-tv-2.jpg" alt="">

            </div>


        </div>




        <div class="blue-border mt-5 text-center">

            <div class="positive-relative milestone-year-wrapper">
                <div class="blue-bg milestone-year">2021年</div>

            </div>

            「布薯」首次參與POP UP期間限定實體快閃店，
            很高興受到URBAN28邀請，參與位於香港尖沙咀K11 Art Mall購物藝術館
            為期3個月的POP UP快閃店。


            <div class="mt-3 mb-3">
                <img class="pop-up-1" src="https://bo-shu.shop/wp-content/uploads/2021/04/pop-up-1.jpg" alt="">
                <img class="pop-up-2" src="https://bo-shu.shop/wp-content/uploads/2021/04/pop-up-2.jpg" alt="">
            </div>
            首次推出自家設計布款，並計劃推出不同類型自家設計產品。

            <div class="mt-3 mb-3">
                <img class="pop-up-3" src="https://bo-shu.shop/wp-content/uploads/2021/04/pop-up-3.jpg" alt="">
            </div>
            期待「布薯」的路可以愈走愈遠。




        </div>











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