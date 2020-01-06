<?php get_header();?>

<div id="hero">
    <div class="container d-flex align-items-center h-100">
        <h1>Best deals on tech</h1>
    </div>
</div>

<div class="content">
    <div class="front-section fullwidth">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </div>
    <div class="front-section fullwidth" id="newsletter">
        <?php dynamic_sidebar('newsletter-form');?>
    </div>
</div>
<?php get_footer();?>