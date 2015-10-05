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
                <a href="#"><img class="logo-footer" src ="<?php bloginfo('template_directory'); ?>/img/logo-school.jpg" alt="logo ecole"></a>
                <h3 class="h3-col-droite text-left">ils nous ont fait confiance</h3>
                <div class="row">
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                </div>
            </div> 
            <div class="col-sm-3 text-left footer-form-chin">
                <h3>Formations chinois</h3>
                <p><a href="#">Cours enfant</a></p>
                <p><a href="#">Cours adulte</a></p>
                <p><a href="#">Cours pour voyageur</a></p>
                <p><a href="#">Cours individuel</a></p>
                <p><a href="#">Cours à domicile</a></p>
                <p><a href="#">Formation en entreprise</a></p>
                <p><a href="#">Formation à la carte</a></p>
                <p><a href="#">Formation à la carte</a></p>
                <p><a href="#">Etudier en chine</a></p>
                <h3>contact</h3>
            </div> 
            <div class="col-sm-3 text-left footer-ecole">
                <h3>L'école</h3>
                <p><a href="#">Présentation</a></p>
                <p><a href="#">Nos enseignants</a></p>
                <p><a href="#">Tarifs</a></p>
                <p><a href="#">Calendrier</a></p>
                <p><a href="#">Recrutement</a></p><br>
                <h3>etablissements<br>educatifs</h3>
                <p><a href="#">Intégration classe de chinois</a></p>
                <p><a href="#">Echanges entre établissements</a></p>
             </div> 
            <div class="col-sm-3 div-reseaux">
                <h3>Suivez-nous</h3>
                <div class="row">
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/img-footer.jpg" alt="reseaux sociaux"></a>
                </div><br><br>
                <h3>Liens partenaires</h3>
                <div class="row">
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                    <a href="#"><img class="picto-reseaux" src ="<?php bloginfo('template_directory'); ?>/img/logo-footer.jpg" alt="reseaux sociaux"></a>
                 </div>
            </div> 
        </div> <!--row-->
        <div> <!--row-->
            <div class="col-sm-12 mentions"><p class="p-mentions">Ecole de langue et de culture chinoise de Paris @2015 - tous droit réservés - <a href="http://localhost/elcc/mentions-legales">mentions légales</a></p></div>
        </div> <!--row-->
    </div> <!--container -->
</section>

<?php wp_footer(); ?>

</body>
</html>
