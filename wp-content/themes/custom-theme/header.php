<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header>
        <div class="container">
            <div class="row  d-flex align-items-center justify-content-between">
                <div class="col">
                    <a href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="logo" class="img-fluid logo">
                    </a>
                </div>
                <div class="col">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu'
                    )
                );?>
                </div>
            </div>
    </header>   
</body>
</html>