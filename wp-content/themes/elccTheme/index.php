<?php get_header();?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<section id="slider">
    <?php echo do_shortcode('[image-carousel showcaption="true"]'); ?>  
</section><!-- slider -->

<section data-sr="text-left" id="offres"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12 texte-offre hidden-xs">
                <h2 class=" x-large text-center texte-offre">découvrez nos différentes offres adaptées à vos besoins pédagogiques</h2>
            </div> <!--col-sm-12-->
          
        </div> <!--row-->
        <div class="row">    
            <figure class="col-sm-3">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 1">
                <h3>cours enfant</h3>
            </figure>
            <figure class="col-sm-3">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 2">
                <h3>cours adultes</h3>
            </figure>
            <figure class="col-sm-3">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 3">
                <h3>partenariats</h3>
            </figure>
            <figure class="col-sm-3">
                <img src ="<?php bloginfo('template_directory'); ?>/img/astierf.jpg" alt="img 4">
                <h3>formation pro</h3>
            </figure>
        </div><!--row-->
    </div> <!--container -->
</section>

<section data-sr="" id="cours" class="hidden-xs">
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
                <h2 class="x-large text-left">actualités</h2>
            </div> <!--col-sm-12-->
        </div> <!--row-->
        <div class="row">    
            <figure class="col-sm-4">
                <img src ="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="img 4">
                <h3 class="text-left small"><a href="#">Formation à distance : les plus</a></h3>
                <div class="row">
                    <p class="col-sm-3 hidden-xs text-left ">19.09.2015</p>
                    <a class="col-sm-3 hidden-xs btn btn-default" href="#" role="button">formation</a>
                    <a class="col-sm-3 hidden-xs btn btn-default" href="#" role="button">pedagogie</a>
                    <a class="col-sm-3 hidden-xs btn btn-default" href="#" role="button">pedagogie</a>
                    <p class="col-sm-12 hidden-xs text-left"><a href="#">Wh elements are supported within our nav and navbar components.</a></p>                    
                </div>
            </figure>
            <figure class="col-sm-4 text-center ">
                <img src ="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="img 4">
                <h3 class="text-left small"><a href="#">Formation à distance : les plus</a></h3>
                <div class="row">
                    <p class="col-sm-3 hidden-xs text-left ">19.09.2015</p>
                    <a class="col-sm-3 hidden-xs	 btn btn-default" href="#" role="button">formation</a>
                    <a class="col-sm-3 hidden-xs btn btn-default" href="#" role="button">pedagogie</a>
                    <a class="col-sm-3 hidden-xs btn btn-default" href="#" role="button">pedagogie</a>
                    <p class="col-sm-12 hidden-xs text-left"><a href="#">Wh elements are supported within our nav and navbar components.</a></p>
                </div>
            </figure>
           
           
            <figure class="col-sm-3 col-sm-offset-1">
                <a class="twitter-timeline" href="https://twitter.com/Jr_of_Montmatre" data-widget-id="649562363562225664">Tweets de @Jr_of_Montmatre</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
    <p>desolé...</p>
<?php endif; ?>
<?php get_footer(); ?>
