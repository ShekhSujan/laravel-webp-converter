# Laravel-webp-converter

Convert jpg,jpeg,png,webp image to webp,Compress & Resize Image.

---

## Installation

```sh
composer require sujan97825/laravel-webp-converter
```

## Configuration

**Service Provider Registration**
In `config/app.php`, add in `providers` array -

```php
'providers' => [
    // ...
    Sujan\\LaravelWebpConverter\\WebpConverterServiceProvider::class,
    // ...
],
```

**Facade Class Alias**
Add in aliases array -

```php
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'WebpConverter' => Sujan\LaravelWebpConverter\Facades\WebpConverter::class,
    // ...
])->toArray(),
```

## Use from Controller

#### Import first the WebpConverter facade

```php
use Sujan\LaravelWebpConverter\Facades\WebpConverter;
```


## API Docs

### Generate method -

```php
WebpConverter::webpImage($file, $filename, $location, $width = null, $height = null, $quality = null);

```

```php
/**
 * Convert image to webp.
 *
 * @param file $file
 * @param string $filename
 * @param string $location
 * @param integer $width
 * @param integer $height
 * @param integer $quality
 *
 * @return string
 * @throws \Exception
 */
public function webpImage(
    $file,
    $filename,
    $location,
    $width = null
    $height = null
    $quality = null
)


```
#### Input Type Demo
```php
  $file = $request->file("image"); //Request File
  $filename="abc"; //Image Name
  $location="assets/images/"; //Image Upload Location
  $width=500; // Image Width,If You Want To Resize.Default Null.
  $height=250; // Image Height,If You Want To Resize.Default Null.
  $quality=100 //Image Quality Can Be Used [ 1-100 ],Default 100.
  ```

#### Publish configuration
```sh
php artisan vendor:publish --provider="Sujan\LaravelWebpConverter\WebpConverterServiceProvider"
```

#### Configurations

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Image  Quality
    |--------------------------------------------------------------------------
    |
    | Default 100, image quality can be used [1-100]
    |
    */
    'quality' => 100,
];



```


## Contribution

You're open to create any Pull request.