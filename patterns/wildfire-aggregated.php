<?php
/**
 * Title: Aggregated Wildfire
 * Slug: design-system-wordpress-child-theme-emergency-info/wildfire-aggregated
 * Categories: event, wildfire
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

        <!-- wp:paragraph -->
        <p>The [<strong>Insert Regional District/First Nation</strong>] has issued multiple Evacuation Orders and Alerts across their region due to wildfire. Wildfires in the region pose a risk to life and safety. </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
    <div class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"fontSize":"medium"} -->
        <h2 class="wp-block-heading has-medium-font-size"><strong>Contact links</strong></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-group has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"justify-content-between","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group justify-content-between" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph -->
                <p><a href="#example">City of Cityville website</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-facebook"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-facebook " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph -->
                <p><a href="#example">City of Cityville Facebook</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-twitter-x"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter-x " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph -->
                <p><a href="#example">City of Cityville X (Twitter)</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div id="Evacuation-Alerts" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"color":"var:preset|color|support-red","width":"18px"},"right":[],"bottom":[],"left":[]},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"transparent","className":"w-100","layout":{"type":"default"}} -->
    <div class="wp-block-group w-100 has-transparent-background-color has-background" style="border-radius:10px;border-top-color:var(--wp--preset--color--support-red);border-top-width:18px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"gradient":"linear-gradient(0deg,rgba(7,146,227,0) 0%,rgb(239,242,255) 100%)"}},"className":"aggregated-section-header","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group aggregated-section-header has-background" style="background:linear-gradient(0deg,rgba(7,146,227,0) 0%,rgb(239,242,255) 100%);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":61502,"width":"75px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-move.png' ); ?>" alt="" class="wp-image-61502" style="width:75px" title="" /></figure>
                <!-- /wp:image -->
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.88rem"><strong>Evacuation Orders</strong></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Anyone in the areas under Evacuation Order must leave immediately.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
        <!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"593f6ed7-39ff-43c6-8082-8e9604bf3a3d","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"593f6ed7-39ff-43c6-8082-8e9604bf3a3d","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"593f6ed7-39ff-43c6-8082-8e9604bf3a3d","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"593f6ed7-39ff-43c6-8082-8e9604bf3a3d","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"593f6ed7-39ff-43c6-8082-8e9604bf3a3d","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
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

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"10px","bottomRight":"10px"},"bottom":{"color":"var:preset|color|support-red","width":"12px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100","layout":{"type":"default"}} -->
    <div id="Recommended-Actions" class="wp-block-group w-100 has-support-gray-01-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-bottom-color:var(--wp--preset--color--support-red);border-bottom-width:12px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"top":{"color":"#DBDFF0"},"right":{"color":"#DBDFF0"},"bottom":[],"left":{"color":"#DBDFF0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-color:#DBDFF0;border-right-color:#DBDFF0;border-left-color:#DBDFF0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
            <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended actions for Evacuation Orders</h2>
            <!-- /wp:heading -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"backgroundColor":"support-red","className":"h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group h-100 d-flex align-items-center has-support-red-background-color has-background" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
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

                <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                    <p class="areoi-icon">1</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                        <p>If you are in the area under Evacuation Order, you are at risk and must leave <strong>immediately</strong>.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                    <p class="areoi-icon">2</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"d-inline"} -->
                        <p class="d-inline">Refer to the <strong>Evacuation Order</strong> <strong>and instructions </strong>in the cards above for information specific to your community</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                        <p class="d-inline"><a href="https://ess.gov.bc.ca/" data-type="link" data-id="https://ess.gov.bc.ca/">Emergency Support Services (ESS)</a> and learn how to access short-term basic support</p>
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
                    <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                        <p>Monitor local information channels on the web, social media, radio and TV</p>
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
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div id="Evacuation-Alerts" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"color":"var:preset|color|support-yellow","width":"18px"},"right":[],"bottom":[],"left":[]},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"transparent","className":"w-100","layout":{"type":"default"}} -->
    <div class="wp-block-group w-100 has-transparent-background-color has-background" style="border-radius:10px;border-top-color:var(--wp--preset--color--support-yellow);border-top-width:18px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"gradient":"linear-gradient(0deg,rgba(7,146,227,0) 0%,rgb(239,242,255) 100%)"}},"className":"aggregated-section-header","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group aggregated-section-header has-background" style="background:linear-gradient(0deg,rgba(7,146,227,0) 0%,rgb(239,242,255) 100%);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":61507,"width":"75px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-wait.png' ); ?>" alt="" class="wp-image-61507" style="width:75px" title="" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.88rem"><strong>Evacuation Alerts</strong></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Anyone in the areas under Evacuation Alert must be ready to leave on short notice.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
        <!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"4a22dd7b-f644-4931-97a9-53f1eadc01d6","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"1907da61-f2d2-49cc-9c09-b0ca39c0be11","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"9ca3e444-2f7d-448b-ba81-5add796d6379","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"2255b531-e1b1-4fe9-8f45-ad3d8765ed57","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"362b2760-d130-4e9f-89a9-d6591f688d3f","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"color":"#DBDFF0"}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-border-color has-support-gray-01-background-color has-background" style="border-color:#DBDFF0;border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noreferrer noopener">Evacuation Alert</a></p>
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

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"10px","bottomRight":"10px"},"bottom":{"color":"var:preset|color|support-yellow","width":"12px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100","layout":{"type":"default"}} -->
    <div id="Recommended-Actions" class="wp-block-group w-100 has-support-gray-01-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-bottom-color:var(--wp--preset--color--support-yellow);border-bottom-width:12px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"},"top":{"color":"#DBDFF0"},"right":{"color":"#DBDFF0"},"bottom":[],"left":{"color":"#DBDFF0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-color:#DBDFF0;border-right-color:#DBDFF0;border-left-color:#DBDFF0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
            <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended actions for Evacuation Alerts</h2>
            <!-- /wp:heading -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"backgroundColor":"support-yellow","className":"h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group h-100 d-flex align-items-center has-support-yellow-background-color has-background" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/route-sign.png' ); ?>" alt="" class="wp-image-3365" title="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from officials:</strong></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                    <p class="areoi-icon">1</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                        <p>If you are in the area under Evacuation Alert, be ready to leave on short notice.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                        <p class="d-inline"><a title="" href="https://www2.gov.bc.ca/gov/content?id=A47FAF5F58C44E599B1D716989F76BD5">grab-and-go-bag</a></p>
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
                    <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                        <p>Refer to the Evacuation Alert for information specific to your community</p>
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
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"},"hideBlock":true} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="font-size:1.88rem"><strong>Evacuation Orders</strong></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Anyone in the areas under Evacuation Order must leave immediately.</p>
        <!-- /wp:paragraph -->

        <!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
        <!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"3e3674d9-46fb-44af-a076-705375ab4ac1","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Order</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Order</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Order</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"f5b2f030-984f-4d54-a357-6401806704f7","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Order</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Order</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->
        <!-- /wp:areoi/row -->

        <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem"><strong>Recommended actions for Evacuation Orders</strong></h2>
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
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from <a href="https://www.civicinfo.bc.ca/directories">your local authority or First Nation</a>:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"},"hideBlock":true} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading -->
        <h2 class="wp-block-heading"><strong>Evacuation Alerts</strong></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Anyone in the areas under Evacuation Alert must be ready to leave on short notice.</p>
        <!-- /wp:paragraph -->

        <!-- wp:areoi/row {"block_id":"2892f0a3-bf3d-4058-9f57-8dce52bd7255","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-2","row_cols_lg":"row-cols-lg-3","className":"g-3"} -->
        <!-- wp:areoi/column {"block_id":"fd9939ec-fbc4-4c19-8de0-033b45bfd528"} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"3e3674d9-46fb-44af-a076-705375ab4ac1","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Alert</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Alert</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
            <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
                <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p><strong>Evacuation Alert</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
                <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                        <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
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
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"f5b2f030-984f-4d54-a357-6401806704f7","hideBlock":true} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"aggregated-card d-flex flex-column h-100","layout":{"type":"default"}} -->
        <div class="wp-block-group aggregated-card d-flex flex-column h-100" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":{"topLeft":"10px","topRight":"10px"}}},"className":"hazard-border","layout":{"type":"default"}} -->
            <div class="wp-block-group hazard-border" style="border-top-left-radius:10px;border-top-right-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"bottom":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"},"left":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"},"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"support-gray-01","className":"hazard-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong>Evacuation Alert</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"backgroundColor":"white","className":"flex-fill","layout":{"type":"default"}} -->
            <div class="wp-block-group flex-fill has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-geo-alt"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Impact area</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-filetype-pdf"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-filetype-pdf " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"text-break"} -->
                    <p class="text-break" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#example" target="_blank" rel="noopener" title="#example">Evacuation Alert</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->
        <!-- /wp:areoi/row -->

        <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem"><strong>Recommended actions for Evacuation Alerts</strong></h2>
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
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from <a href="https://www.civicinfo.bc.ca/directories">your local authority or First Nation</a>:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
                    <p>Refer to the <strong>Evacuation Alert PDF</strong> for information specific to your community.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
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

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
<div id="Definitions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Understanding emergency events</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div id="Evacuation-Stages" class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size"><strong>Evacuation stages</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"87625025-08d4-4d65-8758-be4cc859a90a","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-3","className":"three-card gy-2 gx-0"} -->
                    <!-- wp:areoi/column {"block_id":"901d49da-a867-4f26-bf34-611f971615ee"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"radius":{"topLeft":"10px","bottomLeft":"10px"},"top":{"color":"var:preset|color|support-yellow","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="border-top-left-radius:10px;border-bottom-left-radius:10px;border-top-color:var(--wp--preset--color--support-yellow);border-top-width:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-right-width:1px;border-bottom-color:var(--wp--preset--color--support-gray-02);border-bottom-width:1px;border-left-color:var(--wp--preset--color--support-gray-02);border-left-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:image {"id":36062,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-alert.png' ); ?>" alt="" class="wp-image-36062" title="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group text-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>Evacuation Alert</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>Be ready to leave on short notice.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:areoi/column -->

                    <!-- wp:areoi/column {"block_id":"fd99a4e4-f44d-4f25-9d9e-5a3110eb9cf5"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"top":{"color":"var:preset|color|support-red","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--support-red);border-top-width:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-right-width:1px;border-bottom-color:var(--wp--preset--color--support-gray-02);border-bottom-width:1px;border-left-color:var(--wp--preset--color--support-gray-02);border-left-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="border-right-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:image {"id":36052,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-move.png' ); ?>" alt="" class="wp-image-36052" title="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group text-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>Evacuation Order</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>You are at risk. Leave the area immediately.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:areoi/column -->

                    <!-- wp:areoi/column {"block_id":"fd99a4e4-f44d-4f25-9d9e-5a3110eb9cf5"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"radius":{"topRight":"10px","bottomRight":"10px"},"top":{"color":"var:preset|color|support-green","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div class="wp-block-group h-100 has-white-background-color has-background" style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-color:var(--wp--preset--color--support-green);border-top-width:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-right-width:1px;border-bottom-color:var(--wp--preset--color--support-gray-02);border-bottom-width:1px;border-left-color:var(--wp--preset--color--support-gray-02);border-left-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:image {"id":36057,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-rescind.png' ); ?>" alt="" class="wp-image-36057" title="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group text-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>Evacuation Rescind</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>The threat to life and safety has passed.</p>
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
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"},"hideBlock":true} -->
        <div id="Alert-Instructions" class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium","layout":{"type":"default"}} -->
            <div class="wp-block-group has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
                <h3 class="wp-block-heading has-medium-font-size"><strong>What to do if you get a BC Emergency Alert</strong></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Learn what to do if you receive a BC Emergency Alert on your cell phone, TV or radio.</p>
                <!-- /wp:paragraph -->

                <!-- wp:areoi/row {"block_id":"87625025-08d4-4d65-8758-be4cc859a90a","row_cols_xs":"row-cols-1","row_cols_md":"row-cols-md-1","row_cols_lg":"row-cols-lg-3","className":"gy-3"} -->
                <!-- wp:areoi/column {"block_id":"e2239b6a-8fba-4b94-8e1c-01cfcdeab91d","className":"hazard_type-earthquake"} -->
                <!-- wp:group {"className":"soft-shadow h-100 d-flex hazard-border","style":{"border":{"radius":"10px","top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                <div class="wp-block-group soft-shadow h-100 d-flex hazard-border has-white-background-color has-background" style="border-radius:10px;border-top-style:none;border-top-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3862,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/alert-stop.png' ); ?>" alt="" class="wp-image-3862" style="aspect-ratio:1;object-fit:cover;width:100px" title="" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fixed","flexSize":"90%"}},"layout":{"type":"constrained","justifyContent":"left","wideSize":"","contentSize":""}} -->
                        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem","fontStyle":"normal","fontWeight":"600"}}} -->
                            <h3 class="wp-block-heading" style="font-size:1.38rem;font-style:normal;font-weight:600">Stop what you are doing</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"23dadb7a-f795-43ca-93ee-823b250ec0c1","className":"hazard_type-wildfire"} -->
                <!-- wp:group {"className":"soft-shadow h-100 d-flex hazard-border","style":{"border":{"radius":"10px","top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                <div class="wp-block-group soft-shadow h-100 d-flex hazard-border has-white-background-color has-background" style="border-radius:10px;border-top-style:none;border-top-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"id":37597,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/alert-notification.png' ); ?>" alt="" class="wp-image-37597" style="aspect-ratio:1;object-fit:cover;width:100px" title="" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fixed","flexSize":"90%"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem","fontStyle":"normal","fontWeight":"600"}}} -->
                            <h3 class="wp-block-heading" style="font-size:1.38rem;font-style:normal;font-weight:600">Read the alert and find out if you are in the affected area</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"ea327acd-f78d-4e8d-bb5a-f6d2a335953f","className":"hazard_type-hazardous-material-spill"} -->
                <!-- wp:group {"className":"soft-shadow h-100 d-flex hazard-border","style":{"border":{"radius":"10px","top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                <div class="wp-block-group soft-shadow h-100 d-flex hazard-border has-white-background-color has-background" style="border-radius:10px;border-top-style:none;border-top-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"id":3877,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/alert-directions.png' ); ?>" alt="" class="wp-image-3877" style="aspect-ratio:1;object-fit:cover;width:100px" title="" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fixed","flexSize":"90%"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem","fontStyle":"normal","fontWeight":"600"}}} -->
                            <h3 class="wp-block-heading" style="font-size:1.38rem;font-style:normal;font-weight:600">Follow all directions immediately</h3>
                            <!-- /wp:heading -->
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

            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group text-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/button {"block_id":"008d20b5-cf0b-4c94-b163-67b91fb5102a","size":"Default","url":"https://www2.gov.bc.ca/gov/content?id=30DA852E39E7438DB8DA9B23D75A9073","text":"Learn about BC Emergency Alerts","icon":"bi-arrow-up-right"} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div id="Links-Resources" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Links and resources</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":2369,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/browser.png' ); ?>" alt="" class="wp-image-2369" title="" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www2.gov.bc.ca/gov/content/safety/wildfire-status">BC Wildfire Service</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Latest wildfire information and provincial fire bans. </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>For updates on specific fire locations and status, review <a href="https://wildfiresituation.nrs.gov.bc.ca/list">the BC Wildfire Fire List</a>.</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www2.gov.bc.ca/gov/content/safety/emergency-management/preparedbc/evacuation-recovery/evacuee-guidance#wildfire" title="">Wildfire evacuee guidance</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Emergency evacuee guidance information for the public. Always follow the instructions of your Local Authority or First Nation.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www.drivebc.ca/" title="">DriveBC</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Latest travel and highway updates in BC. </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Find your regional&nbsp;<a href="https://drivebc.ca/static/mobile/twitter/regions.html">DriveBC X account</a>.</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www2.gov.bc.ca/gov/content/health/managing-your-health/mental-health-substance-use/virtual-mental-health-supports" title="">Mental Health Supports</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Information about services available for British Columbians who are experiencing anxiety, depression or other mental health challenges.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www2.gov.bc.ca/gov/content/safety/emergency-management/preparedbc/know-your-hazards/wildfires" title="">PreparedBC</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Learn how to prepare for wildfires with resources from PreparedBC.</p>
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