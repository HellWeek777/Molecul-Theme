<?php 
/*
Template Name: Case Studies
*/

get_header();
?>
 <?php while( have_posts() ): ?>
    <?php the_post(); ?>  
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('zdjecie_case_study') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.png"?>" />                        
      </button>
      <a class="navbar-brand" href="https://molecule.gg"><img width=354px src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
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
  <h1><?php the_field('tytul_case_study') ?></h1> 
 
</div>
</div>

  </div>
</div>

</section>
<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('zdjecie_case_study') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.png"?>" />                       
      </button>
      <a class="navbar-brand" href=""></a>
      <a class="navbar-brand" href=""><img width=150px src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
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
  <h1><?php the_field('tytul_case_study') ?></h1> 
 
</div>
</div>

  </div>
</div>

</section>





<section class="sectiondesktop">
  <div class="container-fluid bgwhite trzynastka1">
   <div class="row">


                <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'case',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>


      <div class="col col-12 col-md-6">
        <div>

            <div class="row" >
                 <div class="col col-12 blog1" style="min-height: 240px; aspect-ratio: 1.45; background-image: url(<?php the_field('zdjecie_wpisu') ?>);"><span class="datablog2">CASE STUDY</span>
                 </div>
             </div>  


            <div class="row" style="min-height: 120px;">
              <div class="col col-12 blog2opis blog2opiscase"><a style="color: #ffffff;" href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
                  <div class="row flexrow">
                    <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="col-12 col-md-6">
 
                        <div class="row justify-content-center" style="">
                        <a href="<?php the_permalink(); ?>"><img style="padding-bottom: 20px;" src="<?php echo get_template_directory_uri()."/more.png"?>" /></a>
                        
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
                    'category_name' => 'case',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>


      <div class="col col-12">
        <div style="padding: 0px;">

            <div class="row">
                 <div class="col col-12 blog1" style="min-height: 240px; background-image: url(<?php the_field('zdjecie_wpisu') ?>);">
                         <span class="datablog2">CASE STUDY</span>
                 </div>
             </div>  


            <div class="row" style="min-height: 120px;">
              <div class="col col-12 blog2opis"><a style="color: #ffffff;" href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
                  <div class="row flexrow" style="padding-left:15px !important; padding-right: 15px !important;">
                    <div class="col-md-8">
                    </div>
                    <div class="col-6">
                    </div> 
                    <div class="col-12 col-md-6">
 
                        <div class="row" style="">
                       <a href="<?php the_permalink(); ?>"><img style="padding-bottom: 20px;" src="<?php echo get_template_directory_uri()."/more.png"?>" /></a>
                          
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