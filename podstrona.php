<?php 
/*
Template Name: Podstrona
*/

get_header();
?>
  <?php while(have_posts()): the_post() ?>   
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('tlo_tytulu3') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy" >
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
  <h1><?php the_field('tytul_strony1') ?></h1> 
 
</div>
</div>

  </div>
</div>

</section>
<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('tlo_tytulu3') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.png"?>" />                       
      </button>
      <a class="navbar-brand" href=""><img width=150px src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
      <a class="navbar-brand" href=""></a>
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
  <h1><?php the_field('tytul_strony1') ?></h1> 
 
</div>
</div>

  </div>
</div>

</section>
<section>

  <div class="container-fluid bgwhite">
    <div class="row">
        <div class="col-lg-4">
        </div>

        <div class="col-lg-4">
         <div class="text-center maintextcapa">
             <h2><?php the_field('tytul_sekcji'); ?></h2> 
         </div>
        </div>
    </div>
    <div class="container-fluid text-center fred">
      <div class="row kafelki">

          <?php
            if( have_rows('sekcje') ):
                while( have_rows('sekcje') ) : the_row(); ?>
           <div class="col col-12 col-sm-12 col-md-6 col-lg-4" style="padding-bottom: 1rem; padding-top: 1rem;">
          <div class="kafelek2 kafelek hide" style="background-image:  url(<?php the_sub_field('kafelek_zdjecie'); ?>);">
            <div class="pomnoz">
          <p class="tytkafelki"><?php the_sub_field('tytul_kafelka'); ?></p>
          <p class="kafelfkitext2"><?php the_sub_field('tekst_z_tylu_kafelka'); ?></p>
            </div>
        </div>
        </div>
<?php 
                endwhile;
            else :
            endif; ?>

    </div>
  </div>
</section>



<section>

  <div class="container-fluid bgwhite">
    <div class="row">
        <div class="col-lg-4">
        </div>

        <div class="col-lg-4">
         <div class="text-center maintextcapa">
             <h2><?php the_field('tytul_sekcji2'); ?></h2> 
         </div>
        </div>
    </div>
    <div class="container-fluid text-center fred">
      <div class="row kafelki">

          <?php
            if( have_rows('kafelki') ):
                while( have_rows('kafelki') ) : the_row(); ?>
           <div class="col col-12 col-sm-12 col-md-6 col-lg-4" style="padding-bottom: 1rem; padding-top: 1rem;">
          <div class="kafelek2 kafelek hide" style="background-image:  url(<?php the_sub_field('zdjecie_kafelka'); ?>);">
            <div class="pomnoz">
          <p class="tytkafelki"><?php the_sub_field('tytul_kafelka2'); ?></p>
          <p class="kafelfkitext2"><?php the_sub_field('tekst_z_tylu_kafelka_3'); ?></p>
            </div>
        </div>
        </div>
<?php 
                endwhile;
            else :
            endif; ?>

    </div>
  </div>
</section>

<section>

  <div class="container-fluid bgwhite">
    <div class="row">
        <div class="col-lg-4">
        </div>

        <div class="col-lg-4">
         <div class="text-center maintextcapa">
             <h2><?php the_field('tytul_sekcji3'); ?></h2> 
         </div>
        </div>
    </div>
    <div class="container-fluid text-center fred">
      <div class="row kafelki">


          <?php
            if( have_rows('sekcje2') ):
                while( have_rows('sekcje2') ) : the_row(); ?>
           <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
          <div class="kafelek2 kafelek hide" style="background-image:  url(<?php the_sub_field('kafelek_zdjecie3'); ?>);">
            <div class="pomnoz">
          <p class="tytkafelki"><?php the_sub_field('tytul_kafelka3'); ?></p>
          <p class="kafelfkitext2"><?php the_sub_field('tekst_z_tylu_kafelka2'); ?></p>
            </div>
        </div>
        </div>
<?php 
                endwhile;
            else :
            endif; ?>

    </div>
  </div>
</section>
<?php endwhile; ?>


<?php get_footer() ?>