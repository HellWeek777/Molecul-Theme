<footer class="sectiondesktop container-fluid text-center footerbg">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="row">
    <div class="col col-md-3 col-lg-3">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
    </div>
    <div class="col col-md-3 col-lg-3">

    </div>
    <div class="col col-md-3 col-lg-3">
      <div class="row">
                <div class="col col-md-2 col-lg-2">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/linkedin.svg"?>" style="width:40px;" /></a>
        </div>
        <div class="col col-md-2 col-lg-2">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/youtube.svg"?>" style="width:40px;" /></a>
        </div>
        <div class="col col-md-2 col-lg-2">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/instagram.svg"?>" style="width:40px;" /></a>
        </div>
        <div class="col col-md-2 col-lg-2">
            <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/facebook.svg"?>" style="width:40px;" /></a>
        </div>
        <div class="col col-md-2 col-lg-2">
           <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/twitter.svg"?>" style="width:40px;" /></a>
        </div>

      </div>

    </div>
  </div>
  
</footer>

<footer class="sectionmobile container-fluid text-center footerbg  no-gutters" >
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="row">
    <div class="col col-4" >
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'footer1_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
    </div>
    <div class="col col-3" style="padding-left:0px;padding-right:0px;">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'footer2_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
    </div>

    <div class="col col-5">
      <div class="row">
        <div class="col-2 col-lg-2" style="padding-left:5px;padding-right: 5px;">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/linkedin.svg"?>" style="width:18px;" /></a>
        </div>
        <div class="col-2 col-lg-2" style="padding-left:5px;padding-right: 5px;">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/youtube.svg"?>" style="width:18px;" /></a>
        </div>
        <div class="col-2 col-lg-2" style="padding-left:5px;padding-right: 5px;">
          <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/instagram.svg"?>" style="width:18px;" /></a>
        </div>
        <div class="col-2 col-lg-2" style="padding-left:5px;padding-right: 5px;">
            <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/facebook.svg"?>" style="width:18px;" /></a>
        </div>
        <div class="col-2 col-lg-2" style="padding-left:5px;padding-right: 5px;">
           <a href="" target="_blank"><img class="sm" src="<?php echo get_template_directory_uri()."/images/twitter.svg"?>" style="width:18px;" /></a>
        </div>

      </div>

    </div>
  </div>
  
</footer>

<script>
  $(document).ready(function(){
  $(".hide").hover(function(){
    $(this).find('.tytkafelki').toggleClass("vain");
    $(this).find('.kafelfkitext2').toggleClass("mainkaf");
  });
});

$(document).ready(function(){
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    if (this.hash !== "") {
 
      event.preventDefault();


      var hash = this.hash;


      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   

        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

</body>
</html>