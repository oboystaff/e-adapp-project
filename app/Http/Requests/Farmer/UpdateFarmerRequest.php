<?php

namespace App\Http\Requests\Farmer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFarmerRequest extends FormRequest
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
            'firstname' => ['nullable', 'string'],
            'lastname' => ['nullable', 'string'],
            'birth_place' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'house_number' => ['nullable', 'string'],
            'community' => ['nullable', 'string'],
            'occupation' => ['nullable', 'string'],
            'district' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'marital_status' => ['nullable', 'string'],
            'bio' => ['nullable', 'string'],
            'gender' => ['nullable', 'string']
        ];
    }
}
