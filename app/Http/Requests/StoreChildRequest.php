<?php

namespace App\Http\Requests;

use App\Models\Child;
use Illuminate\Foundation\Http\FormRequest;

class StoreChildRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            Child::name => ['required'],
            Child::Fname => ['required'],
            Child::Mname => ['required'],
            Child::Birthday => ['required'],
            Child::Bornplace => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'يرجى إدخال الاسم',
        ];
    }
}
