<?php
/**
 * Title: Disease Outbreak
 * Slug: design-system-wordpress-child-theme-emergency-info/disease-outbreak
 * Categories: event, disease-outbreak
 *
 * @package Design-System-WordPress-Theme
 */
?>
<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/event-header"} /-->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"left":{"width":"10px"}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hazard-border","layout":{"type":"default"}} -->
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

        <!-- wp:paragraph -->
        <p>On [DATE], the provincial health officer declared a Public Health Emergency in response to [Disease Name] for BC. </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>For the most up-to-date health information, follow the BC Centre for Disease Control (BCCDC). </p>
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
    <!-- wp:image {"align":"center","lightbox":{"enabled":false},"id":54128,"sizeSlug":"full","linkDestination":"none","printWidth":24} -->
    <figure class="wp-block-image aligncenter size-full"
        ><img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/capture-covid19.png' ); ?>"
            alt=""
            class="wp-image-54128"
            title=""
    /></figure>
    <!-- /wp:image -->
    <!-- /wp:areoi/column -->

    <!-- wp:areoi/column {"block_id":"d3be2937-d151-421c-8069-09facfacb930"} -->
    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"
        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:emergency-info/post-meta-display {"className":"no-circle","style":{"spacing":{"padding":{"bottom":"0"}},"typography":{"fontSize":"1.38rem"}}} /-->

            <!-- wp:emergency-info/post-meta-display {"valueNum":2,"className":"no-circle","style":{"spacing":{"padding":{"bottom":"0"}},"typography":{"fontSize":"1.38rem"}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"justify-content-between","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                    <p
                        ><a
                            href="http://www.bccdc.ca/health-info/diseases-conditions/covid-19"
                            title=""
                            >BC Centre for Disease Control web</a
                        ></p
                    >
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"
                    ><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-twitter"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-twitter"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p
                        ><a
                            href="https://twitter.com/CDCofBC"
                            title=""
                            >BCCDC X (Twitter)</a
                        ></p
                    >
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
        ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"borderColor":"support-gray-02","backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px; padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"
                ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-exclamation-circle","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"
                    ><i
                        class="text-dark bi-exclamation-circle"
                        style="font-size: 24px"
                    ></i
                ></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"1.38rem"}}} -->
                <h2
                    class="wp-block-heading"
                    style="font-size: 1.38rem"
                    ><strong>Public Health Emergency Order</strong></h2
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
                        >Public Health Emergency Order (PDF)</a
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
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
            >Public health orders in B.C.</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"hazard-background-secondary h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div
                class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center"
                style="padding-top: var(--wp--preset--spacing--20)"
                ><!-- wp:image {"id":1557,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/caution.png' ); ?>"
                        alt=""
                        class="wp-image-1557"
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
                ><!-- wp:paragraph -->
                <p>The Province of BC has ordered the following restrictions during the [disease]:</p>
                <!-- /wp:paragraph -->

                <!-- wp:list -->
                <ul
                    ><!-- wp:list-item -->
                    <li>Name restrictions here. Examples: </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Limiting public gatherings </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Closure of schools/ public spaces </li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph -->
                <p
                    >For more information, follow the
                    <a
                        href="http://www.bccdc.ca/health-info/diseases-conditions/covid-19"
                        title=""
                        >BC Centre for Disease Control (BCCDC)</a
                    >.</p
                >
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
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
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
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"hazard-background-secondary h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
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
                <h3 class="wp-block-heading has-small-font-size"><strong>If you are in the area under a Public Health Order:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                    ><!-- wp:paragraph -->
                    <p
                        >Follow all
                        <a
                            href="http://link"
                            title=""
                            >Public Health Emergency Orders (PDF)</a
                        >
                        for your area.
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                    <p class="d-inline">Know the</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">&nbsp;<a href="https://www.healthlinkbc.ca/illnesses-conditions/injuries/cold-exposure-what-increases-your-risk-injury">symptoms of [Disease]</a>&nbsp;and seek medical care if you or someone you are caring for are unwell:&nbsp;<strong> </strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-exclamation-circle-fill"} -->
                        <div class="wp-block-areoi-icon areoi-icon"
                            ><i
                                class="text-dark bi-exclamation-circle-fill"
                                style="font-size: 24px"
                            ></i
                        ></div>
                        <!-- /wp:areoi/icon -->

                        <!-- wp:paragraph -->
                        <p> </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p>Call 9-1-1 or your local emergency number in case of a medical emergency.&nbsp;</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                    <p class="d-inline">Check on family, friends and neighbours who are at&nbsp;higher risk of [Disease], particularly if they live alone.&nbsp;</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">4</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Monitor local sources of information and follow all instructions from </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><a href="https://www.civicinfo.bc.ca/directories">your municipality, Local Authority or First Nation</a>.&nbsp;&nbsp;&nbsp;<strong> </strong></p>
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
<div
    id="Safety-Preparedness"
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
            >Additional resources
        </h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
            ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"hazard-background-secondary h-100 d-flex align-items-center","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div
                class="wp-block-group hazard-background-secondary h-100 d-flex align-items-center"
                style="padding-top: var(--wp--preset--spacing--20)"
                ><!-- wp:image {"id":2371,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/checklist.png' ); ?>"
                        alt=""
                        class="wp-image-2371"
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
                <h3 class="wp-block-heading has-small-font-size"><strong>Resources to help you</strong>: </h3>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group"
                    style="padding-right: 0; padding-bottom: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p
                        ><a href="https://www.fraserhealth.ca/health-topics-a-to-z/sun-safety/cooling-centres#.Yv0TMnbMKUl"></a
                        ><a
                            href="https://www.healthlinkbc.ca/"
                            title=""
                            >HealthlinkBC – [Disease Page]</a
                        ></p
                    >
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group"
                    style="padding-bottom: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p
                        ><a
                            href="https://www2.gov.bc.ca/gov/content/safety/emergency-management/preparedbc/know-your-hazards/disease-outbreaks"
                            title=""
                            >PreparedBC – Pandemic and disease outbreaks</a
                        ></p
                    >
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group"
                    style="padding-bottom: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-file-pdf-fill"} -->
                    <div class="wp-block-areoi-icon areoi-icon"
                        ><i
                            class="text-dark bi-file-pdf-fill"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p
                        ><a
                            href="https://www2.gov.bc.ca/gov/content?id=18FCA4B9C68741E8983F5EF2630479C0"
                            title=""
                        ></a
                        ><a
                            href="https://www2.gov.bc.ca/assets/gov/public-safety-and-emergency-services/emergency-preparedness-response-recovery/embc/preparedbc/preparedbc-guides/preparedbc_pandemic_guide.pdf"
                            title=""
                            >PreparedBC – Pandemic preparedness guide (PDF, 7.9MB) </a
                        ></p
                    >
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Contact a healthcare provider, or call </p>
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
                    <p class="d-inline"
                        >&nbsp;<a href="https://www.healthlinkbc.ca/more/health-features/beat-heat">HealthLinkBC</a>&nbsp;at 8-1-1, if you are experiencing
                        <a
                            href="http://link"
                            title=""
                            >symptoms of [disease]</a
                        >. Call 9-1-1 in case of medical emergency.&nbsp;&nbsp;<strong> </strong
                    ></p>
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
