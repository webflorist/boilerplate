<?php

namespace Webflorist\Boilerplate\BaseObjects;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Webflorist\ValidationManager\Traits\ValidationManagerTrait;

abstract class FormRequest extends BaseFormRequest
{
    use ValidationManagerTrait;
}
