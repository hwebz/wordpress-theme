<?php

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <h1>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="Logo" />
            </a>
        </h1>
    </header>