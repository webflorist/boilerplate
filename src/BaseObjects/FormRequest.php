<?php

namespace Webflorist\Boilerplate\BaseObjects;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

abstract class FormRequest extends BaseFormRequest
{
    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        $attributes = __('validation.attributes');
        $this->processArrayFields($attributes);
        return $attributes;
    }

    /**
     * @param $attributes
     */
    protected function processArrayFields(&$attributes)
    {
        foreach (request()->all() as $fieldName => $fieldValue) {
            if (is_array($fieldValue) && isset($attributes[$fieldName])) {
                foreach ($fieldValue as $valueKey => $value) {
                    $attributes["$fieldName.$valueKey"] = $attributes[$fieldName];
                }
            }
        }
    }

}
