<?php

namespace Webflorist\Boilerplate\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\Models\Media;
use Webflorist\FileStorage\Exceptions\StoredFileNotFoundException;

class MediaFileRule implements Rule
{
    /**
     * @var array|null
     */
    public $fileRules;

    private $errorMessage;

    /**
     * Create a new rule instance.
     *
     * @param array|null $fileRules: Rules you want to apply to a newly uploaded file.
     */
    public function __construct(array $fileRules=[])
    {
        if (array_search('file',$fileRules) === false) {
            $fileRules[] = 'file';
        }
        $this->fileRules = $fileRules;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (is_array($value) && isset($value['media_id'])) {
            return $this->validateMediaFile($value);
        }
        if (is_object($value)) {
            return $this->validateUploadedFile($attribute, $value);
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->errorMessage;
    }

    /**
     * @param $value
     * @return bool
     */
    private function validateMediaFile($value): bool
    {
        if (Media::find($value['media_id']) instanceof Media) {
            return true;
        }
        $this->errorMessage = __('webflorist-boilerplate::messages.media_not_found');
        return false;
    }

    /**
     * @param $attribute
     * @param $value
     * @return bool
     */
    private function validateUploadedFile($attribute, $value): bool
    {
        $validator = Validator::make([$attribute => $value], [
            $attribute => $this->fileRules,
        ]);
        if ($validator->fails()) {
            $this->errorMessage = $validator->getMessageBag()->get($attribute);
            return false;
        } else {
            return true;
        }
    }
}
