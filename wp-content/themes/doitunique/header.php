<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="logo-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="DoitUnique" class="logo">
        </a>
        
        <button class="mobile-menu-toggle">
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
        </button>
        
        <nav class="main-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">What We Serve</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="header-icons">
            <a href="#" class="instagram-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.5 4.99935L5 1.66602H15L17.5 4.99935M2.5 4.99935V16.666C2.5 17.108 2.67559 17.532 2.98816 17.8445C3.30072 18.1571 3.72464 18.3327 4.16667 18.3327H15.8333C16.2754 18.3327 16.6993 18.1571 17.0118 17.8445C17.3244 17.532 17.5 17.108 17.5 16.666V4.99935M2.5 4.99935H17.5M13.3333 8.33268C13.3333 9.21674 12.9821 10.0646 12.357 10.6897C11.7319 11.3148 10.8841 11.666 10 11.666C9.11594 11.666 8.2681 11.3148 7.64298 10.6897C7.01786 10.0646 6.66667 9.21674 6.66667 8.33268" stroke="#151515" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a>
            <a href="#" class="language-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
            </a>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    mobileMenuToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        mainNav.classList.toggle('show');
    });
});
</script>

</body>
</html> 