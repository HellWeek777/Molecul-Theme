<?php 
/*
Template Name: Blog
*/

get_header();
?>
 <?php while( have_posts() ): ?>
    <?php the_post(); ?>  
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('zdjecie_bloga') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                        
      </button>
      <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
        <div class="navy">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
  </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
  </div>

</nav>
</div>

<div class="row">
<div class="col-lg-4">
</div>

<div class="col-lg-4 col-xs-12">
<div class="text-center maintext">
  <h1><?php the_field('tytul_bloga') ?></h1> 
</div>
</div>

  </div>
</div>

</section>
<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('zdjecie_bloga') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                       
      </button>
      <a class="navbar-brand" href=""></a>
      <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
        <div class="navy">

  </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
  </div>

</nav>
    <div class="row">
<div class="col-lg-4">
</div>

<div class="col-lg-4 col-xs-12">
<div class="text-center maintext">
  <h1><?php the_field('tytul_bloga') ?></h1> 
 
</div>
</div>

  </div>
</div>

</section>

<section class="sectiondesktop">

    <div class="container-fluid trzynastka">

            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'uncategorized',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>

       <div class="row " style="min-height: 480px;">
             <div class="col col-sm-12 col-md-8 blog1" style="background-image: url(<?php the_field('zdjecie_wpisu') ?>);"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
             </div>
             <div class="col-sm-12 col-md-4 blog1opis"><a style="color: #ffffff;" href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
                 <div class="row flexrow justify-content-center">
                    <div class="col col-md-1 col-lg-6">
                    </div>
                    <div class="col col-12 col-md-9 col-lg-6">
                        <div class="row justify-content-center" style="">
                     <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri()."/more.svg"?>" /></a>
                        
                        </div>


                    </div>
                 </div>
             </div>
       </div>

       <?php } ?>
                <?php wp_reset_postdata(); ?>



    </div>


</section>



<section class="sectiondesktop">
  <div class="container-fluid bgwhite trzynastka">
   <div class="row">


                <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 120,
                    'offset' => 1,
                    'order' => 'DESC',
                    'category_name' => 'uncategorized',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>


      <div class="col col-4">
        <div>

            <div class="row" >
                 <div class="col col-12 blog1" style="min-height: 240px; aspect-ratio: 1.45; background-image: url(<?php the_field('zdjecie_wpisu') ?>);"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
                 </div>
             </div>  


            <div class="row" >
              <div class="col col-12 blog2opis"><a style="color: #ffffff;" href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
                  <div class="row flexrow">
                    <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="col-12 col-md-6">
 
                        <div class="row justify-content-center" style="">
                        <a href="<?php the_permalink(); ?>"><img style="padding-bottom: 20px;" src="<?php echo get_template_directory_uri()."/more.svg"?>" /></a>
                        
                        </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

       <?php } ?>
                <?php wp_reset_postdata(); ?>

      

    </div>
  </div>
</section>

<section class="sectionmobile">
  <div class="container-fluid bgwhite">
   <div class="row justify-content-center">

                <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'uncategorized',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>


      <div class="col col-12">
        <div style="padding: 0px;">

            <div class="row" >
                 <div class="col col-12 blog1" style="min-height: 240px; background-image: url(<?php the_field('zdjecie_wpisu') ?>);"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
                 </div>
             </div>  


            <div class="row" style="min-height: 120px;">
              <div class="col col-12 blog2opis"><a style="color: #ffffff;" href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
                  <div class="row flexrow">
                    <div class="col-md-8">
                    </div>
                    <div class="col-6">
                    </div> 
                    <div class="col-12 col-md-6">
 
                        <div class="row" style="">
                       <a href="<?php the_permalink(); ?>"><img  src="<?php echo get_template_directory_uri()."/more.svg"?>" /></a>
                          
                        </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

       <?php } ?>
                <?php wp_reset_postdata(); ?>
      

    </div>
  </div>
</section>

<?php endwhile; ?>


<?php get_footer() ?>