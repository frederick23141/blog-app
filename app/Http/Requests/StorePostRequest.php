<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts',
            'categorie' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The :attribute is required',
            'title.min' => 'The :attribute must be at least 5 characters',
            'title.max' => 'The :attribute must not be greater than 255 characters',
            'slug.required' => 'The :attribute is required',
            'slug.unique' => 'The :attribute must be unique',
            'categorie.required' => 'The :attribute is required',
            'content.required' => 'The :attribute is required',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Post Title',
            'slug' => 'Post Slug',
            'categorie' => 'Post Categorie',
            'content' => 'Post Content',
        ];
    }
}
