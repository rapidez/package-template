# :package_name

<!--delete-->
This repository can be used as template for a new Rapidez package.
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
