<?php
register_block_pattern(
    'stemspire/text-two-columns',
    array(
        'title'   => __( 'Two Column Text Highlight', 'stemspire' ),
        'content' => '<!-- wp:columns -->\n<div class="wp-block-columns">\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading --><h3>Our Mission</h3><!-- /wp:heading -->\n<!-- wp:paragraph --><p>We believe in empowering young minds through engaging, hands-on STEM education.</p><!-- /wp:paragraph --></div>\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading --><h3>Our Vision</h3><!-- /wp:heading -->\n<!-- wp:paragraph --><p>To nurture critical thinkers and innovators of tomorrow by making STEM learning accessible and fun.</p><!-- /wp:paragraph --></div>\n</div>\n<!-- /wp:columns -->'
    )
);
