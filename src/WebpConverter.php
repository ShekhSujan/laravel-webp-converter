<?php

namespace Sujan\LaravelWebpConverter;

class WebpConverter
{
    /**
     * Convert jpg,jpeg,png,webp image to webp,Compress & Resize Image.
     *
     * @return webpImage
     * @throws \Exception
     */
    public function webpImage($file, $filename, $location, $width = null, $height = null, $quality = null)
    {
        $quality = empty($quality) ? config('laravel-webp-converter.quality') : $quality;

        //Supported File / Image Extensions
        $extension = ['jpeg', 'jpg', 'webp', 'png'];
        $ext = strtolower($file->getClientOriginalExtension());

        //Check Supported File / Image Extensions
        if (!in_array($ext, $extension)) {
            throw new \Exception('Image format must be jpeg,jpg,png,webp');
        }

        // Create a new image from file
        switch ($ext) {
            case 'jpeg':
                $image = imagecreatefromjpeg($file);
                break;
            case 'jpg':
                $image = imagecreatefromjpeg($file);
                break;
            case 'png':
                $image = imagecreatefrompng($file);
                break;
            default:
                $image = imagecreatefromwebp($file);
        }

        if (!empty($width && $height)) {
            $image = imagescale($image, $width, $height);
        }
        $webpImage = imagewebp($image, $location . $filename . '.' . 'webp', $quality);
        if ($webpImage) {
            return $webpImage;
        }
        throw new \Exception('Some Error Occurs');
    }
}
