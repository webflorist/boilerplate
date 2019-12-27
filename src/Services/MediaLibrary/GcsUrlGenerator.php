<?php
namespace Webflorist\Boilerplate\Services\MediaLibrary;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\Exceptions\UrlCannotBeDetermined;
use Spatie\MediaLibrary\UrlGenerator\BaseUrlGenerator;
use Superbalist\Flysystem\GoogleStorage\GoogleStorageAdapter;
use Webflorist\FileStorage\FileStorage;

class GcsUrlGenerator extends BaseUrlGenerator
{
    /**
     * Get the url for the profile of a media item.
     *
     * @return string
     */
    public function getUrl() : string
    {

        /** @var GoogleStorageAdapter $googleStorageAdapter */
        $googleStorageAdapter = Storage::getAdapter();
        return $googleStorageAdapter->getUrl($this->getPathRelativeToRoot());
    }

    /**
     * Get the url for the profile of a media item.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->getPathRelativeToRoot();
    }

    /**
     * Get the url to the directory containing responsive images.
     *
     * @return string
     */
    public function getResponsiveImagesDirectoryUrl(): string
    {
        $base = Str::finish($this->getBaseMediaDirectoryUrl(), '/');
        $path = $this->pathGenerator->getPathForResponsiveImages($this->media);

        return Str::finish(url($base.$path), '/');
    }

    /**
     * @param \DateTimeInterface $expiration
     * @param array              $options
     *
     * @return string
     *
     * @throws \Spatie\MediaLibrary\Exceptions\UrlCannotBeDetermined
     */
    public function getTemporaryUrl(\DateTimeInterface $expiration, array $options = []): string
    {
        throw UrlCannotBeDetermined::filesystemDoesNotSupportTemporaryUrls();
    }
}
