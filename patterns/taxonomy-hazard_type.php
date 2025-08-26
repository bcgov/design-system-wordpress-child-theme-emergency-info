<?php
/**
 * Title: Hazard Type (Taxonomy Archive Page)
 * Slug: design-system-wordpress-child-theme-emergency-info/taxonomy-hazard_type
 * Categories: page
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"alignwide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group">

                <!-- wp:group {"backgroundColor":"support-gray-01","layout":{"type":"constrained"}} -->
                <div id="Current-Emergencies" class="wp-block-group has-support-gray-01-background-color has-background"><!-- wp:group {"className":"alignwide","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:query-title {"type":"archive","showPrefix":false} /-->

                        <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","left":"0"}},"typography":{"fontSize":"1.88rem"}}} -->
                        <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-right:0;margin-left:0;font-size:1.88rem">Current emergencies in B.C.</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
                        <p class="has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">Find current emergencies by last updated date. Emergencies no longer active are not shown.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:query {"queryId":1,"query":{"perPage":30,"pages":0,"offset":0,"postType":"event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"className":"is-style-default"} -->
                        <div class="wp-block-query is-style-default"><!-- wp:post-template {"lock":{"move":false,"remove":false},"className":"event-query-loop","layout":{"type":"default"}} -->
                            <!-- wp:group {"lock":{"move":false,"remove":false},"className":"hazard-border soft-shadow h-100","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"top":{"width":"10px"},"radius":"10px"}},"backgroundColor":"white","layout":{"type":"default"}} -->
                            <div class="wp-block-group hazard-border soft-shadow h-100 has-white-background-color has-background" style="border-radius:10px;border-top-width:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"h-100","style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group h-100" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                    <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-hazard-image /--></div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                                        <div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><!-- wp:emergency-info/post-hazard-title {"className":"m-0","fontSize":"medium"} /--></div>
                                            <!-- /wp:group -->

                                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                                    <div class="wp-block-group has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.19rem","top":{"width":"0.3rem","color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group" style="border-radius:0.19rem;border-top-color:var(--wp--preset--color--support-gray-02);border-top-width:0.3rem;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"></div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.19rem","top":{"width":"0rem","style":"none"}}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group" style="border-radius:0.19rem;border-top-style:none;border-top-width:0rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:emergency-info/post-emergency-alert /-->

                                            <!-- wp:emergency-info/post-meta-display {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}}} /-->

                                            <!-- wp:emergency-info/post-meta-display {"valueNum":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->

                                            <!-- wp:group {"className":"is-layout-flex flex-nowrap","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
                                            <div class="wp-block-group is-layout-flex flex-nowrap" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:areoi/icon {"block_id":"4bc5af99-90a0-4d44-bca4-e940f72de678","style":"text-dark","icon":"bi-clock-history"} -->
                                                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-clock-history " style="font-size:24px"></i></div>
                                                <!-- /wp:areoi/icon -->

                                                <!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"updated_date","prefix":"\u003cb\u003eUpdated:\u003c/b\u003e","displayLayout":"inline-block"} /-->
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
                            <!-- /wp:post-template -->

                            <!-- wp:query-no-results -->
                            <!-- wp:group {"className":"soft-shadow","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"backgroundColor":"white","layout":{"type":"default"}} -->
                            <div class="wp-block-group soft-shadow has-white-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:image {"id":1637,"sizeSlug":"full","linkDestination":"none","className":"d-none d-sm-block"} -->
                                    <figure class="wp-block-image size-full d-none d-sm-block"><img src="https://test.vanity.blog.gov.bc.ca/app/uploads/sites/2/2023/04/Current_Emergencies.png" alt="" class="wp-image-1637" title="" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph -->
                                    <p>There are no active emergencies at this time</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"text-end","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"},"hideBlock":true} -->
                                    <div class="wp-block-group text-end"><!-- wp:areoi/button {"block_id":"0320081d-d84e-4aa7-b20b-6cdcba503157","style":"btn-warning","text_wrap":"text-nowrap","text":"Get Notified","include_icon":true,"icon":"bi-bell-fill","icon_position":"prepend","className":"text-primary"} /--></div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:query-no-results -->

                            <!-- wp:query-pagination {"paginationArrow":"chevron","className":"pt-2","fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} -->
                            <!-- wp:query-pagination-previous /-->

                            <!-- wp:query-pagination-numbers /-->

                            <!-- wp:query-pagination-next /-->
                            <!-- /wp:query-pagination -->
                        </div>
                        <!-- /wp:query -->
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
</div>
<!-- /wp:group -->