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
