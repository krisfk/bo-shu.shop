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


        <div class="inner-container">
            FAQs
            <input class="form-control" type="text">


            <ul class="mt-5">
                <li>
                    <a class="heading-a" href="#">
                        <h2 class="light-blue">產品及訂單</h2>
                    </a>
                    <ul>
                        <li><a class="subheading-a" href="#"> 布料剪裁及顏色</a>
                            <div class="content-div">實際布料拼接的順序與圖案分布位置不一樣，所有布料皆為隨機剪裁，每一件製成品將與照片上不完全相同，敬請理解。
                                <br> <br>
                                布料實物顏色與螢幕顯示可能存在細微色差，不接受上述原因之退換貨。
                            </div>
                        </li>

                        <li><a class="subheading-a" href="#"> 製作時間</a>
                            <div class="content-div">
                                現貨產品及布料：將於訂單確認後1－3個工作天內寄出 <br><br>

                                所有個人化訂製產品：本店所有布藝品製作過程(由裁布至車縫)均為人手處理，製作需時，一般製作期為訂單確認後四至五星期，某些產品製作期或較短，詳細製作期以產品介紹頁為準，製作期可能會因應當時訂單的數量有所調整。
                                <br><br>
                                產品完成後會以電郵通知寄出。

                            </div>
                        </li>


                    </ul>
                </li>

            </ul>




        </div>




    </div>




















    </div>


</main><!-- #site-content -->



<script type="text/javascript">
$(function() {



})
</script>
<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();