<?php

namespace App\Http\Requests\Admin\Doctor;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorValidation extends FormRequest
{
    use CustomValidationTrait;
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $this->customValidation();
        return [
            'doctor_name'                  => ['required','string'],
            'email'                        => ['nullable','string'],
            'phone_number'                 => ['required','string'],
            'gender'                       => ['required','string'],
            'date_of_birth'                => ['required','date'],
            'hospital_name'                => ['required','string'],
            'hospital_address'             => ['required','string'],
            'specialist_id'                => ['required','specialist_id_validation'],
            'day_from'                     => ['required','string'],
            'day_to'                       => ['required','string'],
            'degree'                       => ['required','string'],
            'bio'                          => ['required','string'],
            'main_photo'                   => ['required'],
            'status'                       => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}
