<section class="testimonial">
  <div class="container">
    <h2 class="section-title">What our happy client say</h2>
    <p class="section-subtitle">Several selected clients, who already believe in our service.</p>
    
    <div class="testimonial-container">
      <div class="testimonial-main-container">
        <div class="testimonial-main-wrapper">
          <img src='<?php echo site_url(); ?>/wp-content/uploads/testi-main.jpg' alt='Testimonial main' class='testimonial-main'>
          <div class="circle-accent"></div>
        </div>
        
        <!-- Slick Slider for Testimonials -->
        <div class="testimonial-slider">
          <!-- Testimonial 1 -->
          <div class="testimonial-content">
            <h3 class="testimonial-name">Lily Anderson</h3>
            <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
          
          <!-- Testimonial 2 -->
          <div class="testimonial-content">
            <h3 class="testimonial-name">John Smith</h3>
            <p class="testimonial-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          </div>
          
          <!-- Testimonial 3 -->
          <div class="testimonial-content">
            <h3 class="testimonial-name">Emily Johnson</h3>
            <p class="testimonial-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words.</p>
          </div>
          
          <!-- Testimonial 4 -->
          <div class="testimonial-content">
            <h3 class="testimonial-name">Michael Brown</h3>
            <p class="testimonial-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections from Cicero are also reproduced.</p>
          </div>
          
          <!-- Testimonial 5 -->
          <div class="testimonial-content">
            <h3 class="testimonial-name">Sarah Wilson</h3>
            <p class="testimonial-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
        </div>
        
        <div class="testimonial-avatars-container">
          <div class="group-people"><img src='<?php echo site_url(); ?>/wp-content/uploads/group-people.png' alt='People' class='people-img'></div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
  jQuery(document).ready(function($) {
    $('.testimonial-slider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
      adaptiveHeight: true
    });
  });
  </script>
  
  <style>
  /* Custom styles for Slick slider */
  .testimonial-slider .slick-dots {
    bottom: -30px;
  }
  
  .testimonial-slider .slick-dots li button:before {
    font-size: 12px;
  }
  
  .testimonial-slider .slick-dots li.slick-active button:before {
    color: #333;
  }
  
  .testimonial-content {
    outline: none;
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }
  
  .testimonial-text {
    display: block;
    word-wrap: break-word;
    overflow-wrap: break-word;
    text-overflow: ellipsis;
    width: 100%;
    line-height: 1.6;
    max-height: none;
    overflow: visible;
  }
  
  .testimonial-name {
    margin-bottom: 10px;
  }
  </style>
</section> 