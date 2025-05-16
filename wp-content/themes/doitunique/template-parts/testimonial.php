<section class="testimonial">
  <div class="container">
    <h2 class="section-title">What our happy client say</h2>
    <p class="section-subtitle">Several selected clients, who already believe in our service.</p>
    
    <div class="testimonial-container">
      <div class="testimonial-main-container">
        <div class="testimonial-main-wrapper">
          <img src='<?php echo site_url(); ?>/wp-content/uploads/testi-main.jpg' alt='Testimonial main' class='testimonial-main'>
        </div>
        <div class="testimonial-content">
          <h3 class="testimonial-name">Lily Anderson</h3>
          <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
      </div>
      
      <div class="testimonial-avatars-container">
        <?php
        $avatars = [
          'avatar-1.jpg', 'avatar-2.jpg', 'avatar-3.jpg', 'avatar-4.jpg', 'avatar-5.jpg', 'avatar-6.jpg', 'avatar-7.jpg', 'avatar-8.jpg'
        ];
        $positions = [
          'top-left', 'top', 'top-right', 'right', 'bottom-right', 'bottom', 'bottom-left', 'left'
        ];
        foreach ($avatars as $index => $av) {
          $position = isset($positions[$index]) ? $positions[$index] : '';
          echo "<div class='avatar-wrapper $position'><img src='".site_url()."/wp-content/uploads/$av' alt='Avatar' class='avatar-img'></div>";
        }
        ?>
      </div>
    </div>
  </div>
</section> 