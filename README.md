# WP Reading Time

Calculates estimated reading time of WordPress posts and appends it to post content. Simple drop-in solution for themes.

## Features
- Calculates reading time based on word count
- Appends reading time to post content automatically
- Easy to drop into any WordPress theme
- Configurable words per minute (default: 100)

## Installation
1. Copy `reading-time.php` to your theme folder.
2. Include it in your `functions.php`:

```php
require_once get_template_directory() . '/reading-time.php';
