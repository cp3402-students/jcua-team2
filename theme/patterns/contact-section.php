<?php
register_block_pattern(
    'stemspire/contact-section',
    array(
        'title'   => __( 'Contact Section', 'stemspire' ),
        'content' => '<!-- wp:group -->\n<div class="wp-block-group">\n<!-- wp:heading {"textAlign":"center"} -->\n<h2 class="has-text-align-center">Get In Touch</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {"align":"center"} -->\n<p class="has-text-align-center">Have questions or want to enroll? Fill the form below or reach out to us directly!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->\n<div class="wp-block-buttons">\n<!-- wp:button {"textAlign":"center"} -->\n<div class="wp-block-button"><a class="wp-block-button__link">Contact Us</a></div>\n<!-- /wp:button -->\n</div>\n<!-- /wp:buttons -->\n</div>\n<!-- /wp:group -->'
    )
);
