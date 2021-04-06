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
</head>

<body <?php body_class(); ?>>

    <?php
		wp_body_open();
		?>

    <header id="site-header" class="header-footer-group" role="banner">


        <div class="top-bar">
            <div class="row">
                <div class="col g-0 top-bar-section top-bar-left-section"></div>
                <div class="col g-0 top-bar-section top-bar-right-section"></div>
            </div>
        </div>

        <div class="container">


            <a href="#" class="logo-a mt-2 d-inline-block"><img
                    src="<?php echo get_template_directory_uri().'/assets/images/logo.png';?>" alt=""></a>

            <table class="float-end mt-2 e-com-icon-links">
                <tr>
                    <td class="pr-3"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/cart-icon.png';?>" alt="">
                        $0.00
                    </td>
                    <td class="pr-3"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/member-icon.png';?>" alt="">
                        會員登入
                    </td>
                    <td class="pr-3"><img class="e-com-icon"
                            src="<?php echo get_template_directory_uri().'/assets/images/search-icon.png';?>" alt="">
                    </td>

                    <td>lang icon</td>

                </tr>
            </table>


        </div>

    </header><!-- #site-header -->

    <?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );