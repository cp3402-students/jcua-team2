<?php
register_block_pattern(
    'stemspire/faq-section',
    array(
        'title'   => __( 'FAQ Section', 'stemspire' ),
        'content' => '<!-- wp:group -->\n<div class="wp-block-group">\n<!-- wp:heading {"textAlign":"center"} -->\n<h2 class="has-text-align-center">Frequently Asked Questions</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class="wp-block-columns">\n<!-- wp:column -->\n<div class="wp-block-column">\n<!-- wp:paragraph --><p><strong>What ages do you support?</strong><br>We support students aged 6-16 with customized learning.</p><!-- /wp:paragraph -->\n\n<!-- wp:paragraph --><p><strong>Is there a free trial?</strong><br>Yes! We offer one free session for new students.</p><!-- /wp:paragraph -->\n</div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column">\n<!-- wp:paragraph --><p><strong>Are sessions in person or online?</strong><br>We offer both in-person and online options for flexibility.</p><!-- /wp:paragraph -->\n\n<!-- wp:paragraph --><p><strong>What subjects are covered?</strong><br>Math, Science, Coding, Robotics and more.</p><!-- /wp:paragraph -->\n</div>\n<!-- /wp:column -->\n</div>\n<!-- /wp:columns -->\n</div>\n<!-- /wp:group -->'
    )
);
