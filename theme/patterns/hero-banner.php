<?php
register_block_pattern(
    'stemspire/hero-banner',
    array(
        'title'   => __( 'Hero Banner', 'stemspire' ),
        'content' => <<<HTML
<!-- wp:cover {"overlayColor":"black","dimRatio":40,"minHeight":500,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px">
    <span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px"}}} -->
        <h1 class="has-text-align-center" style="font-size:64px">Explore. Learn. Excel.</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Building strong foundations in Math and Science through engaging, hands-on learning experiences.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}}} -->
            <div class="wp-block-button">
                <a class="wp-block-button__link" style="text-transform:uppercase">View Programs</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->
HTML
    )
);
