<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'title'         => ['required','string','max:192','unique:posts,title'],
            'excerpt'       => ['required','string','max:255'],
            'content'       => ['required','string'],
            'feature_image' => ['required','image','mimes:png,jpg'],
            'status'        => ['required','in:on,null']
        ];

        if (request()->update_id) {
            $rules['title'][3] = 'unique:posts,title,'.request()->update_id;
            $rules['feature_image'][] = 'nullable';
        }

        return $rules;

    }
}
