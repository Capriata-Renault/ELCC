<?php get_header();?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<section id="slider">
    <?php echo do_shortcode('[image-carousel showcaption="false"]'); ?>  
</section><!-- slider -->

<section data-sr="text-left" id="offres"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12 texte-offre">
                <h2 class=" x-large text-center texte-offre">découvrez nos différentes offres adaptées à vos besoins pédagogiques</h2>
            </div> <!--col-sm-12-->
        </div> <!--row-->
        <div class="row">    
            <figure class="col-sm-3 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 1">
                <h3>cours enfant</h3>
            </figure>
            <figure class="col-sm-3 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 2">
                <h3>cours adultes</h3>
            </figure>
            <figure class="col-sm-3 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 3">
                <h3>partenariats</h3>
            </figure>
            <figure class="col-sm-3 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 4">
                <h3>formation pro</h3>
            </figure>
        </div><!--row-->
    </div> <!--container -->
</section>

<section data-sr="" id="cours">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="x-large text-left">cours</h2>
                <p data-sr="" class="small text-center text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula tellus eu dolor semper, non convallis felis molestie. Quisque ipsum erat, sodales sed varius in, vestibulum quis est. Proin elementum libero purus. Morbi ut est quis dolor vestibulum maximus. Duis porta, eros ut aliquam fermentum, velit lacus vestibulum libero, sed iaculis est ligula vel tellus. Fusce semper leo non laoreet sodales. Integer pharetra condimentum tincidunt. Curabitur nisi leo, convallis a convallis nec, malesuada vitae enim.<p>
            </div> <!--col-sm-12-->
        </div> <!--row-->
    </div> <!--container -->
</section>

<section data-sr="" id="actu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="x-large text-left">actu</h2>
            </div> <!--col-sm-12-->
        </div> <!--row-->
        <div class="row">    
            <figure class="col-sm-4 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 4">
                <h3>actu 1</h3>
            </figure>
            <figure class="col-sm-4 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 4">
                <h3>actu 2</h3>
            </figure>
            <figure class="col-sm-4 jerome">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 4">
                <h3>twitter</h3>
            </figure>
        </div><!--row-->
    </div> <!--container -->
</section>

<section data-sr="" id="contact">
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


<!--<script>window.sr = new scrollReveal();</script>  -->
<?php endwhile;else : ?>
    <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>
<?php get_footer(); ?>
