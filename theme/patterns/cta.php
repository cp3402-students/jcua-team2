<?php
register_block_pattern(
    'stemspire/cta',
    array(
        'title'   => __( 'Call to Action', 'stemspire' ),
        'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}},"color":{"background":"#f9c80e"}}} -->\n<div class="wp-block-group alignfull has-background" style="background-color:#f9c80e;padding-top:60px;padding-bottom:60px">\n<!-- wp:heading {"textAlign":"center"} -->\n<h2 class="has-text-align-center">Ready to Spark Innovation?</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph {"align":"center"} -->\n<p class="has-text-align-center">Book your free trial session with our educators today!</p>\n<!-- /wp:paragraph -->\n<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->\n<div class="wp-block-buttons">\n<!-- wp:button {"style":{"color":{"background":"#1a1a1a","text":"#ffffff"}}} -->\n<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="background-color:#1a1a1a;color:#ffffff">Book Now</a></div>\n<!-- /wp:button -->\n</div>\n<!-- /wp:buttons -->\n</div>\n<!-- /wp:group -->'
    )
);
