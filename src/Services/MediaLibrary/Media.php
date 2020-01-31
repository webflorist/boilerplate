<?php

namespace Webflorist\Boilerplate\Services\MediaLibrary;

use Spatie\MediaLibrary\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    public function toArray()
    {
        $array = parent::toArray();
        $array['full_url'] = $this->getFullUrl();
        $array['full_url_thumb'] = $this->getFullUrl('thumb');
        return $array;
    }
}
