# QuickDiff

**QuickDiff** is a text diffing class for PHP. It might not be very accurate but it's very easy to use and have two modes – finding changes by line or inline (within one line). It also comes with built-in HTML generation although you need to style it yourself with CSS.

It has no dependencies and works out of the box in **PHP 5.2 and up** – simply include it and you're ready to go.

**Unless you're using Laravel QuickDiff is just a single file (`quickdiff.php`).**

[ [Method reference](http://proger.i-forge.net/QuickDiff_for_PHP/eaI) | [Live example](http://safepatch.i-forge.net/demo/fluxbb/?page=diff&group=applied&patch=%2Fusr%2Fhome%2Fsafepatch%2Fpub%2Fdemo%2Ffluxbb%2Fstate%2Fpatched%2Fgravatar.txt.php) ]

## Usage
```PHP
require_once 'quickdiff.php';

echo QuickDiff::FullHtmlWrapped("line1\nline2", "line1\nKABOOM\nline2");
  //=> <pre class="qdiff">...</pre>
echo QuickDiff::FullHtmlWrapped("\bin\xA\ry\0u\tput", "line1\nKABOOM\nline2");
  //=> <p class="qdiff bin">Diff is unavailable for binary data.</p>
echo QuickDiff::InlineHTML("this plus that", "plus that and this");
  //=> <span class="add">this<i>&middot;</i></span>...
```
## [Laravel bundle](http://bundles.laravel.com/bundle/detail/quickdiff)
```
php artisan bundle:install quickdiff
```

After this insert the configuration from `bundle.php` into your `application/bundles.php` and use `LaraQDiff` class instead of `QuickDiff` - it will take into count options that you can configure in the bundle's `config/*.php` files.

This automatic configuration is the only difference between standalone `QuickDiff` and `LaraQDiff`.