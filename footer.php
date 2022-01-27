<footer class="mt-5">
  <div class="panel-footer">
    <div class="container-fluid">
       <div class="row justify-content-center">
      <div class="col-md-4 footer-content form-group  mt-5">
      <p class="title-footer">About US</p>
      <p class="footer-content">Kendaraan is an international collective of photographers, writers & drivers with a shared passion for uncovering the Indonesian most exciting car culture stories. </p>
      </div>
      <div class="col-md-4 footer-content form-group mt-5">
        <p class="title-footer">Kendaraan</p>
        <div class="title-link">
        <p class="footer-content">  <a href="index.php#article">Article</a> </p> 
        <p class="footer-content">  <a href="index.php#article">Event</a> </p>  
        <p class="footer-content">  <a href="galeri.php">Gallery</a> </p>  
        <p class="footer-content">  <a href="index.php#fitment">Fitment</a> </p>  
        </div>
      </div>
    <div class="col-md-4 footer-content form-group mt-5" >
        <p class="title-footer">Social Media</p>
        <div class="title-link">
        <p class="footer-content"><i class="fab fa-facebook-square" style="font-size:20px;padding-right:5px;"></i> fb.com/kendaraan </p>
         <p class="footer-content" style="letter-spacing:2px;"><i class="fab fa-instagram"  style="font-size:20px;padding-right:5px;"></i> @kendaraan </p>
          <p class="footer-content"><i class="fab fa-youtube"  style="font-size:20px;padding-right:5px;"></i> youtube.com/kendaraan.indonesia</p>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-9 footer-content">
        <p class="title-footer">Contact</p>
        <div class="title-link">
        <p class="footer-content"><i class="material-icons" style="font-size:20px;padding-right:5px;">location_on</i> JL. KH Agus Salim Kota Cilegon </p>
         <p class="footer-content"><i class="material-icons"  style="font-size:20px;padding-right:5px;">phone</i> 081280568822 </p>
          <p class="footer-content"><i class="material-icons"  style="font-size:20px;padding-right:5px;">email</i> youtube.com/kendaraan.indonesia</p>
        </div>
      </div>
         <div class="col-md-3 footer-content" align="center">
          <a href=""><img src="image/brand-shadow.png" class="img-fluid" height="64"></a>
         </div>
    </div>

    <p class="footer-content text-center mt-5">
       <script>
          document.write(new Date().getFullYear())
        </script>
     &copy; Kendaraan

      </p>
    </div>
  </div>
</footer>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/ekolightbox/ekko-lightbox.min.js"></script>
 <script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 $('.resp').slick({
  dots: false,
  infinite: false,
  speed: 300,
   autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 4,
   nextArrow: $('.next'),
  prevArrow: $('.prev'),
  centerPadding: '60px',
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
       
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
   <script type="text/javascript">
 $('.event').slick({
  dots: false,
  infinite: false,
  speed: 300,
   autoplay: true,
  autoplaySpeed: 3000,
   nextArrow: $('.next-event'),
  prevArrow: $('.prev-event'),
variableWidth: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
       
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
     <script type="text/javascript">
 $('.article').slick({
  dots: false,
  infinite: false,
  speed: 300,
   autoplay: true,
  autoplaySpeed: 3000,
   nextArrow: $('.next-article'),
  prevArrow: $('.prev-article'),
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
       
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
  <script type="text/javascript">
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  </script>
</body>
</html>