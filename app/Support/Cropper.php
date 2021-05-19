<?php

namespace App\Support;

use CoffeeCode\Cropper\Cropper as CropperCropper;

class Cropper
{
    public static function thumb(string $uri, int $width, int $height = null)
    {
        // faz a instancia e coloca o caminho do cache da imagem
        $cropper = new CropperCropper('../public/storage/cache');
        // pega o caminho onde fica a imagem e coloca as proporções
        $pathThumb = $cropper->make(config('filesystems.disks.public.root') . '/' . $uri, $width, $height);

        // pega a ultima posição da imagem mofificada
        $file = 'cache/' . collect(explode('/', $pathThumb))->last();
        // retorna o caminho com o nome da imagem
        return $file;
    }
}
