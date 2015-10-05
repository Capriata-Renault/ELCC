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
    
    <div class="text-titre col-sm-8 col-sm-offset-2 text-center">
        <h1 class="">ecole</h1>
        <h4 class="text-justify  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean augue ipsum, mollis vel libero sed, sollicitudin porta leo. Vestibulum eget rhoncus est, eget gravida lacus. Nulla porta nibh vel blandit consectetur. Sed ac laoreet leo. Duis id facilisis eros, porta dictum quam. In hac habitasse platea dictumst. Suspendisse </h4>
    </div>    
    
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1">Missions</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">Suspendisse luctus urna nec diam tristique commodo. Nulla ligula neque, congue ac lacus vitae, gravida varius sem. Donec volutpat nulla nisl, et dictum lectus aliquet non. Suspendisse tellus velit, interdum ac suscipit non, pellentesque commodo arcu. Quisque maximus mi vitae erat viverra, at cursus lectus egestas. Suspendisse dui mi, fermentum a cursus vel, mattis non massa. Morbi eget auctor purus. Sed non elit tincidunt, varius nulla ut,</li>
              <li class="list-group-item">Suspendisse luctus urna nec diam tristique commodo. Nulla ligula neque, congue ac lacus vitae, gravida varius sem. Donec volutpat nulla nisl, et dictum lectus aliquet non. Suspendisse tellus velit, interdum ac suscipit non, pellentesque commodo arcu. Quisque maximus mi vitae erat viverra, at cursus lectus egestas. Suspendisse dui mi, fermentum a cursus vel, mattis non massa. Morbi eget auctor purus. Sed non elit tincidunt, varius nulla ut,</li>
              <li class="list-group-item">Suspendisse luctus urna nec diam tristique commodo. Nulla ligula neque, congue ac lacus vitae, gravida varius sem. Donec volutpat nulla nisl, et dictum lectus aliquet non. Suspendisse tellus velit, interdum ac suscipit non, pellentesque commodo arcu. Quisque maximus mi vitae erat viverra, at cursus lectus egestas. Suspendisse dui mi, fermentum a cursus vel, mattis non massa. Morbi eget auctor purus. Sed non elit tincidunt, varius nulla ut,</li>
            </ul>
            <div class="panel-footer">Suspendisse luctus urna nec diam tristique commodo. Nulla ligula neque, congue ac lacus vitae, gravida varius sem. Donec volutpat nulla nisl, et dictum lectus aliquet non. Suspendisse tellus velit, interdum ac suscipit non, pellentesque commodo arcu. Quisque maximus mi vitae erat viverra, at cursus lectus egestas. Suspendisse dui mi, fermentum a cursus vel, mattis non massa. Morbi eget auctor purus. Sed non elit tincidunt, varius nulla ut,</div>
          </div>
        </div>
    </div>

    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2">Pédagogie</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">One</li>
              <li class="list-group-item">Two</li>
              <li class="list-group-item">Three</li>
            </ul>
            <div class="panel-footer">Footer</div>
          </div>
        </div>
      </div>

    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3">Enseignant</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">One</li>
              <li class="list-group-item">Two</li>
              <li class="list-group-item">Three</li>
            </ul>
            <div class="panel-footer">Footer</div>
          </div>
        </div>
      </div>

     <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse4">Calendrier</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">One</li>
              <li class="list-group-item">Two</li>
              <li class="list-group-item">Three</li>
            </ul>
            <div class="panel-footer">Footer</div>
          </div>
        </div>
      </div>
     <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse5">Tarifs</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">One</li>
              <li class="list-group-item">Two</li>
              <li class="list-group-item">Three</li>
            </ul>
            <div class="panel-footer">Footer</div>
          </div>
        </div>
      </div>
    </div>
    
</div>
</div>
 </div>
 
 
<?php endwhile;else : ?>
    <p>desolé...</p>
<?php endif; ?>
<!--
Récuperation du footer
 -->
<?php get_footer(); ?>