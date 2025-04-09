# Feature
This theme includes a header and a footer, sevarl patterns.
The header contains the learning center Logo and a navigation bar.
The navigation bar cotains four link to different page.
- Home
- About Us
- Programs
- Contact

# Files
## header.html and footer.html
This two files contains the content for the header and footer, which can be easily changed.

``` html
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}},"color":{"background":"#1a1a1a","text":"#f9c80e"}}} -->
<header class="wp-block-group has-text-color has-background" style="color:#f9c80e;background-color:#1a1a1a;padding-top:20px;padding-bottom:20px"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px"}}} /-->

  <!-- wp:site-tagline /-->
  
  <!-- wp:navigation {"ref":4,"layout":{"type":"flex","justifyContent":"center"}} /--></header>
  <!-- /wp:group -->
```

``` html
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}},"color":{"background":"#1a1a1a","text":"#d9a441"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-background has-text-color" style="background-color:#1a1a1a;color:#d9a441;padding-top:40px;padding-bottom:40px">
  <div class="wp-block-group__inner-container has-text-align-center">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
    <p class="has-text-align-center" style="font-size:16px;">&copy; 2025 STEMspire. All rights reserved.</p>
    <!-- /wp:paragraph -->
  </div>
</footer>
<!-- /wp:group -->
 ```

## functions.php
This file contains the code for all neccessary functions related to the theme.
```
<?php
function stemspire_register_patterns() {
  require get_template_directory() . '/patterns/hero-banner.php';
  require get_template_directory() . '/patterns/three-columns.php';
  require get_template_directory() . '/patterns/cta.php';
  require get_template_directory() . '/patterns/faq-section.php';
  require get_template_directory() . '/patterns/team-intro.php';
  require get_template_directory() . '/patterns/contact-section.php';
  require get_template_directory() . '/patterns/newsletter-signup.php';
  require get_template_directory() . '/patterns/text-two-columns.php';

}
add_action('init', 'stemspire_register_patterns');
```

## style.css
This file contains the nesscessry code for the theme such as background color and text color, text design.
```
/*
Theme Name: Group B theme
Description: why is this so hard :(
Author: Dongfang Keer
Version: 1.1
*/

:root {
    --bg-color: #fffaf3;
    --text-color: #2b2b2b;
    --accent-color: #f9c80e;
    --header-bg: #1a1a1a;
    --hero-bg: linear-gradient(to right, #dcbf91, #f9c80e);
    --subtle-color: #f3e5ab;
  }
  
  body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--bg-color);
    color: var(--text-color);
    margin: 0;
    padding: 0;
    line-height: 1.6;
    scroll-behavior: smooth;
  }
  
  .container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
  }
  
  header {
    background-color: var(--header-bg);
    color: var(--accent-color);
    padding: 30px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 999;
  }
  
  header h1 {
    font-size: 2.8rem;
    margin: 0;
    color: var(--accent-color);
    text-shadow: 1px 1px #000;
  }
  
  .tagline {
    font-size: 1.2rem;
    font-weight: 300;
    margin-top: 5px;
    color: #d9a441;
  }
  
  nav {
    margin-top: 15px;
    animation: fadeInDown 1s ease;
  }
  
  nav a {
    margin: 0 15px;
    color: var(--accent-color);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
  }
  
  nav a:hover {
    color: #ffffff;
  }
  
  .hero {
    background: var(--hero-bg);
    padding: 100px 0;
    text-align: center;
    border-bottom: 4px solid #b98a56;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    animation: fadeIn 1s ease-in-out;
  }
  
  .hero h2 {
    font-size: 2.6rem;
    margin-bottom: 20px;
    color: #1a1a1a;
  }
  
  .hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #3a3a3a;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
  }
  
  .btn-primary {
    background-color: var(--accent-color);
    color: #1a1a1a;
    padding: 14px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    display: inline-block;
  }
  
  .btn-primary:hover {
    background-color: #e6b800;
    transform: translateY(-2px);
  }
  
  .features .container {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    flex-wrap: nowrap;
  }
  
  .features {
    padding: 70px 0;
    text-align: center;
    background-color: #fff8e1;
  }
  
  .feature-box {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 14px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    flex: 1;
    max-width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: fadeInUp 1s ease-in-out;
  }
  
  .feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
  }
  
  .feature-box h3 {
    color: #7b5e3b;
    margin-bottom: 15px;
    font-size: 1.4rem;
  }
  
  .feature-icon {
    width: 60px;
    height: 60px;
    margin-bottom: 15px;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
  }
  
  .testimonials {
    background-color: var(--subtle-color);
    padding: 70px 20px;
    text-align: center;
  }
  
  .testimonials h2 {
    font-size: 2rem;
    color: #7b5e3b;
    margin-bottom: 40px;
  }
  
  .testimonial-box {
    background: #fff;
    max-width: 700px;
    margin: 20px auto;
    padding: 25px;
    border-left: 6px solid var(--accent-color);
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    font-style: italic;
    animation: fadeIn 1s ease-in-out;
  }
  
  .testimonial-box cite {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #444;
  }
  
  .cta {
    background-color: var(--header-bg);
    color: var(--accent-color);
    text-align: center;
    padding: 60px 20px;
  }
  
  .cta h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
  }
  
  .cta a {
    background-color: var(--accent-color);
    color: #1a1a1a;
    padding: 14px 28px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 40px;
    transition: background 0.3s ease;
  }
  
  .cta a:hover {
    background-color: #e6b800;
  }
  
  footer {
    background-color: var(--header-bg);
    color: #d9a441;
    text-align: center;
    padding: 25px 0;
    margin-top: 60px;
    font-size: 0.95rem;
    box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.1);
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @media (max-width: 768px) {
    header h1 {
      font-size: 2rem;
    }
    .hero h2 {
      font-size: 2rem;
    }
    .features .container {
      flex-direction: column;
      align-items: center;
    }
    .feature-box {
      max-width: 90%;
    }
    nav a {
      display: inline-block;
      margin: 10px 5px;
    }
  }
```

# Supporting files
- contact-section
- cta
- faq-section
- hero-banner
- newsletter-sign-up
- team-info
- text-two columns
- three-columns

# Design Decisions
Logo of the site is located at the leaft side of header. The main color of theme is light orange and secondary is light grey, which supossed to be relaxing and eye-sight friendly.