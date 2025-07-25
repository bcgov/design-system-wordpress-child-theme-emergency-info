<?php
/**
 * Title: Tsunami
 * Slug: design-system-wordpress-child-theme-emergency-info/tsunami
 * Categories: event, tsunami
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/event-header"} /-->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"left":{"width":"10px"}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
<div id="Event-Summary" class="wp-block-group hazard-border" style="border-left-width:10px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88em"}}} -->
        <h2 class="wp-block-heading" style="font-size:1.88em">Current situation</h2>
        <!-- /wp:heading -->

        <!-- wp:post-excerpt /-->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
        <div class="wp-block-group has-small-font-size"><!-- wp:areoi/icon {"block_id":"be82c5fc-09b4-4e93-9f25-994b7c8e732f","style":"text-light","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-light bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong><a href="https://tsunami.gov/">National Tsunami Warning Center (NTWC)</a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small","hideBlock":true} -->
        <div class="wp-block-group has-small-font-size"><!-- wp:areoi/icon {"block_id":"be82c5fc-09b4-4e93-9f25-994b7c8e732f","style":"text-light","icon":"bi-link"} -->
            <div class="wp-block-areoi-icon areoi-icon"><i class="text-light bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong><a href="#example">This tsunami is linked to a current earthquake</a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p>A [XX magnitude] earthquake has occurred [at location]. A Tsunami [Warning, Advisory, Watch] has been issued for BC [or, the risk is currently being evaluated].</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>This page will be updated as information becomes available.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div id="Preliminary-Parameters" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:areoi/row {"block_id":"61a593c9-d361-43de-80d4-746ded96d136","className":"gy-3"} -->
    <!-- wp:areoi/column {"block_id":"7ee956ab-b33f-441a-b915-7331861d6936","col_sm":"col-sm-12","col_md":"col-md-6","hideBlock":true} -->
    <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"secondary-brand","className":"emergency-map","layout":{"type":"default"}} -->
    <div class="wp-block-group emergency-map has-secondary-brand-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/bc-map-tsunami.png' ); ?>","id":1552,"dimRatio":0,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"h-100 d-flex align-items-start"} -->
        <div class="wp-block-cover is-light h-100 d-flex align-items-start" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1552" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/bc-map-tsunami.png' ); ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-white-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:1.88rem"><strong>Tsunami Notification Zones</strong></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:areoi/button {"block_id":"008d20b5-cf0b-4c94-b163-67b91fb5102a","style":"btn-warning","url":"https://governmentofbc.maps.arcgis.com/apps/webappviewer/index.html?id=950b4eec577a4dc5b298a61adab41c06","text":"Open Emergency Map","include_icon":true,"icon":"bi-arrow-up-right","className":"text-primary"} /-->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"a97adb4d-aef1-44e1-b54d-b12a176d0fd8"} -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-baseline","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-baseline"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:heading {"fontSize":"medium"} -->
                <h2 class="wp-block-heading has-medium-font-size"><strong>Earthquake summary</strong></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"c37c377c-419d-47fe-9505-1f45a91b31b3","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-3","className":"g-2"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>Local Time</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>15:07:30 PDT</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>Magnitude</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>3.4</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"c9c82724-a047-4767-ad6c-427a64e0c223"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>Depth</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>5.00 km</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"f1545360-6e5a-4d24-8aba-4b06ac7c47de"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>Location</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Location</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->
    <!-- /wp:areoi/row -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"},"hideBlock":true} -->
<div id="Areas-Impacted" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
    <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Areas of impact</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","className":"tsunami-zone-map","layout":{"type":"default"}} -->
    <div class="wp-block-group tsunami-zone-map has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:media-text {"align":"wide","mediaId":4137,"mediaLink":"https://vanity.blog.gov.bc.ca/zone_a/","mediaType":"image","mediaWidth":25,"mediaSizeSlug":"full","imageFill":true,"focalPoint":{"x":0.63,"y":0.58},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:25% auto">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-a.jpg' ); ?>);background-position:63% 58%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-a.jpg' ); ?>" alt="" class="wp-image-4137 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"h-100","layout":{"type":"default"}} -->
                <div class="wp-block-group h-100"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false},"className":"no-circle"} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center  no-circle"><i class="text-dark bi-geo-alt " style="font-size:36px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:heading {"level":3,"fontSize":"small"} -->
                            <h3 class="wp-block-heading has-small-font-size"><strong>Zone A:</strong> North Coast and Haida Gwaii</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"512c2714-8fee-4154-9552-24a153e80132","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2"} -->
                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97"} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-filetype-pdf","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:paragraph -->
                            <p><strong><a href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/tsunami-zones/zone_a.pdf" target="_blank" rel="noopener" title="">Detailed map of Zone A (PDF)</a></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->

                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97","hideBlock":true} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                            <p><strong>Expected Wave Times</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Prince Rupert: 11:02am</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Haida Gwaii: 11:03am</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->
                        <!-- /wp:areoi/row -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","className":"tsunami-zone-map","layout":{"type":"default"}} -->
    <div class="wp-block-group tsunami-zone-map has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:media-text {"align":"wide","mediaId":4132,"mediaLink":"https://vanity.blog.gov.bc.ca/zone-b/","mediaType":"image","mediaWidth":25,"mediaSizeSlug":"full","imageFill":true,"focalPoint":{"x":0.55,"y":0.6},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:25% auto">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-b.jpg' ); ?>);background-position:55% 60%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-b.jpg' ); ?>" alt="" class="wp-image-4132 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"h-100","layout":{"type":"default"}} -->
                <div class="wp-block-group h-100"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false},"className":"no-circle"} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center  no-circle"><i class="text-dark bi-geo-alt " style="font-size:36px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:heading {"level":3,"fontSize":"small"} -->
                            <h3 class="wp-block-heading has-small-font-size"><strong>Zone B:</strong> Central Coast and Northeast Vancouver Island coast including Kitimat, Bella Coola, and Port Hardy</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"512c2714-8fee-4154-9552-24a153e80132","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2"} -->
                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97"} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-filetype-pdf","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:paragraph -->
                            <p><strong><a href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/tsunami-zones/zone-b.pdf" target="_blank" rel="noopener" title="">Detailed map of Zone B (PDF)</a></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->

                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97","hideBlock":true} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                            <p><strong>Expected Wave Times</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Prince Rupert: 11:02am</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Haida Gwaii: 11:03am</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->
                        <!-- /wp:areoi/row -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","className":"tsunami-zone-map","layout":{"type":"default"}} -->
    <div class="wp-block-group tsunami-zone-map has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:media-text {"align":"wide","mediaId":4127,"mediaLink":"https://vanity.blog.gov.bc.ca/zone_c/","mediaType":"image","mediaWidth":25,"mediaSizeSlug":"full","imageFill":true,"focalPoint":{"x":0.58,"y":0.57},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:25% auto">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-c.jpg' ); ?>);background-position:58% 57%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-c.jpg' ); ?>" alt="" class="wp-image-4127 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"h-100","layout":{"type":"default"}} -->
                <div class="wp-block-group h-100"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false},"className":"no-circle"} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center  no-circle"><i class="text-dark bi-geo-alt " style="font-size:36px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:heading {"level":3,"fontSize":"small"} -->
                            <h3 class="wp-block-heading has-small-font-size"><strong>Zone C:</strong> West Coast of Vancouver Island from Cape Scott to Port Renfrew</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"512c2714-8fee-4154-9552-24a153e80132","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2"} -->
                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97"} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-filetype-pdf","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:paragraph -->
                            <p><strong><a href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/tsunami-zones/zone_c.pdf" target="_blank" rel="noopener" title="">Detailed map of Zone C (PDF)</a></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->

                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97","hideBlock":true} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                            <p><strong>Expected Wave Times</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Prince Rupert: 11:02am</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Haida Gwaii: 11:03am</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->
                        <!-- /wp:areoi/row -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","className":"tsunami-zone-map","layout":{"type":"default"}} -->
    <div class="wp-block-group tsunami-zone-map has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:media-text {"align":"wide","mediaId":4122,"mediaLink":"https://vanity.blog.gov.bc.ca/zone_d/","mediaType":"image","mediaWidth":25,"mediaSizeSlug":"full","imageFill":true,"focalPoint":{"x":0.84,"y":0.77},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:25% auto">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-d.jpg' ); ?>);background-position:84% 77%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-d.jpg' ); ?>" alt="" class="wp-image-4122 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"h-100","layout":{"type":"default"}} -->
                <div class="wp-block-group h-100"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false},"className":"no-circle"} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center  no-circle"><i class="text-dark bi-geo-alt " style="font-size:36px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:heading {"level":3,"fontSize":"small"} -->
                            <h3 class="wp-block-heading has-small-font-size"><strong>Zone D:</strong> Juan de Fuca Strait from Jordan River to Greater Victoria (including the Saanich Peninsula)</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"512c2714-8fee-4154-9552-24a153e80132","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2"} -->
                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97"} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-filetype-pdf","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:paragraph -->
                            <p><strong><a href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/tsunami-zones/zone_d.pdf" target="_blank" rel="noopener" title="">Detailed map of Zone D (PDF)</a></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->

                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97","hideBlock":true} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                            <p><strong>Expected Wave Times</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Prince Rupert: 11:02am</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Haida Gwaii: 11:03am</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->
                        <!-- /wp:areoi/row -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","className":"tsunami-zone-map","layout":{"type":"default"}} -->
    <div class="wp-block-group tsunami-zone-map has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:media-text {"align":"wide","mediaId":4117,"mediaLink":"https://vanity.blog.gov.bc.ca/zone_e/","mediaType":"image","mediaWidth":25,"mediaSizeSlug":"full","imageFill":true,"focalPoint":{"x":0.76,"y":0.47},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:25% auto">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-e.jpg' ); ?>);background-position:76% 47%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/zone-e.jpg' ); ?>" alt="" class="wp-image-4117 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"h-100","layout":{"type":"default"}} -->
                <div class="wp-block-group h-100"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false},"className":"no-circle"} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center  no-circle"><i class="text-dark bi-geo-alt " style="font-size:36px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:heading {"level":3,"fontSize":"small"} -->
                            <h3 class="wp-block-heading has-small-font-size"><strong>Zone E:</strong> Strait of Georgia (including the Gulf Islands), Greater Vancouver and Johnstone Strait </h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/row {"block_id":"512c2714-8fee-4154-9552-24a153e80132","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2"} -->
                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97"} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-filetype-pdf","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                            <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                            <!-- /wp:areoi/icon -->

                            <!-- wp:paragraph -->
                            <p><strong><a href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/tsunami-zones/zone_e.pdf" target="_blank" rel="noopener" title="">Detailed map of Zone E (PDF)</a></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->

                        <!-- wp:areoi/column {"block_id":"fc9fa810-eb73-4701-a859-d2aa4ebf5e97","hideBlock":true} -->
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                            <p><strong>Expected Wave Times</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Prince Rupert: 11:02am</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                            <p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Haida Gwaii: 11:03am</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:areoi/column -->
                        <!-- /wp:areoi/row -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended actions</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"hazard-background-secondary h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/route-sign.png' ); ?>" alt="" class="wp-image-3365" title="" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                <p>People in coastal areas that are at risk are advised to stay away from the shoreline and heed instructions from local authorities. If you are in a tsunami [advisory/watch/warning] area:</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Leave the water now</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Move out of the ocean, off the beach, and away from harbours, marinas, breakwaters, bays and inlets</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Don't go to the ocean</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Do not go to the ocean to observe the tsunami</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Follow official instructions</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Be alert to and follow instructions from your local emergency officials because they may have more detailed or specific information for your location</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">4</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Move your boat</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Boat operators: where time and conditions permit, move your boat out to sea to a depth of at least 180 feet; if at sea avoid entering shallow water, harbours, marinas, bays, and inlets to avoid floating and submerged debris and strong currents</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">5</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Wait for the 'All Clear'</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Do not return to the coast until local emergency officials indicate it is safe to do so</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">6</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Do NOT call 9-1-1 to report the earthquake</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>It is important to leave these lines open for those in urgent need. Only call 9-1-1 when a life is at stake</p>
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
<div id="Links-Resources" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Links and resources</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"hazard-background-secondary h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":2369,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/browser.png' ); ?>" alt="" class="wp-image-2369" title="" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://weather.gc.ca/?layers=alert#wb-cont">Environment Canada Alerts</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Use this site to view Tsunami Notification Zones on an interactive map.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://tsunami.gov/">National Tsunami Warning Center (NTWC)</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>NTWC provides international information and alerts on earthquakes and potential tsunamis.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www.earthquakescanada.nrcan.gc.ca/index-en.php" title="">Natural Resources Canada</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Earthquakes Canada provides information on earthquakes that occur in Canada including magnitude, location, time and felt reports.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://earthquake.usgs.gov/earthquakes/map/?extent=-32.39852,-214.62891&amp;extent=75.36451,24.43359">U.S. Geological Survey (USGS)</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>USGS provides international information on earthquakes.</p>
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
<div id="Threat-Levels" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Tsunami threat levels</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"border":{"left":{"color":"#ff0000","width":"10px"}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-left-color:#ff0000;border-left-width:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"1ef96824-6efe-4f5e-b478-5c8bcc632466","style":"text-dark","size":"60","icon":"bi-tsunami"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-tsunami " style="font-size:60px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h3 class="wp-block-heading" style="font-size:1.38rem"><strong>Warning</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Flood wave possible. Full evacuation suggested.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"border":{"left":{"color":"#ff8a00","width":"10px"}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-left-color:#ff8a00;border-left-width:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"1ef96824-6efe-4f5e-b478-5c8bcc632466","style":"text-dark","size":"60","icon":"bi-tsunami"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-tsunami " style="font-size:60px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h3 class="wp-block-heading" style="font-size:1.38rem"><strong>Advisory</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Strong currents likely. Stay away from the shore.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"border":{"left":{"color":"#ffe600","width":"10px"}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-left-color:#ffe600;border-left-width:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"1ef96824-6efe-4f5e-b478-5c8bcc632466","style":"text-dark","size":"60","icon":"bi-tsunami"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-tsunami " style="font-size:60px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h3 class="wp-block-heading" style="font-size:1.38rem"><strong>Watch</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Danger level not yet known. Stay alert for more information</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"border":{"left":{"color":"#053ead","width":"10px"}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-left-color:#053ead;border-left-width:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"1ef96824-6efe-4f5e-b478-5c8bcc632466","style":"text-dark","size":"60","icon":"bi-info-lg"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-info-lg " style="font-size:60px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h3 class="wp-block-heading" style="font-size:1.38rem"><strong>Information Statement</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Minor waves at most. No action suggested.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"border":{"left":{"color":"#59595c","width":"10px"}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-left-color:#59595c;border-left-width:10px;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"1ef96824-6efe-4f5e-b478-5c8bcc632466","style":"text-dark","size":"60","icon":"bi-dash"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-dash " style="font-size:60px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h3 class="wp-block-heading" style="font-size:1.38rem"><strong>Cancellation</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Tidal gauges show no wave activity. Confirm safety for local areas.</p>
                    <!-- /wp:paragraph -->
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
<div id="Tsunami-Zones" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Know your Tsunami Notification Zones</h2>
        <!-- /wp:heading -->

        <!-- wp:areoi/row {"block_id":"a52b3f32-fb53-4756-85b7-7a93cd2c0e8e","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-1","row_cols_lg":"row-cols-lg-2","className":"g-0 know-your-zones"} -->
        <!-- wp:areoi/column {"block_id":"2d2e7adc-32df-4a84-86e1-bc34f81967a7"} -->
        <!-- wp:image {"id":4142,"sizeSlug":"full","linkDestination":"media"} -->
        <figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/tsunami-zones.jpg' ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/tsunami-zones.jpg' ); ?>" alt="Map of the tsunami notification zones" class="wp-image-4142" title="" /></a></figure>
        <!-- /wp:image -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"2d2e7adc-32df-4a84-86e1-bc34f81967a7"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","className":"h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group h-100 has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
            <h3 class="wp-block-heading has-small-font-size"><strong>Zone A</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>North Coast and Haida Gwaii</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"small"} -->
            <h3 class="wp-block-heading has-small-font-size"><strong>Zone B</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Central Coast and Northeast Vancouver Island Coast including Kitimat, Bella Coola, and Port Hardy</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"small"} -->
            <h3 class="wp-block-heading has-small-font-size"><strong>Zone C</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>West Coast of Vancouver Island from Cape Scott to Port Renfrew</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"small"} -->
            <h3 class="wp-block-heading has-small-font-size"><strong>Zone D</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Juan de Fuca Strait from Jordan River to Greater Victoria (including the Saanich Peninsula)</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"small"} -->
            <h3 class="wp-block-heading has-small-font-size"><strong>Zone E</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Strait of Georgia (including the Gulf Islands)<br>Greater Vancouver and Johnstone Strait</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->
        <!-- /wp:areoi/row -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->