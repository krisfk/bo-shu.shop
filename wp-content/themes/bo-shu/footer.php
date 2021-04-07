<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">


    <div class=" pink-orange">
        <div class="container">

            <div class="pt-5 text-light d-inline-block">

                <div>Subscribe now <br> 第一時間按收布薯的最新消息和獨家優惠!</div>


                <div class="subscribe-form-div mt-3">
                    <input type="text" class="float-start m-0 form-text border-0 subscribe-input"
                        placeholder="Email address...">
                    <a href="#" class="subscribe-btn btn">Subscribe</a>
                </div>


                <div>
                    <a href="#">
                        <img class="sns-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/fb-icon.png';?>" alt=""></a>
                    <a href="#">
                        <img class="sns-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/ig-icon.png';?>" alt=""></a>
                    <a href="#">
                        <img class="sns-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/wts-icon.png';?>" alt=""></a>

                </div>

            </div>

            <div class="float-end footer-menu-div mt-5">
                <ul>
                    <li>
                        <a href=""> VIP會員計劃</a>
                    </li>
                    <li> <a href="">FAQ</a></li>
                    <li> <a href="">送貨與退貨</a></li>
                    <li> <a href="">洗滌及保養指引</a></li>
                    <li> <a href="">聯絡我們</a></li>
                    <li> <a href="">關於我們</a></li>
                </ul>

            </div>
        </div>

    </div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>