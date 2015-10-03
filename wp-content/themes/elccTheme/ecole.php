<?php
/*
 * Template Name: ecole
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 
 <div id="page-ecole">
    <img src ="<?php bloginfo('template_directory'); ?>/img/photo-fond.jpg" alt="img 1">
    <div class="container">
        <h1>ecole</div>
    </div>
 
 </div>
 
 
<?php endwhile;else : ?>
    <p>desolé...</p>
<?php endif; ?>
<!--
Récuperation du footer
 -->
<?php get_footer(); ?>