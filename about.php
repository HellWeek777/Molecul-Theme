<?php 
/*
Template Name: About
*/

get_header();
?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="bgcap1 sectiondesktop" style="background-image: url(<?php the_field('tlo_tytulu4') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                        
      </button>
      <a class="navbar-brand" href="https://molecule.gg"><img src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
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
<section class="bgcap1 sectionmobile" style="background-image: url(<?php the_field('tlo_tytulu4') ?>);">
<div class="img-gradientcapa">
<div class="header">
<nav class="navbar navbar-default position-absolute">
  <div class="container-fluid flexy">
    <div clas    exit;s="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="<?php echo get_template_directory_uri()."/toglle.svg"?>" />                       
      </button>
      <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri()."/log.svg"?>"></a>
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

<section class="sectiondesktop2">
  <div class="container-fluid" style="padding: 0px ;">
    <div class="row rowbox rowboxall justify-content-center">
      <div class="col col-12 col-lg-6 sekcje" style="min-height: 657px; padding-right: 0px ; padding-left: 0px ;">
        <div class="row justify-content-center">
    <video id="desktopvideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width: 100%; height: 100%;"> 
      <source src="" type="video/mp4" style="width: 750px; height: 100%;">
    </video>

        </div>
      </div>

      <div class="col col-12 col-lg-6 sekcje tlofirmowe">
        <div class="row boxy">
           <div class="col col-md-6 offset-md-3 koltrzy" style="position: absolute; top:25%;">
            <h1><?php the_field('tytul_niebo') ?></h1>
            <p class="pniebo"><?php the_field('tekst_niebo') ?></p>
           </div>


        </div>
      </div>

       

    </div>
      


  </div>
</section>

<section class="sectionipad">
  <div class="container-fluid" >
    <div class="row rowbox rowboxall justify-content-center">
      <div class="col col-12 sekcje" >
        <div class="row justify-content-center">
    <video id="desktopvideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"> 
      <source src="" type="video/mp4" style="width: 750px; height: 100%;">
    </video>

        </div>
      </div>

      <div class="col col-12 sekcje tlofirmowe">
        <div class="row boxy justify-content-center">
           <div class="col col-md-8 koltrzy" >
            <h1><?php the_field('tytul_niebo') ?></h1>
            <p style="text-align: center;" class="pniebo"><?php the_field('tekst_niebo') ?></p>
           </div>


        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="sectiondesktop">
  <div class="container-fluid" style="padding: 0px ;">
    <div class="row rowbox rowboxall justify-content-center">


           <div class="col col-md-6 offset-md-2" >
            <h1><?php the_field('tytul_sekcji_bialej') ?></h1>
           </div>
        </div>
        <div class="row justify-content-center">
           <div class="col col-md-8" style="padding-top: 20px;">
            <p class="pniebo"><?php the_field('tekst_sekcji_bialej') ?></p>

           </div>

    </div>
  </div>
</section>
<section class="sectionmobile">
  <div class="container-fluid">
    <div class="row rowbox rowboxall justify-content-center">


           <div class="col col-md-8" >
            <h1><?php the_field('tytul_sekcji_bialej') ?></h1>
           </div>
        </div>
        <div class="row justify-content-center">
           <div class="col col-md-8">
            <p class="pniebo"><?php the_field('tekst_sekcji_bialej') ?></p>

           </div>

    </div>
  </div>
</section>



<section class="sectiondesktop" >
  <div class="container-fluid" >


    <div class="row rowbox rowboxall justify-content-center">


           <div class="col col-md-6 offset-md-2">
            <h1 ><?php the_field('tytul_sekcji_szarej') ?></h1>
           </div>
        </div>
        <div class="row justify-content-center">
           <div class="col col-md-8" >
            <p class="pniebo"><?php the_field('tekst_sekcji_szarej') ?></p>

           </div>

    </div>
  </div>
</section>



<section class="sectionmobile">
  <div class="container-fluid">
    <div class="row rowbox rowboxall justify-content-center">


           <div class="col col-md-8">
            <h1><?php the_field('tytul_sekcji_szarej') ?></h1>
           </div>
        </div>
        <div class="row justify-content-center">
           <div class="col col-md-8">
            <p class="pniebo"><?php the_field('tekst_sekcji_szarej') ?></p>

           </div>

    </div>
  </div>
</section>

<section class="sectiondesktop">
  <div class="container-fluid bgwhite trzynastka">
   <div class="row">


                <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'offset' => 0,
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


            <div class="row">
              <div class="col col-12 blog2opis"><a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
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
                    'posts_per_page' => 3,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'uncategorized',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>


      <div class="col col-12">
        <div>

            <div class="row" >
                 <div class="col col-12 blog1" style="min-height: 240px; background-image: url(<?php the_field('zdjecie_wpisu') ?>);"><span class="datablog"><?php echo get_the_date( 'd/m/Y' ); ?></span>
                 </div>
             </div>  


            <div class="row">
              <div class="col col-12 blog2opis"><a  href="<?php the_permalink(); ?>"><h3><?php echo get_the_title( $post_id ); ?></h3></a><p><?php echo custom_field_excerpt(); ?></p>
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



<section class="sectiondesktop">
  <div class="container-fluid">


    <div class="row rowbox rowboxall justify-content-center">
      <div class="col col-12 col-lg-12 ">
<?php echo apply_shortcodes( '[fts_instagram instagram_id=17841403038029723 access_token=IGQVJYSVpDS3BiWDk4dmxYbkV6WTBsek9rQy0xWGtuUWxWX2w2ZAkx4Y2tQVjIzbjNoaEFUQ3Q4MWFMUW14ZAUc0WlJtd2VPUXExaUtkVUx2d3pPOUlfN2VrZAUtXUGFjRVpLSnVUYzZAn pics_count=6 type=basic width=1500px super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]' ); ?>
</div>
    </div>
  </div>
</section>

<section class="sectionmobile">
  <div class="container-fluid">


    <div class="row justify-content-center">
      <div class="col col-12 col-lg-12 ">
<?php echo apply_shortcodes( '[fts_instagram instagram_id=17841403038029723 access_token=IGQVJYSVpDS3BiWDk4dmxYbkV6WTBsek9rQy0xWGtuUWxWX2w2ZAkx4Y2tQVjIzbjNoaEFUQ3Q4MWFMUW14ZAUc0WlJtd2VPUXExaUtkVUx2d3pPOUlfN2VrZAUtXUGFjRVpLSnVUYzZAn pics_count=6 type=basic super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]' ); ?>
</div>
    </div>
  </div>
</section>

<?php get_footer() ?>