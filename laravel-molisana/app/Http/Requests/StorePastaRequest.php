<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePastaRequest extends FormRequest
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
        return [
            'title' => 'required|max:100|min:5',
            'type' => [
                'required',
                'max:50',
                // 'in:lunga,corta,cortissima,brodo'
                Rule::in(['lunga', 'corta', 'cortissima', 'brodo'])
            ],
            // 'image' => 'required|max:255|url',
            'image' => ['required', 'max:255', 'url'],
            'cooking_time' => 'required|max:20|min:4',
            'weight' => 'required|max:20|min:3',
            'description' => 'nullable|min:5'
        ];
    }
}
