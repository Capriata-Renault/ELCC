<?php
/*
 * Template Name: contact
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 
 <section data-sr="" id="page-contact">
<img src ="<?php bloginfo('template_directory'); ?>/img/photo-fond.jpg" alt="img 1">


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="x-large text-left">nous contacter</h2>
            </div> <!--col-sm-6-->
            
        </div> <!--row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class=" text-left"><?php the_field('telephone_p_contact'); ?></h3>
                <h4 class=" text-left"><?php the_field('email_p_contact'); ?></h4>
                <h4 class=" text-left"><?php the_field('nom_de_lecole_p_contact'); ?></h4>
                <h4 class=" text-left"><?php the_field('adresse_p_contact'); ?></h4>
          
            </div> <!--col-sm-12-->
            <div class="form-index">
                <?php echo do_shortcode ('[contact-form-7 id="10" title="Formulaire de contact 1"]');?>
            </div> <!--col-sm-6-->
        </div> <!--row-->
    </div> <!--container -->
</section>
 
<?php endwhile;else : ?>
    <p>desolé...</p>
<?php endif; ?>
<!--
Récuperation du footer
 -->
<?php get_footer(); ?>