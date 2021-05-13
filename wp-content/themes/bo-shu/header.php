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


            <a href="<?php echo get_site_url();?>" class="logo-a mt-2 d-inline-block"><img
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


            <ul class="top-menu">

                <?php

if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
$lang_code =  ICL_LANGUAGE_CODE;
echo 2232;
}

switch ($lang_code)
{
case 'zh-hant':
    $top_menu = $main_menu;
    // $top_menu = wp_get_menu_array('top menu');

    break;
    case 'cn':
        $top_menu =$main_menu;


    break;
        case 'en':
            $top_menu = $main_menu;

    break;
}


foreach ($top_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
    $sub_slugs='';
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_temp_arr=explode(get_site_url(),$sub_url);

        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);

        $sub_slugs.=$sub_slug.' ';
    }
    echo '<li><a class="level-1 '.$sub_slugs.'" href="'.$url.'">'.$title.'</a>';

 
    echo '<ul class="top-menu-submenu">';
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}


?>

                <?php

$langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');
?>
                <li>

                    <div class="lang-div">
                        <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span class="sep">/</span><a
                            href="<?php echo $langs['cn']['url'];?>">簡</a>
                        <span class="sep">/</span><a href="<?php echo $langs['en']['url'];?>">ENGLISH</a>

                    </div>
                </li>

            </ul>


        </div>

    </header><!-- #site-header -->

    <?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );