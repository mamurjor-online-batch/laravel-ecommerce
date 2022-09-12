<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'     => ['required','string','max:150'],
            'slug'             => ['required','string','max:150','unique:products,slug'],
            'description'      => ['nullable','string','max:250'],
            'content'          => ['required','string'],
            'sku'              => ['required','string','max:20'],
            'product_quantity' => ['required','max:5'],
            'regular_price'    => ['required'],
            'discount_price'   => ['nullable'],
            'approved'         => ['required','in:0,1'],
            'feature_image'    => ['required','image','mimes:png,jpg'],
            'gallery_image.*'  => ['nullable','image','mimes:png,jpg'],
        ];

        if(isset(request()->update_id)){
            $rules['slug'][3] = 'unique:products,slug,'.request()->update_id;
            $rules['feature_image'][0] = 'nullable';
        }

        return $rules;
    }
}
