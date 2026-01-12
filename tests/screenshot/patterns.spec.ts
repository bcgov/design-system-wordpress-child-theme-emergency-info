import { test } from '@wordpress/e2e-test-utils-playwright';

test.describe('pattern', () => {

    test.beforeEach(async ({ admin }) => {
        // Create a new post before each test
        await admin.createNewPost({
            postType: 'event',
            title: 'Test event',
            excerpt: 'Test excerpt',
            showWelcomeGuide: false,
        });
    });

    [
        { name: 'amber-alert' },
        { name: 'bcgov-logo-dark' },
        { name: 'disease-outbreak' },
        { name: 'earthquake-catastrophic' },
        { name: 'earthquake-minor' },
        { name: 'emergency-alert' },
        { name: 'event-header' },
        { name: 'extreme-cold-warning' },
        { name: 'extreme-heat-emergency' },
        { name: 'extreme-heat' },
        { name: 'flood-aggregated' },
        { name: 'flood-coastal-emergency' },
        { name: 'flood-evacuation' },
        { name: 'flood-watch-warning' },
        { name: 'footer' },
        { name: 'front-page-cover' },
        { name: 'generic-emergency' },
        { name: 'hazardous-material-spill' },
        { name: 'landslide' },
        { name: 'page-about-us' },
        { name: 'page-resources-local-authorities-first-nations' },
        { name: 'page-resources-residents-visitors' },
        { name: 'page-social-media-collection-notice' },
        { name: 'page-territorial-acknowledgement' },
        { name: 'power-outage' },
        { name: 'police-incident' },
        { name: 'severe-drought' },
        { name: 'severe-weather-emergency' },
        { name: 'special-public-avalanche-warning' },
        { name: 'state-of-provincial-emergency' },
        { name: 'taxonomy-hazard_type' },
        { name: 'tornado' },
        { name: 'tsunami-catastrophic' },
        { name: 'tsunami' },
        { name: 'volcano' },
        { name: 'wildfire-aggregated' },
        { name: 'wildfire-evacuation' },
        { name: 'wildfire-provincial' },
        { name: 'wildfire-regional' },
    ].forEach(({ name }) => {
        test(name, async ({ editor }) => {
            // TODO: There's probably a faster way to add a pattern than this.
            await editor.page.getByRole('button', { name: 'Options', exact: true }).click();
            await editor.page.getByRole('menuitemradio', { name: /Code editor/ }).click();
            await editor.page.getByRole('textbox', { name: 'Type text or HTML' }).fill(`<!-- wp:pattern {"slug":"design-system-wordpress-child-theme-emergency-info/${name}"} /-->`);
            await editor.page.getByRole('button', { name: 'Exit code editor' }).click();

            // Capture editor canvas.
            // Remove footer or it overlaps some of the content.
            await editor.page.getByLabel('Editor footer').evaluate((node) => node.remove());
            const canvas = await editor.page.locator('.is-root-container');
            await canvas.evaluate(node => node.classList.add('inactive'));
            await editor.page.addStyleTag({ content: '* { overflow: visible !important; height: auto !important; max-height: none !important; }' });
            await canvas.screenshot({
                animations: 'disabled',
                path:
                    'tests/screenshot/__snapshots__/pattern-' +
                    name +
                    '-editor.png',
            });
            
            // Capture frontend content.
            const previewPage = await editor.openPreviewPage();
            const preview = previewPage.locator('.entry-content').first();
            await preview.evaluate(node => node.classList.add('inactive'));
            await preview.screenshot({
                path:
                    'tests/screenshot/__snapshots__/pattern-' +
                    name +
                    '-frontend.png',
            });
        });
    });

});