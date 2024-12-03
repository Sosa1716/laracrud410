<?php

namespace App\Http\Requests\Addresses;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'street' => "required|max:50",
            'internal_num' => "required|min:2|max:5",
            'external_num' => "required|min:2|max:5",
            'neighborhood' => "required|max:50",
            'town' => "required|max:50",
            'state' => "required|max:50",
            'country' => "required|max:50",
            'postal_code' => "required|max:5",
            'references' => "required|max:50"
        ];
    }
}
