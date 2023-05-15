# :package_name

<!--delete-->
This repository can be used as template for a new Rapidez package.

- Click on "Use this template" on the top of this Github repo page
- Run `php ./configure.php`

Credits to [`spatie/package-skeleton-laravel`](https://github.com/spatie/package-skeleton-laravel) for the inpiration for this template
<!--/delete-->

## Installation

```
composer require :vendor_slug/:package_slug
```

## Configuration

You can publish the config with:
```
php artisan vendor:publish --tag=rapidez-:$packageSlugWithoutPrefix-config
```

## Views

You can publish the views with:
```
php artisan vendor:publish --tag=rapidez-:$packageSlugWithoutPrefix-views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.