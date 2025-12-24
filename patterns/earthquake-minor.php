<?php
/**
 * Title: Earthquake Minor
 * Slug: design-system-wordpress-child-theme-emergency-info/earthquake-minor
 * Categories: event, earthquake
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
        <p>An XX magnitude earthquake <strong>has occurred near LOCATION, British Columbia. [</strong>The National Tsunami Warning Center has verified there is <strong>no Tsunami threat to BC].</strong></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","className":"w-100 hazard-border","layout":{"type":"default"}} -->
<div
    id="Preliminary-Parameters"
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
            >Earthquake summary</h2
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
                ><!-- wp:image {"id":35987,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"
                    ><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/hazards/earthquake.png' ); ?>"
                        alt=""
                        class="wp-image-35987"
                        title=""
                /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:areoi/row {"block_id":"c37c377c-419d-47fe-9505-1f45a91b31b3","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-3","className":"g-2"} -->
                <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0"><strong>Local Time</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>15:07:30 PDT</p>
                <!-- /wp:paragraph -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0"><strong>Magnitude</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>3.4</p>
                <!-- /wp:paragraph -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"24ba633a-5f80-47c2-ad22-1ea9793ec308"} -->
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0"><strong>Depth</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>5.00 km</p>
                <!-- /wp:paragraph -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"1224c5cb-dc82-4c6d-8b70-e8724d7fef13"} -->
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <p style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0"><strong>Location</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>Location</p>
                <!-- /wp:paragraph -->
                <!-- /wp:areoi/column -->
                <!-- /wp:areoi/row -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                    <div class="wp-block-areoi-icon areoi-icon text-center"
                        ><i
                            class="text-dark bi-link"
                            style="font-size: 36px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p
                        ><strong
                            ><a
                                href="https://www.earthquakescanada.nrcan.gc.ca/index-en.php"
                                title=""
                                >Find more details from Natural Resources Canada</a
                            ></strong
                        ></p
                    >
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Stay calm and protect yourself</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul
                        ><!-- wp:list-item -->
                        <li>Stay calm. If you feel shaking, drop, cover and hold on. </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Wait for the shaking to stop, then count to 60 before getting up</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li> Put on protective shoes and clothing</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Check for damage and hazards</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul
                        ><!-- wp:list-item -->
                        <li>Move carefully and check for unstable objects and other hazards above and around you</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>If you smell gas or rotten eggs, leave the building immediately. Call 9-1-1 or your gas company's emergency phone number</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Listen to instructions</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul
                        ><!-- wp:list-item -->
                        <li>Follow local instructions on the web, social media, radio and TV</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Local officials will provide further instructions, if required</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Report the earthquake</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul
                        ><!-- wp:list-item -->
                        <li
                            ><a
                                href="https://earthquakescanada.nrcan.gc.ca/dyfi-lavr/index-en.php"
                                title=""
                                >Report the earthquake</a
                            >
                            at Earthquakes Canada, if you felt it</li
                        >
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Don't call 9-1-1 to report the earthquake</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div
                class="wp-block-group align-items-start"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">5</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Aftershocks</strong> <strong>could occur</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul
                        ><!-- wp:list-item -->
                        <li>Drop, cover and hold on if you feel shaking</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Wait for the shaking to stop then count to 60 before getting up</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
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
            >Earthquake and tsunami data sources</h2
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
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                                href="https://www.earthquakescanada.nrcan.gc.ca/index-en.php"
                                title=""
                                >Natural Resources Canada</a
                            ></strong
                        ></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Earthquakes Canada provides information on earthquakes that occur in Canada including magnitude, location, time and felt reports.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                        ><strong><a href="https://earthquake.usgs.gov/earthquakes/map/?extent=-32.39852,-214.62891&amp;extent=75.36451,24.43359">U.S. Geological Survey (USGS)</a></strong></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>USGS provides international information on earthquakes.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                        ><strong><a href="https://tsunami.gov/">National Tsunami Warning Center (NTWC)</a></strong></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>NTWC provides international information and alerts on earthquakes and potential tsunamis.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"align-items-start ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
                                href="https://www2.gov.bc.ca/gov/content/safety/emergency-management/preparedbc/know-your-hazards/earthquakes-tsunamis"
                                title=""
                                >PreparedBC</a
                            ></strong
                        ></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>Learn how to prepare for earthquakes and tsunamis with resources from PreparedBC.</p>
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
<div
    id="Essential-Assistance"
    class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background"
    style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
    ><!-- wp:paragraph -->
    <p></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
