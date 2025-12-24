<?php
/**
 * Title: Amber Alert
 * Slug: design-system-wordpress-child-theme-emergency-info/amber-alert
 * Categories: event, amber-alert
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
        <p>ADD TO EXCERPT: The BC RCMP [or Local Police Department] have issued an Amber Alert for [VICTIM(S) NAME(S)]. This page will be updated as more information becomes available.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"
            ><!-- wp:areoi/icon {"block_id":"be82c5fc-09b4-4e93-9f25-994b7c8e732f","style":"text-dark","icon":"bi-telephone","className":"hazard-text"} -->
            <div class="wp-block-areoi-icon areoi-icon hazard-text"
                ><i
                    class="text-dark bi-telephone"
                    style="font-size: 24px"
                ></i
            ></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>Call 9-1-1 to report sightings. Do not approach.</strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"
            ><!-- wp:areoi/icon {"block_id":"be82c5fc-09b4-4e93-9f25-994b7c8e732f","style":"text-dark","icon":"bi-link","className":"hazard-text"} -->
            <div class="wp-block-areoi-icon areoi-icon hazard-text"
                ><i
                    class="text-dark bi-link"
                    style="font-size: 24px"
                ></i
            ></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"
                ><strong><a href="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=28&amp;languageId=1&amp;contentId=-1">BC RCMP Newsroom</a></strong> OR [Issuing Authority Link]
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"emergency-alert","layout":{"type":"default"}} -->
<div
    id="Emergency-Alerts"
    class="wp-block-group emergency-alert"
    ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"},"hideBlock":true} -->
    <div
        class="wp-block-group hazard-border has-support-gray-01-background-color has-background"
        style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
        ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div
            class="wp-block-group"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"
                ><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group"
                    ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2
                        class="wp-block-heading"
                        style="font-size: 1.88rem"
                        >BC Emergency Alert message</h2
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><strong>Issued:</strong> MMM DD, 2024 at 00:00AM/PM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:areoi/button {"block_id":"19139b61-c811-4d73-8e81-4959a202ab45","style":"btn-outline-dark","url":"#emergency-alert-collapse-1","include_icon":true,"icon":"bi-chevron-expand","icon_size":"36","className":"collapse-button"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:areoi/collapse {"anchor":"emergency-alert-collapse-1","block_id":"f998ba1f-434a-460d-bfa8-403b10d4d35a","open":true} -->
            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div
                class="wp-block-group has-white-background-color has-background"
                style="margin-top: var(--wp--preset--spacing--20); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div
                    class="wp-block-group hazard-background h-100 d-flex align-items-center"
                    style="padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>"
                            alt=""
                            class="wp-image-35837"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p>BC EMERGENCY ALERT issued by &lt;name of submitting jurisdiction(s)&gt; due to &lt;Hazard&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuate or shelter in place&gt; immediately if you are in the following area: &lt;describe area under threat&gt;.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>The &lt;event name, type or location&gt; poses a threat to human life.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuation instructions or shelter in place instructions&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>If you are unable to evacuate call 9-1-1.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Click for more info: www.EmergencyInfoBC.ca/EventPageName</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->
                <!-- /wp:areoi/row -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/collapse -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"},"hideBlock":true} -->
    <div
        class="wp-block-group hazard-border has-support-gray-01-background-color has-background"
        style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
        ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div
            class="wp-block-group"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"
                ><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group"
                    ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2
                        class="wp-block-heading"
                        style="font-size: 1.88rem"
                        >BC Emergency Alert message</h2
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><strong>Issued:</strong> MMM DD, 2024 at 00:00AM/PM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:areoi/button {"block_id":"19139b61-c811-4d73-8e81-4959a202ab45","style":"btn-outline-dark","url":"#emergency-alert-collapse-2","include_icon":true,"icon":"bi-chevron-expand","icon_size":"36","className":"collapse-button"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:areoi/collapse {"anchor":"emergency-alert-collapse-2","block_id":"f998ba1f-434a-460d-bfa8-403b10d4d35a","open":true} -->
            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div
                class="wp-block-group has-white-background-color has-background"
                style="margin-top: var(--wp--preset--spacing--20); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div
                    class="wp-block-group hazard-background h-100 d-flex align-items-center"
                    style="padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>"
                            alt=""
                            class="wp-image-35837"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p>BC EMERGENCY ALERT issued by &lt;name of submitting jurisdiction(s)&gt; due to &lt;Hazard&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuate or shelter in place&gt; immediately if you are in the following area: &lt;describe area under threat&gt;.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>The &lt;event name, type or location&gt; poses a threat to human life.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuation instructions or shelter in place instructions&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>If you are unable to evacuate call 9-1-1.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Click for more info: www.EmergencyInfoBC.ca/EventPageName</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->
                <!-- /wp:areoi/row -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/collapse -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"},"hideBlock":true} -->
    <div
        class="wp-block-group hazard-border has-support-gray-01-background-color has-background"
        style="border-radius: 10px; border-top-width: 10px; margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--30); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
        ><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div
            class="wp-block-group"
            style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-right-color: var(--wp--preset--color--support-gray-02); border-bottom-color: var(--wp--preset--color--support-gray-02); border-left-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"
                ><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group"
                    ><!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2
                        class="wp-block-heading"
                        style="font-size: 1.88rem"
                        >BC Emergency Alert message</h2
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><strong>Issued:</strong> MMM DD, 2024 at 00:00AM/PM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:areoi/button {"block_id":"19139b61-c811-4d73-8e81-4959a202ab45","style":"btn-outline-dark","url":"#emergency-alert-collapse-3","include_icon":true,"icon":"bi-chevron-expand","icon_size":"36","className":"collapse-button"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:areoi/collapse {"anchor":"emergency-alert-collapse-3","block_id":"f998ba1f-434a-460d-bfa8-403b10d4d35a","open":true} -->
            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div
                class="wp-block-group has-white-background-color has-background"
                style="margin-top: var(--wp--preset--spacing--20); padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div
                    class="wp-block-group hazard-background h-100 d-flex align-items-center"
                    style="padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>"
                            alt=""
                            class="wp-image-35837"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p>BC EMERGENCY ALERT issued by &lt;name of submitting jurisdiction(s)&gt; due to &lt;Hazard&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuate or shelter in place&gt; immediately if you are in the following area: &lt;describe area under threat&gt;.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>The &lt;event name, type or location&gt; poses a threat to human life.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>&lt;Evacuation instructions or shelter in place instructions&gt;</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>If you are unable to evacuate call 9-1-1.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Click for more info: www.EmergencyInfoBC.ca/EventPageName</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->
                <!-- /wp:areoi/row -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/collapse -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div
    id="Victim-Info"
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
            ><strong>Victim name:</strong>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:areoi/row {"block_id":"353ffc77-28f9-40b4-8ce9-10f79fd5b09e","className":"g-2"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546","col_xs":"col-12","col_sm":"col-sm-6","col_md":"col-md-6","col_lg":"col-lg-3","hideBlock":true} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"constrained"}} -->
            <div
                class="wp-block-group has-support-gray-01-background-color has-background"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"layout":{"type":"constrained"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                    ><!-- wp:gallery {"linkTo":"none","sizeSlug":"full"} -->
                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped"
                        ><!-- wp:image {"id":1107,"sizeSlug":"full","linkDestination":"media","className":"amber-alert-image m-0","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
                        <figure class="wp-block-image size-full has-custom-border amber-alert-image m-0"
                            ><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.png' ); ?>"
                                alt=""
                                class="wp-image-1107"
                                style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                                title=""
                        /></figure>
                        <!-- /wp:image -->
                    </figure>
                    <!-- /wp:gallery -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"width":"1px","radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"borderColor":"support-gray-02","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group has-border-color has-support-gray-02-border-color"
                    style="border-width: 1px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding-top: 0; padding-right: var(--wp--preset--spacing--20); padding-bottom: 0; padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"c2ef99c0-9a6c-4d57-b767-69ccd46bb496","style":"text-dark","icon":"bi-search","className":"no-circle"} -->
                    <div class="wp-block-areoi-icon areoi-icon no-circle"
                        ><i
                            class="text-dark bi-search"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enlarge</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"79fd3604-4e85-40b5-a04d-a8889769bd51","col_xs":"col-12","col_sm":"col-sm-6","col_md":"col-md-6","col_lg":"col-lg-3","hideBlock":true} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"constrained"}} -->
            <div
                class="wp-block-group has-support-gray-01-background-color has-background"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"layout":{"type":"constrained"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                    ><!-- wp:image {"id":1107,"sizeSlug":"full","linkDestination":"media","className":"amber-alert-image m-0","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
                    <figure class="wp-block-image size-full has-custom-border amber-alert-image m-0"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.png' ); ?>"
                            alt=""
                            class="wp-image-1107"
                            style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"width":"1px","radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"borderColor":"support-gray-02","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group has-border-color has-support-gray-02-border-color"
                    style="border-width: 1px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding-top: 0; padding-right: var(--wp--preset--spacing--20); padding-bottom: 0; padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"c2ef99c0-9a6c-4d57-b767-69ccd46bb496","style":"text-dark","icon":"bi-search","className":"no-circle"} -->
                    <div class="wp-block-areoi-icon areoi-icon no-circle"
                        ><i
                            class="text-dark bi-search"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enlarge</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:areoi/row {"block_id":"8f0e844a-64d8-43eb-b487-7fdefd0c75ca","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-3","row_cols_lg":"row-cols-lg-4"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Age:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Gender:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Height:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"fa25d45e-b243-4099-a13a-2db1c2ed6d00"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Weight:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Hair colour:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Eye colour:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"75354664-21c8-43b4-9ce6-9e5436b6a8ad"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Race:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p><strong>Description</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p></p>
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
<div
    id="Suspect-Info"
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
            ><strong>Suspect name:</strong>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:areoi/row {"block_id":"353ffc77-28f9-40b4-8ce9-10f79fd5b09e","className":"g-2"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546","col_xs":"col-12","col_sm":"col-sm-6","col_md":"col-md-6","col_lg":"col-lg-3","hideBlock":true} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"constrained"}} -->
            <div
                class="wp-block-group has-support-gray-01-background-color has-background"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"layout":{"type":"constrained"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                    ><!-- wp:image {"id":1107,"sizeSlug":"full","linkDestination":"media","className":"amber-alert-image m-0","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
                    <figure class="wp-block-image size-full has-custom-border amber-alert-image m-0"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.png' ); ?>"
                            alt=""
                            class="wp-image-1107"
                            style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"width":"1px","radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"borderColor":"support-gray-02","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group has-border-color has-support-gray-02-border-color"
                    style="border-width: 1px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding-top: 0; padding-right: var(--wp--preset--spacing--20); padding-bottom: 0; padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"c2ef99c0-9a6c-4d57-b767-69ccd46bb496","style":"text-dark","icon":"bi-search","className":"no-circle"} -->
                    <div class="wp-block-areoi-icon areoi-icon no-circle"
                        ><i
                            class="text-dark bi-search"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enlarge</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"2e700596-f564-4d2e-95e1-c1322ea7cf04"} -->
            <!-- wp:areoi/row {"block_id":"bf2c1a3c-a624-4abd-9d6c-7b95b3a5c66b","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-3","row_cols_lg":"row-cols-lg-4"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Age:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Gender:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Height:</strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Weight:</strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Hair colour:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Eye colour:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Race:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p><strong>Description:</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p></p>
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
    id="Vehicle-Info"
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
            ><strong>Vehicle:</strong> Name</h2
        >
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div
            class="wp-block-group has-white-background-color has-background"
            style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
            ><!-- wp:areoi/row {"block_id":"353ffc77-28f9-40b4-8ce9-10f79fd5b09e","className":"g-2"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546","col_xs":"col-12","col_sm":"col-sm-6","col_md":"col-md-6","col_lg":"col-lg-3","hideBlock":true} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"constrained"}} -->
            <div
                class="wp-block-group has-support-gray-01-background-color has-background"
                style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
                ><!-- wp:group {"style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"layout":{"type":"constrained"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                    ><!-- wp:image {"id":1107,"sizeSlug":"full","linkDestination":"media","className":"amber-alert-image m-0","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
                    <figure class="wp-block-image size-full has-custom-border amber-alert-image m-0"
                        ><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.png' ); ?>"
                            alt=""
                            class="wp-image-1107"
                            style="border-top-left-radius: 5px; border-top-right-radius: 5px"
                            title=""
                    /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}},"border":{"width":"1px","radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"borderColor":"support-gray-02","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div
                    class="wp-block-group has-border-color has-support-gray-02-border-color"
                    style="border-width: 1px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding-top: 0; padding-right: var(--wp--preset--spacing--20); padding-bottom: 0; padding-left: var(--wp--preset--spacing--20)"
                    ><!-- wp:areoi/icon {"block_id":"c2ef99c0-9a6c-4d57-b767-69ccd46bb496","style":"text-dark","icon":"bi-search","className":"no-circle"} -->
                    <div class="wp-block-areoi-icon areoi-icon no-circle"
                        ><i
                            class="text-dark bi-search"
                            style="font-size: 24px"
                        ></i
                    ></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enlarge</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:areoi/row {"block_id":"8f0e844a-64d8-43eb-b487-7fdefd0c75ca","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-2","row_cols_md":"row-cols-md-3","row_cols_lg":"row-cols-lg-4"} -->
            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Year:</strong> </p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Colour: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Make: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Model: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>License number: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Province: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546","hideBlock":true} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Type: </strong>___</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546","hideBlock":true} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Style: </strong>___</p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->

            <!-- wp:areoi/column {"block_id":"d42f76d1-4da3-4313-8592-45ec3a938546"} -->
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <p style="margin-top: var(--wp--preset--spacing--20); margin-right: var(--wp--preset--spacing--20); margin-bottom: var(--wp--preset--spacing--20); margin-left: var(--wp--preset--spacing--20)"><strong>Vehicle is: </strong></p>
            <!-- /wp:paragraph -->
            <!-- /wp:areoi/column -->
            <!-- /wp:areoi/row -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div
                    class="wp-block-group"
                    style="border-top-color: var(--wp--preset--color--support-gray-02); padding-top: var(--wp--preset--spacing--20)"
                    ><!-- wp:paragraph -->
                    <p><strong>Description:</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p></p>
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
            <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false},"className":"px-0"} -->
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

            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Be aware</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Watch for the child, suspect, and/or vehicle described in the alert.</p>
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Do not approach the victim or suspect</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"
                        ><!-- wp:list-item -->
                        <li>Do not attempt to catch the child or suspect yourself</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Do not attempt to stop the vehicle</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
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
                    ><!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong>Report any sightings</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"
                        ><!-- wp:list-item -->
                        <li>Immediately report any sightings to the police by <strong>calling 9-1-1</strong></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Provide the location and a description of the victim, suspect, and/or vehicle</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div
                class="wp-block-group"
                style="padding-top: var(--wp--preset--spacing--20); padding-right: var(--wp--preset--spacing--20); padding-bottom: var(--wp--preset--spacing--20); padding-left: var(--wp--preset--spacing--20)"
                ><!-- wp:paragraph -->
                <p
                    >Visit the
                    <a
                        href="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=23&amp;languageId=1&amp;contentId=4697"
                        title="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=23&amp;languageId=1&amp;contentId=4697"
                        >BC RCMP Amber Alert Program website</a
                    >
                    to learn more.</p
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
                        ><strong><a href="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=28&amp;languageId=1&amp;contentId=-1">BC RCMP Newsroom</a></strong></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>For updates, follow <a href="https://twitter.com/BCRCMP">@BCRMP</a> on Twitter or visit the BC RCMP Newsroom.</p>
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
                                href="https://www2.gov.bc.ca/gov/content?id=30DA852E39E7438DB8DA9B23D75A9073"
                                title=""
                                >BC Emergency Alert</a
                            ></strong
                        ></h3
                    >
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>This Amber Alert was broadcast on radio, TV and mobile devices.</p>
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
