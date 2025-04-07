<?php
register_block_pattern(
    'stemspire/team-intro',
    array(
        'title'   => __( 'Team Introduction', 'stemspire' ),
        'content' => '<!-- wp:group -->\n<div class="wp-block-group">\n<!-- wp:heading {"textAlign":"center"} -->\n<h2 class="has-text-align-center">Meet Our Educators</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class="wp-block-columns">\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:image {"url":"https://via.placeholder.com/150"} /-->\n<!-- wp:paragraph --><p><strong>Ms. Jane Doe</strong><br>Physics & Robotics</p><!-- /wp:paragraph --></div>\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:image {"url":"https://via.placeholder.com/150"} /-->\n<!-- wp:paragraph --><p><strong>Mr. John Smith</strong><br>Mathematics</p><!-- /wp:paragraph --></div>\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:image {"url":"https://via.placeholder.com/150"} /-->\n<!-- wp:paragraph --><p><strong>Ms. Alice Lee</strong><br>STEM Innovation</p><!-- /wp:paragraph --></div>\n</div>\n<!-- /wp:columns -->\n</div>\n<!-- /wp:group -->'
    )
);
