<?php
/**
 * Title: Flood Evacuation
 * Slug: design-system-wordpress-child-theme-emergency-info/flood-evacuation
 * Categories: event, flood
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/event-header"} /-->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"left":{"width":"10px"}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div
    id="Event-Summary"
    class="wp-block-group hazard-border"
    style="border-left-width: 10px; margin-top: 0; margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--30); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:heading {"style":{"typography":{"fontSize":"1.88em"}}} -->
        <h2
            class="wp-block-heading"
            style="font-size: 1.88em"
            >Current situation</h2
        >
        <!-- /wp:heading -->

        <!-- wp:post-excerpt /-->

        <!-- wp:paragraph {"hideBlock":true} -->
        <p>ADD TO EXCERPT: The [LA/FN] has issued an Evacuation [Order/Alert] for [location] due to flooding. Anyone in the affected area must [leave immediately/ be ready to leave on short notice]. </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div
    id="Map-Information"
    class="wp-block-group"
    style="margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30)"
    ><!-- wp:areoi/row {"block_id":"54cdb828-f950-41f7-b4cd-710e2b5875b1","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-2"} -->
    <!-- wp:areoi/column {"block_id":"a009b5a1-c4f6-4d7b-b711-052a474d022d"} -->
    <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"support-gray-02","layout":{"type":"constrained"}} -->
    <div
        class="wp-block-group has-border-color has-support-gray-02-border-color"
        style="border-radius: 10px; margin-top: 0; margin-bottom: var(--wp--preset--spacing--30); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:image {"id":1832,"sizeSlug":"full","linkDestination":"media"} -->
        <figure class="wp-block-image size-full"
            ><img
                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/okib-evac.png' ); ?>"
                alt=""
                class="wp-image-1832"
                title=""
        /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"3607b48e-8c01-4865-b1cf-351a7c7cc88d"} -->
    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"
        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"backgroundColor":"support-gray-01","borderColor":"support-gray-02","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:emergency-info/post-meta-display {"className":"no-circle","style":{"spacing":{"padding":{"bottom":"0"}},"typography":{"fontSize":"1.38rem"}}} /-->

            <!-- wp:emergency-info/post-meta-display {"valueNum":2,"className":"no-circle","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.38rem"}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:group {"className":"justify-content-between","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group justify-content-between"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"
                    ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p><a href="#example">City of Cityville website</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"
                    ><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-facebook"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-facebook"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p><a href="#example">City of Cityville Facebook</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"
                    ><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-twitter-x"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-twitter-x"
                            style="font-size: 24px"
                        ></i
                    ></div>
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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="margin-top: var(--wp--preset--spacing--30); margin-bottom: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"backgroundColor":"support-gray-01","borderColor":"support-gray-02","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-exclamation-circle","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-exclamation-circle"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"1.38rem"}}} -->
                <h2
                    class="wp-block-heading"
                    style="font-size: 1.38rem"
                    ><strong>Evacuation [Order/Alert]</strong></h2
                >
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"
                ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-filetype-pdf"} -->
                <div class="wp-block-areoi-icon areoi-icon"
                    ><i
                        class="text-dark bi-filetype-pdf"
                        style="font-size: 24px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph -->
                <p
                    ><a
                        href="#example"
                        target="_blank"
                        rel="noopener"
                        title=""
                        >Evacuation Order/Alert with list of impacted properties (PDF)</a
                    ></p
                >
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div
    id="Recommended-Actions"
    class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background"
    style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2
            class="wp-block-heading"
            style="margin-bottom: var(--wp--preset--spacing--20); font-size: 1.88rem"
            >Recommended actions</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div
                class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center"
                style="padding-top: var(--wp--preset--spacing--20)"
                ><!-- wp:image {"id":3365,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/route-sign.png' ); ?>"
                        alt=""
                        class="wp-image-3365"
                        title=""
                /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from officials:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>If you are in the area under Evacuation Order, you are at risk. You must leave <strong>immediately</strong>.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"hideBlock":true} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><strong>Evacuate following this route(s): </strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon d-inline-block"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"> <a href="#example">[Insert route hyperlink here]</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p><strong>Refer to the Evacuation Order</strong> for information specific to your community.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                        <div class="wp-block-areoi-icon areoi-icon"
                            ><i
                                class="text-dark bi-link"
                                style="font-size: 24px"
                            ></i
                        ></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph -->
                        <p><a href="#example">[Insert link here]</a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><strong>Create a profile </strong>or <strong>login </strong>to </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon d-inline-block"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"> <a href="https://ess.gov.bc.ca/">Emergency Support Services</a> (ESS) and learn how to access short-term basic support.</p>
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"},"hideBlock":true} -->
<div
    id="Recommended-Actions"
    class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background"
    style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2
            class="wp-block-heading"
            style="margin-bottom: var(--wp--preset--spacing--20); font-size: 1.88rem"
            >Recommended actions</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div
                class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center"
                style="padding-top: var(--wp--preset--spacing--20)"
                ><!-- wp:image {"id":2272,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/documents.png' ); ?>"
                        alt=""
                        class="wp-image-2272"
                        title=""
                /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>Follow all directions from officials:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>If you are in the area under Evacuation Alert, be ready to leave on short notice.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Review your </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon d-inline-block"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">
                        <a
                            href="https://www2.gov.bc.ca/gov/content?id=C8145643BB8D48FE8ECA30DCCDEB75DB"
                            title=""
                            >emergency plan</a
                        >
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">and stock your </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link","className":"d-inline-block"} -->
                    <div class="wp-block-areoi-icon areoi-icon d-inline-block"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">
                        <a
                            href="https://www2.gov.bc.ca/gov/content?id=A47FAF5F58C44E599B1D716989F76BD5"
                            title=""
                            >grab-and-go-bag.</a
                        ></p
                    >
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p>Refer to the Evacuation Alert for information specific to your community.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                        <div class="wp-block-areoi-icon areoi-icon"
                            ><i
                                class="text-dark bi-link"
                                style="font-size: 24px"
                            ></i
                        ></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph -->
                        <p><a href="#example">[Insert link here]</a></p>
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div
    id="Definitions"
    class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background"
    style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); margin-top: 0; margin-bottom: 0; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2
            class="wp-block-heading"
            style="margin-bottom: var(--wp--preset--spacing--20); font-size: 1.88rem"
            >Understanding emergency events</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div
            id="Evacuation-Stages"
            class="wp-block-group"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size"><strong>Evacuation stages</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                    ><!-- wp:areoi/row {"block_id":"87625025-08d4-4d65-8758-be4cc859a90a","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-3","className":"three-card gy-2 gx-0"} -->
                    <!-- wp:areoi/column {"block_id":"901d49da-a867-4f26-bf34-611f971615ee"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"radius":{"topLeft":"10px","bottomLeft":"10px"},"top":{"color":"var:preset|color|support-yellow","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-color: var(--wp--preset--color--support-yellow); border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36062,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-wait.png' ); ?>"
                                    alt=""
                                    class="wp-image-36062"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
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
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-color: var(--wp--preset--color--support-red); border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="border-right-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36052,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-move.png' ); ?>"
                                    alt=""
                                    class="wp-image-36052"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
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
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-color: var(--wp--preset--color--support-green); border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36057,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/evacuation-rescind.png' ); ?>"
                                    alt=""
                                    class="wp-image-36057"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
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

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div
            id="Flood-Advisory-Stages"
            class="wp-block-group"
            style="padding-top: var(--wp--preset--spacing--30); padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.6rem"}}} -->
            <h3
                class="wp-block-heading"
                style="font-size: 1.6rem"
                ><strong>Flood advisory stages</strong></h3
            >
            <!-- /wp:heading -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                    ><!-- wp:areoi/row {"block_id":"87625025-08d4-4d65-8758-be4cc859a90a","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-3","className":"three-card gy-2 gx-0"} -->
                    <!-- wp:areoi/column {"block_id":"fd99a4e4-f44d-4f25-9d9e-5a3110eb9cf5"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"radius":{"topLeft":"10px","bottomLeft":"10px"},"top":{"color":"#50c0ff","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-color: #50c0ff; border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36027,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/flood-advisory.png' ); ?>"
                                    alt=""
                                    class="wp-image-36027"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>High Streamflow Advisory</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>River levels are rising or are expected to rise rapidly. Major flooding is not expected. Minor flooding in low-lying areas is possible.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:areoi/column -->

                    <!-- wp:areoi/column {"block_id":"4540dea5-bf11-4832-a0c4-a19041791e69"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"top":{"color":"var:preset|color|vivid-cyan-blue","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-color: var(--wp--preset--color--vivid-cyan-blue); border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="border-right-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36032,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/flood-watch.png' ); ?>"
                                    alt=""
                                    class="wp-image-36032"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: var(--wp--preset--spacing--20); padding-bottom: 0; padding-left: var(--wp--preset--spacing--20)"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>Flood Watch</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>River levels are rising and will approach or may exceed the river bank. Flooding may occur in areas near affected rivers.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:areoi/column -->

                    <!-- wp:areoi/column {"block_id":"49dee8e4-1f11-4c66-875d-e51cc385c567"} -->
                    <!-- wp:group {"className":"h-100","style":{"border":{"radius":{"topRight":"10px","bottomRight":"10px"},"top":{"color":"var:preset|color|hazard-flood","width":"10px"},"right":{"color":"var:preset|color|support-gray-02","width":"1px"},"bottom":{"color":"var:preset|color|support-gray-02","width":"1px"},"left":{"color":"var:preset|color|support-gray-02","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                    <div
                        class="wp-block-group h-100 has-white-background-color has-background"
                        style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-color: var(--wp--preset--color--hazard-flood); border-top-width: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-right-width: 1px; border-bottom-color: var(--wp--preset--color--support-gray-02); border-bottom-width: 1px; border-left-color: var(--wp--preset--color--support-gray-02); border-left-width: 1px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div
                            class="wp-block-group"
                            style="padding-top: var(--wp--preset--spacing--20); padding-right: 0; padding-bottom: var(--wp--preset--spacing--20); padding-left: 0"
                            ><!-- wp:image {"id":36037,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"
                                ><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/flood-warning.png' ); ?>"
                                    alt=""
                                    class="wp-image-36037"
                                    title=""
                            /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div
                                class="wp-block-group text-center"
                                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                                ><!-- wp:heading {"level":4,"fontSize":"small"} -->
                                <h4 class="wp-block-heading has-small-font-size"><strong>Flood Warning</strong></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>River levels have exceeded the river bank or will exceed the river bank soon. Flooding may occur in areas near affected rivers.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:areoi/column -->
                    <!-- /wp:areoi/row -->

                    <!-- wp:group {"className":"text-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
                    <div
                        class="wp-block-group text-center"
                        style="padding-top: var(--wp--preset--spacing--30); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                        ><!-- wp:areoi/button {"block_id":"5f206ff2-a4b6-42d9-bef0-f4360adb39cd","style":"btn-outline-primary","url":"http://bcrfc.env.gov.bc.ca/warnings/index.htm","text":"Open Flood Warnings and Advisories","include_icon":true,"icon":"bi-arrow-up-right"} /--></div
                    >
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div
    id="Links-Resources"
    class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background"
    style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div
        class="wp-block-group"
        style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
        ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2
            class="wp-block-heading"
            style="margin-bottom: var(--wp--preset--spacing--20); font-size: 1.88rem"
            >Links and resources</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"className":"hazard-background-secondary h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div
                class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center"
                style="padding-top: var(--wp--preset--spacing--20)"
                ><!-- wp:image {"id":2369,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/browser.png' ); ?>"
                        alt=""
                        class="wp-image-2369"
                        title=""
                /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-buildings","horizontal_align_xs":"text-center","lock":{"move":true,"remove":true}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-buildings"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>[XYZ Regional District/City/FN] resources</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                        <div class="wp-block-areoi-icon areoi-icon"
                            ><i
                                class="text-dark bi-link"
                                style="font-size: 24px"
                            ></i
                        ></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph -->
                        <p><a href="#example">[Link 1]</a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                        <div class="wp-block-areoi-icon areoi-icon"
                            ><i
                                class="text-dark bi-link"
                                style="font-size: 24px"
                            ></i
                        ></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph -->
                        <p><a href="#example">[Link 2]</a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-link"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"
                        ><strong><a href="http://bcrfc.env.gov.bc.ca/warnings/index.htm">River Forecast Centre</a></strong></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Updates on current Flood Advisories in B.C.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-link"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"fontSize":"small"} -->
                    <h2 class="wp-block-heading has-small-font-size"
                        ><strong><a href="https://www.drivebc.ca/">DriveBC</a></strong></h2
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Find the latest travel and highway updates in B.C. from <a href="https://x.com/DriveBC">DriveBC on X (Twitter)</a>.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-link"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"
                        ><strong
                            ><a
                                href="https://www2.gov.bc.ca/gov/content?id=9B4B3AE951654A8AA3319CF1F779D489"
                                title=""
                                >Flood evacuee guidance</a
                            ></strong
                        ></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Find general emergency evacuee guidance. Always follow the instructions of your local authority or First Nation.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-link"
                        style="font-size: 36px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"fontSize":"small"} -->
                    <h2 class="wp-block-heading has-small-font-size"
                        ><strong
                            ><a
                                href="https://www2.gov.bc.ca/gov/content/safety/emergency-management/preparedbc/know-your-hazards/floods"
                                title=""
                                >PreparedBC</a
                            ></strong
                        ></h2
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Learn how to prepare for floods with resources from PreparedBC.</p>
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
