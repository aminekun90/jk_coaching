<?php
// do_action("get_header");
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
    <head>

    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    </head>
<body <?php body_class(); ?>>
    <?php wp_body_open();
?>
