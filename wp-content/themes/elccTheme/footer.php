<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-left">
                <img class="logo-footer" src ="<?php bloginfo('template_directory'); ?>/img/logo-school.jpg" alt="logo ecole">

            </div> 
     
            <div class="col-sm-3 ">
                <h3>Formations chinois</h3>
            </div> 
     
            <div class="col-sm-3">
                <h3>L'école</h3>
            </div> 
     
            <div class="col-sm-3 div-reseaux">
                <h3>Suivez-nous</h3
                <div class="row">
                    <img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux">
                    <img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux">
                    <img class="picto-reseaux-last" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux">
                    
                 </div>
            </div> 
     
        
     
        </div> <!--row-->
    </div> <!--container -->
</section>


<?php wp_footer(); ?>

</body>
</html>
