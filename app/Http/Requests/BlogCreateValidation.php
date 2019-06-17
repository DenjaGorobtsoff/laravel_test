<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|min:5|max:120',
            "slug" => "max:120",
            "content_raw" => "required|string|min:5|max:240",
            "category_id" => "required|integer|exists:blog_categories,category_id",
        ];
    }
}
