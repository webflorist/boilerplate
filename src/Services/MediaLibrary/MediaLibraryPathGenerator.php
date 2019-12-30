<?php
namespace Webflorist\Boilerplate\Services\MediaLibrary;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\BasePathGenerator;

class MediaLibraryPathGenerator extends BasePathGenerator
{
    /*
     * Get a unique base path for the given media.
     */
    protected function getBasePath(Media $media): string
    {
        return config('boilerplate.media_base_path').'/'.$media->id;
    }
}
