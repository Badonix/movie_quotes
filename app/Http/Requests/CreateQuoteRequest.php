<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateQuoteRequest extends FormRequest
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
            'body.en.required' => __('validation.en_quote_required'),
            'body.ka.required' => __('validation.ka_quote_required'),
            'image_url.required' => __('validation.image_required'),
            'image_url.image' => __('validation.image_type'),
            'movie_id.required' => __('validation.movie_required')
        ];
    }
}
