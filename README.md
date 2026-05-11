# cases.wp

Standalone WordPress install for local development.

Quick start
1. Make sure PHP 8+ is installed.
2. From the project root run:

```bash
php -S localhost:8000 router.php
```

3. Open http://localhost:8000 in your browser and complete the WordPress setup.

What is included
- WordPress core files live in the repository root.
- SQLite is enabled through `wp-content/db.php`.
- Local data is stored in `wp-content/database/.ht.sqlite`.

Customization
- Place themes in `wp-content/themes/` and plugins in `wp-content/plugins/`.
- The repository includes a minimal starter theme at `wp-content/themes/starter-theme`.
- Change the site URL in `wp-config.php` if you want to use a different local port.

If you no longer need the old Docker setup, you can ignore `docker-compose.yml`.