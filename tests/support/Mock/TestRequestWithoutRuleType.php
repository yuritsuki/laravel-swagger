<?php

namespace Yuritsuki\Support\Tests\Support\Mock;

use Illuminate\Foundation\Http\FormRequest;

class TestRequestWithoutRuleType extends FormRequest
{
    public function rules(): array
    {
        return [
            'query' => 'required'
        ];
    }
}
