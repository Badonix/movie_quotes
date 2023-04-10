<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
    */
    public function rules(): array
    {
        return [
            'name.en' => "required",
            "name.ka" => "required"
        ];
    }

    public function messages()
    {
        return [
            'name.en.required' => __('validation.en_movie_name_required'),
            'name.ka.required' => __('validation.ka_movie_name_required')
        ];
    }
}
