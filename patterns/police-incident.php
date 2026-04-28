<?php
/**
 * Title: Police Incident
 * Slug: design-system-wordpress-child-theme-emergency-info/police-incident
 * Categories: event, police-incident
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/event-header"} /-->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"left":{"width":"10px"}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div id="Event-Summary" class="wp-block-group hazard-border" style="border-left-width:10px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"style":{"typography":{"fontSize":"1.88em"}}} -->
        <h2 class="wp-block-heading" style="font-size:1.88em">Current situation</h2>
        <!-- /wp:heading -->

        <!-- wp:post-excerpt /-->

        <!-- wp:paragraph {"hideBlock":true} -->
        <p>ADD TO EXCERPT: The [B.C. RCMP / City Police Force] is responding to an ongoing [police incident] in [location]. The public is advised to [add instructions for the public e.g. stay clear of the area].</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:areoi/icon {"block_id":"be82c5fc-09b4-4e93-9f25-994b7c8e732f","style":"text-dark","icon":"bi-link","className":"hazard-text"} -->
            <div class="wp-block-areoi-icon areoi-icon  hazard-text"><i class="text-dark bi-link " style="font-size:24px"></i></div>
            <!-- /wp:areoi/icon -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong><a href="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=28&amp;languageId=1&amp;contentId=-1">BC RCMP Newsroom</a></strong> OR [Issuing Authority Link] </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"emergency-alert","layout":{"type":"default"}} -->
<div id="Emergency-Alerts" class="wp-block-group emergency-alert">
    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"},"hideBlock":true} -->
    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.88rem">BC Emergency Alert message</h2>
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
            <div class="wp-block-group has-white-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group hazard-background h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)">
                    <!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>" alt="" class="wp-image-35837" title="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph -->
                    <p>[Insert text from Emergency Alert sent by RCMP / local police.]</p>
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
    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.88rem">BC Emergency Alert message</h2>
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
            <div class="wp-block-group has-white-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group hazard-background h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)">
                    <!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>" alt="" class="wp-image-35837" title="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph -->
                    <p>[Insert text from Emergency Alert sent by RCMP / local police.]</p>
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
    <div class="wp-block-group hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"typography":{"fontSize":"1.88rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.88rem">BC Emergency Alert message</h2>
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
            <div class="wp-block-group has-white-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
                <!-- wp:areoi/column {"block_id":"8f4bee85-d381-4259-a762-bbd0605e5d20","vertical_align_md":"Default","vertical_align_lg":"Default","hide_xs":true,"hide_sm":true,"col_md":"col-md-3","col_lg":"col-lg-2","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"className":"hazard-background h-100 d-flex align-items-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group hazard-background h-100 d-flex align-items-center" style="padding-top:var(--wp--preset--spacing--20)">
                    <!-- wp:image {"id":35837,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/emergency-alert.png' ); ?>" alt="" class="wp-image-35837" title="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:areoi/column -->

                <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph -->
                    <p>[Insert text from Emergency Alert sent by RCMP / local police.]</p>
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

    <!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"categories":["event"],"patternName":"design-system-wordpress-child-theme-emergency-info/event-header","name":"Event Header"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"},"hideBlock":true} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:emergency-info/post-event-status /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
    <div id="Map-Information" class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:areoi/row {"block_id":"54cdb828-f950-41f7-b4cd-710e2b5875b1","row_cols_xs":"row-cols-1","row_cols_sm":"row-cols-sm-1","row_cols_md":"row-cols-md-2"} -->
        <!-- wp:areoi/column {"block_id":"a009b5a1-c4f6-4d7b-b711-052a474d022d"} -->
        <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"support-gray-02","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-support-gray-02-border-color" style="border-radius:10px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
            <!-- wp:image {"id":53937,"sizeSlug":"full","linkDestination":"media"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/capture-spaw.png' ); ?>" alt="" class="wp-image-53937" title="" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:areoi/column -->

        <!-- wp:areoi/column {"block_id":"3607b48e-8c01-4865-b1cf-351a7c7cc88d"} -->
        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"backgroundColor":"support-gray-01","borderColor":"support-gray-02","layout":{"type":"default"}} -->
            <div class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-geo-alt","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                    <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-geo-alt " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.38rem"><strong>Affected area:</strong></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","icon":"bi-megaphone","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                    <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-megaphone " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"1.38rem"}}} -->
                    <h2 class="wp-block-heading" style="font-size:1.38rem"><strong>Issued by:</strong></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
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
                    <div class="wp-block-group"><!-- wp:areoi/icon {"block_id":"28ea8acf-dbd8-423a-9f66-49ae7ba5e88c","style":"text-dark","icon":"bi-twitter"} -->
                        <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-twitter " style="font-size:24px"></i></div>
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
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"backgroundColor":"support-gray-01","borderColor":"support-gray-02","layout":{"type":"default"}} -->
            <div class="wp-block-group has-border-color has-support-gray-02-border-color has-support-gray-01-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"24","icon":"bi-exclamation-circle","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                    <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-exclamation-circle " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.38rem"}}} -->
                    <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.38rem">Issuance [Advisory/Alert/Order]</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"},"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:areoi/icon {"block_id":"a410e022-07a3-4fe0-97c9-1bc83807f3fe","style":"text-dark","icon":"bi-link"} -->
                    <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                    <!-- /wp:areoi/icon -->

                    <!-- wp:paragraph -->
                    <p><a href="#example">Issuance [Advisory/Alert/Order] (PDF/link)</a></p>
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

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"w-100 hazard-border","style":{"border":{"radius":"10px","top":{"width":"10px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"support-gray-01","layout":{"type":"default"}} -->
<div id="Recommended-Actions" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Recommended
            actions</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"level":3,"fontSize":"small"} -->
                <h3 class="wp-block-heading has-small-font-size"><strong>If you are in the area where the incident is happening:</strong></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">1</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><strong>Leave the area immediately.</strong> <strong>Do not attempt to return.</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Be alert and follow any direction from police or officials in the area.&nbsp;
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">2</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline"><strong>Do not call 9-1-1 unless you are injured.</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">These lines must be kept open for urgent needs. Only call 9-1-1 when a life is
                        at risk.<strong> </strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"align-items-start","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:paragraph {"className":"areoi-icon"} -->
                <p class="areoi-icon">3</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:paragraph {"className":"d-inline"} -->
                    <p class="d-inline">Monitor local sources of information and follow all instructions from <a href="https://www.civicinfo.bc.ca/directories">your municipality, Local Authority or First Nation</a>.&nbsp;&nbsp;&nbsp;<strong> </strong></p>
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
<div id="Links-Resources" class="wp-block-group w-100 hazard-border has-support-gray-01-background-color has-background" style="border-radius:10px;border-top-width:10px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"},"right":{"color":"var:preset|color|support-gray-02"},"bottom":{"color":"var:preset|color|support-gray-02"},"left":{"color":"var:preset|color|support-gray-02"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-right-color:var(--wp--preset--color--support-gray-02);border-bottom-color:var(--wp--preset--color--support-gray-02);border-left-color:var(--wp--preset--color--support-gray-02);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"1.88rem"}}} -->
        <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20);font-size:1.88rem">Links and
            resources</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
        <div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:areoi/row {"block_id":"cb78bd99-b822-493a-94ac-3b4751cd9822","lock":{"move":false,"remove":false},"className":"g-0"} -->
            <!-- wp:areoi/column {"block_id":"efedf348-a0ff-4ff0-b8d1-78c2bb2bf89a","lock":{"move":false,"remove":false},"className":"px-0"} -->
            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://bc-cb.rcmp-grc.gc.ca/ViewPage.action?siteNodeId=28&amp;languageId=1&amp;contentId=-1">BC RCMP Newsroom</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>For updates, follow <a href="https://twitter.com/BCRCMP">@BCRMP</a> on X or visit the BC RCMP Newsroom.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"hideBlock":true} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><strong><a href="https://www2.gov.bc.ca/gov/content?id=30DA852E39E7438DB8DA9B23D75A9073" title="">BC Emergency Alert</a></strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
                    <p>This BC Emergency Alert was broadcast on radio, TV and mobile devices.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><a title="" href="https://www2.gov.bc.ca/gov/content/justice/criminal-justice/policing-in-bc/bc-police-services"><strong>Find your local police service in B.C.</strong></a></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"align-items-start ","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group align-items-start" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:areoi/icon {"block_id":"39a66b63-5071-43b7-ab50-80429d5d6ab1","style":"text-dark","size":"36","icon":"bi-link","horizontal_align_xs":"text-center","lock":{"move":false,"remove":false}} -->
                <div class="wp-block-areoi-icon areoi-icon text-center"><i class="text-dark bi-link " style="font-size:36px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:heading {"level":3,"fontSize":"small"} -->
                    <h3 class="wp-block-heading has-small-font-size"><a title="" href="https://www.healthlinkbc.ca/mental-health-and-substance-use/mental-health/mental-health-supports-and-resources"><strong>HealthLinkBC: mental health supports and resources</strong></a></h3>
                    <!-- /wp:heading -->
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