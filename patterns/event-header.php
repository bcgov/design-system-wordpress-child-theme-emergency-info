<?php

/**
 * Title: Event Header
 * Slug: design-system-wordpress-child-theme-emergency-info/event-header
 * Categories: event
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"categories":["event"],"patternName":"design-system-wordpress-child-theme-emergency-info/event-header","name":"Event Header"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:emergency-info/post-event-status /-->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":"10px"}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
    <div id="Event-Information" class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"d-none d-sm-block","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group d-none d-sm-block" style="padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:0"><!-- wp:emergency-info/post-hazard-image /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><!-- wp:emergency-info/post-hazard-title {"className":"m-0","fontSize":"extra-large"} /--></div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-large"} /-->

                    <!-- wp:emergency-info/post-emergency-alert {"fontSize":"medium"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"state-of-emergency-bcgov-logo","layout":{"type":"constrained"}} -->
                <div class="wp-block-group state-of-emergency-bcgov-logo"><!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"justify-content-between","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"0","left":"0"}},"border":{"top":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group justify-content-between" style="border-top-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Updated on</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"updated_date","displayLayout":"inline-block","style":{"spacing":{"padding":{"right":"0.2rem","left":"0.2rem"}}},"fontSize":"small"} /-->

                        <!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"updated_time","displayLayout":"inline-block","fontSize":"small"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:emergency-info/post-social-share /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->