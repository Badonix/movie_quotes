<?php

namespace App\Http\Requests\Quotes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'body.en' => 'required',
            'body.ka' => 'required',
            'image_url' => 'required|image',
            'movie_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image_url.image' => __('validation.image_type'),
        ];
    }
}
