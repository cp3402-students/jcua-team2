<?php
register_block_pattern(
    'stemspire/newsletter-signup',
    array(
        'title'   => __( 'Newsletter Signup', 'stemspire' ),
        'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}},"color":{"background":"#fff2cc"}}} -->\n<div class="wp-block-group alignfull has-background" style="background-color:#fff2cc;padding-top:40px;padding-bottom:40px">\n<!-- wp:heading {"textAlign":"center"} -->\n<h2 class="has-text-align-center">Stay Informed</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {"align":"center"} -->\n<p class="has-text-align-center">Join our newsletter for monthly STEM learning tips and updates.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->\n<div class="wp-block-buttons">\n<!-- wp:button -->\n<div class="wp-block-button"><a class="wp-block-button__link">Subscribe</a></div>\n<!-- /wp:button -->\n</div>\n<!-- /wp:buttons -->\n</div>\n<!-- /wp:group -->'
    )
);
