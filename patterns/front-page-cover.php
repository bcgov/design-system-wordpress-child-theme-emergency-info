<?php
/**
 * Title: Front Page Cover
 * Slug: design-system-wordpress-child-theme-emergency-info/front-page-cover
 * Categories: cover, front-page, hero, cover-image
 *
 * @package Design-System-WordPress-Theme
 */
?>

<!-- wp:group {"backgroundColor":"typography-primary-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-typography-primary-color-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","left":"0rem","right":"0rem"}},"dimensions":{"minHeight":"255px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="min-height:255px;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:group {"className":"alignwide","style":{"border":{"radius":"8px","left":{"color":"#F8BA47","width":"8px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"background-white","textColor":"text-color","layout":{"type":"constrained","contentSize":"400px"}} -->
        <div class="wp-block-group alignwide has-text-color-color has-background-white-background-color has-text-color has-background" style="border-radius:8px;border-left-color:#F8BA47;border-left-width:8px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":1,"className":"eibc-branding-h1 d-none"} -->
            <h1 class="wp-block-heading eibc-branding-h1 d-none" id="emergencyinfo-span-bc-span">EmergencyInfo<span>BC</span></h1>
            <!-- /wp:heading -->

            <!-- wp:image {"id":35047,"width":"384px","height":"74px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . 'EmergencyInfoBC-768x147-1.png' ); ?>" alt="Emergency Info BC Logo" class="wp-image-35047" style="width:384px;height:74px" title="" /></figure>

            <!-- /wp:image -->

            <!-- wp:paragraph {"textColor":"text-color"} -->
            <p class="has-text-color-color has-text-color">Find current and official information during emergencies in B.C. </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:areoi/icon {"block_id":"17e03d35-2a49-4304-93fc-5211626aafc8","style":"text-dark","icon":"bi-link"} -->
                <div class="wp-block-areoi-icon areoi-icon"><i class="text-dark bi-link " style="font-size:24px"></i></div>
                <!-- /wp:areoi/icon -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
                <p style="font-size:1rem">Follow <a href="https://twitter.com/EmergencyInfoBC" title="">@EmergencyInfoBC</a> on X (Twitter) for updates.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() . 'home-page-banner' ); ?>","id":64842,"dimRatio":0,"focalPoint":{"x":0.41,"y":0.08},"minHeight":255,"minHeightUnit":"px","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","contentSize":"500px"}} -->
        <div class="wp-block-cover" style="min-height:255px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-64842" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() . 'home-page-banner' ); ?>" style="object-position:41% 8%" data-object-fit="cover" data-object-position="41% 8%" />
            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->