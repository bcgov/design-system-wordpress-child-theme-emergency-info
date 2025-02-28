# Design System WordPress Child Theme for EmergencyInfoBC

A child theme of the [Design System WordPress Theme](https://github.com/bcgov/design-system-wordpress-theme) for use on the [EmergencyInfoBC site](https://www.emergencyinfobc.gov.bc.ca).

## Development Setup

```bash
git clone https://github.com/bcgov/design-system-wordpress-child-theme-emergency-info.git
cd design-system-wordpress-child-theme-emergency-info
composer install
npm ci
npm run start
```

## Build

```bash
npm run build:production 
```

## Patterns

Patterns are stored in the `patterns/` directory as this allows WordPress to automatically load them as [Block Patterns](https://wordpress.com/support/wordpress-editor/block-pattern/). They are mainly used as a base template for Event pages of various Hazard Types, eg. when creating a Disease Outbreak event, the Disease Outbreak pattern should be inserted into the page and then its content edited according to the specifics of the event. Previously, the EIBC site used the [BCGov WordPress Block Theme](https://github.com/bcgov/bcgov-wordpress-block-theme)'s Custom Patterns for this purpose but in moving to this child theme we are using WordPress' built-in Patterns.

Patterns should be assigned the correct categories based on the Hazard Type taxonomy term slugs they are meant for, eg. the Disease Outbreak pattern should be in the `event` and `disease-outbreak` categories (per the Disease Outbreak Hazard Type's slug).