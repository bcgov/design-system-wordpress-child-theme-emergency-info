import {defineConfig} from '@playwright/test';
import baseConfig from '@wordpress/scripts/config/playwright.config.js';

const config = defineConfig({
    ...baseConfig,
    testDir: 'tests/screenshot',
    reporter: [
        [
            'playwright-ctrf-json-reporter', {
                outputFile: 'e2e-test-report.json',
                outputDir: '.',
                minimal: true,
            }
        ]
    ]
});

export default config;