<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body <?php body_class(); ?>>

    <?php
		wp_body_open();
		?>

    <header id="site-header" class="header-footer-group" role="banner">


        <div class="top-bar">
            <div class="row">
                <div class="col g-0 top-bar-section pink-blue"></div>
                <div class="col g-0 top-bar-section pink-orange"></div>
            </div>
        </div>

        <div class="container">


            <a href="#" class="logo-a mt-2 d-inline-block"><img
                    src="<?php echo get_template_directory_uri().'/assets/images/logo.png';?>" alt=""></a>

            <table class="float-end mt-3 e-com-icon-links">
                <tr>
                    <td class="pe-2"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/cart-icon.png';?>" alt="">
                        $0.00
                    </td>
                    <td class="pe-2"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/member-icon.png';?>" alt="">
                        會員登入
                    </td>
                    <td class="pe-2"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/search-icon.png';?>" alt="">
                    </td>

                    <td>lang icon</td>

                </tr>
                <tr>
                    <td colspan="4" class="text-end">Worldwide shipping</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-end">港澳地區滿$500包運</td>
                </tr>

            </table>

            <ul class="menu">
                <li><a href="#">現貨產品</a></li>
                <li><a href="#">訂製產品</a></li>
                <li><a href="#">布款選擇</a></li>
                <li><a href="#">圖片庫</a></li>
                <li><a href="#">最新資訊</a></li>
                <li><a href="<?php echo get_site_url().'/about-us';?>">關於我們</a></li>
                <li><a href="#">VIP會員計劃</a></li>
            </ul>


        </div>

    </header><!-- #site-header -->

    <?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );