<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:50',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'image_path' => 'image',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.max' => 'Name cannot exceed 50 characters.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description is too long.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be numberic.',
            'category_id.required' => 'Category is required.',
            'image_path.image' => 'Only image is allowed.',
        ];
    }
}
