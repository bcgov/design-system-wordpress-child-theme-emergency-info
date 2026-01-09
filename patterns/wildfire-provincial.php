<?php
/**
 * Title: Provincial Aggregated Wildfire
 * Slug: design-system-wordpress-child-theme-emergency-info/wildfire-provincial
 * Categories: event, wildfire
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/event-header"} /-->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"left":{"width":"10px"}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div id="Event-Summary" class="wp-block-group hazard-border" style="border-left-width:10px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88em"}}} -->
        <h2 class="wp-block-heading" style="font-size:1.88em">Current situation</h2>
        <!-- /wp:heading -->

        <!-- wp:post-excerpt /-->

        <!-- wp:paragraph {"hideBlock":true} -->
        <p>ADD TO EXCERPT: Wildfires are happening in areas of B.C. For the most up to date information, visit your local authority or First Nation website.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div id="Aggregated-Areas" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|transparent"}},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--transparent);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="font-size:1.88rem"><strong>Local government</strong> <strong>evacuation information</strong></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Multiple Evacuation Alerts and Orders have been issued for areas in B.C. Follow instructions from your local authority.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
    <!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:paragraph -->
                    <p><strong>City of Cityville</strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"3e3674d9-46fb-44af-a076-705375ab4ac1","hideBlock":true} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>City of Cityville</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"c060e4a6-9364-44ec-8286-7d92772f19c9","hideBlock":true} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>City of Cityville</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"77fb6e64-99eb-4bb4-a1ed-624f9f47da60","hideBlock":true} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>City of Cityville</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"2f5cc091-8956-4e61-bd0e-11daf569aa47","hideBlock":true} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>City of Cityville</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"f5b2f030-984f-4d54-a357-6401806704f7","hideBlock":true} -->
    <!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>City of Cityville</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville website</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville X (Twitter)</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">Cityville Facebook</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->
    <!-- /wp:areoi/row -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.88rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.88rem"><strong>First Nations evacuation information</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Multiple Evacuation Alerts and Orders have been issued by First Nations. </p>
<!-- /wp:paragraph -->

<!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
<!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->

<!-- wp:areoi/column {"block_id":"efc903e3-a826-4d17-979a-be524e41232e","hideBlock":true} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->

<!-- wp:areoi/column {"block_id":"5f8f11e8-06ea-41e5-883d-3c610fc05267","hideBlock":true} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->

<!-- wp:areoi/column {"block_id":"e20f366d-78db-40ca-b7b8-38fd60c4ed59","hideBlock":true} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->

<!-- wp:areoi/column {"block_id":"881bf94d-9f35-4eef-8edf-af94b89d6dd8","hideBlock":true} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->

<!-- wp:areoi/column {"block_id":"38737619-b959-402d-85dd-8583e5e63c2f","hideBlock":true} -->
<!-- wp:group {"className":"aggregated-card d-flex flex-column h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"hazard-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /-->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>First Nation</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation website</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-twitter"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation X (Twitter)</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-facebook"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"className":"text-break","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" title="#example">First Nation Facebook</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:areoi/column -->
<!-- /wp:areoi/row -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended actions for Evacuation Orders</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/route-sign.png' ); ?>" alt="" class="wp-image-3365" title="" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from <a href="https://www.civicinfo.bc.ca/directories">your local authority or First Nation</a>:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>If you are in the area under Evacuation Order, you are at risk. You must leave <strong>immediately</strong>.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Refer to the <strong>Evacuation Order</strong> <strong>PDF </strong>for information specific to your community</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><strong>Create a profile </strong>or <strong>login </strong>to </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon  d-inline-block"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"> <a href="https://ess.gov.bc.ca/">Emergency Support Services</a> (ESS) and learn how to access short-term basic support.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">4</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                    <p>Monitor local information channels on the web, social media, radio and TV. </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended actions for Evacuation Alerts</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/route-sign.png' ); ?>" alt="" class="wp-image-3365" title="" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from <a href="https://www.civicinfo.bc.ca/directories">your local authority or First Nation</a>:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>If you are in the area under Evacuation Alert, <strong>be ready to leave on short notice</strong>.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Review your </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon  d-inline-block"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"> <a href="https://www2.gov.bc.ca/gov/content?id=C8145643BB8D48FE8ECA30DCCDEB75DB" title="">emergency plan</a> </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">and stock your </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon  d-inline-block"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"> <a href="https://www2.gov.bc.ca/gov/content?id=A47FAF5F58C44E599B1D716989F76BD5" title="">grab-and-go-bag.</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                    <p>Refer to the <strong>Evacuation Alert PDF</strong> for information specific to your community.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">4</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                    <p>Monitor local information channels on the web, social media, radio and TV. </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:block {"ref":44712} /-->