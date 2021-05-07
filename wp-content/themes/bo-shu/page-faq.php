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
                        <li><a class="subheading-a" href="#"> 個人化訂製</a>
                            <div class="content-div">

                                現貨產品不設個人化訂製服務（如綉名），如有需要請選購個人化訂製產品。


                            </div>
                        </li>

                        <li><a class="subheading-a" href="#"> 訂製其他尺寸</a>
                            <div class="content-div">

                                如希望訂製其他尺寸，請<a href="#">聯絡我們</a>



                            </div>
                        </li>
                        <li><a class="subheading-a" href="#"> 修改訂單</a>
                            <div class="content-div">

                                下單前請先確認尺寸、顏色、材質等，所有訂單一經確認，恕不接受更改或退換。



                            </div>
                        </li>

                        <li><a class="subheading-a" href="#"> 禮盒包裝</a>
                            <div class="content-div">

                                所有木口金袋已包括禮盒包裝(如下圖)，其他產品可額外加HKD $10換購 <br>
                                所有禮盒裝不會包括任何價錢或單據，可以直接送禮

                                <img class="mt-3" src="https://bo-shu.shop/wp-content/uploads/2021/04/faq-img-1.jpg"
                                    alt="">

                            </div>
                        </li>


                        <li><a class="subheading-a" href="#"> 付款方式</a>
                            <div class="content-div">

                                本店接受信用卡(VISA/ MasterCard)、Payme、轉數快、銀行轉帳方式付款。 <br>
                                本店以港元作交易貨幣，在網站顯示其他貨幣只作參考用途，一切交易均以港幣價格作準。

                            </div>
                        </li>



                    </ul>
                </li>

            </ul>

            <ul class="mt-5">
                <li>
                    <a class="heading-a" href="#">
                        <h2 class="light-blue">個人化訂製服務
                        </h2>
                    </a>
                    <ul>
                        <li><a class="subheading-a" href="#"> 製作時間</a>
                            <div class="content-div">

                                所有個人化訂製產品：本店所有布藝品製作過程(由裁布至車縫)均為人手處理，製作需時，一般製作期為訂單確認後四至五星期，某些產品製作期或較短，詳細製作期以產品介紹頁為準，製作期可能會因應訂單的數量有所調整。


                            </div>
                        </li>
                        <li><a class="subheading-a" href="#"> 木口金顏色
                            </a>
                            <div class="content-div">

                                訂製木口金袋款可自選木口金顏色 <br>
                                S size 木口金有3色選擇 <br>
                                M／L size 木口金有4色選擇
                                <table class="mt-3">
                                    <tr>
                                        <td>S size 木口金</td>
                                        <td>M／L size 木口金</td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://bo-shu.shop/wp-content/uploads/2021/05/custom-make-img-1.jpg"
                                                alt=""></td>
                                        <td><img src="https://bo-shu.shop/wp-content/uploads/2021/05/custom-make-img-2.jpg"
                                                alt=""></td>
                                    </tr>
                                </table>

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