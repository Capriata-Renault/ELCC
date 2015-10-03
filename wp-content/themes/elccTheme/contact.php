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
 
 
 <section data-sr="" id="contact" class="page-contact">
<img src ="<?php bloginfo('template_directory'); ?>/img/photo-fond.jpg" alt="img 1">


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="x-large text-left">nous contacter</h2>
            </div> <!--col-sm-6-->
            <div class="col-sm-6">
               <p class="text-left">n'hésitez pasLorem ipsum dolor sit amet, consectetur adipiscing dolor sit amet, consectetur adipiscing</p>
            </div> <!--col-sm-6-->
        </div> <!--row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class=" text-left">telephone</h3>
                <h4 class=" text-left">contact@contact.com</h4>
                <h4 class=" text-left">Ecole de langue<br><br>et de culture chinoise de Paris<br><br>23 rue des trois freres 75018 Paris</h4>
          
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