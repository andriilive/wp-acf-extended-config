# Wp Acf Extended Config

## Regular plugin vs mu-plugin

- as mu-plugin (recommended): [main branch](https://github.com/andriilive/wp-acf-extended-config)
- as regular plugin: [plugin branch](https://github.com/andriilive/wp-acf-extended-config/tree/plugin)

To install as regular plugin use `composer require andriilive/wp-acf-extended-config:dev-plugin`

`wp-acf-extended-config` plugin completely and for real disables WordPress &amp; plugins image sizes generation with no need for configuration

+  Last update: June 2021
+  No need for configuration. Activate and go
+  Tested with `Wordpress 5.7.2` & `php 8.0`
+  Supports [Bedrock](https://roots.io/bedrock) `WordPress` installs

## Requirements

- Requires WP at least: `4.5`
- Tested up to WP: `5.7.2`
- Requires PHP: `>=8.0`

## Install & Activate plugin

### Composer (Bedrock Install)

`composer require andriilive/wp-acf-extended-config` at root

### ZIP Upload

1. Download `wp-acf-extended-config.zip` from [here](https://github.com/andriilive/wp-acf-extended-config/archive/refs/tags/0.1.2.zip)
2. Login to Wordpress Admin Dashboard
2. Navigate to `Plugins` > `Add new`
3. Press `Upload Plugin` and chose `wp-acf-extended-config.zip`
2. `Activate` the plugin through the `Plugins` menu in WordPress

### FTP

1. Upload folder `wp-acf-extended-config` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## See also:

- Disable generated image sizes plugin for WordPress [andriilive/wp-disable-generated-image-sizes](https://github.com/andriilive/wp-disable-generated-image-sizes)
- Fix the wp-cli media regenerate error for SVG images [andriilive/wp-cli-media-regenerate-svg-fix](https://github.com/andriilive/wp-cli-media-regenerate-svg-fix)
