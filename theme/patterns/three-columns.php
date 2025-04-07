<?php
register_block_pattern(
    'stemspire/three-columns',
    array(
        'title'   => __( 'Three Column Features', 'stemspire' ),
        'content' => <<<HTML
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading --><h3>Personalized Teaching</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Tailored worksheets and mentorship to fit every child's learning pace.</p><!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading --><h3>Passionate Educators</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Qualified teachers who inspire confidence and curiosity in every student.</p><!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading --><h3>STEM Focused</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Learning that's future-ready – Science, Technology, Engineering & Maths at heart.</p><!-- /wp:paragraph --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
HTML
    )
);
