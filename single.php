<?php 


get_header();
?>
<?php while( have_posts() ): ?>
    <?php the_post(); ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('zdjecie_wpisu') ?>);">
<div class="img-gradientcapa" >
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                        
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

<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('zdjecie_wpisu') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy" >
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                       
      </button>
      <a class="navbar-brand" href="https://molecule.gg"></a>
      <a class="navbar-brand" href="https://molecule.gg"><img width=150px src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
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
  <h1 ></h1> 
 
</div>
</div>

  </div>
</div>

</section>

<section class="sectiondesktop" >
     <div class="container-fluid" >
         <div class="row">
             <div class="col col-md-3 offset-md-2 blog1"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
             <div class ="col col-md-6"></div>
         </div>
      </div>
      <div class="container-fluid" >

      </div>
          <div class="row blog2">
             <div class="col col-md-8 offset-md-2 blog1"><h2 style="padding-top: 2em;"><?php echo get_the_title( $post_id ); ?></h2></div>
             <div class="col col-md-8 offset-md-2"><?php the_content(); ?></div>
             <div class="col col-md-2"></div>
      </div>
      


</section>

<section class="sectionmobile">
     <div class="container-fluid" >
         <div class="row">
             <div class="col col-md-3 offset-md-2 blog1"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
             <div class ="col col-md-6"></div>
         </div>
      </div>
      <div class="container-fluid">

      </div>
          <div class="row blog2">
             <div class="col col-md-8 offset-md-2 blog1"><h2><?php echo get_the_title( $post_id ); ?></h2></div>
          </div>
          <div class="row justify-content-center blog2">
             <div class="col-12 col-md-10"><?php the_content(); ?></div>
      </div>


      
</section>

<section class="sectionmobile">
</section>

<?php endwhile; ?> 

<?php get_footer() ?>