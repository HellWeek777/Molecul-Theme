<?php 
/*
Template Name: Contact
*/

get_header();
?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('zdjecie_contact') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy" style="padding-top: 0px !important">
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
  <h1 style="">CONTACT</h1> 
 
</div>
</div>

  </div>
</div>

</section>
<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('zdjecie_contact') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy" >
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                       
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
  <h1 style="padding-top: 150px;padding-bottom: 100px;text-align: center;">CONTACT</h1> 
 
</div>
</div>

  </div>
</div>

</section>

<section class="sectiondesktop">

  <div class="container clients">
  <div class="row">
     <div class="col col-md-3">
</div>
    <div class="col col-md-6">
  <h2 class="fade-in-text" ></h2>
</div>
</div>


</section>

<section class="sectiondesktop">
  <div class="row justify-content-center">
<div class="col col-md-10">
<?php echo apply_shortcodes( '[contact-form-7 id="446" title="Formularz 1"]' ); ?>
</div>
</div>


</section>
<section class="sectionmobile" >

  <div class="container clients" >
  <div class="row justify-content-center">
    <div class="col col-sm-12 col-md-10">
  <h2 class="fade-in-text"></h2>
</div>
</div>


</section>

<section class="sectionmobile" >
  <div class="row justify-content-center">
<div class="col col-md-10">
<?php echo apply_shortcodes( '[contact-form-7 id="446" title="Formularz 1"]' ); ?>
</div>
</div>


</section>

<?php get_footer() ?>